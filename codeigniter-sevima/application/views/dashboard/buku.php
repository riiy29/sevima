    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header ">
            <h1>Jurusan</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Master Data Playlist</h4>
                    <a href="" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#add-buku">+ Tambah Data</a>
                  </div>
                  <div class="card-body">
                    <div class=" ">
                      <table class="table table-striped display nowrap" style="width:100%" id="tb-admin_md">
                        <thead>
                          <tr>
                            <th class="text-center">
                             No
                            </th>
                            <th> Nama Buku</th>
                            <th>Deskripsi</th>
                            <th>File URL</th>
                            <th>Tanggal upload</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach($buku as $row):?>
                          <tr id="<?= $row->id_buku?>">
                            <td>
                             <?= $no++?>
                            </td>
                            <td><?=$row->nama_buku?></td>
                            <td><?=$row->desc_buku?></td>
                            <td><?=$row->file_buku?></td>
                            <td><?=$row->diinput_tgl?></td>
                            <td>
                                <button type="" class="btn btn-danger btn-sm" id="remove"> 
                                    <i class="fas fa-trash"></i>
                                </button>
                              
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>

     <!-- Modal form add -->
     <div class="modal fade" id="add-buku" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url().'buku/add'?>" method="post" enctype="multipart/form-data">
              <div class="card">
                  <div class="card-body">
                    <div class="form-group ">
                      <label for="inputEmail4">Nama Buku</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" name="nama">
                    </div>
                    <div class="form-group ">
                      <label for="inputEmail4">Deskripsi</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" name="deskripsi">
                    </div>
                    <div class="form-group ">
                      <div class="section-title">File PDF buku</div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="pdf_file">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="" class="btn btn-primary">Submit</button>
                  </div>
                  </div>
              </div>
            </form> 
        </div>
      </div>
    </div>
     
    <script src="<?= base_url('assets/dashboard/modules/jquery.min.js')?>"></script>

    <script>
    
    // AJAX DELETE
        $('#remove').click(function(){
        var id = $(this).parents("tr").attr("id");

        swal( {
            title: "Data akan dihapus",
            text: "Apakah anda yakin data ini dihapus ?", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((isConfirm) => {
            if (isConfirm) {
            $.ajax( {
                url: '/jurusan/delete/'+id,
                type: 'DELETE',
                error: function() {
                    alert(' Ada yang error ');
                },
                success: function(data) {
                    $("#"+id).remove();
                    swal("Berhasil dihapus!", "Data anda sudah terhapus.", "success");
                }
            });
            } else {
            swal("Batal", "Data anda tidak jadi dihapus", "error");
            }
        })
        });
    
    </script>