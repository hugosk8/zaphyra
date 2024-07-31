 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Nos derniers articles de blog</h1>
     <a href="<?= URL ?>admin/blog/add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-solid fa-plus fa-sm text-white-50"></i>Ajouter</a>
 </div>
 <div class="row">
     <?php if (count($articles) > 0) { ?>
         <?php foreach ($articles as $article) { ?>
             <div class="col-xl-4 col-lg-5">
                 <div class="card shadow mb-4">
                     <!-- Card Header - Dropdown -->
                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary"><?= $article->name ?></h6>
                         <div class="dropdown no-arrow">
                         </div>
                     </div>
                     <!-- Card Body -->
                         <!-- Card Body -->
                          <div class="card-body">
                          <img src="/public/assets/img/<?= $article->img ?>" alt="" srcset="">
                     <p><?= mb_substr($article->texte, 0, 15, 'UTF-8') ?></p>
                     </div>
                     <div class="card-footer justify-content-between d-flex">
                             <a href="<?= URL ?>admin/blog/edit?id=<?= $article->id ?>" class="btn btn-info btn-icon-split">
                                 <span class="icon text-white-50">
                                     <i class="fas fa-arrow-right"></i>
                                 </span>
                                 <span class="text">modifier</span>
                             </a>
                             <a data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-icon-split btn-carrousel">
                                 <input class="variableAPasser" type="hidden" value="<?= URL ?>admin/blog/delete?id=<?= $article->id ?>">
                                 <span class="icon text-white-50">
                                     <i class="fas fa-trash"></i>
                                 </span>
                             </a>
                         </div>
                 </div>
             </div>
         <?php } ?>
     <?php } else { ?>
         <div class="col-12 text-center">
             <h2>Aucun article</h2>
         </div>
     <?php } ?>
 </div>
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Nos derniers Evenements</h1>
     <a href="<?= URL ?>admin/event/add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-solid fa-plus fa-sm text-white-50"></i>Ajouter</a>
 </div>

 <div class="js-filter">
     <div class="row js-filter-content">
         <?php if (count($events) > 0) { ?>
             <?php foreach ($events as $event) { ?>
                 <div class="col-xl-4 col-lg-5">
                     <div class="card shadow mb-4">
                         <!-- Card Header - Dropdown -->
                         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                             <h6 class="m-0 font-weight-bold text-primary item__title"><?= $event->name ?></h6>
                         </div>
                         <!-- Card Body -->
                         <div class="card-body">
                             <img src="/public/assets/img/<?= $event->img ?>" alt="" srcset="">
                         </div>
                         <div class="card-footer justify-content-between d-flex">
                             <a href="<?= URL ?>admin/event/edit?id=<?= $event->id ?>" class="btn btn-info btn-icon-split">
                                 <span class="icon text-white-50">
                                     <i class="fas fa-arrow-right"></i>
                                 </span>
                                 <span class="text">modifier</span>
                             </a>
                             <a data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-icon-split btn-carrousel">
                                 <input class="variableAPasser" type="hidden" value="<?= URL ?>admin/event/delete?id=<?= $event->id ?>">
                                 <span class="icon text-white-50">
                                     <i class="fas fa-trash"></i>
                                 </span>
                             </a>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         <?php } else { ?>
             <div class="col-12 text-center">
                 <h2>Aucun Evenement</h2>
             </div>
         <?php } ?>
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