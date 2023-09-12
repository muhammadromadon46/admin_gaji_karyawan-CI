 
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/databaru/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/databaru/css/jquery-ui.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header"> 
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Edit Data Karyawan  </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <?php if($this->session->flashdata('edited')): ?>
    <div class="col-md-3">
      <div class="card bg-success">
        <div class="card-header">
          <h3 class="card-title">Data Berhasil Disimpan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         <?php echo $this->session->flashdata('edited'); ?>
       </div>
       <!-- /.card-body -->
     </div>
     <!-- /.card -->
   </div>

 <?php endif; ?>

 <?php if(validation_errors()): ?>
  <div class="col-md-3">
    <div class="card bg-danger">
      <div class="card-header">
        <h3 class="card-title">Eror</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
       <?php echo validation_errors(); ?>
     </div>
     <!-- /.card-body -->
   </div>
   <!-- /.card -->
 </div>


<?php endif; ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Data jabatan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

          <form action="<?php echo base_url('admin/edit_jabatan/'.$jabatan->id_jabatan); ?>" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">ID Jabatan</label>
                <input type="text" class="form-control" name="id_jabatan"  value="<?php echo $jabatan->id_jabatan; ?>" />
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Jabatan </label>
                <input type="text" class="form-control" name="jabatan"  value="<?php echo $jabatan->jabatan; ?>"/>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Gaji Pokok</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control"  name="gaji_pokok" id="gaji_pokok" placeholder="Enter Gaji Pokok" / >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Uang Makan</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control"  name="uang_makan" id="uang_makan" placeholder="Enter Uang Makan "/ >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Tunjangan Jabatan</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control"  name="tunjangan_jabatan" id="tunjangan_jabatan" placeholder="Enter Tunjangan Jabatan"/ >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Insentif</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control"  name="insentif" id="insentif" placeholder="Enter Insentif" / >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sewa Kendaraan</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control"  name="sewa_kendaraan" id="sewa_kendaraan" placeholder="Enter Sewa Kendaraan"/ >
                </div>
              </div>



              <div class="form-group">
                <label>Lembur</label>
                <input type="text" name="waktu_lembur" class="form-control" id="waktu_lembur" placeholder="Input Jam Lembur" >
              </div>

              <div class="form-group">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" name="gaji_lembur" class="form-control" id="gaji_lembur" >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">THR</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control"  name="thr" id="thr" placeholder="Enter THR" / >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Total Gaji</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="total_gaji" id="total_gaji" placeholder="Total Gaji Bersih" disabled>
                </div>
              </div>

              <br>

              <h5><b>Potongan-Potongan</b></h5>
              <br>

              <div class="form-group">
                <label for="exampleInputEmail1">BPJS</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="bpjs" id="bpjs"  placeholder="Enter BPJS">
                </div>
              </div>

              <div class="form-group">
                <label>Keterlambatan</label>
                <input type="text" name="waktu_terlambat" class="form-control" id="waktu_terlambat" placeholder="Input Keterlambatan" >
              </div>

              <div class="form-group">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" name="potongan_terlambat" class="form-control" id="potongan_terlambat"  >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Pinjaman</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="pinjaman" id="pinjaman" placeholder="Enter Pinjaman">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Potongan Pajak Penghasilan</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="pajak" id="pajak">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Total Potongan Gaji</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="total_potongan" id="total_potongan" placeholder="Total Potongan Gaji" >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Total Bersih Gaji Yang Diterima </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="gaji_keseluruhan" id="gaji_keseluruhan"  placeholder=" Total Gaji  yang diterima" disabled>
                </div>
              </div>






            </div>

            <div class="card-footer">
              <a  class="btn btn-primary" href="<?php echo base_url('admin/data_jabatan'); ?>">Kembali</a>
              <button type="submit" class="btn btn-primary" name="edited" value="edit data">Submit</button>
            </div>
          </form>

        </div>
        <script src="<?php echo base_url(); ?>assets/databaru/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/databaru/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/databaru/js/bootstrap.js"></script>
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js">       
        </script>

        <!-- Total Gaji  -->

        <script type="text/javascript">
          $("#gaji_pokok").keyup(function(){
            var a = parseFloat($("#gaji_pokok").val());
            var b = parseFloat($("#uang_makan").val());
            var c = parseFloat($("#tunjangan_jabatan").val());
            var d = parseFloat($("#insentif").val());
            var e = parseFloat($("#thr").val());
            var f = parseFloat($("#sewa_kendaraan").val());
            var g = parseFloat($("#gaji_lembur").val());
            var h = a+b+c+d+e+f+g;
            $("#total_gaji").val(h);
          });

          $("#uang_makan").keyup(function(){
            var a = parseFloat($("#gaji_pokok").val());
            var b = parseFloat($("#uang_makan").val());
            var c = parseFloat($("#tunjangan_jabatan").val());
            var d = parseFloat($("#insentif").val());
            var e = parseFloat($("#thr").val());
            var f = parseFloat($("#sewa_kendaraan").val());
            var g = parseFloat($("#gaji_lembur").val());
            var h = a+b+c+d+e+f+g;
            $("#total_gaji").val(h);
          });

          $("#insentif").keyup(function(){
            var a = parseFloat($("#gaji_pokok").val());
            var b = parseFloat($("#uang_makan").val());
            var c = parseFloat($("#tunjangan_jabatan").val());
            var d = parseFloat($("#insentif").val());
            var e = parseFloat($("#thr").val());
            var f = parseFloat($("#sewa_kendaraan").val());
            var g = parseFloat($("#gaji_lembur").val());
            var h = a+b+c+d+e+f+g;
            $("#total_gaji").val(h);
          });

          $("#tunjangan_jabatan").keyup(function(){
            var a = parseFloat($("#gaji_pokok").val());
            var b = parseFloat($("#uang_makan").val());
            var c = parseFloat($("#tunjangan_jabatan").val());
            var d = parseFloat($("#insentif").val());
            var e = parseFloat($("#thr").val());
            var f = parseFloat($("#sewa_kendaraan").val());
            var g = parseFloat($("#gaji_lembur").val());
            var h = a+b+c+d+e+f+g;
            $("#total_gaji").val(h);
          });

          $("#thr").keyup(function(){
            var a = parseFloat($("#gaji_pokok").val());
            var b = parseFloat($("#uang_makan").val());
            var c = parseFloat($("#tunjangan_jabatan").val());
            var d = parseFloat($("#insentif").val());
            var e = parseFloat($("#thr").val());
            var f = parseFloat($("#sewa_kendaraan").val());
            var g = parseFloat($("#gaji_lembur").val());
            var h = a+b+c+d+e+f+g;
            $("#total_gaji").val(h);
          });

          $("#sewa_kendaraan").keyup(function(){
           var a = parseFloat($("#gaji_pokok").val());
           var b = parseFloat($("#uang_makan").val());
           var c = parseFloat($("#tunjangan_jabatan").val());
           var d = parseFloat($("#insentif").val());
           var e = parseFloat($("#thr").val());
           var f = parseFloat($("#sewa_kendaraan").val());
           var g = parseFloat($("#gaji_lembur").val());
           var h = a+b+c+d+e+f+g;
           $("#total_gaji").val(h);
         });

          $("#gaji_lembur").keyup(function(){
            var a = parseFloat($("#gaji_pokok").val());
            var b = parseFloat($("#uang_makan").val());
            var c = parseFloat($("#tunjangan_jabatan").val());
            var d = parseFloat($("#insentif").val());
            var e = parseFloat($("#thr").val());
            var f = parseFloat($("#sewa_kendaraan").val());
            var g = parseFloat($("#gaji_lembur").val());
            var h = a+b+c+d+e+f+g;
            $("#total_gaji").val(h);
          });


        </script>

        <!-- Potongan -->

        <script type="text/javascript">

          $("#bpjs").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });

          $("#potongan_terlambat").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });

          $("#pinjaman").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });

          $("#pajak").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });


        </script>

        <!-- Gaji Keseluruhan -->

        <script type="text/javascript">

          $("#total_gaji").keyup(function(){
            var a = parseFloat($("#total_gaji").val());
            var b = parseFloat($("#total_potongan").val());
            var c = a-b;
            $("#gaji_keseluruhan").val(c);
          });

          $("#total_potongan").keyup(function(){
            var a = parseFloat($("#total_gaji").val());
            var b = parseFloat($("#total_potongan").val());
            var c = a-b;
            $("#gaji_keseluruhan").val(c);
          });

          

        </script>


        <!-- Pajak -->

        <script type="text/javascript">
          $("#gaji_pokok").keyup(function(){
            var a = parseFloat($("#gaji_pokok").val());
            
            var b = a;

            if (b >=5000000)
             console.log($("#pajak").val(b*5/100));
           else
             console.log($("#pajak").val(0));

         });
          
       </script>

       <script type="text/javascript">
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
      </script>




      <script src="<?php echo base_url(); ?>assets/databaru/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/databaru/js/jquery-ui.js"></script>
      <script src="<?php echo base_url(); ?>assets/databaru/js/bootstrap.js"></script>

      <!-- Lembur -->


      <script type="text/javascript">
        $(document).ready(function(){

          $('#waktu_lembur').autocomplete({
            source: "<?php echo site_url('admin/autocomplatelembur');?>",

            select: function (event, ui) {
              $('[name="waktu_lembur"]').val(ui.item.label); 
              $('[name="gaji_lembur"]').val(ui.item.gaji);


            }
          });

        });

      </script>

      <!-- Keterlambatan -->

      <script type="text/javascript">
        $(document).ready(function(){

          $('#waktu_terlambat').autocomplete({
            source: "<?php echo site_url('admin/keterlambatan');?>",

            select: function (event, ui) {
              $('[name="waktu_terlambat"]').val(ui.item.label); 
              $('[name="potongan_terlambat"]').val(ui.item.gaji);


            }
          });

        });

      </script>





<!---
<script>
    $(function(){
      $("#gaji_pokok").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

    $(function(){
      $("#uang_makan").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

    $(function(){
      $("#tunjangan_jabatan").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

    $(function(){
      $("#insentif").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

    $(function(){
      $("#sewa_kendaraan").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

    $(function(){
      $("#thr").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

    $(function(){
      $("#total_gaji").keyup(function(e){
        $(this).val(format($(this).val()));
      });
    });
    var format = function(num){
      var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
      if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
      }
      str = str.split("").reverse();
      for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ",") {
          output.push(str[j]);
          if(i%3 == 0 && j < (len - 1)) {
            output.push(",");
          }
          i++;
        }
      }
      formatted = output.reverse().join("");
      return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };





  </script> -->

            <!-- /.card -->