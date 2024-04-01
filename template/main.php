<main class="text-light" data-bs-spy="scroll" data-bs-target="#navbar-menus" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

    <?php include('./template/main/main-content.php')?>
    <?php include('./template/main/introduction.php')?>
    <?php include('./template/main/content.php')?>

        <!-- Tanggal -->
        <section class="dark-section" id="tanggal">

            <div class="container">
                <div class="text-center">

                    <h1 class="lobster-regular py-3" style="font-size: 2rem;">Thời gian diễn ra sự kiện</h1>
                    <div class="border rounded-pill shadow py-2 px-4 mx-2 mb-4">

                        <!-- Ganti waktunya pada data-waktu (sesuai format tersebut) -->
                        <div class="row justify-content-center" data-waktu="2024-07-14 00:00:00" id="tampilan-waktu">
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="hari">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Ngày</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="jam">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Giờ</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="menit">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Phút</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="detik">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Giây</small>
                            </div>
                        </div>
                    </div>

                    <!-- Love animation -->
                    <div class="position-relative">
                        <div class="position-absolute" style="top: 0%; right: 10%;">
                            <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 3000, 'animate-love')" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-x-hidden">
                        <div class="py-2" data-aos="fade-right" data-aos-duration="1500">
                            <h1 class="lobster-regular" style="font-size: 1.2rem;">Bắt đầu vào lúc</h1>
                            <p>11:00 AM</p>
                        </div>
                    </div>

                    <div class="py-2" data-aos="fade-up" data-aos-duration="1500">
                        <a href="https://www.google.com/maps/place/Ph%C3%BA+Gia+Xavia+Restaurant/@16.0426094,108.2218539,17z/data=!3m1!4b1!4m6!3m5!1s0x31421944f53b4955:0x39233d7e59760bd1!8m2!3d16.0426043!4d108.2244288!16s%2Fg%2F11srbpvzhy?authuser=0&hl=en&entry=ttu" target="_blank" class="btn btn-outline-light btn-sm rounded-pill shadow-sm mb-2 px-3">
                            <i class="fa-solid fa-map-location-dot me-2"></i>Xem Google Maps
                        </a>
                        <p class="mb-0 mt-1 mx-1 pb-4" style="font-size: 0.9rem;">
                            Nhà hàng Phú Gia Xavia, Đường 2 Tháng 9, Hoà Cường Bắc, Hải Châu, Đà Nẵng                        
                        </p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.4406132441563!2d108.22185387387339!3d16.042609440152553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421944f53b4955%3A0x39233d7e59760bd1!2sPh%C3%BA%20Gia%20Xavia%20Restaurant!5e0!3m2!1sen!2s!4v1711558586656!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Love animation -->
        <div class="position-relative">
            <div class="position-absolute" style="top: 0%; left: 10%;">
                <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 2000, 'animate-love')" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                </svg>
            </div>
        </div>

        <!-- Galeri Foto -->
        <section class="dark-section" id="Galeri">

            <div class="container pb-2 pt-4">
                <div class="card-body border rounded-4 shadow p-3">

                    <h1 class="protest-guerrilla-regular text-center py-3" data-aos="fade-down" data-aos-duration="1500" style="font-size: 2rem;">Ảnh</h1></h1>

                    <div id="carousel-foto-satu" data-aos="fade-up" data-aos-duration="1500" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded-4">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/1280/720?random=1" alt="gambar 1" class="d-block w-100" onclick="util.modal(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1280/720?random=2" alt="gambar 2" class="d-block w-100" onclick="util.modal(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1280/720?random=3" alt="gambar 3" class="d-block w-100" onclick="util.modal(this)">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-satu" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-satu" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div id="carousel-foto-dua" data-aos="fade-up" data-aos-duration="1500" class="carousel slide mt-4" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded-4">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/1280/720?random=4" alt="gambar 4" class="d-block w-100" onclick="util.modal(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1280/720?random=5" alt="gambar 5" class="d-block w-100" onclick="util.modal(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1280/720?random=6" alt="gambar 6" class="d-block w-100" onclick="util.modal(this)">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-dua" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-dua" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wave Separator -->
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
        </svg>

        <!-- Hadiah -->
        <div class="container">
            <div class="py-4">

                <div class="text-center">

                    <h1 class="font-esthetic mt-0 mb-3" style="font-size: 3rem;">Love Gift</h1>

                    <p class="mb-1" style="font-size: 0.9rem;">
                        Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                        dapat melalui :
                    </p>

                    <div class="overflow-x-hidden">
                        <div class="row justify-content-center">

                            <div class="col-5 card-body border rounded-4 shadow p-3 m-3" data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/640px-BNI_logo.svg.png" class="img-fluid w-50 rounded" alt="bni">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                                <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                                <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                                <button class="btn btn-light btn-sm rounded-3" data-nomer="123456789" onclick="util.salin(this)" autofocus>Salin No. Rekening</button>
                            </div>

                            <div class="col-5 card-body border rounded-4 shadow p-3 m-3" data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/640px-BANK_BRI_logo.svg.png" class="img-fluid w-50 rounded" alt="bri">

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                                <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                                <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                                <button class="btn btn-light btn-sm rounded-3" data-nomer="123456789" onclick="util.salin(this)" autofocus>Salin No. Rekening</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ucapan -->
        <section class="m-0 p-0" id="ucapan">
            <div class="container">

                <div class="card-body border rounded-4 shadow p-3">
                    <h1 class="font-esthetic text-center mb-3" style="font-size: 3rem;">Ucapan & Doa</h1>
                    <div class="mb-1" id="balasan"></div>

                    <div class="mb-3">
                        <label for="form-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="form-nama" placeholder="Isikan Nama Anda">
                    </div>

                    <div class="mb-3">
                        <label for="form-kehadiran" class="form-label" id="label-kehadiran">Kehadiran</label>
                        <select class="form-select shadow-sm" id="form-kehadiran">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="1">Hadir</option>
                            <option value="2">Berhalangan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="form-pesan" class="form-label">Ucapan & Doa</label>
                        <div id="alertDiv" class="alert alert-info alert-dismissible fade show" role="alert">
                            <p style="font-size: 1.5rem;">Bestieee!!!</p>
                            <p class="m-0">Sekarang bisa format text seperti whatsapp lohh... cobainn sekaranggg, makaciwww bestieee</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-labelWahyu & RiskiClose" onclick="localStorage.setItem('alertClosed', 'true'); document.getElementById('alertDiv').style.display = 'none';"></button>
                        </div>
                        <textarea class="form-control shadow-sm" id="form-pesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                    </div>

                    <div class="d-flex">
                        <button class="flex-fill btn btn-danger btn-sm rounded-3 shadow m-1" style="display: none;" onclick="comment.batal()" id="batal">
                            Batal<i class="fa-solid fa-xmark ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-success btn-sm rounded-3 shadow m-1" style="display: none;" onclick="comment.balas()" id="balas">
                            Balas<i class="fa-solid fa-reply ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-warning btn-sm rounded-3 shadow m-1" style="display: none;" onclick="comment.ubah()" id="ubah">
                            Ubah<i class="fa-solid fa-pen-to-square ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-primary btn-sm rounded-3 shadow m-1" onclick="comment.kirim()" id="kirim">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                </div>

                <div class="rounded-4 mt-4 mb-2" id="daftar-ucapan"></div>

                <nav class="d-flex justify-content-center mb-0">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled" id="previous">
                            <button class="page-link" onclick="pagination.previous(this)" aria-label="Sebelumnya">
                                <i class="fa-solid fa-circle-left me-1"></i>Sebelumnya
                            </button>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link text-light" id="page">1</span>
                        </li>
                        <li class="page-item" id="next">
                            <button class="page-link" onclick="pagination.next(this)" aria-label="Selanjutnya">
                                Selanjutnya<i class="fa-solid fa-circle-right ms-1"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Wave Separator -->
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,224L34.3,234.7C68.6,245,137,267,206,266.7C274.3,267,343,245,411,234.7C480,224,549,224,617,213.3C685.7,203,754,181,823,197.3C891.4,213,960,267,1029,266.7C1097.1,267,1166,213,1234,192C1302.9,171,1371,181,1406,186.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </main>