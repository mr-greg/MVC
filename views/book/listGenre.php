<?php  include VIEWS.'inc/header.php' ?>

<a href="<?= BASE_PATH.'genre/add' ?>" class="btn btn-success mb-5">Ajouter</a>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($genres as $genre){ ?>
    <tr>
        <th scope="row"><?= $genre['id'] ?></th>
        <td><?= $genre['name'] ?></td>
  
        <td>
            <a href="<?= BASE_PATH . 'genre/add?id=' . $genre['id'] ?>" class="btn btn-warning">Modifier</a>
            <a href="<?= BASE_PATH . 'genre/delete?id=' . $genre['id'] ?>" class="btn btn-danger">Supprimer</a>
        </td>
    </tr>
    <?php } ?>


    </tbody>
</table>


<?php  include VIEWS.'inc/footer.php' ?>
