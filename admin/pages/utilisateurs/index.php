<?php
session_start();
if (isset($_SESSION['login']) == false) {
    header("Location:../login/connexion.php");
    exit;
}
if ($_SESSION['profil'] !== 'administrateur') {
    header("Location:../erreurs-http/403.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaboCulinaire - Gestion des utilisateurs</title>
    <link href="../../../vendor/fontawesome-5.10.2-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../../vendor/datatables-1.10.19/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="../../css/admin.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <?php include_once("../../includes/inc-navbar.php"); ?>

    <div id="wrapper">
        <?php include_once("../../includes/inc-sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../accueil/index.php">Accueil/</a>
                    </li>
                    <li class="breadcrumb-item active">Utilisateurs</li>
                </ol>

                <!-- Page Content -->
                <h1 class="display-1">En construction</h1>
                <p class="lead">Cette page n'est pas encore disponible. Vous pouvez
                    <a href="javascript:history.back()">revenir </a>
                    à la page précédente, ou
                    <a href="../accueil/index.php">retourner à la page d'accueil</a>.</p>

            </div>
            <!-- /.container-fluid -->

            <?php include_once("../../includes/inc-footer.html"); ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include_once("../../includes/inc-logout-modal.html"); ?>

    <script src="../../../vendor/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="../../../vendor/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../js/admin.min.js"></script>

</body>

</html>