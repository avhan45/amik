<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pendidikan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pendidikan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                
                                <a href="<?php echo e(route('pendidikan.create')); ?>" class="btn btn-info rounded-full"><i
                                        class="fas fa-plus-circle"></i>
                                    Tambah Data</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th>Gambar</th>
                                            <th>Kd Pendidikan</th>
                                            <th>Jurusan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($pend->iterasi); ?></td>
                                                <td>
                                                    <?php if($pend->gambar): ?>
                                                        <img src="<?php echo e(asset('storage/' . $pend->gambar)); ?>"
                                                            alt="<?php echo e($pend->gambar); ?>" class="img-fluid"
                                                            style="width: 100px; height: 100px;">
                                                    <?php else: ?>
                                                        <span class="badge badge-danger">Belum Ada Gambar</span>
                                                        <img src="<?php echo e(asset('storage/' . $pend->gambar)); ?>" width="60px">
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($pend->kd_pendidikan); ?></td>
                                                <td><?php echo e($pend->jurusan); ?></td>
                                                <td class="text-center">
                                                    <form action="<?php echo e(route('pendidikan.destroy', $pend->id)); ?>"
                                                        method="POST">
                                                        <a href="<?php echo e(route('pendidikan.edit', $pend->id)); ?>"
                                                            class="btn btn-primary btn-sm rounded-full"><i
                                                                class="fas fa-pencil-alt"></i> Edit</a>
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger rounded-full btn-sm"><i
                                                                class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="4" class="text-center bg-danger">Tidak ada data</td>
                                            </tr>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/website amik/amik/resources/views/admin/pendidikan.blade.php ENDPATH**/ ?>