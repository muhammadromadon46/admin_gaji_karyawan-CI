<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PT BUANA SENTOSA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">PT BUANA SENTOSA</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Karyawan </h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Foto Karyawan</th>
                      <th>Nama Karyawan</th>
                      <th>Jabatan</th>
                      <th>Gaji Pokok</th>
                      <th>Uang Makan</th>
                      <th>Sewa Kendaraan</th>
                      <th>Tunjangan Jabatan</th>
                      <th>Lembur</th>
                      <th>Insentif/Bonus</th>
                      <th>Thr</th>
                      <th>Total Gaji Bersih</th>
                      <th>Potongan BPJS</th>
                      <th>Keterlambatan</th>
                      <th>Potongan Pajak Penghasilan</th>
                      <th>Total Potongan</th>
                      <th>Total Gaji Diterima</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>

                   <?php foreach ($jabatan as $kar) : ?>

                    <tr data-widget="expandable-table" aria-expanded="false">
                      
                      <td><?php echo $kar->id; ?></td>

                      <td> 
                        <center>
                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-500 mr-3 img-circle" >
                        </center>
                      </td>

                      <td><?php echo $kar->nama; ?></td>
 
                      <td><?php echo $kar->jabatan; ?></td>
                      <td><?php echo $kar->gaji_pokok; ?></td>
                      <td><?php echo $kar->uang_makan; ?></td>
                      <td><?php echo $kar->sewa_kendaraan; ?></td>
                      <td><?php echo $kar->tunjangan_jabatan; ?></td>
                      <td><?php echo $kar->gaji_lembur; ?></td>
                      <td><?php echo $kar->insentif; ?></td>
                      <td><?php echo $kar->thr; ?></td>
                      <td><?php echo $kar->total_gaji; ?></td>
                      <td><?php echo $kar->bpjs; ?></td>
                      <td><?php echo $kar->potongan_terlambat; ?></td>
                      <td><?php echo $kar->pajak; ?></td>
                      <td><?php echo $kar->total_potongan; ?></td>
                      <td><?php echo $kar->gaji_keseluruhan; ?></td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/detail/'. $kar->id); ?>">
                          <i class="fas fa-folder">
                          </i>
                          View
                        </a>
                        <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/edit_gaji/'.$kar->id); ?>" title="Edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/hapus_gaji/'.$kar->id); ?> "  onclick="return confirm('Are You really want to Delete ?');" title="Delete">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    
                    </tr>
                    
                    <?php endforeach; ?>
                   
                  
                </tbody>
                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


  


  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy",  "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>