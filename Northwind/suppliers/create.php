<?php require_once('../includes/global-top.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Northwind - Supplier - Création</title>
    
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
                            <div>
                                <h1 class="page-header">Création de Supplier</h1>

                                <form method="post" role="form">
                                    <div class="form-horizontal">

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="CompanyName">CompanyName</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" id="CompanyName" name="CompanyName" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="ContactName">ContactName</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field ContactName must be a string with a maximum length of 30." data-val-length-max="30" id="ContactName" name="ContactName" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="ContactTitle">ContactTitle</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field ContactTitle must be a string with a maximum length of 30." data-val-length-max="30" id="ContactTitle" name="ContactTitle" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="Address">Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field Address must be a string with a maximum length of 60." data-val-length-max="60" id="Address" name="Address" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="City">City</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field City must be a string with a maximum length of 15." data-val-length-max="15" id="City" name="City" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="Region">Region</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field Region must be a string with a maximum length of 15." data-val-length-max="15" id="Region" name="Region" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="PostalCode">PostalCode</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field PostalCode must be a string with a maximum length of 10." data-val-length-max="10" id="PostalCode" name="PostalCode" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="Country">Country</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field Country must be a string with a maximum length of 15." data-val-length-max="15" id="Country" name="Country" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="Phone">Phone</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field Phone must be a string with a maximum length of 24." data-val-length-max="24" id="Phone" name="Phone" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="Fax">Fax</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field Fax must be a string with a maximum length of 24." data-val-length-max="24" id="Fax" name="Fax" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="HomePage">HomePage</label>
                                            <div class="col-md-10">
                                                <input class="form-control text-box single-line" id="HomePage" name="HomePage" type="text" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                                <a href="index.php" class="btn btn-default">Retour à la liste</a>
                                                <input type="submit" value="Créer" class="btn btn-success">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
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