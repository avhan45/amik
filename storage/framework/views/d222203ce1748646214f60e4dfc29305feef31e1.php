<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pengumuman</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pengumuman</li>
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
                                
                                <a href="<?php echo e(route('pengumuman.create')); ?>" class="btn btn-info"><i
                                        class="fas fa-plus-circle"></i> Tambah Data Pengumuman</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="Tberita" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $pengumumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumuman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td>
                                                    <?php if($pengumuman->gambar): ?>
                                                        <img src="<?php echo e(asset('storage/' . $pengumuman->gambar)); ?>"
                                                            alt="Gambar" width="100px">
                                                    <?php else: ?>
                                                        <span class="badge badge-danger">Belum Ada Gambar</span>
                                                    <?php endif; ?>

                                                </td>
                                                <td><?php echo e($pengumuman->judul); ?></td>
                                                <td> <?php echo e($pengumuman->isi); ?></td>
                                                <td>
                                                    <form action="<?php echo e(route('pengumuman.destroy', $pengumuman->id)); ?>"
                                                        method="POST">
                                                        <a href="<?php echo e(route('pengumuman.edit', $pengumuman->id)); ?>"
                                                            class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="5" class="text-center bg-danger">Tidak ada data</td>
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

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/LARAVEL/Amik3/resources/views/admin/pengumuman.blade.php ENDPATH**/ ?>