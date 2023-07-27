<?php $__env->startSection('content'); ?>
    <!-- =======================
                                                                                                                                                            Page Banner START -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0">List Pengumuman</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                                                                            Page Banner END -->

    <!-- =======================
                                                                                                                                                            Page content START -->
    <section class="pt-0">
        <div class="container">

            <div class="row mt-3">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Course Grid START -->
                    <div class="row g-4">
                        <?php $__currentLoopData = $pengumumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="<?php echo e(asset('storage/' . $data->gambar)); ?>" class="card-img-top"
                                        alt="course image">
                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->

                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="<?php echo e(url('pengumuman/detail', $data->id)); ?>"><?php echo e($data->judul); ?></a>
                                        </h5>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i><?php echo e($data->created_at); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- Course Grid END -->

                    <!-- Pagination START -->
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <?php echo e($pengumumans->links()); ?>

                                
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
                                                                                                                                                            Page content END -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/website amik/amik/resources/views/frontend/pengumuman_list.blade.php ENDPATH**/ ?>