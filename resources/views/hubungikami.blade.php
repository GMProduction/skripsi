@extends('base')

@section('content')
    <div class="sub-content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="sub-hero">


        <p class="title" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="300">
            Hubungi Kami </p>
        <p class="sub" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
            data-aos-duration="600">Raja Sulaiman Express</p>
        <p class="isi" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="400"
            data-aos-duration="900">Solusi layanan lengkap pengiriman barang anda </p>
    </div>




    <div class="container">
        <div class="layanan-kami mt-5">

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.2842659193975!2d110.36020714232738!3d-6.992535498070458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708aa5a0994abf%3A0xfbeeb9182985e5e7!2sKawasan%20Industri%20Candi!5e0!3m2!1sen!2sid!4v1657174932521!5m2!1sen!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-6 col-sm-12">

                </div>

            </div>
            <p class="judul-content mb-5" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Raja Sulaiman Forwarding dan Logistik</p>

                <p class="mb-5" style="text-align: justify;
                text-justify: inter-word;"
                data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0" data-aos-duration="500">
                PT.
                Galatia Expressindo International Freights & Forwarding menawarkan layanan pengiriman barang baik
                impor maupun ekspor secara global. Dengan jaringan mitra dan agen yang luas di seluruh dunia, kami
                dapat memberikan harga terbaik dan pilihan rute harga paling efisien.

                Sebagai salah satu perusahaan International Freight Forwarder terkemuka di Indonesia yang telah
                berpengalaman melayani jasa perdagangan ekspor dan impor lebih dari 15 tahun. Kami senantiasa
                beradaptasi dengan kebutuhan pasar sehingga menjadi International Freight Forwarder terbaik saat ini
                yang selalu berkomitmen untuk melebihi harapan para customer kami.</p>
        </div>
    </div>



    <div class="dapatkan-penawaran pb-5">
        <div class="image-as-bg" style="background-image: url({{ asset('images/local/dapatkanpenawaranbg.jpg') }})">
        </div>
        <img class="mbake" src="{{ asset('images/local/mbake.png') }}" />

        <div class="form-penawan" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
            data-aos-duration="1000">
            <p class="judul-content">Dapatkan Penawaran</p>
            <a href="#"><img class="wa" src="{{ asset('images/local/wa.png') }}" /></a>

        </div>
    </div>


@endsection('content')
