<?php
include_once './content/main/header.php';
include_once './content/main/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pemograman Web 2</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Project dan Praktikum PHP</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Project dan Praktikum
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="content/Project_1/index2.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project 1 Kalkulator BMI</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="content/Praktikum_01/index3.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Praktikum 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="content/Praktikum_02/index4.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Praktikum 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="content/Praktikum_03/index5.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Praktikum 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="content/Praktikum_04/index6.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Praktikum 4</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="content/Praktikum_05/index7.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Praktikum 5</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Semester 2
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once './content/main/footer.php';
?>