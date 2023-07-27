@extends('layouts.back')
@section('content')
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
                                {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                                <a href="{{ route('berita.create') }}" class="btn btn-info"><i
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
                                        @forelse($berita as $berita)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if ($berita->gambar != null)
                                                        <img src="{{ asset('storage/' . $berita->gambar) }}" width="60px">
                                                    @else
                                                        <span class="badge badge-danger">Belum Ada Gambar</span>
                                                    @endif

                                                </td>
                                                <td>{{ $berita->judul }}</td>
                                                <td id="textBerita">
                                                    {!! $berita->isi !!}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('berita.destroy', $berita->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('berita.edit', $berita->id) }}"
                                                            class="btn btn-primary btn-xs" alt="Edit"><i
                                                                class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-xs"><i
                                                                class="fas fa-trash"></i> </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center bg-danger">Tidak ada data</td>
                                            </tr>
                                        @endforelse

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
@endsection
