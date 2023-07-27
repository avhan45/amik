@extends('layouts.back')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Galeri</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Galeri</li>
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
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                {{-- <a href="{{ route('gallery.create') }}" class="btn btn-warning"><i
                                        class="fas fa-plus-circle"></i> Tambah
                                    Gambar</a> --}}
                                <button type="button" class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-galeri"> <i class="fas fa-plus-circle"></i>
                                    Tambah Data Gambar
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($galeri as $data)
                                        <div class="col-sm-2">
                                            <a href="{{ asset('storage/' . $data->gambar) }}" data-toggle="lightbox"
                                                data-title="{{ $data->nama }}" data-gallery="gallery">
                                                <img src="{{ asset('storage/' . $data->gambar) }}" class="img-fluid mb-2"
                                                    alt="white sample" />
                                            </a>
                                            <form class="text-center" action="{{ route('gallery.destroy', $data->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Apakah Anda Yakin?');" type="submit"
                                                    class="btn btn-xs btn-danger"><i class="fas fa-times-circle"></i>
                                                </button>
                                            </form>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <div class="modal fade" id="modal-galeri">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Gambar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror "
                                    id="nama" placeholder="Masukkan Nama Gambar" name="nama"
                                    value="{{ old('nama') }}">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Pilih Gambar</label>
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
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
