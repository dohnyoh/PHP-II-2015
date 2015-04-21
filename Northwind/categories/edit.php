<?php require_once('../includes/global-top.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Northwind - Category - Modification</title>
    
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
                            <h1 class="page-header">Modification de Category</h1>

                            <form method="post" role="form" novalidate="novalidate">
                                <div class="form-horizontal">

                                    <input data-val="true" data-val-number="The field CategoryID must be a number." data-val-required="The CategoryID field is required." id="CategoryID" name="CategoryID" type="hidden" value="1">

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="CategoryName">CategoryName</label>
                                        <div class="col-md-10">
                                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field CategoryName must be a string with a maximum length of 15." data-val-length-max="15" data-val-required="The CategoryName field is required." id="CategoryName" name="CategoryName" type="text" value="Beverages">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="Description">Description</label>
                                        <div class="col-md-10">
                                            <input class="form-control text-box single-line" id="Description" name="Description" type="text" value="Soft drinks, coffees, teas, beers, and ales">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-10">
                                            <a href="index.php" class="btn btn-default">Retour à la liste</a>
                                            <input type="submit" value="Modifier" class="btn btn-success">
                                        </div>
                                    </div>
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