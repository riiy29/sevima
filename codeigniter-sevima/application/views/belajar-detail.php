<!-- Video Belajar -->
<section class="video-belajar ">
        <div class="container">
            <div class="iframe-ytb">
                <iframe  src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <h5><?=$video->nama_video?> </h5>
            <div class="info">
                <i class="fas fa-user-alt"></i>
                <span>Bu Ika Hermawan</span>
                <i class="fas fa-calendar-alt ms-3"></i>
                <span><?=$video->diinput_tgl?></span>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="<?=base_url("subbelajar/$video->id_pelajaran") ?>" class="btn btn-primary py-3 px-5 m-auto">Sudah ditonton, Kembali ke Module</a>
                </div>
            </div>
        </div>
    </section>

    
   <!-- <section class="pembelajaran mt-4" id="pembelajaran">
        <div class="container"> 
            <h5>Lanjut Materi</h5>
            <div class="list-video">
                <div class="row">
                </div>
            </div>
        </div>
   </section> -->

    <!-- <section class="saran">
        <div class="container">
            <div class="saran-wrap">
                <h5>Komentar untuk video - Mengenal Apa itu Routing</h5>
                <form action="" method="post">
                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Username Siswa</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="usernamesiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary py-2 px-5">Berikan Komentar</button>
                </form>
            </div>
        </div>
    </section> -->