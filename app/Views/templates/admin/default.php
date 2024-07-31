<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Zaphyra admin</title>

  <!-- Custom fonts for this template-->
  <link href="/css/back/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/p8u46x35fcvw5fnak0dcknka7vdlasbykngfs2bo96l5ptoa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Custom styles for this template-->
  <link href="<?= URL ?>css/back/sb-admin-2.css" rel="stylesheet">
  <link href="<?= URL ?>css/back/perso.css" rel="stylesheet">
  <script type="module" src="<?= URL ?>js/back/filter.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= URL ?>admin">
        <img style="max-width: 100px;" src="assets/logo.svg" alt="" srcset="">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= URL ?>admin/index">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Accueil</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestion des evenements
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Evenements</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion des evenements</h6>
            <a class="collapse-item" href="<?= URL ?>admin/event">Evenements</a>
            <a class="collapse-item" href="<?= URL ?>admin/event/add">Ajouter</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestion des catégories
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Categorie</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= URL ?>admin/categorie">catégories</a>
            <a class="collapse-item" href="<?= URL ?>admin/categorie/add">ajouter catégorie</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestion du blog
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Blog</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion des articles :</h6>
            <a class="collapse-item" href="<?= URL ?>admin/blog">Articles de blog</a>
            <a class="collapse-item" href="<?= URL ?>admin/blog/add">Ajouter</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['name'] ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= URL ?>admin/logout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Deconnexion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php if (isset($_SESSION['ERROR']['ADMIN'])) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Salut <?= $_SESSION['name'] ?></strong>
              <p><?= $_SESSION['ERROR']['ADMIN'] ?></p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <img src="/img/dont_close.webp" alt="" srcset="">
            </div>
          <?php } ?>
          <?= $content ?>
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; 0001 communication</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Etes vous sûr de vouloir vous deconnecter ? </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">Cliquez sur deconnexion pour fermer votre session</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
            <a class="btn btn-primary" href="<?= URL ?>connexion/disconnect">deconnexion</a>
          </div>
        </div>
      </div>
    </div>


    <script>
      tinymce.init({
        selector: 'textarea',
        toolbar: 'casechange checklist code pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        language: 'fr_FR'
      });
    </script>
    <!-- Perso -->
    <script src="<?= URL ?>js/back/custom.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= URL ?>js/back/jquery.min.js"></script>
    <script src="<?= URL ?>js/back/bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= URL ?>js/back/jquery.easing.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= URL ?>js/back/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= URL ?>js/back/Chart.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= URL ?>js/back/jquery.dataTables.min.js"></script>
    <script src="<?= URL ?>js/back/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= URL ?>js/back/datatables-demo.js"></script>

</body>

</html>