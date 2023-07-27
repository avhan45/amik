@extends('layouts.back')
@section('content')
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
                                <h3 class="card-title">Edit Data Pendidikan</h3>

                            </div>
                            <!-- /.card-header -->
                            <form class="form-horizontal" method="post"
                                action="{{ route('pendidikan.update', $pendidikan->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <!-- /.card-body -->
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="form-group row">
                                        <label for="kd_pendidikan" class="col-sm-2 col-form-label">Kode Pendidikan</label>
                                        <div class="col-sm-4">
                                            <input type="text"
                                                class="form-control @error('kd_pendidikan') is-invalid @enderror"
                                                placeholder="Masukkan Kode Pendidikan" name="kd_pendidikan"
                                                value="{{ old('kd_pendidikan', $pendidikan->kd_pendidikan) }}">

                                            @error('kd_pendidikan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Nama Jurusan</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('jurusan') is-invalid @enderror"
                                                placeholder="Masukkan Jurusan" name="jurusan"
                                                value="{{ old('jurusan', $pendidikan->jurusan) }}">
                                            @error('jurusan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="gambar">
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
@endsection
