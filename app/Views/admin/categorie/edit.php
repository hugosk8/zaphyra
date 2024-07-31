<div class="bg-white rounded-md shadow-md">
    <div class="p-3">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <?= $form->input('categorie_name', 'Nom de la catégories',[] , true); ?>
                    <?= $form->input('description', 'description dans l\'onglet',[] , true); ?>
                    <?= $form->input('meta_descrption', 'Meta description',[] , true); ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-12 ">
                        <button class="col-12 btn btn-primary mt-5 mx-auto"> Sauvegarder </button>
                    </div>
                </div>
        </form>
    </div>
</div>