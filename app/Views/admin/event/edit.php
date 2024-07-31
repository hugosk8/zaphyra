<script src="https://cdn.tiny.cloud/1/p8u46x35fcvw5fnak0dcknka7vdlasbykngfs2bo96l5ptoa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<h1>Editer un Évènement</h1>
<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12">
            <?= $form->input('name', 'nom de l\'évènement',[] , true); ?>
        </div>
        <div class="col-12">
            <?= $form->input('texte', 'texte', ['type' => 'textarea'], true); ?>
        </div>
        <div class="col-12">
            <?= $form->input('date', 'texte', ['type' => 'date'], true); ?>
        </div>
        <div class="col-12">
            <div id="zone" ondrop="glisser_fichier(event)" ondragover="this.style.background = '#CCC';return false" ondragleave="this.style.background = '#EEE'">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="envoi">
                            <p>Glisser les fichiers ici<br>ou<br>
                                format image 150x150
                                <input type="button" value="Sélectionner les fichiers" onclick="parcourir_fichier();">
                            </p>
                            <input name="img" type="file" id="fichier">
                            <p id="nom_fichiers"></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img style="max-width: 100px" src="/public/assets/img/<?= $event->img ?>" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <button class="btn btn-primary mt-5 col-12"> Sauvegarder </button>
</form>