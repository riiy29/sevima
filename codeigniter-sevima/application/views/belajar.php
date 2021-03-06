

    <!-- Hero -->
    <section class="hero">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="content">
                        <div class="text-hero">
                            <h5>Pembelajaran <span>lengkap</span> E-Learning    
                        </div>
                        <div class="action-btn">
                            <a href="#belajar" class="btn btn-lg btn-secondary py-3 px-4">Cari Pembelajaran </a>
                            <a href="perpustakaan" class="btn btn-lg btn-primary py-3 px-5">Lihat Buku</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="page-banner">
                        <img src="assets/img/slider-home/slider-1.jpg" class="img-responsive " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


   <section class="pembelajaran" id="belajar">
        <div class="container">
            <div class="head-content">
                <h1>Video e-learning</h1>
            </div>

            <div class="subhead mb-6">
                <h4 class="mb-0">Rekayasa Perangkat Lunak</h4>
                <p>Berikut list vidio pembelajaran rekayasa perangkat lunak.</p>
            </div>

            <div class="list-video">
                <div class="row">
                    <?php foreach($pelajaran as $list):?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="wrap-list">
                            <div class="image">
                                <a href="<?= base_url("subbelajar/$list->id_pelajaran") ?>">
                                    <img src="https://parsinta.s3.ap-southeast-1.amazonaws.com/images/series/belajar-laravel-8-dari-awal-ign7z.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="<?= base_url("subbelajar/$list->id_pelajaran") ?>"> <?=$list->nama_pelajaran?></a>
                                <div class="info">
                                    <i class="fas fa-user-alt"></i>
                                    <span> <?=$list->nama_guru?></span>
                                    <i class="fas fa-calendar-alt ms-3"></i>
                                    <span><?=$list->diinput_tgl?></span>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
   </section>

