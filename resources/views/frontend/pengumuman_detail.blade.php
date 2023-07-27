@extends('layouts.front')
@section('content')
    <!-- =======================
                                                                                                                                                                                Page banner video START -->
    <section class="py-0 pb-lg-5">
        <div class="container">
            <div class="row g-3">
                <!-- Course video START -->
                <div class="col-12">
                    <div class="video-player rounded-3 mt-3">
                        <img src="{{ asset('storage/' . $post->gambar) }}" alt="">
                    </div>
                </div>
                <!-- Course video END -->

                <!-- Playlist responsive toggler START -->
                <div class="col-12">
                    <button class="btn btn-primary d-lg-none mb-4" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                        <i class="bi bi-camera-video me-1"></i> Playlist
                    </button>
                </div>
                <!-- Playlist responsive toggler END -->
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                                                                                                Page banner video END -->

    <!-- =======================
                                                                                                                                                                                Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-lg-5">

                <!-- Main content START -->
                <div class="col-lg-8">
                    <div class="row g-4">

                        <!-- Course title START -->
                        <div class="col-12">
                            <!-- Title -->
                            <h1>{{ $post->judul }}</h1>
                            <!-- Content -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                        class="fas fa-clock text-danger me-2"></i>{{ $post->updated_at }}</li>
                                <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                        class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled</li>
                                <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                        class="fas fa-signal text-success me-2"></i>All levels</li>
                            </ul>
                        </div>
                        <!-- Course title END -->

                        <!-- Instructor detail START -->
                        <div class="col-12">
                            <div class="d-sm-flex justify-content-sm-between align-items-center">


                                <!-- Button -->
                                <div class="d-flex mt-2 mt-sm-0">
                                </div>
                            </div>
                        </div>
                        <!-- Instructor detail END -->

                        <!-- Course detail START -->
                        <div class="col-12">
                            <!-- Tabs START -->
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="tab-content pt-4 px-3" id="course-pills-tabContent">
                                <!-- Content START -->
                                <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel"
                                    aria-labelledby="course-pills-tab-1">
                                    <!-- Course detail START -->
                                    <h5 class="mb-3">Detail</h5>
                                    <p class="mb-3">{!! $post->isi !!}</p>

                                </div>
                                <!-- Content END -->

                            </div>
                            <!-- Tab contents END -->
                        </div>
                        <!-- Course detail END -->
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-lg-4">
                    <div class="row g-4">
                        <!-- Tags START -->
                        <div class="col-12">
                            <h4 class="mb-3">Tags</h4>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">blog</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">business</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">theme</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">bootstrap</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">data
                                        science</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">web
                                        development</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm"
                                        href="#">tips</a> </li>
                                <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">machine
                                        learning</a> </li>
                            </ul>
                        </div>
                        <!-- Tags END -->
                    </div><!-- Row End -->
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
                                                                                                                                                                                Page content END -->
@endsection
