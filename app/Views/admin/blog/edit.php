<script src="https://cdn.tiny.cloud/1/p8u46x35fcvw5fnak0dcknka7vdlasbykngfs2bo96l5ptoa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12">
            <?= $form->input('name', 'titre de l\'article', [] , true); ?>
        </div>
        <div id="zone" class="col-12  col-lg-6">
            <p>format image recommandé (370 x 275)</p>
            <input type="file" name="vignette">
            <img style="max-width: 100px" src="/public/assets/img/<?= $article->vignette ?>" alt="" srcset="">
        </div>
        <div id="zone" class="col-12 col-lg-6">
            <p>Ne dépassez pas 8 à 10 mots ou 125 caractères maximum</p>
            <?= $form->input('altVignette', 'alt image la vignette'); ?>
        </div>
        <div class="col-12">
            <p>Max 240 signes</p>
            <?= $form->input('description', 'description', [] , true); ?>
        </div>
        <div id="zone" class="col-12  col-lg-6">
            <p>format image recommandé (470 x 610)</p>
            <input name="img" type="file">
            <img style="max-width: 100px" src="/public/assets/img/<?= $article->img ?>" alt="" srcset="">
        </div>
        <div id="zone" class="col-12 col-lg-6">
            <p>Ne dépassez pas 8 à 10 mots ou 125 caractères maximum</p>
            <?= $form->input('altImg', 'alt l\'image', [] , true) ?>
        </div>
        <div class="col-12">
            <?= $form->input('texte', 'texte', ['type' => 'textarea'], true); ?>
        </div>
        <div class="col-12">
            <?= $form->select('categorie_id', 'Catégorie', $categories); ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <button class="btn btn-primary mt-5 col-12"> Sauvegarder </button>
</form>