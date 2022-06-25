<section class="absen-page">
        <div class="container">
            <div class="head-content pt-5">
                <h1>Absen</h1>
            </div>
            <div class="card px-5">
                <div class="card-body pt-4">
                    <form method="POST" action="<?= base_url().'absen/add'?>">
                    <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-form-label">Nama Siswa</label>
                            <div class="">
                              <select id="inputState"  name="nama" class="form-control">
                                  <option selected>Pilih</option>
                                  <?php foreach($listsiswa as $row):?>
                                    <option value="<?=$row->id_user?>"> <?=$row->nama?></option>
                                  <?php endforeach;?>
                              </select> 
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-form-label">Keterangan</label>
                            <div class="">
                              <select id="inputState" name="ket" class="form-control">
                                  <option selected>Choose...</option>
                                  <option value="Masuk"> Masuk</option>
                                  <option value="Izin"> Izin</option>
                                  <option value="Sakit"> Sakit</option>
                              </select> 
                            </div>
                        </div>
                       
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-form-label">Mata Pelajaran</label>
                            <div class="">
                                <select id="inputState" class="form-control" name="bidang">
                                    <option selected>Choose...</option>
                                    <?php foreach($listbidang as $rows):?>
                                    <option value="<?=$rows->id_jurusan?>"> <?=$rows->nama_jurusan?></option>
                                    <?php endforeach;?>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group row mt-5"> 
                          <div class="button-absen text-center">
                            <button type="submit" class="btn btn-primary w-50 mb-5">Absen</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>