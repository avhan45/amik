@extends('layouts.back')
@section('content')
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
                                action="{{ route('pengumuman.update', $pengumuman->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <!-- /.card-body -->
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="form-group row">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            @if ($pengumuman->gambar)
                                                <img src="{{ asset('storage/' . $pengumuman->gambar) }}" width="100px"
                                                    height="100px">
                                            @else
                                                <span class="badge badge-danger">Belum Ada Gambar</span>
                                            @endif
                                            <input type="file" class="form-control" name="gambar">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                                placeholder="Masukkan Judul" name="judul"
                                                value="{{ old('judul', $pengumuman->judul) }}">
                                            @error('judul')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Isi" class="col-sm-2 col-form-label">Isi</label>
                                        <div class="col-sm-10">
                                            <div id="berita" style="background: transparent !important">
                                                <textarea name="isi" id="isi" class="form-control @error('judul') is-invalid @enderror">{{ old('isi', $pengumuman->isi) }}</textarea>
                                                @error('isi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
@endsection
