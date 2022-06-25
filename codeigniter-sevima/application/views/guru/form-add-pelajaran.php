<section class="absen-page">
        <div class="container">
            <div class="head-content pt-5">
                <h1>Tambah Tema Pembelajaran</h1>
            </div>
            <div class=" px-5">
                <div class="card-body pt-4">
                    <form action="<?= base_url().'video/add'?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-form-label">Pilih Pembelajaran</label>
                            <div class="">
                                <select name="pelajaran" id="inputState" class="form-control">
                                    <option  selected>Choose...</option>
                                    <?php foreach($video as $rows):?>
                                        <option  value="<?=$rows->id_pelajaran?>"><?=$rows->nama_pelajaran?></option>
                                    <?php endforeach;?>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-form-label">Nama sub pelajaran</label>
                            <div class="">
                              <input type="text" class="form-control" id="inputEmail3" name="nama" >
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-form-label">Link video youtube</label>
                            <div class="">
                              <input type="text" name="ytb_url" class="form-control" id="inputEmail3" value="" placeholder="" >
                            </div>
                            <span class="text-danger text-sm">*Mohon Masukkan Link Youtube yang valid</span>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi </label>
                            <div>
                                <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                         
                        </div>
                        <div class="form-group row mt-5"> 
                          <div class="button-absen text-center">
                            <button type="submit" class="btn btn-primary w-50 py-3 px-4 mb-5">Upload Pelajaran</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>