<?php $__env->startSection('content'); ?>
    
    <section class="pt-0">
        <div class="row">
            <div class="col-12">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner" data-autoplay="false" data-gutter="0" data-arrow="true" data-dots="false"
                        data-items="1">
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Card item START -->
                            <div class="card overflow-hidden h-500px h-md-600px text-center rounded-0"
                                style="background-image:url(<?php echo e(asset('storage/' . $slider->gambar)); ?>); background-position: center left; background-size: cover;">
                                <!-- Background dark overlay -->
                                <div class="bg-overlay bg-dark opacity-6"></div>
                                <!-- Card image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-2 p-sm-4">
                                    <div class="w-100 my-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-11 col-lg-7">
                                                <!-- Title -->
                                                <h1 class="text-white display-6"><?php echo e($slider->judul); ?></h1>
                                                <p class="text-white"><?php echo e($slider->keterangan); ?></p>
                                                <!-- Button -->
                                                <a href="#" class="btn btn-outline-white mb-0">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </div>
    </section>
    

    
    <section class="pt-0 pt-md-5">
        <div class="container">
            <div class="row">

                <!-- Left Content START -->
                <div class="col-lg-5 position-relative mt-xl-0">

                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-50 mt-n3 ms-5 d-none d-sm-block z-index-1">
                        <svg width="192.5px" height="89.4px" viewBox="0 0 192.5 89.4">
                            <path class="fill-warning"
                                d="M170.2,0.5c-0.1,0-0.2,0-0.4,0c-2.6-0.1-5.2-0.4-7.8-0.5c-2.9-0.1-5.8,0-8.6,0.2c-1.4,0.1-2.9,0.3-4.3,0.5 c-0.5,0.1-1,0-1.5,0c-1-0.1-1.9,0.2-2.9,0.3c-5.6,0.9-11.1,2.1-16.5,3.6c-2.7,0.7-5.4,1.6-8.1,2.5c-0.6,0.2-1.2,0.4-1.8,0.5 c-0.4,0-0.8,0-1.2,0.1c-1.5,0.2-3,1.1-4.3,1.8c-3,1.5-5.9,3.2-8.6,5.2c-2,1.5-3.8,3.1-5.6,4.8c-0.9,0.9-1.7,1.8-2.5,2.7 c-0.4,0.4-1.1,0.7-1.4,1.2c-0.3,0.4-0.6,0.9-0.9,1.4c-0.9,1.2-1.7,2.3-2.7,3.4c-0.3,0.4-0.7,0.6-1.2,0.6c-1.4,0.1-2.8-0.1-4.2-0.1 c-0.7,0-1.2,0.2-1.9,0.2c-3.3,0.4-6.6,0.7-9.8,1.6c-1.7,0.5-3.4,0.9-5.1,1.4c-5.4,1.5-11,2.9-16,5.4c-4.6,2.2-8.7,5.2-12.7,8.3 c-2,1.6-4,3.2-5.9,4.9c-0.8,0.7-1.6,1.2-2.5,1.6c-0.9,0.5-1.7,1.3-2.4,2c-1.4,1.3-2.9,2.6-4.3,3.9c-1.2,1.1-2.5,2.1-3.6,3.3 c-0.9,1-2,1.9-3,2.8c-1,0.9-2.1,1.9-3.1,2.8c-0.8,0.7-1.6,1.2-2.3,1.9c-0.9,0.9-1.7,1.9-2.7,2.7c0-0.7,0.2-1.3,0.2-2 c0-1.8-0.2-3.7-0.7-5.5c-0.2-0.9-0.5-1.8-1.1-2.4c-0.6-0.7-1.7-1-2.4-0.6c-0.1,0.1-0.3,0.2-0.4,0.3c-0.1,0.2-0.1,0.4,0,0.6 c0.7,3.7,1.2,7.4,0.7,11.1c-0.2,2.4-0.9,4.9-2,7c-0.5,1-1.2,1.9-1.7,3c-0.4,1-1.4,1.8-2.1,2.7C0.3,86,0.1,86.3,0,86.6 c-0.1,0.4,0.1,0.7,0.2,1.1c0.3,0.8,0.8,1.6,1.6,1.7c0.5,0,0.9-0.2,1.3-0.5c0.9-0.5,1.7-1.1,2.6-1.6c0.4-0.2,0.7-0.5,1.1-0.7 c1.7-1.3,3.7-2.3,5.7-3.1c4.3-1.7,9.1-2.4,13.8-1.7c0.2,0,0.4,0.1,0.7,0c0.7-0.2,0.9-1.2,0.4-1.8c-0.4-0.6-1.2-0.8-1.9-1 c-2.7-0.8-5.4-1.5-8.2-1.8c-0.7-0.1-1.4-0.1-2.1-0.2c-0.3,0-0.6,0-0.8,0c-0.3,0-0.9,0.2-1.2,0.1C13,77,13,77.1,13,76.8 c0-0.4,0.6-0.8,0.9-1c0.5-0.4,0.9-0.8,1.4-1.2c1.1-1,2.3-1.9,3.4-2.9c0.6-0.5,1.1-1,1.7-1.5c0.3-0.3,0.5-0.7,0.9-1 c1.2-1.1,2.7-1.7,3.9-2.8c0.4-0.4,0.8-0.8,1.2-1.2c0.8-0.8,1.7-1.5,2.6-2.2c1-0.8,2.1-1.6,3.1-2.3c0.9-0.6,1.9-1.1,2.6-2 c0.8-1,2.1-1.7,3.1-2.5c1.1-0.9,2.2-1.8,3.3-2.6c3.9-3.1,7.9-6.2,12.3-8.6c5.2-2.7,10.6-4.9,16.3-6.4c5.5-1.4,11.2-1.8,16.8-2.7 c0.2,0,0.3-0.1,0.5-0.1c1.4-0.2,2.3-0.4,2,1.5c-0.8,4.9,2.3,7.5,5.8,9.8c4,2.5,8,5,12.7,5.8c5.2,0.9,10.4,2.7,15.9,0.8 c3-1,6.3-5,6.2-7.6c0-1.7-0.3-3.5-1-5.1c-0.6-1.4-1.5-3-2.8-3.7c-1-0.5-1.9-1.5-2.8-2.2c-1.1-0.8-2.2-1.5-3.3-2.1 c-2.3-1.2-4.8-2.1-7.3-2.8c-3.5-0.9-7.2-1.4-10.8-1.8c-0.9-0.1-1.7-0.2-2.6-0.2c-0.2,0-1.4,0-1.4-0.2c-0.1-0.2,0.3-0.5,0.4-0.6 c0.8-0.9,1.7-1.8,2.5-2.6c1.7-1.7,3.6-3.3,5.5-4.8c2-1.6,4.2-3,6.4-4.1c1.1-0.6,2.3-1.1,3.5-1.5c0.6-0.2,1.2-0.4,1.8-0.6 c0.4-0.2,0.7-0.5,1.1-0.7c1.2-0.6,2.7-0.9,4-1.3c1.4-0.4,2.8-0.8,4.2-1.2c2.8-0.8,5.6-1.5,8.4-2.2c3.4-0.8,6.9-1.6,10.3-2.4 c7.9-1.7,15.9-2.4,24-1.7c4.4,0.4,8.9,0.9,13.2,2.1c1.3,0.4,2.5,0.8,3.9,1.1c0.7,0.1,1.4,0.5,2,0.9c0.9,0.5,1.7,0.9,2.6,1.4 c0.3,0.2,0.7,0.3,0.9,0.1c0.1-0.1,0.1-0.3,0.1-0.4c0-0.9-0.4-1.8-1-2.5c-0.5-0.6-1.2-1.4-1.9-1.8c-0.9-0.6-2.2-0.9-3.3-1.3 c-1.1-0.4-2.2-0.7-3.3-1c-2.8-0.8-5.6-1.4-8.5-1.9C173.1,0.9,171.6,0.6,170.2,0.5z M106.8,36c5,0.8,11.2,2,16.2,6.2 c1.1,0.9,2.8,1.6,2.3,3.4c-0.4,1.7-2.1,1.8-3.5,2.3c-5,1.5-9.9,0-14.5-1.2c-4.9-1.2-9.7-3.3-13.5-7c-0.6-0.6-1.2-1.3-1.5-2.1 c-0.1-0.3-0.1-0.7-0.2-1c-0.1-0.3-0.3-0.6,0-0.9c0.2-0.2,0.5-0.3,0.9-0.3c2.4-0.4,4.9-0.6,7.4-0.5c0.9,0,1.8,0.4,2.7,0.5 C104.5,35.6,105.7,35.8,106.8,36z">
                            </path>
                        </svg>
                    </figure>

                    <img src="<?php echo e(asset('frontend')); ?>/assets/images/amik.png" alt="">
                </div>
                <!-- Left Content END -->

                <!-- Tabs START -->
                <div class="col-lg-7 z-index-9 mt-5 mt-xl-0">
                    <div class="card shadow-lg">
                        <div class="card card-body">
                            <h3>Profile</h3>
                            <ul class="nav nav-pills nav-pill-soft my-4" id="course-pills-tab" role="tablist">
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-lg-4" role="presentation">
                                    <button class="nav-link mb-2 mb-xl-0 active" id="course-pills-tab-1"
                                        data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab"
                                        aria-controls="course-pills-1" aria-selected="true">Visi</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-lg-4" role="presentation">
                                    <button class="nav-link mb-2 mb-xl-0" id="course-pills-tab-2" data-bs-toggle="pill"
                                        data-bs-target="#course-pills-2" type="button" role="tab"
                                        aria-controls="course-pills-2" aria-selected="false">Misi</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-lg-4" role="presentation">
                                    <button class="nav-link mb-2 mb-xl-0" id="course-pills-tab-3" data-bs-toggle="pill"
                                        data-bs-target="#course-pills-3" type="button" role="tab"
                                        aria-controls="course-pills-3" aria-selected="false">Sejarah</button>
                                </li>
                            </ul>

                            <!-- Tab contents START -->
                            <div class="tab-content" id="pills-tabContent">
                                <!-- Content -->
                                <div class="tab-pane fade active show" id="course-pills-1" role="tabpanel"
                                    aria-labelledby="course-pills-tab-1">
                                    <?php echo $visi->isi; ?>

                                </div>

                                <!-- Content -->
                                <div class="tab-pane fade" id="course-pills-2" role="tabpanel"
                                    aria-labelledby="course-pills-tab-2">
                                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                        <!-- Item -->
                                        <?php echo $misi->isi; ?>


                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="tab-pane fade" id="course-pills-3" role="tabpanel"
                                    aria-labelledby="course-pills-tab-3">
                                    <h6><?php echo $sejarah->judul; ?></h6>
                                    <p><?php echo $sejarah->isi; ?></p>
                                </div>
                            </div>
                            <!-- Tab contents END -->
                        </div>
                    </div>
                </div>
                <!-- Tabs END -->
            </div>
        </div>
    </section>
    

    
    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-0" id="jurusan">Jurusan</h2>
                    <p class="mb-0">Akademi Manajemen Informatikan & Komputer Global Kendari</p>
                </div>
            </div>

            <div class="row">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-dark arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false"
                        data-items="3" data-items-lg="2" data-items-sm="1">
                        <!-- Card item START -->
                        
                        <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <div class="card border mb-1 bg-white shadow-lg p-3 mb-5 bg-body rounded">
                                    <!-- Card image -->
                                    <img class="card-img-top" src="<?php echo e(asset('storage/' . $p->gambar)); ?>"
                                        alt="Card image">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mt-n6 mb-3">
                                            <!-- Logo image -->
                                            <div class="bg-white p-2 rounded-2 shadow">
                                                <img class="rounded-1 h-60px"
                                                    src="<?php echo e(asset('storage/' . $setting->logo)); ?>" alt="university logo">
                                            </div>
                                            <!-- Badge -->
                                            <div class="h5 mb-0"><a href="#"
                                                    class="badge bg-primary text-white"><?php echo e($p->jurusan); ?></a>
                                            </div>
                                        </div>
                                        <!-- Badge and rating -->
                                        <div class="d-flex justify-content-between mb-3" style="float: right">
                                            <!-- Badge -->
                                            <span><a href="#"
                                                    class="badge bg-primary text-white"><?php echo e($p->Kd_Pendidikan); ?></a></span>
                                        </div>
                                        <!-- Title -->

                                        <!-- Content -->
                                        <div class="row item-collapse">
                                            <div class="col-6">
                                            </div>
                                            <!-- Button -->
                                            <div class="mt-3"><a href="#" class="btn btn-primary-soft">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </div>
    </section>
    

    <!-- =======================
                                                                                                                                                                                                                                                                                                        Gallery START-->
    <section class="pt-0 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-3 mb-sm-4">
                <div class="col-12 mx-auto text-center">
                    <h2 class="fs-1 fw-bold">
                        
                        <span class="position-relative z-index-1">Galery
                            <!-- SVG START -->
                            <span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
                                <svg class="fill-orange" width="250" height="86" viewBox="0 0 303 86">
                                    <path
                                        d="M288.197 19.3999C281.599 15.6998 273.654 13.03 265.424 10.926C256.533 8.64794 247.263 6.92124 237.946 5.4267C218.461 2.249 198.384 0.406219 178.237 0.0579769C158.609 -0.275755 138.888 0.8125 119.733 3.49686C108.17 5.10748 96.8189 7.2985 85.8466 10.0264C81.4955 11.0131 77.168 12.0723 72.9115 13.2331C56.382 17.7022 40.5146 23.4192 26.3972 30.355C12.9182 36.9861 0.716203 46.0404 0.999971 57.2131C1.14185 62.2772 4.16871 67.051 9.98595 70.693C15.4721 74.1319 22.6846 76.3809 29.9679 78.0206C38.7647 80.0085 48.0345 81.3289 57.257 82.4026C67.1179 83.5489 77.0734 84.2889 87.0762 84.6807C107.413 85.4642 127.892 84.7968 148.063 83.0266C168.399 81.2418 188.429 78.3543 208.127 74.8139C227.399 71.3459 246.436 67.2976 265.141 62.8285C278.927 59.5348 294.227 55.0802 300.446 46.2435C307.091 36.812 299.949 25.973 288.197 19.3999ZM298.862 46.7804C295.48 50.9593 289.592 54.0935 283.207 56.4876C276.633 58.9543 269.468 60.7391 262.279 62.4077C252.915 64.5843 243.503 66.6737 234.044 68.6616C215.174 72.6083 196.019 76.0762 176.534 78.7171C157.191 81.3289 137.54 83.0991 117.747 83.6505C97.9304 84.2019 77.9957 83.5634 58.4866 81.3289C49.5243 80.2987 40.5146 79.0363 31.907 77.1645C24.5764 75.5829 17.3403 73.4499 11.6649 70.1126C5.49296 66.4561 2.15869 61.5226 2.22963 56.2555C2.32422 50.7417 5.72943 45.489 10.9555 41.0489C16.1106 36.6959 22.7319 33.0974 29.6842 29.8472C36.2108 26.8145 43.0213 24.0141 50.0918 21.4748C48.4601 22.1278 46.8521 22.7953 45.2678 23.4772C37.7716 26.684 30.4409 30.1664 23.9615 34.1131C17.695 37.9438 12.1615 42.3839 9.30018 47.5785C6.55709 52.5554 6.10779 58.1853 9.77313 63.0462C13.0838 67.4427 19.303 70.7655 26.279 72.8985C34.6974 75.4813 44.2036 76.2358 53.497 76.381C63.8309 76.5406 74.2357 76.1488 84.5696 75.757C95.0454 75.3652 105.497 74.7993 115.926 74.0884C136.783 72.6664 157.545 70.6204 178.071 67.9361C187.956 66.6447 197.817 65.2227 207.583 63.6411C208.269 63.525 208.718 62.3642 208.009 62.4658C188.358 65.629 168.447 68.2118 148.394 70.2142C128.435 72.202 108.312 73.624 88.1404 74.4366C78.0666 74.8429 67.9219 75.1911 57.8008 75.2056C48.3419 75.2201 38.6465 74.7558 29.8261 72.5068C22.5427 70.6785 15.8032 67.6169 11.8777 63.3509C7.33745 58.4175 7.52663 52.4393 10.6481 47.2302C13.7695 41.9776 19.7523 37.581 26.3263 33.8084C32.7583 30.1083 39.8289 26.7855 47.1359 23.7529C59.2197 18.7034 72.2257 14.4955 85.7756 11.1292C90.7889 9.99737 95.8494 8.98167 100.981 8.08205C117.96 5.07846 135.553 3.32274 153.218 2.88744C161.754 2.66979 170.315 2.78587 178.851 3.19215C179.537 3.22117 180.128 2.06037 179.277 2.01684C167.69 1.45094 156.032 1.47996 144.468 2.06037C145.745 1.97331 146.999 1.88625 148.275 1.8137C167.879 0.6674 187.696 1.04466 207.157 2.78587C226.075 4.46904 245.111 7.25497 262.894 11.608C278.714 15.4677 294.085 21.6635 299.808 32.0092C302.456 36.812 302.574 42.1662 298.862 46.7804Z" />
                                </svg>
                            </span>
                            <!-- SVG END -->
                        </span>
                    </h2>
                </div>
            </div>

            <!-- Image gallery START -->
            <div class="row g-4">

                <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="row g-4">

                            <!-- Image -->
                            <div class="col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="<?php echo e(asset('storage/' . $data->gambar)); ?>" class="rounded-3"
                                            alt="course image">
                                    </div>
                                    <!-- Full screen button -->
                                    <a target="_blank" class="card-element-hover position-absolute w-100 h-100"
                                        data-glightbox data-gallery="gallery"
                                        href="<?php echo e(asset('storage/' . $data->gambar)); ?>">
                                        <i
                                            class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <nav class="d-flex justify-content-center mt-5" aria-label="navigation">
                    <ul class="pagination pagination-primary-soft rounded mb-0">
                        <?php echo e($galeri->links()); ?>

                    </ul>
                </nav>
                
            </div>
            <!-- Image gallery END -->
        </div>
    </section>
    <!-- =======================
                                                                                                                                                                                                                                                                                                        Gallery START-->

    
    <section class="pt-4">
        <div class="container">
            <!-- Search option START -->
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-0" id="berita">Berita Terbaru</h2>
                    <p class="mb-0">Akademi Manajemen Informatikan &amp; Komputer Global Kendari</p>
                </div>

                <!-- Instructor list START -->
                <div class="row g-4 justify-content-center">
                    
                    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Card item START -->
                        <div class="col-lg-10 col-xl-6">
                            <div class="card shadow p-2">
                                <div class="row g-0">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <img src="<?php echo e(asset('storage/' . $b->gambar)); ?>" class="rounded-3"
                                            alt="<?php echo e($b->judul); ?>">
                                    </div>

                                    <!-- Card body -->
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                                <div>
                                                    <h5 class="card-title mb-0"><a href="#"><?php echo e($b->judul); ?></a>
                                                    </h5>
                                                    <p class="small mb-2 mb-sm-0">Admin</p>
                                                </div>
                                                <span class="h6 fw-light"><i class="fas fa-clock text-orange me-2"></i>
                                                    <?php echo e($b->created_at); ?></span>

                                            </div>
                                            <!-- Content -->
                                            <p class="text-truncate-2 mb-3"><?php echo $b->isi; ?></p>
                                            <!-- Info -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                <!-- Title -->
                                                <a href="<?php echo e(url('berita/detail', $b->id)); ?>"
                                                    class="btn btn-info btn-sm mb-0"><i class="fab fa-readme"></i>
                                                    Baca</a>
                                                

                                                <!-- Social button -->
                                                <ul class="list-inline mb-0 mt-3 mt-sm-0">
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 me-1 text-facebook" href="#"><i
                                                                class="fab fa-fw fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                                class="fab fa-fw fa-instagram"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 me-1 text-twitter" href="#"><i
                                                                class="fab fa-fw fa-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 text-linkedin" href="#"><i
                                                                class="fab fa-fw fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <nav class="d-flex justify-content-center mt-5" aria-label="navigation">
                        <ul class="pagination pagination-primary-soft rounded mb-0">
                            <?php echo e($berita->links()); ?>

                        </ul>
                    </nav>
                </div>
                <!-- Instructor list END -->

            </div>
    </section>
    

    <!-- Pengumuman -->
    <section class="pt-0 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-3 mb-sm-4">
                <div class="col-12 mx-auto text-center">
                    <h2 class="h1" id="pengumuman">
                        <span class="position-relative z-index-9">Pengumuman</span>
                        <span class="position-relative z-index-1">Terbaru
                            <!-- SVG START -->
                            <span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
                                <svg class="fill-orange" width="250" height="86" viewBox="0 0 303 86">
                                    <path
                                        d="M288.197 19.3999C281.599 15.6998 273.654 13.03 265.424 10.926C256.533 8.64794 247.263 6.92124 237.946 5.4267C218.461 2.249 198.384 0.406219 178.237 0.0579769C158.609 -0.275755 138.888 0.8125 119.733 3.49686C108.17 5.10748 96.8189 7.2985 85.8466 10.0264C81.4955 11.0131 77.168 12.0723 72.9115 13.2331C56.382 17.7022 40.5146 23.4192 26.3972 30.355C12.9182 36.9861 0.716203 46.0404 0.999971 57.2131C1.14185 62.2772 4.16871 67.051 9.98595 70.693C15.4721 74.1319 22.6846 76.3809 29.9679 78.0206C38.7647 80.0085 48.0345 81.3289 57.257 82.4026C67.1179 83.5489 77.0734 84.2889 87.0762 84.6807C107.413 85.4642 127.892 84.7968 148.063 83.0266C168.399 81.2418 188.429 78.3543 208.127 74.8139C227.399 71.3459 246.436 67.2976 265.141 62.8285C278.927 59.5348 294.227 55.0802 300.446 46.2435C307.091 36.812 299.949 25.973 288.197 19.3999ZM298.862 46.7804C295.48 50.9593 289.592 54.0935 283.207 56.4876C276.633 58.9543 269.468 60.7391 262.279 62.4077C252.915 64.5843 243.503 66.6737 234.044 68.6616C215.174 72.6083 196.019 76.0762 176.534 78.7171C157.191 81.3289 137.54 83.0991 117.747 83.6505C97.9304 84.2019 77.9957 83.5634 58.4866 81.3289C49.5243 80.2987 40.5146 79.0363 31.907 77.1645C24.5764 75.5829 17.3403 73.4499 11.6649 70.1126C5.49296 66.4561 2.15869 61.5226 2.22963 56.2555C2.32422 50.7417 5.72943 45.489 10.9555 41.0489C16.1106 36.6959 22.7319 33.0974 29.6842 29.8472C36.2108 26.8145 43.0213 24.0141 50.0918 21.4748C48.4601 22.1278 46.8521 22.7953 45.2678 23.4772C37.7716 26.684 30.4409 30.1664 23.9615 34.1131C17.695 37.9438 12.1615 42.3839 9.30018 47.5785C6.55709 52.5554 6.10779 58.1853 9.77313 63.0462C13.0838 67.4427 19.303 70.7655 26.279 72.8985C34.6974 75.4813 44.2036 76.2358 53.497 76.381C63.8309 76.5406 74.2357 76.1488 84.5696 75.757C95.0454 75.3652 105.497 74.7993 115.926 74.0884C136.783 72.6664 157.545 70.6204 178.071 67.9361C187.956 66.6447 197.817 65.2227 207.583 63.6411C208.269 63.525 208.718 62.3642 208.009 62.4658C188.358 65.629 168.447 68.2118 148.394 70.2142C128.435 72.202 108.312 73.624 88.1404 74.4366C78.0666 74.8429 67.9219 75.1911 57.8008 75.2056C48.3419 75.2201 38.6465 74.7558 29.8261 72.5068C22.5427 70.6785 15.8032 67.6169 11.8777 63.3509C7.33745 58.4175 7.52663 52.4393 10.6481 47.2302C13.7695 41.9776 19.7523 37.581 26.3263 33.8084C32.7583 30.1083 39.8289 26.7855 47.1359 23.7529C59.2197 18.7034 72.2257 14.4955 85.7756 11.1292C90.7889 9.99737 95.8494 8.98167 100.981 8.08205C117.96 5.07846 135.553 3.32274 153.218 2.88744C161.754 2.66979 170.315 2.78587 178.851 3.19215C179.537 3.22117 180.128 2.06037 179.277 2.01684C167.69 1.45094 156.032 1.47996 144.468 2.06037C145.745 1.97331 146.999 1.88625 148.275 1.8137C167.879 0.6674 187.696 1.04466 207.157 2.78587C226.075 4.46904 245.111 7.25497 262.894 11.608C278.714 15.4677 294.085 21.6635 299.808 32.0092C302.456 36.812 302.574 42.1662 298.862 46.7804Z">
                                    </path>
                                </svg>
                            </span>
                            <!-- SVG END -->
                        </span>
                    </h2>
                </div>
            </div>

            <div class="row g-4 justify-content-between">

                <div class="col-md-5">
                    <!-- Card START -->
                    <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card bg-transparent shadow-lg p-3 bg-body rounded">
                            <!-- Image -->
                            <img src="<?php echo e(Storage::url('public/pengumuman/') . $p->gambar); ?>" class="card-img"
                                alt="">

                            <!-- Card body -->
                            <div class="card-body px-3">
                                <h4><a href="<?php echo e(url('pengumuman/detail', $p->id)); ?>"
                                        class="stretched-link"><?php echo e($p->judul); ?></a></h4>
                                <p class="text-truncate-2"><?php echo $p->isi; ?></p>
                                <div class="d-flex justify-content-between">
                                    <h6>User</h6>
                                    <span><i class="fas fa-fw fa-clock"></i>
                                        <?php echo e($p->updated_at); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="col-md-7">
                    <!-- Card START -->
                    <?php $__currentLoopData = $peng; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card shadow-lg m-2 p-2" style="border-radius: 1rem; background-color:#ffffff4f;">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-lg-3">
                                    <div class="bg-dark text-center p-3 rounded-2 mb-2 mb-sm-0">
                                        
                                        <i class="fas fa-clock text-orange"></i><br />
                                        <span class="text-white"><?php echo e($pe->created_at); ?></span>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-lg-9">
                                    <div class="card-body p-0">
                                        <h5 class="card-title"><a href="<?php echo e(url('pengumuman/detail', $pe->id)); ?>"
                                                class="stretched-link"><?php echo e($pe->judul); ?></a></h5>
                                        <p class="mb-0">User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- Card END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- End Pengumuman -->

    <!-- =======================
                                                                                                                                                                                                                                                                                                                                                Map START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 h-400px grayscale rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1927076838606!2d122.50913331399165!3d-3.9807289971049338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f315036cfc11%3A0xc9b968c22ea42005!2sSTIE%20Dharma%20Bharata!5e0!3m2!1sid!2sid!4v1657721803619!5m2!1sid!2sid"
                        height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                                                                                                                                                                                                                                                                Map END -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/website amik/amik/resources/views/frontend/index.blade.php ENDPATH**/ ?>