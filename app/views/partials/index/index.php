<?php
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
//Page Data From Controller
$data = $this->view_data;
$about_id_1 = $data['about_id_1'];
$about_id_2 = $data['about_id_2'];
$about_id_3 = $data['about_id_3'];
$about_id_4 = $data['about_id_4'];
$about_id_5 = $data['about_id_5'];
$about_id_6 = $data['about_id_6'];
$teams = $data['teams'];
$karakter = $data['karakter'];
$cover_video = $data['cover_video'];
$quotes = $data['quotes'];
$videos = $data['videos'];

// var_dump($karakter);


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .custom-btn {
        background-color: #1A232C;
        /* Warna tombol */
        color: #FFFFFF;
        /* Warna teks pada tombol */
    }

    .custom-text-btn {
        color: #1A232C;
        /* Warna teks */
    }

    .text-orange {
        color: #EF9600;
    }

    .text-dark-blue {
        color: #1A232C;
    }

    * {
        font-family: Roboto, sans-serif;
    }

    .btn-hover-orange:hover {
        background-color: #EF9600;
        color: #FFFFFF;
    }

    .btn-text-hover-orange:hover {
        color: #FFFFFF;
        background-color: #EF9600;
        border-color: #EF9600;
    }

    .header-background {
        background-color: #B44704;
    }

    .about-background {
        background-color: #1A232C;
        color: white;
        padding: 20px;
    }

    .container-content {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .custom-section {
        padding: 40px 0;
    }

    .bg-custom {
        background-image: url('assets/images/bg-div1.png');
        background-size: cover;
        /* Mengatur gambar agar menyesuaikan dengan ukuran elemen */
        background-repeat: no-repeat;
        /* Mencegah pengulangan gambar */
        background-position: center;
        /* Memposisikan gambar di tengah */
    }

    /* about style */

    .bg-custom1 {
        background-image: url('assets/images/bg-div2.png');
        background-size: cover;
        /* Mengatur gambar agar menyesuaikan dengan ukuran elemen */
        background-repeat: no-repeat;
        /* Mencegah pengulangan gambar */
        background-position: center;
        /* Memposisikan gambar di tengah */
    }

    .about-background {
        position: relative;
        background-image: url('assets/images/bg-conten1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 40px 0;
    }

    .about-background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(26, 35, 44, 0.9);
        /* Warna latar dengan opasitas */
        z-index: 1;
    }

    .about-content {
        position: relative;
        z-index: 2;
        color: white;
    }

    .about-title {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 40px;
    }

    .card-about {
        background-color: rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        border: none;
    }

    .card-icon {
        font-size: 2rem;
        color: #EF9600;
        /* Warna ikon */
    }

    /* style div 3 */
    .bg-custom2 {
        background-image: url('assets/images/bg-div3.png');
        background-size: cover;
        /* Mengatur gambar agar menyesuaikan dengan ukuran elemen */
        background-repeat: no-repeat;
        /* Mencegah pengulangan gambar */
        background-position: center;
        /* Memposisikan gambar di tengah */
    }

    .bg-drak-blue {
        background-color: #1A232C;
    }

    .bg-orange {
        background-color: #EF9600;
    }

    .card-teams {
        border: none;
        /* Menghilangkan border kard jika ada */
        overflow: hidden;
        /* Menghilangkan bagian gambar yang keluar dari kard */
    }

    .card-teams img {
        width: 100%;
        height: 200px;
        display: block;
        /* Menghilangkan jarak bawah gambar */
        border: 2px solid #2D5781;
        /* Menambahkan border pada gambar, sesuaikan warna dan ukuran border sesuai kebutuhan */
        object-fit: cover;
        /* Menjaga gambar tetap proporsional */
    }

    .position-absolute {
        margin-top: 10px;
        /* Sesuaikan margin atas jika diperlukan untuk keselarasan vertikal */
    }

    .fa-2x {
        font-size: 2em;
        /* Pastikan ukuran ikon diperbesar */
    }

    .prev-button,
    .next-button {
        margin-left: 10px;
        color: #1A232C;
        /* Tambahkan jarak antar ikon jika diperlukan */
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: none;
        /* Hilangkan latar belakang */
        border: none;
        /* Hilangkan border */
        width: auto;
        /* Sesuaikan lebar tombol */
        height: auto;
        /* Sesuaikan tinggi tombol */
    }

    .carousel-control-prev {
        left: -70px;
        /* Sesuaikan posisi ke kiri */
    }

    .carousel-control-next {
        right: -70px;
        /* Sesuaikan posisi ke kanan */
    }

    .carousel-control-prev span,
    .carousel-control-next span {
        font-size: 3rem;
        /* Sesuaikan ukuran ikon */
        color: #1A232C;
        /* Sesuaikan warna ikon */
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        color: #1A232C;
        /* Sesuaikan warna ikon saat hover */
    }

    .prev-button1,
    .next-button1 {
        margin-left: 1px;
        color: #1A232C;
        /* Tambahkan jarak antar ikon jika diperlukan */
    }

    .carousel-control-prev1,
    .carousel-control-next1 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #FFFFFF;
        /* Hilangkan latar belakang */
        border: none;
        /* Hilangkan border */
        width: auto;
        /* Sesuaikan lebar tombol */
        height: auto;
        /* Sesuaikan tinggi tombol */
    }

    .carousel-control-prev1 {
        left: 0px;
        /* Sesuaikan posisi ke kiri */
    }

    .carousel-control-next1 {
        right: 0px;
        /* Sesuaikan posisi ke kanan */
    }

    .carousel-control-prev2 span,
    .carousel-control-next2 span {
        font-size: 2rem;
        /* Sesuaikan ukuran ikon */
        color: #1A232C;
        /* Sesuaikan warna ikon */
    }

    .carousel-control-prev2:hover,
    .carousel-control-next2:hover {
        color: #1A232C;
        /* Sesuaikan warna ikon saat hover */
    }

    .carousel-control-prev2,
    .carousel-control-next2 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: transparent;
        /* Hilangkan latar belakang */
        border: none;
        /* Hilangkan border */
        width: auto;
        /* Sesuaikan lebar tombol */
        height: auto;
        /* Sesuaikan tinggi tombol */
    }

    .carousel-control-prev2 {
        left: 30px;
        /* Sesuaikan posisi ke kiri */
    }

    .carousel-control-next2 {
        right: 30px;
        /* Sesuaikan posisi ke kanan */
    }

    .carousel-control-prev2 span,
    .carousel-control-next2 span {
        font-size: 2rem;
        /* Sesuaikan ukuran ikon */
        color: #1A232C;
        /* Sesuaikan warna ikon */
    }

    .carousel-control-prev2:hover,
    .carousel-control-next2:hover {
        color: #2D5781;
        /* Sesuaikan warna ikon saat hover */
    }


    .charater-background {
        position: relative;
        background-image: url('assets/images/bg-div4.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        padding: 100px 0;
    }


    .bg-custom2 {
        background-image: url('assets/images/bg-div4.png');
        background-size: cover;
        /* Mengatur gambar agar menyesuaikan dengan ukuran elemen */
        background-repeat: no-repeat;
        /* Mencegah pengulangan gambar */
        background-position: center;
        /* Memposisikan gambar di tengah */
    }

    .bg-linear {
        background-image: linear-gradient(#ffff 60%, #1A232C 40%);
    }

    .character-card {
        border: 2px solid #EF9600;
        box-shadow: #1A232C;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(26, 35, 44, 0.9);
    }

    .character-img-container {
        background-color: white;
        margin: 10px;
        padding: 0;
        display: flex;
        /* Menjadikan Flexbox */
        justify-content: center;
        /* Mengatur isi ke tengah secara horizontal */
    }

    .character-img-container img {
        width: 80%;
        height: auto;
        border: 2px solid #2D5781;
        object-fit: cover;
    }

    .character-card-body {
        padding-top: 25px;
        padding-left: -0px;
    }

    .character-card-title {
        font-size: 1.60rem;
        font-weight: bold;
        margin-bottom: 10px;
        margin-left: 0;
    }

    .character-info {
        margin: 5px 0;
        margin-left: 0;
    }

    .character-footer {
        margin-top: 10px;
        text-align: right;
        font-size: 0.9rem;
        color: #EF9600;
    }

    .carousel-indicators .active {
        background-color: orange;
    }

    .card-video {
        margin: 10px;
    }


    .scrollable-list-y {
        max-height: 200px;
        /* Adjust height as needed */
        overflow-y: auto;
        scrollbar-width: thin;
        /* For Firefox */
        scrollbar-color: #1A232C transparent;
        /* For Firefox */
    }

    .horizontal-scroll {
        display: flex;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        /* Smooth scrolling on iOS */
        scrollbar-width: thin;
        /* For Firefox */
        scrollbar-color: #1A232C transparent;
        /* For Firefox */
    }

    .scroll-item {
        flex: 0 0 auto;
        /* Ensure items don't shrink or grow */
        max-width: 50%;
        /* Ensure the width of each item is 50% of the container */
    }

    .img-card {
        padding-top: 15px;
        cursor: pointer;
        transition: transform 0.1s ease;
        /* Zoom effect */
        text-align: center;
    }


    .col-s {
        max-width: 50%;
        /* Ensure the width of each item is 50% of the container */
        flex: 0 0 50%;
        /* Ensure the width of each item is 50% of the container */
    }

    .text-efek {
        position: absolute;
        bottom: -10%;
        left: 0;
        width: 100%;
        padding-top: 2px;
        padding-bottom: 2px;
        padding-left: 5px;
        background-color: transparent;
        /* Transparent by default */
        color: #B44704;
        text-align: left;
        transition: background-color 0.3s, color 0.3s;
        /* Smooth transition */
        font-size: 12px;
        opacity: 0;
        /* Hidden by default */
    }

    .img-card:hover .text-efek {
        background-color: #B44704;
        color: #ffffff;
        opacity: 1;
        /* Visible on hover */
    }

    .list-group-item {
        background-color: #6c757d;
        /* Adjust item background color */
        color: #ffffff;
        /* Adjust item text color */
    }

    .epsd {
        width: 150%;
        padding: 0%;
        margin: 0;
        height: 150px;
        display: block;
        /* Menghilangkan jarak bawah gambar */
        border: 1px solid #2D5781;
        /* Menambahkan border pada gambar, sesuaikan warna dan ukuran border sesuai kebutuhan */
        object-fit: cover;
        /* Menjaga gambar tetap proporsional */
    }

    .qoutes-img-container {
        max-width: 540px;
        height: 400px;
    }

    /* style qoutes */
    .quotes-img {
        width: 100%;
        height: 300px;

        object-fit: contain;
        /* Memastikan gambar tidak terpotong */
        display: block;
        margin: auto;
        /* Memastikan gambar berada di tengah container */
    }

    .quotes-card {
        text-align: center;
        background-color: #B44704;
        padding: 5px;
        border-radius: 10px;
    }

    .quotes-card h1,
    .quotes-card p {
        color: #ffffff;
    }

    /* .carousel-indicators [data-bs-target] {
        background-color: #1A232C;
    } */

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        background-color: #1A232C;
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }

    .carousel-indicators {
        position: absolute;
        top: 92%;
        left: 72%;
        transform: translateX(-50%);
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }

    .carousel-indicators .fa-circle {
        font-size: 1rem;
        color: #1A232C;
        cursor: pointer;
        opacity: 0.5;
        margin: 0 0.40rem;
        /* Spasi antara ikon */
    }

    .carousel-indicators .fa-circle.active {
        opacity: 1;
    }

    .zoom {
        transition: transform 0.2s ease-in-out;
        /* Animasi dengan durasi 0.2 detik */
    }

    .zoom:hover {
        transform: scale(1.5);
        /* Membesar menjadi 110% */
    }
</style>

<div id="home" class="p-2 mt-0 mb-2 bg-custom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 comp-grid rounded p-3 header-background">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="assets/images/hinata-kageyama.png" alt="hinata dan kageyama" style="width: 100%;">
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-top m-5">
                        <h1 class="display-1 font-weight-bold text-dark-blue"><strong>Haikyū!!</strong></h1>
                        <p class="text text-light" style="font-size: medium;">Selamat datang Ikuti perjalanan Shoyo Hinata dan tim Karasuno dalam meraih mimpi mereka di dunia voli. Nikmati aksi, persahabatan, dan semangat juang dalam setiap pertandingan!</p>
                        <div class="mt-3 ms-2">
                            <button class="btn custom-btn bold px-4 btn-hover-orange" style="font-size: 120%;"><a href="#video" class="text-decoration-none text-light">Play</a></button>
                            <button class="btn custom-text-btn bold px-4 btn-text-hover-orange" style="font-size: 120%;"><a href="#teams" class="text-decoration-none" style="color: #1A232C;">Teams</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-drak-blue">
    <div id="about" class="p-2 mb-2 bg-custom1">
        <div class="about-background rounded">
            <div class="container about-content">
                <h1 class="about-title">About</h1>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card-about p-3 mx-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon mb-3"><i class="fa-solid fa-book-open-reader" style="font-size: 2rem; color: #EF9600; margin-right: 10px;"></i></div>
                                    <?php if (!empty($about_id_1)) : ?>
                                        <h3 class="card-title bold text-light"><?php echo $about_id_1['judul']; ?></h3>
                                </div>
                                <p class="card-text text-justify text-light"><?php echo $about_id_1['caption']; ?></p>
                            <?php else : ?>
                                <p>Data tidak tersedia.</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-about p-3 mx-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon mb-3"><i class="fa-solid fa-volleyball" style="font-size: 2rem; color: #EF9600; margin-right: 10px;"></i></div>
                                    <?php if (!empty($about_id_2)) : ?>
                                        <h3 class="card-title bold text-light"><?php echo $about_id_2['judul']; ?></h3>
                                </div>
                                <p class="card-text text-justify text-light"><?php echo $about_id_2['caption']; ?></p>
                            <?php else : ?>
                                <p>Data tidak tersedia.</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-about p-3 mx-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon mb-3"><i class="fa-solid fa-calendar-check" style="font-size: 2rem; color: #EF9600; margin-right: 10px;"></i></div>
                                    <?php if (!empty($about_id_3)) : ?>
                                        <h3 class="card-title bold text-light"><?php echo $about_id_3['judul']; ?></h3>
                                </div>
                                <p class="card-text text-justify text-light"><?php echo $about_id_3['caption']; ?></p>
                            <?php else : ?>
                                <p>Data tidak tersedia.</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-about p-3 mt-2 mx-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon mb-3"><i class="fa-solid fa-clapperboard" style="font-size: 2rem; color: #EF9600; margin-right: 10px;"></i></div>
                                    <?php if (!empty($about_id_4)) : ?>
                                        <h3 class="card-title bold text-light"><?php echo $about_id_4['judul']; ?></h3>
                                </div>
                                <p class="card-text text-justify text-light"><?php echo $about_id_4['caption']; ?></p>
                            <?php else : ?>
                                <p>Data tidak tersedia.</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-about p-3 mt-2 mx-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon mb-3"><i class="fa-solid fa-star" style="font-size: 2rem; color: #EF9600; margin-right: 10px;"></i></div>
                                    <?php if (!empty($about_id_5)) : ?>
                                        <h3 class="card-title bold text-light"><?php echo $about_id_5['judul']; ?></h3>
                                </div>
                                <p class="card-text text-justify text-light"><?php echo $about_id_5['caption']; ?></p>
                            <?php else : ?>
                                <p>Data tidak tersedia.</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-about p-3 mt-2 mx-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon mb-3"><i class="fa-solid fa-film" style="font-size: 2rem; color: #EF9600; margin-right: 10px;"></i></div>
                                    <?php if (!empty($about_id_6)) : ?>
                                        <h3 class="card-title bold text-light"><?php echo $about_id_6['judul']; ?></h3>
                                </div>
                                <p class="card-text text-justify text-light"><?php echo $about_id_6['caption']; ?></p>
                            <?php else : ?>
                                <p>Data tidak tersedia.</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="teams" class="p-2 mb-2  bg-orange ">
        <div class="p-5 rounded">
            <div class="container about-content">
                <div class="position-relative">
                    <h1 class="about-title text-dark-blue text-center">Teams</h1>
                </div>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <?php
                        $counter = 0;
                        $totalTeams = count($teams);

                        echo '<div class="carousel-item active">'; // Pembukaan carousel item pertama
                        echo '<div class="row">';

                        foreach ($teams as $index => $team) {
                            // Tutup row dan buka row baru setiap 6 tim
                            if ($index > 0 && $index % 6 == 0) {
                                echo '</div></div>'; // Tutup row dan carousel-item
                                echo '<div class="carousel-item">'; // Buka carousel-item baru
                                echo '<div class="row">';
                            }

                            // Output untuk setiap tim
                            echo '<div class="col-md-4">';
                            echo '<div class="card-teams p-0 mx-3 mt-4">';
                            echo '<img src="' . $team["foto"] . '" alt="Team" class="rounded">';
                            echo '<div class="d-flex align-items-center m-1">';
                            echo '<p class="card-text text-center h3 bold text-dark-blue">' . $team["nama_teams"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            // Increment counter
                            $counter++;
                        }

                        // Tutup div terakhir
                        echo '</div></div>';
                        ?>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="fa-solid fa-circle-chevron-left fa-2x " style="color: #1A232C;"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="fa-solid fa-circle-chevron-right fa-2x" style="color: #1A232C;"></span>
                    </button>

                </div>
            </div>
        </div>
        <!-- <div class="d-flex justify-content-end p-2">
            <a href="#" class="text text-dark-blue h5 bold view-all-link">View all</a>
        </div> -->

    </div>
</div>

<div id="karakter" id="carouselExampleIndicators1" class="carousel slide">
    <div class="p-5 mt-5 mb-2 bg-linear ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <?php $totalCharacters = count($karakter);
        $charactersPerSlide = 3; // Jumlah karakter per slide
        echo '<div class="carousel-inner">';
        // Loop untuk setiap karakter
        foreach ($karakter as $index => $character) {
            // Buka carousel item baru setiap karakter ke-0, ke-3, ke-6, dst.
            if ($index % $charactersPerSlide == 0) {
                echo '<div class="carousel-item ' . ($index == 0 ? 'active' : '') . '">';
                echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
            }

            // Output untuk setiap karakter
            echo '<div class="col">';
            echo '<div class="character-card" style="max-width: 540px;">';
            echo '<div class="row g- bg-light">';
            echo '<div class="col-md-5">';
            echo '<div class="character-img-container">';
            echo '<img src="' . $character["foto"] . '" class="m-2" alt="">';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-md-7 m-0">';
            echo '<div class="character-card-body m-0">';
            echo '<h5 class="character-card-title">' . $character["nama"] . '</h5>';
            echo '<div class="text text-justify">';
            echo '<p class="character-info">Jenis Kelamin: ' . $character["jenis_kelamin"] . '</p>';
            echo '<p class="character-info">Tanggal lahir: ' . $character["tgl_lahir"] . '</p>';
            echo '<p class="character-info">Tinggi : ' . $character["tinggi"] . '</p>';
            echo '<p class="character-info">Tim : ' . $character["tim"] . '</p>';
            echo '<p class="character-info">Posisi: ' . $character["posisi"] . '</p>';
            echo '</div>';
            echo '<p class="character-footer px-5">' . $character["footer"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            // Tutup carousel item setelah setiap 3 karakter atau jika sudah di akhir array
            if (($index + 1) % $charactersPerSlide == 0 || $index + 1 == $totalCharacters) {
                echo '</div></div>';
            }
        }

        echo '</div>';
        ?>
        <button class="carousel-control-next1" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
            <span class="fa-solid fa-circle-chevron-right fa-2x" style="color: #1A232C;"></span>
        </button>
        <button class="carousel-control-prev1" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
            <span class="fa-solid fa-circle-chevron-left fa-2x " style="color: #1A232C;"></span>
        </button>
    </div>
</div>
<div id="video" class="p-4 mb-2" id="" style="background-color: #f7e7cf;">
    <div class="row">
        <div class="col-md-6">
            <video id="main-video" class="img-fluid mt-2" style="border: 2px solid #1A232C;" controls></video>
        </div>
        <div class="col-md-6">
            <div class="row p-4 m-2 bg-light rounded">
                <div class="col-md-5 bg-drak-blue mt-2 ms-2 me-3 my-4 rounded">
                    <div class="card-body pt-3 px-2">
                        <h5 class="card-title text-light bold">Episodes</h5>
                        <ul id="episodes-list" class="list-group list-group-flush scrollable-list-y mt-2 ms-2"></ul>
                    </div>
                </div>
                <div class="col-md-6 mt-2 bg-dark-blue my-4 mx-2 rounded" style="background-color: #1A232C;">
                    <div class="card-body pt-3 px-2">
                        <h5 class="card-title text-light bold">Session and Movie</h5>
                        <div id="sessions-list" class="horizontal-scroll ms-2">
                            <?php foreach ($cover_video as $session) : ?>
                                <div class="col-md-6 p-0 m-0 col-s scroll-item">
                                    <div class="img-card" onclick="fetchEpisodes(<?= $session['id'] ?>)">
                                        <img src="<?= $session['gambar'] ?>" class="img-fluid epsd" alt="<?= $session['judul'] ?>">
                                        <p class="text text-efek text-light font-monospace bold"><?= $session['judul'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="qoutes" id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
    <div class="pb-5 pt-4 mb-2" style="background-color: #B44704;">
        <h1 class="text text-light fw-light mt-2 font-monospace text-center">Quotes</h1>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="fa-solid fa-circle active" aria-current="true" aria-label="Slide 1" style="color: #1A232C;"><i></i></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" class="fa-solid fa-circle" aria-label="Slide 2" style="color: #1A232C;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" class="fa-solid fa-circle" aria-label="Slide 3" style="color: #1A232C;"></button>
        </div>
        <?php $totalQuotes = count($quotes);
        $quotesPerSlide = 3; // Jumlah kutipan per slide

        echo '<div class="carousel-inner">';

        // Loop untuk setiap kutipan
        foreach ($quotes as $index => $quote) {
            // Buka carousel item baru setiap kutipan ke-0, ke-3, ke-6, dst.
            if ($index % $quotesPerSlide == 0) {
                echo '<div class="carousel-item ' . ($index == 0 ? 'active' : '') . '">';
                echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
            }

            // Output untuk setiap kutipan
            echo '<div class="col">';
            echo '<div class="quotes-card zoom">';
            echo '<h1 class="text text-light fw-light my-4 font-monospace">' . $quote["nama"] . '</h1>';
            echo '<img src="' . $quote["foto"] . '" class="img-fluid quotes-img" alt="' . $quote["nama"] . '" data-audio="' . $quote["audio"] . '">';
            echo '<audio id="' . $quote["audio"] . '" src="' . $quote["audio"] . '"></audio>';
            echo '<p class="text text-light fw-light mt-4 font-monospace">' . $quote["kata"] . '</p>';
            echo '</div>';
            echo '</div>';

            // Tutup carousel item setelah setiap 3 kutipan atau jika sudah di akhir array
            if (($index + 1) % $quotesPerSlide == 0 || $index + 1 == $totalQuotes) {
                echo '</div></div>';
            }
        }

        echo '</div>';
        ?>
        <!-- <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="quotes-card zoom ">
                            <h1 class="text text-light fw-light my-4 font-monospace">Hinata Shoyo</h1>
                            <img src="assets/images/karakter-hinata.jpg" class="img-fluid quotes-img" alt="Hinata Shoyo" data-audio="audio1">
                            <audio id="audio1" src="assets/audio/audio-kenma.mp3"></audio>
                            <p class="text text-light fw-light mt-4 font-monospace">“Ini bukan karena aku, tapi karena semua orang.”</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quotes-card zoom">
                            <h1 class="text text-light fw-light my-4 font-monospace">Kezume Kenma</h1>
                            <img src="assets/images/karakter-kenma.jpg" class="img-fluid quotes-img" alt="Kezume Kenma" data-audio="audio2">
                            <audio id="audio2" src="assets/audio/audio-kenma.mp3"></audio>
                            <p class="text text-light fw-light mt-4 font-monospace">“Ini bukan karena aku, tapi karena semua orang.”</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quotes-card zoom">
                            <h1 class="text text-light fw-light my-4 font-monospace">Kiyoko Shimizu</h1>
                            <img src="assets/images/karakter-kiyoko.jpg" class="img-fluid quotes-img" alt="Kiyoko Shimizu">
                            <p class="text text-light fw-light mt-4 font-monospace">“Ini bukan karena aku, tapi karena semua orang.”</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="quotes-card">
                            <h1 class="text text-light fw-light my-4 font-monospace">Hinata Shoyo</h1>
                            <img src="assets/images/karakter-hinata.jpg" class="img-fluid quotes-img" alt="Hinata Shoyo">
                            <p class="text text-light fw-light mt-4 font-monospace">“Ini bukan karena aku, tapi karena semua orang.”</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quotes-card">
                            <h1 class="text text-light fw-light my-4 font-monospace">Kezume Kenma</h1>
                            <img src="assets/images/karakter-kenma.jpg" class="img-fluid quotes-img" alt="Kezume Kenma">
                            <p class="text text-light fw-light mt-4 font-monospace">“Ini bukan karena aku, tapi karena semua orang.”</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quotes-card">
                            <h1 class="text text-light fw-light my-4 font-monospace">Kiyoko Shimizu</h1>
                            <img src="assets/images/karakter-kiyoko.jpg" class="img-fluid quotes-img" alt="Kiyoko Shimizu">
                            <p class="text text-light fw-light mt-4 font-monospace">“Ini bukan karena aku, tapi karena semua orang.”</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                </div>
            </div>
        </div> -->
        <button class="carousel-control-prev2" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
            <span class="fa-solid fa-circle-chevron-left fa-2x " style="color: #1A232C;"></span>
        </button>
        <button class="carousel-control-next2" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
            <span class="fa-solid fa-circle-chevron-right fa-2x " style="color: #1A232C;"></span>
        </button>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi dengan video pertama atau default
        const defaultVideo = "assets/videos/opening.mp4"; // ganti dengan video default jika ada
        const mainVideo = document.getElementById('main-video');
        mainVideo.src = defaultVideo;
        mainVideo.poster = "assets/images/haikyu-team.jpg"; // ganti dengan poster default jika ada

        // Data dari PHP
        const videos = <?php echo json_encode($videos); ?>;

        // Fungsi untuk mengambil daftar episode berdasarkan sesi/film yang dipilih
        window.fetchEpisodes = function(id_cover_video) {
            const episodesList = document.getElementById('episodes-list');
            episodesList.innerHTML = '';

            const filteredEpisodes = videos.filter(video => video.id_cover == id_cover_video);
            filteredEpisodes.forEach(episode => {
                const li = document.createElement('li');
                li.classList.add('list-group-item', 'rounded', 'm-1', 'p-1', 'font-monospace');
                li.textContent = episode.episod;
                li.onclick = () => fetchVideo(episode.video, episode.cover_video_tumbler);
                episodesList.appendChild(li);
            });
        }

        // Fungsi untuk menampilkan video berdasarkan episode yang dipilih
        window.fetchVideo = function(videoSrc, posterSrc) {
            mainVideo.src = videoSrc;
            mainVideo.poster = posterSrc; // set poster dari data tumbler
        }
    });
</script>
<script>
    document.querySelectorAll('.quotes-img').forEach(img => {
        const audioId = img.getAttribute('data-audio');
        const audio = document.getElementById(audioId);

        img.addEventListener('mouseover', () => {
            audio.play();
        });

        img.addEventListener('mouseout', () => {
            audio.pause();
            audio.currentTime = 0;
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>