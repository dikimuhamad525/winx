@extends('layouts.home')
@section('home_content')

@foreach ($artikel as $item)

<section id="{{ $item->kategori }}" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                    <img src="{{ asset('storage/gambar').'/'.$item->gambar }}" alt="" srcset="">
                </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h2>{{ $item->judul }}</h2>
                <div class="ellipsis">
                    {!! $item->isi !!}
                </div>
            </div>
        </div>

    </div>
</section>

@endforeach

<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        
        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Tanggapan Mereka Tentang Kabupaten Sumedang</p>
        </div>
        
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($testimonial as $item)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {!!$item->testimonial!!}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset('') }}img/user.png" class="testimonial-img" alt="">
                        <h3>{{ $item->nama }}</h3>
                        <h4>{{ $item->pekerjaan }}</h4>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>

<section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Galeri</h2>
            <p>Galeri Kabupaten Sumedang</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-001.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-001.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-002.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-002.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-003.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-003.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-004.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-004.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-005.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-005.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-006.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-006.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-007.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-007.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('') }}img/gallery/gallery-008.png" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('') }}img/gallery/gallery-008.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kontak</h2>
            <p>Kontak Kami</p>
        </div>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="whatsapp">
                        <i class="bi bi-whatsapp"></i>
                        <h4>Whatsapp:</h4>
                        <p>+62 813 9556 4815</p>
                    </div>

                    <div class="facebook">
                        <i class="bi bi-facebook"></i>
                        <h4>Facebook:</h4>
                        <p>SumedangProfile</p>
                    </div>

                    <div class="instagram">
                        <i class="bi bi-instagram"></i>
                        <h4>Instagram:</h4>
                        <p>sumedangprofile_official</p>
                    </div>

                    <div class="lokasi">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>Mekarsari, Ds. Mekarjaya, Sumedang Utara, Sumedang</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                    <img src="{{ asset('') }}img/map.png" alt="" srcset="" style="max-width: 500px; position:absolute; left:250px">
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
