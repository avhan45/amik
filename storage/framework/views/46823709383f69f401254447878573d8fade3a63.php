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
                                <h3 class="card-title">Edit Data Pengumuma</h3>

                            </div>
                            <!-- /.card-header -->
                            <form class="form-horizontal" method="POST"
                                action="<?php echo e(route('pengumuman.update', $pengumuman->id)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="card-body">
                                    <!-- /.card-body -->
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="form-group row">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <?php if($pengumuman->gambar): ?>
                                                <img src="<?php echo e(asset('storage/' . $pengumuman->gambar)); ?>" width="100px"
                                                    height="100px">
                                            <?php else: ?>
                                                <span class="badge badge-danger">Belum Ada Gambar</span>
                                            <?php endif; ?>
                                            <input type="file" class="form-control" name="gambar">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                placeholder="Masukkan Judul" name="judul"
                                                value="<?php echo e(old('judul', $pengumuman->judul)); ?>">
                                            <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Isi" class="col-sm-2 col-form-label">Isi</label>
                                        <div class="col-sm-10">
                                            <div id="berita" style="background: transparent !important">
                                                <textarea name="isi" id="isi" class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('isi', $pengumuman->isi)); ?></textarea>
                                                <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Update</button>
                                        <a href="#" onclick="history.back()"
                                            class="btn btn-default float-right">Cancel</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                            </form>

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

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/LARAVEL/Amik3/resources/views/admin/pengumuman_edit.blade.php ENDPATH**/ ?>