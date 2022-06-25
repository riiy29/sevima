    <!-- Hero -->
    <section class="hero">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="content sub-page-content">
                        <div class="text-hero pb-0">
                            <h5><?=$subbelajar->nama_pelajaran?> </h5>
                            <h6><?=$subbelajar->desc_pelajaran?></h6>  
                        </div>
                        <div class="info">
                          
                            <i class="fas fa-calendar-alt"></i>
                            <span><?=$subbelajar->diinput_tgl?></span>
                            <i class="fas fa-film ms-3"></i>
                            <span>6 Episode </span>
                        </div>
                        <div class="action-btn mt-5 pt-2">
                            <a href="#pembelajaran" class="btn btn-lg btn-secondary py-3 px-4">Mulai Pembelajaran </a>
                            <a href="<?=$subbelajar->modul_url?>" class="btn btn-lg btn-primary py-3 px-5">Download Modul</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="page-banner">
                        <img src="<?=base_url('assets/img/banner-bg/banner-1.avif')?>" class="img-responsive " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pembelajaran mt-5 pt-5" id="pembelajaran">
        <div class="container"> 
            <div class="list-video">
                <div class="row">
                    <?php $no=1;foreach($listvideo as $loop):?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="wrap-list">
                            <div class="image">
                                <a href='<?= base_url("belajardetail/$subbelajar->id_pelajaran/$loop->id_video") ?>'>
                                    <img src="https://parsinta.s3.ap-southeast-1.amazonaws.com/images/series/belajar-laravel-8-dari-awal-ign7z.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="<?= base_url("belajardetail/$loop->id_video") ?>"><?=$no++?>. <?=$loop->nama_video?></a>
                                <div class="info">
                                    <i class="fas fa-user-alt"></i>
                                    <span>Bu Ika Hermawan</span>
                                    <i class="fas fa-calendar-alt ms-3"></i>
                                    <span><?=$loop->diinput_tgl?></span>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>