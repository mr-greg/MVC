<?php

class BookController
{
  /////     BOOKS      //////////////////////////
    public static function listBook()
    {
        $books=Book::ReadAll();

        include VIEWS.'book/listBook.php';
    }

    public static function addBook()
    {

        // recuperation du livre si on est en modif
        if (isset($_GET['id'])):
            $book = Book::find([
                'id' => $_GET['id']
            ]);

            //die(var_dump($book));
        endif;


        $genres=Genre::ReadAll();

        /// insert et modif
        if (!empty($_POST)):

            //die(var_dump($_POST));

            if (!empty($_FILES['cover']['name'])):
                $ext = explode('/', $_FILES['cover']['type'])[1];
                // die(var_dump($_FILES['cover']));
                $coverName = date_format(new DateTime(), 'YmdHis') . uniqid() . '.' . $ext;
                copy($_FILES['cover']['tmp_name'], PHOTO . $coverName);

                Book::Insert([
                    // 'id' => $_POST['id'],
                    'title' => $_POST['title'],
                    'author' => $_POST['author'],
                    'resume' => $_POST['resume'],
                    'cover' => $coverName,
                    'price' => $_POST['price'],
                    'publish_date' => $_POST['publish_date'],
                    'id_genre'=>$_POST['id_genre']

                ]);

                $_SESSION['messages']['success'][]='Livre édité avec succès';
                header('location:../book/list');
                exit();
            endif;


        endif;


        include VIEWS . 'book/add.php';
    }


    public static function deleteBook()
    {

        Book::delete(
            [
                'id' => $_GET['id']
            ]
        );
        $_SESSION['messages']['success'][]='Genre supprimé avec succès';
        header('location:../book/list');
        exit();

    }


    ////////////////     GENRE     ///////////////////////////////////////

    public static function listGenre()
    {
        $genres=Genre::ReadAll();

        include VIEWS.'book/listGenre.php';
    }


    public static function addGenre()
    {
        if (isset($_GET['id'])):
        $genre=Genre::find([
            'id'=>$_GET['id']
        ]);
       
        endif;

        if (!empty($_POST)):
         Genre::Insert([
             'id'=>$_POST['id'],
             'name'=>$_POST['name']
         ]);

            $_SESSION['messages']['success'][]='Genre édité avec succès';
            header('location:../genre/list');
            exit();
        endif;


        include VIEWS . 'book/addGenre.php';
    }

    public static function deleteGenre()
    {
        Genre::Delete([
            'id'=>$_GET['id']
        ]);

        $_SESSION['messages']['success'][]='Genre supprimé avec succès';
        header('location:../genre/list');
        exit();
    }


}