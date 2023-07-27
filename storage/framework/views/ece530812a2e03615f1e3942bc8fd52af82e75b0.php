<!DOCTYPE html>
<html lang="en">

<head>
    <title>Akademi Manajemen Informatika & Komputer Global Kendari</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="avhan.my.id">
    <meta name="description" content="Akademi Manajemen Informatika & Komputer Global">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('frontend')); ?>/assets/images/amik.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend')); ?>/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('frontend')); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend')); ?>/assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/assets/vendor/tiny-slider/tiny-slider.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend')); ?>/assets/css/style.css">

    <!-- Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>

<body>

    <!-- Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="/">
                    <img class="light-mode-item navbar-brand-item" src="<?php echo e(asset('frontend')); ?>/assets/images/amik.png"
                        alt="logo">
                    
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item">
                            <!-- <a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a> -->
                            <a href="/" class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>">Beranda</a>
                        </li>
                        <!-- Nav item 2 Pages -->
                        <li class="nav-item ">
                            <a class="nav-link <?php echo e(Request::is('profile/list') ? 'active' : ''); ?>"
                                href="<?php echo e(url('profile/list')); ?>">Profile</a>
                            
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo e(Request::is('pendidikan/list') ? 'active' : ''); ?>"
                                href="<?php echo e(url('pendidikan/list/')); ?>">Pendidikan</a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="infMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Informasi</a>
                            <ul class="dropdown-menu" aria-labelledby="infMenu">
                                <li> <a class="dropdown-item <?php echo e(Request::is('berita/list') ? 'active' : ''); ?>"
                                        href="<?php echo e(url('berita/list/')); ?>">Berita</a></li>
                                <li> <a class="dropdown-item <?php echo e(Request::is('pengumuman/list') ? 'active' : ''); ?>"
                                        href="<?php echo e(url('pengumuman/list/')); ?>">Pengumuman</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo e(Request::is('gallery/list') ? 'active' : ''); ?>"
                                href="<?php echo e(url('gallery/list/')); ?>">Galeri</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Alumni</a>
                        </li>
                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <!-- <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
     <div class="nav-item w-100">
      <form class="position-relative">
       <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
       <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
      </form>
     </div>
    </div> -->
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
                <div class="ms-1 ms-lg-0">
                    <a class="btn btn-primary rounded " href="#"><i class="bi bi-box-arrow-right"></i> Daftar
                        Sekarang</a>

                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->
    <!-- **************** MAIN CONTENT START **************** -->
    <main style="background-color: #d7dbdf ;">

        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
    <!-- =======================
Footer START -->
    <footer class="pt-5 bg-light">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <a class="me-0" href="/">
                        <img class="light-mode-item h-40px" src="<?php echo e(asset('frontend')); ?>/assets/images/amik.png"
                            alt="logo">
                        
                    </a>
                    <!-- <p class="my-3">Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners. </p> -->
                    <!-- Social media icon -->
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook"
                                href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram"
                                href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter"
                                href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin"
                                href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                    </ul>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Profile</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">Visi</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Misi</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sejarah</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Pendidikan</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">MI (Manajemen
                                        Informatika)</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">TK (Teknik Komputer)</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Informasi</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Pengumuman</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->

                <!-- Widget 3 START -->
                <div class="col-lg-3">
                    <h5 class="mb-2 mb-md-4">Contact</h5>
                    <!-- Time -->
                    <p class="mb-2">
                        HP/Wa:<span class="h6 fw-light ms-2">+62 81927065905</span>
                        <span class="d-block small">(9:AM to 8:PM IST)</span>
                    </p>

                    <p class="mb-0">Email:<span class="h6 fw-light ms-2">avhan43@gmail.com</span></p>


                </div>
                <!-- Widget 3 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="py-3">
                <div class="container px-0">
                    <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <!-- copyright text -->
                        <div class="text-primary-hover"> Copyrights <a href="#"
                                class="text-body">©<?= date('Y') ?> Avhan</a>. All rights reserved. </div>
                        <!-- copyright links-->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('frontend')); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="<?php echo e(asset('frontend')); ?>/assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/assets/vendor/tiny-slider/tiny-slider.js"></script>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Template Functions -->
    
    <script src="<?php echo e(asset('frontend')); ?>/assets/js/functions.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // $('#isidefault').ready(function() {
            //     $.ajax({
            //         url: '<?php echo e(url('profile/visi')); ?>',
            //         type: 'GET',
            //         dataType: 'json',
            //         success: function(data) {
            //             var judul = data.visi.judul;
            //             var isi = data.visi.isi;
            //             $('#judul').html(judul);
            //             $('#isidefault').html(isi);
            //         }
            //     });
            // });
            $('#profileVisi').click(function() {
                // Remove class active
                $('#profileVisi').addClass('active');
                $('#profileMisi').removeClass('active');
                $('#profileSejarah').removeClass('active');
                $.ajax({
                    url: "<?php echo e(url('profile/visi')); ?>",
                    type: "GET",
                    success: function(data) {
                        var judul = data.visi.judul;
                        var isi = data.visi.isi;
                        $('#judul').html(judul);
                        $('#profileIsi').html(isi);
                    }
                });
            });
            $('#profileMisi').click(function() {
                // remove class active and add
                $('#profileVisi').removeClass('active');
                $('#profileMisi').addClass('active');
                $.ajax({
                    url: "<?php echo e(url('profile/misi')); ?>",
                    type: "GET",
                    success: function(data) {
                        var judul = data.misi.judul;
                        var isi = data.misi.isi;
                        $('#judul').html(judul);
                        $('#profileIsi').html(isi);
                    }
                });
            });
            $('#profileSejarah').click(function() {
                // remove class active and add
                $('#profileVisi').removeClass('active');
                $('#profileMisi').removeClass('active');
                $('#profileSejarah').addClass('active');
                $.ajax({
                    url: "<?php echo e(url('profile/sejarah')); ?>",
                    type: "GET",
                    success: function(data) {
                        var judul = data.sejarah.judul;
                        var isi = data.sejarah.isi;
                        $('#judul').html(judul);
                        $('#profileIsi').html(isi);
                    }
                });
            });
        });
    </script>

</body>

</html>
<?php /**PATH /home/avhan/Documents/PROJECT/website amik/amik/resources/views/layouts/front.blade.php ENDPATH**/ ?>