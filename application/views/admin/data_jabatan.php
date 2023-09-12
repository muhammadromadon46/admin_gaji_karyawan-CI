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
      
        
        <!-- /.row -->
        
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Karyawan </h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      
                      <th>Jabatan</th>
                      <th>Options</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>

                   <?php foreach ($jabatan as $kar) : ?>
                    
                    <tr data-widget="expandable-table" aria-expanded="false">
                      
                      <td><?php echo $kar->id_jabatan; ?> </td>

                  

                      

                      <td><?php echo $kar->jabatan; ?> </td>

                      <td>
                          <!--<a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/update_gaji/'.$kar->id_jabatan); ?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>-->
                          <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/edit_jabatan/'.$kar->id_jabatan); ?>" title="Edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/hapus_jabatan/'.$kar->id_jabatan); ?> "  onclick="return confirm('Are You really want to Delete ?');" title="Delete">
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