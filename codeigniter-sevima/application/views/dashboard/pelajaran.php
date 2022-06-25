    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header ">
            <h1>Guru</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Master Data Pelajaran</h4>
                    <a href="" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#add-pelajaran">+ Tambah Data</a>
                  </div>
                  <div class="card-body">
                    <div class=" ">
                      <table class="table table-striped display nowrap" style="width:100%" id="tb-admin_md">
                        <thead>
                          <tr>
                            <th class="text-center">
                             No
                            </th>
                            <th> Nama </th>
                            <th>Guru Pengajar</th>
                            <th>Deskripsi</th>
                            <th>Modul</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach($pelajaran as $row):?>
                          <tr id="<?=$row->id_pelajaran?>">
                            <td>
                             <?= $no++?>
                            </td>
                            <td><?=$row->nama_pelajaran?></td>
                            <td><?=$row->nama_guru?></td>
                            <td><?=$row->desc_pelajaran?></td>
                            <td><?=$row->modul_url?></td>
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
     
    <script src="<?= base_url('assets/dashboard/modules/jquery.min.js')?>"></script>

    <!-- Modal form add -->
    <div class="modal fade" id="add-pelajaran" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url().'pelajaran/add'?>" method="post" enctype="multipart/form-data">
              <div class="card">
                  <div class="card-body">
                    <div class="form-group ">
                      <label for="inputEmail4">Nama Pelajaran</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" name="nama">
                    </div>
                    <div class="form-group ">
                      <label for="inputEmail4">Deskripsi</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" name="deskripsi">
                    </div>
                    <?php foreach($guru as $rows):?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input"  name="guru" type="radio" id="inlineradio1" value="<?=$rows->id_guru?>">
                        <label class="form-check-label" for="inlineradio1"><?=$rows->nama_guru?></label>
                    </div>
                    <?php endforeach;?>
                    <div class="form-group ">
                      <div class="section-title">File PDF Modul</div>
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
                url: '/pelajaran/delete/'+id,
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