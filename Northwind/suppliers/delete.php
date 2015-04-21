<?php require_once('../includes/global-top.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Northwind - Supplier - Suppression</title>
    
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
                            <h1 class="page-header">Suppression de Supplier</h1>
                            <h3>Êtes-vous certain de vouloir modifier cet enregistrement ?</h3>
                            <fieldset>
                                <dl class="dl-horizontal">
                                    <dt>
                                    CompanyName
                                    </dt>

                                    <dd>
                                        Exotic Liquids
                                    </dd>

                                    <dt>
                                    ContactName
                                    </dt>

                                    <dd>
                                        Charlotte Cooper
                                    </dd>

                                    <dt>
                                    ContactTitle
                                    </dt>

                                    <dd>
                                        Purchasing Manager
                                    </dd>

                                    <dt>
                                    Address
                                    </dt>

                                    <dd>
                                        49 Gilbert St.
                                    </dd>

                                    <dt>
                                    City
                                    </dt>

                                    <dd>
                                        London
                                    </dd>

                                    <dt>
                                    Region
                                    </dt>

                                    <dd>

                                    </dd>

                                    <dt>
                                    PostalCode
                                    </dt>

                                    <dd>
                                        EC1 4SD
                                    </dd>

                                    <dt>
                                    Country
                                    </dt>

                                    <dd>
                                        UK
                                    </dd>

                                    <dt>
                                    Phone
                                    </dt>

                                    <dd>
                                        (171) 555-2222
                                    </dd>

                                    <dt>
                                    Fax
                                    </dt>

                                    <dd>

                                    </dd>

                                    <dt>
                                    HomePage
                                    </dt>

                                    <dd>

                                    </dd>

                                </dl>
                            </fieldset>

                            <form method="post" role="form">
                                <div class="form-actions no-color">
                                    <a href="index.php" class="btn btn-default">Retour à la liste</a>
                                    <input type="submit" value="Supprimer" class="btn btn-danger">
                                </div>
                            </form>
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