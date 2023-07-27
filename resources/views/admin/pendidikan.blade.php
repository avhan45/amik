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
                                {{-- <h3 class="card-title">Bordered Table</h3> --}}
                                <a href="{{ route('pendidikan.create') }}" class="btn btn-info rounded-full"><i
                                        class="fas fa-plus-circle"></i>
                                    Tambah Data</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th>Gambar</th>
                                            <th>Kd Pendidikan</th>
                                            <th>Jurusan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($pendidikan as $pend)
                                            <tr>
                                                <td>{{ $pend->iterasi }}</td>
                                                <td>
                                                    @if ($pend->gambar)
                                                        <img src="{{ asset('storage/' . $pend->gambar) }}"
                                                            alt="{{ $pend->gambar }}" class="img-fluid"
                                                            style="width: 100px; height: 100px;">
                                                    @else
                                                        <span class="badge badge-danger">Belum Ada Gambar</span>
                                                        <img src="{{ asset('storage/' . $pend->gambar) }}" width="60px">
                                                    @endif
                                                </td>
                                                <td>{{ $pend->kd_pendidikan }}</td>
                                                <td>{{ $pend->jurusan }}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('pendidikan.destroy', $pend->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('pendidikan.edit', $pend->id) }}"
                                                            class="btn btn-primary btn-sm rounded-full"><i
                                                                class="fas fa-pencil-alt"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger rounded-full btn-sm"><i
                                                                class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center bg-danger">Tidak ada data</td>
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
