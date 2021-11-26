<?php  include VIEWS.'inc/header.php'; ?>




<form method="post" action="<?= BASE_PATH.'book/add' ?>" enctype="multipart/form-data">
    <fieldset>


        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Titre</label>
            <input type="text" name="title" value="<?= $book['title'] ?? '' ?>" class="form-control" id="exampleInputPassword1" placeholder="Titre">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Auteur</label>
            <input type="text" name="author" value="<?= $book['author'] ?? '' ?>" class="form-control" id="exampleInputPassword1" placeholder="Auteur">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Prix</label>
            <input type="number" value="<?= $book['price'] ?? '' ?>" step="any" name="price" class="form-control" id="exampleInputPassword1" placeholder="Prix">
        </div>

        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Genre</label>
            <select name="id_genre" class="form-select" id="exampleSelect1">
                <?php foreach ($genres as $genre):  ?>
                <option value="<?= $genre['id'] ?>"  
                    <?php if (isset($book) && $book['id_genre'] == $genre['id']): echo 'selected';  endif; ?>
                ><?= $genre['name']  ?></option> 
                <?php endforeach;  ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Préface</label>
            <textarea class="form-control" name="resume" id="exampleTextarea" rows="3"><?= $book['resume'] ?? '' ?></textarea>
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label mt-4">Couverture</label>
            <input class="form-control" name="cover" type="file" id="formFile">
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label mt-4">Date de publication</label>
            <input class="form-control" name="publish_date"  value="<?= $book['publish_date'] ?? '' ?>" type="date" id="formFile">
        </div>
        <input type="hidden" name="id" value="<?= $book['id'] ??  0;   ?>">

        <button type="submit" class="btn btn-primary mb-5">Enregistrer</button>
    </fieldset>
</form>








<?php  include VIEWS.'inc/footer.php'; ?>
