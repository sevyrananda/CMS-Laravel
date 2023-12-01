@extends('layout2.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 style="opacity: 1;">
                        Bergabunglah dengan Koperasi Simpan Pinjam Kami
                    </h1>
                    <h2>Meningkatkan Efisiensi, Aksesibilitas, dan Keamanan Transaksi Koperasi</h2>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ url('Techie') }}/assets/img/landingg.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>


        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ url('Techie') }}/assets/img/2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Mudahkan Laporan Akuntansi Anda dengan</h3>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>Akses yang mudah</li>
                            <li><i class="bi bi-check-circle"></i>Biaya yang terjangkau</li>
                            <li><i class="bi bi-check-circle"></i>Pengelolaan yang mudah</li>
                            <li><i class="bi bi-check-circle"></i>Backup dan keamanan data</li>
                        </ul>
                        <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts" style="display: flex; align-items: center; justify-content: center;">
            <div class="container">
                <div class="row counters justify-content-center">
                    <div class="col-lg-4 col-7 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="14800" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pengusaha</p>
                    </div>
                    <div class="col-lg-4 col-7 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="347" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Kota/Kabupaten</p>
                    </div>
                    <div class="col-lg-4 col-7 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Bidang Usaha</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Lebih dari sekedar aplikasi pencatatan keuangan</h2>
                </div>

                <div class="row gy-4 justify-content-center">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 " data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <div class="icon">
                                    <svg width="100" height="100" viewBox="0 0 600 600"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                            d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                        </path>
                                    </svg>
                                    <i class="{{ $post->icon }}"></i>
                                </div>
                                <h4>{{ $post->judul }}</h4>
                                <p>{{ $post->isi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Motto Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Motto</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Percayakan tugas Anda kepada tim Kami</h4>
                            <p>Serahkan kegiatan Administrasi pada tim dan Anda dapat fokus mengembangkan bisnis. Dengan
                                akses multi-user, Anda dapat membagi tugas kepada anggota tim sesuai dengan kebutuhan.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Kerja tanpa batasan ruang</h4>
                            <p>Selesaikan pekerjaan Anda dari mana saja untuk memberikan hasil kerja yang lebih efisien
                                seperti membuat faktur penjualan dan pembelian, cek stok barang, hingga, persetujuan
                                transaksi.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-images"></i>
                            <h4>Lihat laporan keuangan setiap saat</h4>
                            <p>Kini Anda tidak perlu menunggu hingga akhir bulan untuk mengetahui kondisi keuangan
                                perusahaan. Lakukan analisa dan pengambilan keputusan lebih cepat untuk kemajuan bisnis
                                Anda.</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ url('Techie') }}/assets/img/landing3.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->

        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kelola aktivitas koperasi Anda secara menyeluruh</h2>
                </div>
                <div class="row">
                    <div class="col-lg-15" data-aos="zoom-in" data-aos-delay="100">
                        <div class="clickable-content" onclick="toggleContent()">
                            <img src="{{ url('Techie') }}/assets/img/landingbaru.png" alt="Clickable Image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Software akuntansi dapat digunakan di berbagai jenis usaha</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Lihat informasi stok dan catat transaksi penjualan dengan perhitungan biaya rata-rata
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>

                                <h3>Usaha Dagang</h3>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Kelola pelanggan dan memantau nilai piutang serta waktu jatuh tempo piutang dengan
                                    mudah, cepat dan akurat
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>

                                <h3>Usaha Jasa</h3>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Memudahkan kelola proyek dari pembuatan Rencana Anggaran Biaya hingga formulir
                                    penyelesaian proyek
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>

                                <h3>Usaha Kontraktor</h3>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Menghitung biaya dan varian produksi secara otomatis untuk dapat memudahkan operasional
                                    bisnis Anda
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>

                                <h3>Usaha Manufaktur</h3>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Faq Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="faq-list">
                    <ul>
                        @foreach ($faq as $faqs)
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#faq-list-{{ $faqs->id }}">
                                    {{ $faqs->question }}
                                    <i class="bx bx-chevron-down icon-show"></i>
                                    <i class="bx bx-chevron-up icon-close"></i>
                                </a>
                                <div id="faq-list-{{ $faqs->id }}" class="collapse show" data-bs-parent=".faq-list">
                                    <p>
                                        {{ $faqs->answer }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
