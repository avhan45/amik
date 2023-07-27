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
                                <h3 class="card-title">Tambah Data Pendidikan</h3>

                            </div>
                            <!-- /.card-header -->
                            <form class="form-horizontal" method="post" action="{{ route('pendidikan.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <!-- /.card-body -->
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="form-group row">
                                        <label for="kd_pendidikan" class="col-sm-2 col-form-label">Kode Pendidikan</label>
                                        <div class="col-sm-4">
                                            <input type="text"
                                                class="form-control @error('kd_pendidikan') is-invalid @enderror"
                                                placeholder="Masukkan Kode Pendidikan" value="{{ old('kd_pendidikan') }}"
                                                name="kd_pendidikan">

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
                                                placeholder="Masukkan Jurusan" value="{{ old('jurusan') }}" name="jurusan">
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
                                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                                name="gambar">
                                            @error('gambar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Simpan</button>
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
