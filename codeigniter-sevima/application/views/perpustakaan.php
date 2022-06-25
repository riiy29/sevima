<!-- Hero -->
    <section class="hero">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="content">
                        <div class="text-hero">
                            <h5>Perpustakaan E-Book <span>terbaik</span>   
                        </div>
                        <div class="action-btn">
                            <a href="#perpus" class="btn btn-lg btn-secondary py-3 px-4">Cari Buku</a>
                            <a href="belajar" class="btn btn-lg btn-primary py-3 px-5">Lihat Pembelajaran</a>
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