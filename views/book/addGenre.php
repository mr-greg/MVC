<?php  include VIEWS.'inc/header.php'; ?>


<form method="post" action="<?= BASE_PATH.'genre/add' ?>" enctype="multipart/form-data">
    <fieldset>


        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Nom</label>
            <input type="text" name="name" value="<?= $genre['name'] ?? '' ?>" class="form-control" id="exampleInputPassword1" placeholder="Titre">
        </div>

        <input type="hidden" name="id" value="<?= $genre['id'] ??  0;   ?>">

        <button type="submit" class="btn btn-primary mb-5">Enregistrer</button>
    </fieldset>
</form>


<?php  include VIEWS.'inc/footer.php'; ?>
