<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Berita</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Berita</li>
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
                                
                                <a href="<?php echo e(route('berita.create')); ?>" class="btn btn-info"><i
                                        class="fas fa-plus-circle"></i> Tambah Data Berita</a>
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
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td>
                                                    <?php if($berita->gambar != null): ?>
                                                        <img src="<?php echo e(asset('storage/' . $berita->gambar)); ?>" width="60px">
                                                    <?php else: ?>
                                                        <span class="badge badge-danger">Belum Ada Gambar</span>
                                                    <?php endif; ?>

                                                </td>
                                                <td><?php echo e($berita->judul); ?></td>
                                                <td id="textBerita">
                                                    <?php echo $berita->isi; ?></td>
                                                <td class="text-center">
                                                    <form action="<?php echo e(route('berita.destroy', $berita->id)); ?>"
                                                        method="POST">
                                                        <a href="<?php echo e(route('berita.edit', $berita->id)); ?>"
                                                            class="btn btn-primary btn-xs" alt="Edit"><i
                                                                class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger btn-xs"><i
                                                                class="fas fa-trash"></i> </button>
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

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/website amik/amik/resources/views/admin/berita.blade.php ENDPATH**/ ?>