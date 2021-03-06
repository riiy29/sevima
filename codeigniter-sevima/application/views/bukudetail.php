
    <!-- Hero -->
    <section class="hero" style="margin-bottom:150px">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="container">
                        <div class="content content-detail" >
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-12 col-sm-12">
                                    <div class="cover-buku text-center" >
                                        <img src="<?=base_url('assets/img/cover-buku/2.jpg')?>" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12">
                                    <div class="text-hero mb-0 pb-0">
                                        <h5><?=$buku_detail->nama_buku?> </h5>
                                    </div>
                                    <div class="info-buku">
                                        <p><?=$buku_detail->desc_buku?></p>
                                        <p>Link Buku : <a href="<?=$buku_detail->file_buku?>" style="text-decoration: underline;">Klik Untuk Donwload Buku</a></p>
                                        <p>Minta Buku di WhatsApp :</p>
            
                                        <form class="row g-3" action="<?=base_url('buku/autosendmsg')?>" method="post">
                                            <div class="col-auto">
                                                <input type="hidden" value="<?=$buku_detail->file_buku?>" name="linkpdf">
                                              <input type="text" class="form-control" name="nomor" placeholder="cth: +62888123123">
                                              <span>*Nomor yang valid dan diawali dengan +62</span>
                                            </div>
                                            <div class="col-auto">
                                              <button type="submit" class="btn btn-primary mb-3">Minta Buku</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>