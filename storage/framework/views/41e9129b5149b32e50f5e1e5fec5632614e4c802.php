<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator | Website Amik Global Kendari</title>

    
    <link rel="shortcut icon" href="<?php echo e(asset('storage/' . $setting->logo)); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/ekko-lightbox/ekko-lightbox.css')); ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/adminlte.min.css')); ?>">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">

    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/myStyle.css')); ?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                

                <!-- Messages Dropdown Menu -->
                
                <!-- Notifications Dropdown Menu -->
                
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo e(route('home')); ?>" class="brand-link">
                <img src="<?php echo e(asset('storage/' . $setting->logo)); ?>" alt="s"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?php echo e($setting->nama_situs); ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo e(asset('assets/dist/img/avatar5.png')); ?>" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?php echo e(url('/home')); ?>" class="nav-link <?php echo e(Request::is('home') ? 'active' : ''); ?> ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/slider')); ?>"
                                class="nav-link <?php echo e(Request::is('slider') ? 'active' : ''); ?> ">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Sliders
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/profile')); ?>"
                                class="nav-link <?php echo e(Request::is('profile') ? 'active' : ''); ?> ">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pendidikan" class="nav-link <?php echo e(Request::is('pendidikan') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>
                                    Pendidikan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Informasi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/berita" class="nav-link <?php echo e(Request::is('berita') ? 'active' : ''); ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Berita</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pengumuman"
                                        class="nav-link <?php echo e(Request::is('pengumuman') ? 'active' : ''); ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengumuman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/gallery" class="nav-link <?php echo e(Request::is('gallery') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user" class="nav-link <?php echo e(Request::is('user') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Setting <?php echo e(Auth::user()->username); ?>

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form method="GET" action="<?php echo e(url('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        Logout
                                    </p>

                            </form>
                            
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <?php echo $__env->yieldContent('content'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a href="https:://AmikGlobal.ac.id">AMIK GLOBAL</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo e(asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('assets/dist/js/adminlte.js')); ?>"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?php echo e(asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/raphael/raphael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="<?php echo e(asset('assets/plugins/ekko-lightbox/ekko-lightbox.min.js')); ?>"></script>

    
    <script src="<?php echo e(asset('assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>


    <!-- ChartJS -->

    <script>
        <?php if(session()->has('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', 'Berhasil');
        <?php endif; ?>
    </script>
    <script>
        $(document).ready(function() {

            $('#summernote').summernote();
            $('#misiModal').summernote();
            $('#sejarahModal').summernote();
            $('#berita').summernote();
            $('#Tberita').DataTable();
            $(function() {
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox({
                        alwaysShowClose: true
                    });
                });

                $('.filter-container').filterizr({
                    gutterPixels: 3
                });
                $('.btn[data-filter]').on('click', function() {
                    $('.btn[data-filter]').removeClass('active');
                    $(this).addClass('active');
                });
            });
        });
    </script>
</body>

</html>
<?php /**PATH /home/avhan/Documents/PROJECT/LARAVEL/Amik3/resources/views/layouts/back.blade.php ENDPATH**/ ?>