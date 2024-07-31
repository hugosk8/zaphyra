<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Nos derniers articles</h1>
        <a href="<?= URL ?>admin/blog/add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-solid fa-plus fa-sm text-white-50"></i>Ajouter</a>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nos Articles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>nom</th>
                            <th>categorie</th>
                            <th>description</th>
                            <th>modifier</th>
                            <th>supprimer</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>image</th>
                            <th>nom</th>
                            <th>categorie</th>
                            <th>description</th>
                            <th>modifier</th>
                            <th>supprimer</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($articles as $article) { ?>
                            <tr>
                                <td><img style="max-height: 100px;" src="/public/assets/img/<?= $article->img ?>" alt="" srcset=""></td>
                                <td><?= $article->name ?></td>
                                <td><?= $article->categorie_name?></td>
                                <td><?=  ($article->description != null) ? htmlentities(mb_substr($article->description, 0, 145, 'UTF-8')): 'aucune description';  ?></td>
                                <td>
                                    <a href="<?= URL ?>admin/blog/edit?id=<?= $article->id ?>" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">modifier</span>
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-icon-split btn-carrousel">
                                        <input class="variableAPasser" type="hidden" value="<?= URL ?>admin/blog/delete?id=<?= $article->id ?>">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Etes vous sûr de vouloir supprimer ? </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div id="Modaltext" class="Modaltext modal-body">
                Êtes vous sur de vouloir supprimer cette article ?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <a id="link" class="btn btn-primary" href="">Supprimer</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let modalTitle = document.getElementById("exampleModalLabel")
    let modalBody = document.getElementById("Modaltext")
    let link = document.getElementById("link")
    let titles = document.getElementsByClassName("item__title")
    let textes = document.getElementsByClassName("variableAPasser")
    let btns = document.getElementsByClassName("btn-carrousel")
    for (i = 0; i < textes.length; i++) {
        let btn = btns[i]
        let texte = textes[i]
        let title = titles[i]
        btn.addEventListener('click', function(e) {
            link.href = texte.value
            modalTitle.innerHTML = title.textContent
        })
    }
</script>