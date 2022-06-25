<section class="mengajar">
        <div class="container">
            <div class="head-content pt-5">
                <h1>Pak Muhammad Buchori, <br> Mau Melakukan apa nih?</h1>
            </div>
            <div class="login-act">
                <div class="row">
                    <div class="col-lg-6 wrap">
                        <a href="addtemaguru" target="_blank">
                            <div class="button-teaser">
                                <h3>Membuat Tema Pembelajaran</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="addpelajaran" target="_blank">
                            <div class="button-teaser">
                                <h3>Melanjutkan Mengajar</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="head-content pt-5">
                <h3>Tema Pelajaran yang sudah dibuat</h3>
            </div>
            <div class="table-elearning">
                <table id="elearning" class="table-responsive table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Pembelajaran</th>
                            <th>Modul  </th>  
                            <th>Deskripsi</th>
                            <th>Tgl Upload</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pelajaran as $row):?>
                        <tr>
                            <td><?=$row->nama_pelajaran?></td>
                            <td><?=$row->modul_url?></td>
                            <td><?=$row->desc_pelajaran?></td>
                           <td><?=$row->diinput_tgl?></td>
                         
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    
                </table>
              
            </div>
        </div>
    </section>