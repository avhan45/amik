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
                                {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                                <a href="{{ route('pengumuman.create') }}" class="btn btn-info"><i
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
                                        @forelse($pengumumans as $pengumuman)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if ($pengumuman->gambar)
                                                        <img src="{{ asset('storage/' . $pengumuman->gambar) }}"
                                                            alt="Gambar" width="100px">
                                                    @else
                                                        <span class="badge badge-danger">Belum Ada Gambar</span>
                                                    @endif

                                                </td>
                                                <td>{{ $pengumuman->judul }}</td>
                                                <td> {{ $pengumuman->isi }}</td>
                                                <td>
                                                    <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('pengumuman.edit', $pengumuman->id) }}"
                                                            class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-trash"></i></button>
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
