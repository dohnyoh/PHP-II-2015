<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Northwind</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Mon compte</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/">
                        <i class="fa fa-dashboard fa-fw"></i>
                        Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-fw"></i>
                        Produits
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/Categories/">Catégories de produits</a>
                        </li>
                        <li>
                            <a href="/Suppliers/">Fournisseurs</a>
                        </li>
                        <li>
                            <a href="/Products/">Produits</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#">
                        <i class="fa  fa-laptop fa-fw"></i>
                        Employées
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/Territories/">Territoires</a>
                        </li>
                        <li>
                            <a href="/EmployeeTerritories/">Associations entre Employés et Territoires</a>
                        </li>
                        <li>
                            <a href="/Employees/">Employé</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="/Customers/">
                        <i class="fa fa-users fa-fw"></i>
                        Clients
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-truck fa-fw"></i>
                        Commandes
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/Shippers/">Expéditeurs</a>
                        </li>
                        <li>
                            <a href="/Orders/">Commandes</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>