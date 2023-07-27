<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Site Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="<?php echo e(asset('storage/' . $setting->logo)); ?>" alt="<?php echo e($setting->nama_situs); ?>">
                                </div>

                                <h3 class="profile-username text-center"><?php echo e($setting->nama_situs); ?></h3>

                                <p class="text-muted text-center"><?php echo e($setting->lengkap); ?></p>



                                <a href="#" id="siteSetting" data-toggle="modal" data-target="#setting"
                                    data-id="<?php echo e($setting->id); ?>" data-nama_situs="<?php echo e($setting->nama_situs); ?>"
                                    data-lengkap="<?php echo e($setting->lengkap); ?>" data-logo="<?php echo e($setting->logo); ?>"
                                    class="btn btn-primary btn-block"><b>Edit</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#visi"
                                            data-toggle="tab">Visi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#misi" data-toggle="tab">Misi</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#sejarah" data-toggle="tab">Sejarah</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="visi">
                                        <!-- Post -->
                                        <div class="post">
                                            <p>
                                                <?php echo $visi->isi; ?>

                                            </p>

                                            <p>
                                                <a href="#" data-toggle="modal" data-target="#visiEdit"
                                                    class="btn btn-xs btn-info text-sm mr-2"><i
                                                        class="fas fa-edit mr-1"></i> Edit</a>
                                            </p>
                                        </div>
                                        <!-- /.post -->
                                        <!-- Post -->

                                        <!-- /.post -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="misi">
                                        <!-- The timeline -->
                                        <div class=" ">
                                            <!-- timeline time label -->
                                            <p>
                                                <?php echo $misi->isi; ?>

                                            </p>
                                            <p>
                                                <a href="#" data-toggle="modal" data-target="#misiEdit"
                                                    class="btn btn-xs btn-info text-sm mr-2"><i
                                                        class="fas fa-edit mr-1"></i> Edit</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="sejarah">
                                        <!-- The timeline -->
                                        <div class=" ">
                                            <!-- timeline time label -->
                                            <p>
                                                <?php echo $sejarah->isi; ?>

                                            </p>
                                            <p>
                                                <a href="#" data-toggle="modal" data-target="#sejarahEdit"
                                                    class="btn btn-xs btn-info text-sm mr-2"><i
                                                        class="fas fa-edit mr-1"></i> Edit</a>
                                            </p>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    
    <div class="modal fade" id="setting" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Setting Website</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?php echo e(route('setting.update', $setting->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_situs">Nama Situs</label>
                            <input type="text" class="form-control" value="<?php echo e($setting->nama_situs); ?>" name="nama_situs">
                        </div>
                        <div class="form-group">
                            <label for="lengkap">Lengkap</label>
                            <input type="text" class="form-control" value="<?php echo e($setting->lengkap); ?>" name="lengkap">
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <?php if($setting->logo == null): ?>
                                <img src="<?php echo e(asset('storage/' . $setting->logo)); ?>" alt="<?php echo e($setting->nama_situs); ?>"
                                    class="img-thumbnail" width="100px">
                            <?php else: ?>
                                <span class="badge badge-danger">Belum Ada Logo</span>
                            <?php endif; ?>

                            <input type="file" class="form-control" value="<?php echo e($setting->logo); ?>" name="logo">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    

    
    <div class="modal fade" id="visiEdit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?php echo e(route('profile.update', $visi->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="hidden" value="<?php echo e(old('judul', $visi->judul)); ?>" name="judul">
                                <textarea id="summernote" name="isi">
                                    <?php echo e(old('isi', $visi->isi)); ?>

                                  </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    

    
    <div class="modal fade" id="misiEdit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?php echo e(route('profile.update', $misi->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="hidden" value="<?php echo e($misi->judul); ?>" name="judul">

                                <textarea id="misiModal" name="isi">
                                    <?php echo e(old('isi', $misi->isi)); ?>

                                  </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    

    
    <div class="modal fade" id="sejarahEdit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?php echo e(route('profile.update', $sejarah->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="hidden" value="<?php echo e($sejarah->judul); ?>" name="judul">

                                <textarea id="sejarahModal" name="isi">
                                    <?php echo e(old('isi', $sejarah->isi)); ?>

                                  </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/avhan/Documents/PROJECT/LARAVEL/Amik3/resources/views/admin/profile.blade.php ENDPATH**/ ?>