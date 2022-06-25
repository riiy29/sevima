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
                    <h4>Master Data Playlist</h4>

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
                            <th>Email</th>
                            <th>User Akses</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach($user as $row):?>
                          <tr id="<?=$row->id_user?>">
                            <td>
                             <?= $no++?>
                            </td>
                            <td><?=$row->nama?></td>
                            <td><?=$row->email?></td>
                            <td><?=$row->user_akses?></td>
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
                url: '/user/delete/'+id,
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