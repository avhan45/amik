@extends('layouts.front')
@section('content')
    <section class="pt-0">
        <div class="container-fluid px-0">
            <div class="card bg-blue h-100px h-md-200px rounded-0"
                style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover; height:100px !important">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                        <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <div class="avatar avatar-xxl position-relative mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                        src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->nama_situs }}">
                                    <span
                                        class="badge bg-success text-white rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h1 class="my-1 fs-4">{{ $setting->nama_situs }}</h1>
                                    <p>{{ $setting->lengkap }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                Page Banner END -->

    <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <nav class="navbar navbar-light navbar-expand-xl mx-0">
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header bg-light">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body p-3 p-xl-0">
                                <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                    <!-- Dashboard menu -->
                                    <div class="list-group list-group-dark list-group-borderless">
                                        <a class="list-group-item active" href="#" id="profileVisi"><i
                                                class="bi bi-ui-checks-grid fa-fw me-2"></i>Visi</a>
                                        <a class="list-group-item" href="#" id="profileMisi"><i
                                                class="bi bi-card-checklist fa-fw me-2"></i>Misi</a>
                                        <a class="list-group-item" href="#" id="profileSejarah"><i
                                                class="bi bi-clock-history fa-fw me-2"></i>Sejarah</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">

                    <div class="card  border rounded-3">
                        <!-- Card header START -->
                        <div class="card-header  border-bottom">
                            <h3 class="mb-0" id="judul">Klik Menu</h3>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">

                            {{-- <p id="isidefault"></p> --}}
                            <p id="profileIsi"></p>
                        </div>
                        <!-- Card body START -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                Page content END -->
@endsection
