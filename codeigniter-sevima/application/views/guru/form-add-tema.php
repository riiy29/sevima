<section class="absen-page">
        <div class="container">
            <div class="head-content pt-5">
                <h1>Tambah Tema Pembelajaran</h1>
            </div>
            <div class=" px-5">
                <div class="card-body pt-4">
                    <form action="<?= base_url().'pelajaran/add'?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-form-label">Nama Pembelajaran</label>
                            <div class="">
                              <input type="text" class="form-control" id="inputEmail3" name="nama" >
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="inputEmail3" class="col-form-label">Modul Pembelajaran</label>
                            <div >
                         
                                <input class="form-control" type="file" name="pdf_file" id="formFile">
                                <span class="text-danger text-sm">*file wajib pdf</span>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi </label>
                            <div>
                                <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                         
                        </div>
                        <div class="form-group">
                        <select name="guru" class="form-select" aria-label="Default select example">
                            <option selected >Open this select menu</option>
                            
                            <?php foreach($guru as $rows):?>
                                <option value="<?=$rows->id_guru?>?" > <?=$rows->nama_guru?></option>
                            <?php endforeach;?>
                        </select>
                        </div>
                        <div class="form-group row mt-5"> 
                          <div class="button-absen text-center">
                            <button type="submit" class="btn btn-primary w-50 py-3 px-4 mb-5">Buat Tema</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>