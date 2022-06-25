@extends('layouts.dashboard')
@push('css')
    <style>
        th, td {
            text-align: center
        }
        .tambah {
            border-color: #012a70e7 !important;
            position: absolute;
            left: 880px;
            margin-top: 15px;
        }
        
    </style>
@endpush
@section('dashboard-content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">

        
        <div class="col-lg">
            <div class="row">
                
                <div class="col-12">
                    <div class="card top-selling">
                        
                        <a type="button" class="tambah btn btn-outline-primary" href="{{ url('tambah_artikel') }}">Tambah</a>
                        <div class="card-body pb-0">
                            <h5 class="card-title">Artikel</h5>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th style="width: 100px">No</th>
                                        <th style="width: 100px" scope="col">Tanggal</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Gambar</th>
                                        <th style="width: 100px" scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artikel as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td><img src="{{ asset('storage/gambar').'/'.$item->gambar }}" alt="" srcset=""></td>
                                        <td>
                                            <a type="submit" href="{{ route('edit_artikel', $item->id) }}"
                                                class="btn btn-sm btn-warning bi bi-pencil-square"></a>
                                            <a type="submit" href="{{ route('hapus_artikel', $item->id) }}"
                                                class="btn btn-sm btn-danger bi bi-trash"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="section dashboard">
    <div class="row">

        
        <div class="col-lg">
            <div class="row">
                
                <div class="col-12">
                    <div class="card top-selling">
                        
                        <a type="button" class="tambah btn btn-outline-primary" href="{{ url('tambah_testimonial') }}">Tambah</a>
                        <div class="card-body pb-0">
                            <h5 class="card-title">Testimonials</h5>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th style="width: 100px">No</th>
                                        <th style="width: 100px" scope="col">Tanggal</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">Isi</th>
                                        <th style="width: 100px" scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonial as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->pekerjaan }}</td>
                                        <td>{{ $item->testimonial }}</td>
                                        <td style="width: 100px">
                                            <a type="submit" href="{{ route('edit_testimonial', $item->id) }}"
                                                class="btn btn-sm btn-warning bi bi-pencil-square"></a>
                                            <a type="submit" href="{{ route('hapus_testimonial', $item->id) }}"
                                                class="btn btn-sm btn-danger bi bi-trash"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
