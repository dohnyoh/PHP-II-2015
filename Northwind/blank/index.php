<?php require_once('../includes/global-top.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Northwind - Vide - Liste</title>
    
    <?php include_once('../includes/stylesheets.php'); ?>
</head>
<body>
    <div id="wrapper">
        <?php include('../includes/nav.php') ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liste de vide</h1>
                        
                        <p>
                            <a href="create.php" class="btn btn-default">Créer un nouveau vide</a>
                        </p>
                        
                        <table class="table table-striped table-bordered table-hover table-with-actions-column">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="edit.php?id=" class="btn btn-default" title="Modifier"><i class="fa fa-edit"></i></a>
                                        <a href="details.php?id=" class="btn btn-default" title="Détails"><i class="fa fa-eye"></i></a>
                                        <a href="delete.php?id=" class="btn btn-default" title="Supprimer"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>
                                        <a href="edit.php?id=" class="btn btn-default" title="Modifier"><i class="fa fa-edit"></i></a>
                                        <a href="details.php?id=" class="btn btn-default" title="Détails"><i class="fa fa-eye"></i></a>
                                        <a href="delete.php?id=" class="btn btn-default" title="Supprimer"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>
                                        <a href="edit.php?id=" class="btn btn-default" title="Modifier"><i class="fa fa-edit"></i></a>
                                        <a href="details.php?id=" class="btn btn-default" title="Détails"><i class="fa fa-eye"></i></a>
                                        <a href="delete.php?id=" class="btn btn-default" title="Supprimer"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <?php include_once('../includes/scripts.php') ?>
</body>
</html>
<?php require_once('../includes/global-bottom.php') ?>