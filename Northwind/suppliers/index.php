<?php require_once('../includes/global-top.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Northwind - Supplier - Liste</title>
    
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
                        <div>
                            <h1 class="page-header">Liste de Supplier</h1>

                            <p>
                                <a href="create.php" class="btn btn-default">Créer un nouveau Supplier</a>
                            </p>
                            <table class="table table-striped table-bordered table-hover table-with-actions-column">
                                <thead>
                                    <tr>
                                        <th>
                                            CompanyName
                                        </th>
                                        <th>
                                            ContactName
                                        </th>
                                        <th>
                                            ContactTitle
                                        </th>
                                        <th>
                                            City
                                        </th>
                                        <th>
                                            Region
                                        </th>
                                        <th>
                                            Country
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Exotic Liquids
                                        </td>
                                        <td>
                                            Charlotte Cooper
                                        </td>
                                        <td>
                                            Purchasing Manager
                                        </td>
                                        <td>
                                            London
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            UK
                                        </td>
                                        <td>
                                            (171) 555-2222
                                        </td>
                                        <td>
                                            <a href="edit.php?id=" class="btn btn-default" title="Modifier"><i class="fa fa-edit"></i></a>
                                            <a href="details.php?id=" class="btn btn-default" title="Détails"><i class="fa fa-eye"></i></a>
                                            <a href="delete.php?id=" class="btn btn-default" title="Supprimer"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            New Orleans Cajun Delights
                                        </td>
                                        <td>
                                            Shelley Burke
                                        </td>
                                        <td>
                                            Order Administrator
                                        </td>
                                        <td>
                                            New Orleans
                                        </td>
                                        <td>
                                            LA
                                        </td>
                                        <td>
                                            USA
                                        </td>
                                        <td>
                                            (100) 555-4822
                                        </td>
                                        <td>
                                            <a href="edit.php?id=" class="btn btn-default" title="Modifier"><i class="fa fa-edit"></i></a>
                                            <a href="details.php?id=" class="btn btn-default" title="Détails"><i class="fa fa-eye"></i></a>
                                            <a href="delete.php?id=" class="btn btn-default" title="Supprimer"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Grandma Kelly's Homestead
                                        </td>
                                        <td>
                                            Regina Murphy
                                        </td>
                                        <td>
                                            Sales Representative
                                        </td>
                                        <td>
                                            Ann Arbor
                                        </td>
                                        <td>
                                            MI
                                        </td>
                                        <td>
                                            USA
                                        </td>
                                        <td>
                                            (313) 555-5735
                                        </td>
                                        <td>
                                            <a href="edit.php?id=" class="btn btn-default" title="Modifier"><i class="fa fa-edit"></i></a>
                                            <a href="details.php?id=" class="btn btn-default" title="Détails"><i class="fa fa-eye"></i></a>
                                            <a href="delete.php?id=" class="btn btn-default" title="Supprimer"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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