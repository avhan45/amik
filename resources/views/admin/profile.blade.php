@extends('layouts.back')
@section('content')
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
                                        src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->nama_situs }}">
                                </div>

                                <h3 class="profile-username text-center">{{ $setting->nama_situs }}</h3>

                                <p class="text-muted text-center">{{ $setting->lengkap }}</p>



                                <a href="#" id="siteSetting" data-toggle="modal" data-target="#setting"
                                    data-id="{{ $setting->id }}" data-nama_situs="{{ $setting->nama_situs }}"
                                    data-lengkap="{{ $setting->lengkap }}" data-logo="{{ $setting->logo }}"
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
                                                {!! $visi->isi !!}
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
                                                {!! $misi->isi !!}
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
                                                {!! $sejarah->isi !!}
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

    {{-- Update Setting --}}
    <div class="modal fade" id="setting" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Setting Website</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('setting.update', $setting->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_situs">Nama Situs</label>
                            <input type="text" class="form-control" value="{{ $setting->nama_situs }}" name="nama_situs">
                        </div>
                        <div class="form-group">
                            <label for="lengkap">Lengkap</label>
                            <input type="text" class="form-control" value="{{ $setting->lengkap }}" name="lengkap">
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            @if ($setting->logo == null)
                                <img src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->nama_situs }}"
                                    class="img-thumbnail" width="100px">
                            @else
                                <span class="badge badge-danger">Belum Ada Logo</span>
                            @endif

                            <input type="file" class="form-control" value="{{ $setting->logo }}" name="logo">
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
    {{-- End Update Setting --}}

    {{-- Visi Edit --}}
    <div class="modal fade" id="visiEdit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('profile.update', $visi->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="hidden" value="{{ old('judul', $visi->judul) }}" name="judul">
                                <textarea id="summernote" name="isi">
                                    {{ old('isi', $visi->isi) }}
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
    {{-- End Visi Edit --}}

    {{-- Misi Edit --}}
    <div class="modal fade" id="misiEdit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('profile.update', $misi->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="hidden" value="{{ $misi->judul }}" name="judul">

                                <textarea id="misiModal" name="isi">
                                    {{ old('isi', $misi->isi) }}
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
    {{-- End Misi Edit --}}

    {{-- Sejarah Edit --}}
    <div class="modal fade" id="sejarahEdit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Visi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('profile.update', $sejarah->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="hidden" value="{{ $sejarah->judul }}" name="judul">

                                <textarea id="sejarahModal" name="isi">
                                    {{ old('isi', $sejarah->isi) }}
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
    {{-- end Sejarah Edit --}}
@endsection
