 <!-- Hero -->
 <section class="hero">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="content">
                        <div class="text-hero">
                            <h5>Belajar dan mengajar dengan <span>Terstruktur</span> dibantu oleh program yang <span>terbaik</span>  dan <span>Unggulan</span></h5>
                        </div>
                        <div class="login-act">
                            <div class="row">
                                <div class="col-lg-6 wrap">
                                    <a href="<?php echo site_url('auth')?>" target="_blank">
                                        <div class="button-teaser">
                                            <h3>Student Site</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="<?php echo site_url('auth')?>" target="_blank">
                                        <div class="button-teaser">
                                            <h3>Teacher Site</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="assets/img/slider-home/slider-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/img/slider-home/slider-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="assets/img/slider-home/slider-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Komptensi Keahlian -->
    <!-- <section class="learn-land">
        <div class="container">
            <div class="head-content">
                <h1>Kompetensi Keahlian</h1>
            </div>
            <div class="content-learn">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <a href="">
                            <div class="wrap-content">
                                <div class="icon mb-3">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h6>Rekayasa Perangkat Lunak</h6>
                            </div>
                        </a>
                        
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="">
                            <div class="wrap-content">
                                <div class="icon mb-3">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <h6>Desain Komunikasi Visual</h6>
                            </div>
                        </a>                       
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="">
                            <div class="wrap-content">
                                <div class="icon mb-3">
                                    
                                    <i class="fas fa-edit"></i>
                                </div>
                                <h6>Copywriting</h6>
                            </div>
                        </a>                        
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="">
                            <div class="wrap-content">
                                <div class="icon mb-3">
                                    <i class="fas fa-atom"></i>
                                </div>
                                <h6>Teknik Elektro</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Perpus -->
    <section class="perpus" id="perpus">
        <div class="container">
            <div class="head-content">
                <h1>Kumpulan Buku</h1>
            </div>
            
            <div class="list-buku">
                <div class="row">
                    <?php foreach($buku as $row):?>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="wrap-buku">
                            <div class="cover">
                                <img src="assets/img/cover-buku/2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="title">
                                <h6><?=$row->nama_buku?></h6>
                                <a href="<?= base_url("bukudetail/$row->id_buku") ?>" class="btn btn-primary btn-sm">Lihat Buku</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>