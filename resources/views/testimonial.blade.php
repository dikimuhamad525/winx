@extends('layouts.dashboard')
@section('dashboard-content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <div class="">
                <div class="row">

                    <div class="col-20">
                        <div class="card top-selling">

                            <div class="card-body pb-0">
                                <h5 class="card-title">Tambah Testimonial</h5>

                                <form action="{{ $url ?? route('simpan_testimonial') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Nama</label>
                                                <input class="form-control" value="{{ $testimonial->nama ?? '' }}" type="text" id="formFile" name="nama">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Pekerjaan</label>
                                                <input class="form-control" value="{{ $testimonial->pekerjaan ?? '' }}" type="text" id="formFile" name="pekerjaan">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Testimonial</label>
                                                <textarea class="form-control" name="testimonial">{{ $testimonial->testimonial ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
@push('js')
<script>
    'use strict'

    var addJs = function(){
        $('#summernote').summernote();
    }()
</script>
@endpush
