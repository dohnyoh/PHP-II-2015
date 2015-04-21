<?php require_once('../includes/global-top.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Northwind - Vide - Détails</title>
    
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
                        <?php
                        // Affichage "Horizontal" de l'information
                        ?>
                        <h1 class="page-header">
                            Détails de vide
                            <small>Horizontal</small>
                        </h1>
                      
                        <dl class="dl-horizontal">
                            <dt>Nom du champ 1 </dt>
                            <dd>Valeur du champ 1</dd>

                            <dt>Nom du champ 2</dt>
                            <dd>Valeur du champ 2</dd>
                            
                            <dt>Nom du champ 3</dt>
                            <dd>Valeur du champ 3</dd>
                        </dl>
                        
                        <?php
                        // Affichage "Vertical" de l'information
                        ?>
                        <h1 class="page-header">
                            Détails de vide
                            <small>Vertical</small>
                        </h1>
                        <div class="form-group">
                            <label>Nom du champ 1</label>
                            <p class="form-control-static">Valeur du champ 1</p>
                        </div>
                        <div class="form-group">
                            <label>Nom du champ 2</label>
                            <p class="form-control-static">Valeur du champ 2</p>
                        </div>
                        
                        <?php
                        // Boutons de navigation
                        ?>
                        <p>
                            <a href="index.php" class="btn btn-default">Retour à la liste</a>
                            <a href="edit.php?id=" class="btn btn-default">Modifier</a>
                            <a href="delete.php?id=" class="btn btn-default">Supprimer</a>
                        </p>
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