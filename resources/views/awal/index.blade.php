<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>SEWA KENDARAAN</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <section class="header">
        <nav>
            <a>
            <img src="{{ asset('image/Logo.png') }}" alt="Deskripsi Gambar">
            </a>
            <div class="nav-links">
                <ul>
                    <li class="nav-item{{ request()->is('/awal') ? ' active' : '' }}">
                        <a href="{{ url('/awal') }}">
                            <span class="nav-item text-white">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item{{ request()->is('/kendaraan') ? ' active' : '' }}">
                        <a href="{{ url('/kendaraan') }}">
                            <span class="nav-item text-white">DATA SEWA KENDARAAN</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="hero-btn">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>SEWA KENDARAAN <br>YAYA</h1>
            <p>Selamat Datang di Sewa Kendaraan YAYA<BR>
                Kami adalah penyedia layanan sewa kendaraan yang terpercaya<BR></p>
            <a href="08152119525" class="hero-btn">Hubungi Kami</a>
            <p>Atau</p>
            <div class="social-media-icons">
                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank">
                    <img src="{{ asset('image/em.jpg') }}" alt="E-mail">
                </a>
                <a href="https://www.instagram.com/riaamysy__?igsh=MWRheTZiMnNlaGV1MA==" target="_blank">
                    <img src="{{ asset('image/ig.jpg') }}" alt="Instagram">
                </a>
            </div>
        </div>
    </section>
    
<!---  course-->
<!-- <section class="course">
    <h1>Cara Pesan</h1>
    <p>Ada 4 opsi untuk melakukan pesanan : </p>
    <br>
    <div class="row">
        <div class="course-col">
            <h3>01<br>Via WHATSAPP</h3>
            <p>Ingin desain khusus yang sesuai dengan keinginan Anda?
                Hubungi kami melalui WhatsApp! Kirimkan detail proyek
                desain Anda, termasuk preferensi dan inspirasi, ke nomor WhatsApp kami.
                Tim desainer kami akan segera menghubungi Anda untuk mendiskusikan
                detail lebih lanjut dan memastikan hasil
                yang memuaskan. Mudah, cepat, dan efisien!</p>
        </div>
        <div class="course-col">
            <h3>02<br>Via INSTAGRAM</h3>
            <p>Dapatkan desain yang unik dan personal dengan order melalui Instagram! Kirim DM kepada kami
                dengan deskripsi proyek desain yang Anda inginkan. Anda juga bisa
                menyertakan referensi visual dari feed atau stories kami. Tim kami
                akan merespons dengan cepat untuk memulai kolaborasi kreatif bersama
                Anda. Belanja desain menjadi lebih inspiratif di Instagram!</p>
        </div>
        <div class="course-col">
            <h3>03<br>VIA FACEBOOK</h3>
            <p> Pesan desain profesional Anda dengan mudah di Facebook!
                Kunjungi halaman Facebook kami dan kirim pesan ke inbox kami dengan
                rincian proyek desain Anda. Tim desainer kami akan menghubungi Anda untuk
                memahami kebutuhan dan preferensi Anda, serta memberikan solusi desain yang
                terbaik. Praktis dan langsung terhubung dengan desainer ahli!</p>
        </div>
        <div class="course-col">
            <h3>04<br>VIA TIKTOK</h3>
            <p> Temukan produk menarik di akun TikTok kami! Langsung DM atau tinggalkan komentar di video produk yang Anda inginkan. Kami akan segera menghubungi Anda untuk memproses pesanan dan memberikan informasi lebih lanjut. Nikmati pengalaman belanja yang seru dan interaktif di TikTok!</p>
        </div>
    </div>
</section> -->
<!--- campus-->
<!-- <section class="campus">
    <h1>PENCAPAIAN</h1>
    <p>Jika Anda telah menjadi pengikut aktif,kemungkinan besar anda pernah mendengar
        penghargaan Deiloitte fast 50 Di tahun 2019. Kami menerima penghargaan dalam kategori
        Rising Stars di tahun 2020. Kami mempertahankan kemenangan itu,dan di tahun 2021 kita telah
        memenangkan kategori fast 50 utama. Tidak hanya itu,tetapi dengan pertumbuhan yang menakjubkan
        hampr 40.000%. Seluruh tim FTMO berhasil menulis ulang 22tahun sejarah dalam kompetisi ini
        dan kami tidak bisa lebih bangga memegang gelar pemenang mutlak! TERIMA KASIH kepada seluruh
        FTMO traders dan kliens FTMO</p>

    <div class="row">
        <div class="campus-col">
            <img src="images/9A.jpg" alt="">
            <div class="layer">
                <h3>2021</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/A3.jpg" alt="">
            <div class="layer">
                <h3>2019</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/A1.jpg" alt="">
            <div class="layer">
                <h3>2020</h3>
            </div>
        </div>
    </div>
</section> -->


<!--- facilities-->

<!-- <section class="facilities">
    <h1>FASILITAS</h1>
    <p>Fasilitas yang dibutuhkan hanya computer/laptop handal</p>

    <div class="row">
        <div class="facilities-col">
            <img src="{{ asset('image/12.jpeg') }}">
        </div>


        <div class="facilities-col">
            <img src="{{ asset('image/13.jpeg') }}">
        </div>

        <div class="facilities-col">
            <img src="{{ asset('image/14.jpeg') }}">
        </div>
    </div>
</section> -->

<!--- call to action-->

<!-- <section class="cta">
    <h1>Ketahui Tujuan Trading Anda</h1>
    <p>Sebelum kami mengizinkan Anda berdagang untuk Perusahaan Perdagangan Proprietary kami,
        kami perlu memastikan bahwa Anda dapat mengelola risiko. Untuk alasan ini, kami mengembangkan Tujuan Perdagangan. Dengan memenuhi Tujuan Trading, Anda membuktikan bahwa Anda adalah seorang trader yang disiplin dan berpengalaman. Gaya trading Anda sepenuhnya terserah Anda;
        kami tidak menetapkan batasan apa pun pada instrumen atau ukuran posisi yang Anda perdagangkan.</p>
    <a href="" class="here-btn">CONTACT US</a>
</section> -->
<footer>
    <!-- <div class="footer-container">
        <div class="footer-section about">
            <h4>Tentang Kami</h4>
            <p>Kami menyediakan sepatu berkualitas tinggi dengan desain terkini. Temukan gaya Anda dengan produk-produk kami.</p>
        </div>
        <div class="footer-section links">
            <h4>Tautan Cepat</h4>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="produk.html">Produk</a></li>
                <li><a href="profile.html">Profile</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h4>Hubungi Kami</h4>
            <p>Alamat: SUHAID, KAPUAS HULU, KALBAR</p>
            <p>Email: info@sercom.com</p>
            <p>Telepon: (123) 456-7890</p>
        </div>
        <div class="footer-section social-media">
            <h4>Sosial Media</h4>
            <div class="social-media-icons">
                <a href="https://www.facebook.com/mus.w.566?mibextid=ZbWKwL" target="_blank"><img src="{{ asset('image/fb.jpg') }}" alt="Facebook"></a>
                <a href="https://wa.me/6285828063177" target="_blank"><img src="{{ asset('image/wa.jpg') }}" alt="WhatsApp"></a>
                <a href="https://www.instagram.com/xaxxax.xx?igsh=Z3Nqa2FoMG9wMHFm" target="_blank"><img src="{{ asset('image/ig.jpg') }}" alt="Instagram"></a>
                <a href="https://www.tiktok.com/@bluephantom.ww?_t=8mhcehJDbnd&_r=1" target="_blank"><img src="{{ asset('image/tiktok.jpg') }}" alt="Tiktok"></a>
            </div>
        </div>
    </div> -->
    <div class="copyright">
        <p>&copy; Copyright 2024 SEWA KENDARAAN KITE </p>
    </div>
</footer>

</body>
</html>