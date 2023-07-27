<?php $__env->startSection('content'); ?>
    <section class="bg-dark align-items-center d-flex"
        style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <!-- Main banner background image -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h1 class="text-white">Berita</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pt-xl-5">
        <div class="container" data-sticky-container>
            <div class="row g-4">
                <!-- Main content START -->
                <div class="col-xl-8">

                    <div class="row g-4">
                        <!-- Title START -->
                        <div class="col-12">
                            <!-- Title -->
                            <h2><?php echo e($berita->judul); ?></h2>
                            
                            <!-- Content -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i
                                        class="fas fa-eye me-2"></i>12k
                                    Enrolled</li>
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i
                                        class="fas fa-signal me-2"></i>All levels</li>
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i
                                        class="bi bi-patch-exclamation-fill me-2"></i>Terakhir Di Update 09/2021</li>
                            </ul>
                        </div>
                        <!-- Title END -->

                        <!-- Image and video -->
                        <div class="col-12 position-relative">
                            <div class="video-player rounded-3">
                                <img style="width: -webkit-fill-available;" src="<?php echo e(asset('storage/' . $berita->gambar)); ?>"
                                    alt="<?php echo e($berita->judul); ?>">
                                
                            </div>
                        </div>

                        <!-- About course START -->
                        <div class="col-12">
                            <div class="card border">
                                <!-- Card header START -->
                                <div class="card-header border-bottom">
                                    <h3 class="mb-0">Detail</h3>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card-body">
                                    <p class="mb-3"><?php echo e($berita->isi); ?></p>

                                    <!-- Collapse button -->
                                    


                                    <p class="mb-0">As it so contrasted oh estimating instrument. Size like body some one
                                        had. Are conduct viewing boy minutes warrant the expense? Tolerably behavior may
                                        admit daughters offending her ask own. Praise effect wishes change way and any
                                        wanted. Lively use looked latter regard had. Do he it part more last in. </p>
                                </div>
                                <!-- Card body START -->
                            </div>
                        </div>
                        <!-- About course END -->

                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-xl-4">
                    <div data-sticky data-margin-top="80" data-sticky-for="768">
                        <div class="row g-4">

                            <!-- Tags START -->
                            <div class="col-md-6 col-xl-12">
                                <div class="card card-body border p-4">
                                    <h4 class="mb-3">Popular Tags</h4>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">blog</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">business</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">theme</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">bootstrap</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">data science</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">web development</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">tips</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                                href="#">machine learning</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tags END -->
                        </div><!-- Row End -->
                    </div>
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>


    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <h4 class="mb-0">Anda Mungkin Ingin Membaca</h4>
                </div>
            </div>

            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-hover arrow-dark">
                <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false"
                    data-items="3" data-items-lg="2" data-items-sm="1">

                    <?php $__currentLoopData = $listAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Slider item -->
                        <div class="card bg-transparent">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="<?php echo e(asset('storage/' . $list->gambar)); ?>" alt="<?php echo e($list->judul); ?>"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h6 class="card-title"><a
                                                href="<?php echo e(url('berita/detail', $list->id)); ?>"><?php echo e($list->judul); ?></a>
                                        </h6>
                                        <span class="small"><?php echo e($list->created_at); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- Slider END -->
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/LARAVEL/Amik3/resources/views/frontend/berita_detail.blade.php ENDPATH**/ ?>