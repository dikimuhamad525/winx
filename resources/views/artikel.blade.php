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
                                <h5 class="card-title">Tambah Artikel</h5>

                                @if (count($errors))
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <div class="alert-body">{{ $error }}</div>
                                </div>
                                @endforeach
                                @endif

                                <form action="{{ $url ?? route('simpan_artikel') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Judul</label>
                                                <input class="form-control" value="{{ $artikel->judul ?? '' }}" type="text" id="formFile" name="judul">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Kategori</label>
                                                <select name="kategori" id="" class="form-control">
                                                    <option selected disabled>Pilih kategori</option>
                                                    <option {{ isset($artikel) ? ($artikel->kategori == 'profile' ? 'selected' : '') : '' }} value="profile">Profile</option>
                                                    <option {{ isset($artikel) ? ($artikel->kategori == 'makanan-khas' ? 'selected' : '') : '' }} value="makanan-khas">Makanan Khas</option>
                                                    <option {{ isset($artikel) ? ($artikel->kategori == 'kesenian' ? 'selected' : '') : '' }} value="kesenian">Kesenian Sumedang</option>
                                                    <option {{ isset($artikel) ? ($artikel->kategori == 'wisata' ? 'selected' : '') : '' }} value="wisata">Wisata Sumedang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">File Upload</label>
                                                <input class="form-control" type="file" accept="image/*" id="formFile"
                                                    name="gambar">
                                                <input type="hidden" value="{{ $artikel->gambar ?? '' }}" name="old_gambar">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="">Artikel</label>
                                                <textarea id="summernote" name="article">{{ $artikel->isi ?? '' }}</textarea>
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
