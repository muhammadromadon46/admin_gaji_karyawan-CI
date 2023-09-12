<!-- Content Wrapper. Contains page content --> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slip Gaji</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body ">
          <center>
          	<h1><b>PT. Buana Sentosa Nusantara</b></h1>
          	<h5>JL. H. Najamudin LR. Wijaya No. 138 Kel. SukaMaju Kec. Sako Kenten palembang	</h5>
          </center>

         </br>
</br>
<div class="col-sm-6">
  <?php 

  function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
  return $hasil_rupiah;
}
?>


<table  class="table table-borderless">
<tbody>
  <tr>
  <td></td>
</tr>
<tr>
  <td>Nama Karyawan</td>
  <td>:</td>
  <td><?php echo $detail->nama ?></td>
</tr>
<tr>
  <td>Jabatan </td>
  <td>:</td>
  <td><?php echo $detail->jabatan ?></td>
</tr>
<tr>
  <td>Gaji Pokok </td>
  <td>:</td>
  <td><?php echo rupiah($detail->gaji_pokok) ?></td>
</tr>
<tr>
  <td>Uang Makan</td>
  <td>:</td>
  <td><?php echo rupiah($detail->uang_makan)?></td>
</tr>
<tr>
  <td>Sewa Motor</td>
  <td>:</td>
  <td><?php echo rupiah($detail->sewa_kendaraan) ?></td>
</tr>
<tr>
  <td>Tunjangan Jabatan </td>
  <td>:</td>
  <td><?php echo rupiah($detail->tunjangan_jabatan) ?></td>
</tr>
<tr>
  <td>THR </td>
  <td>:</td>
  <td> <?php echo rupiah($detail->thr) ?></td>
</tr>
<tr>
  <td><b>Total Gaji</b></td>
  <td><b>:</b></td>
  <td><b><?php echo rupiah($detail->total_gaji) ?></b></td>
</tr>
<tr>
  <td></td>
</tr>

<tr>
  <th>Potongan-Potongan</th>
</tr>

<tr>
  <td>BPJS</td>
  <td>:</td>
  <td><?php echo rupiah($detail->bpjs) ?></td>
</tr>
<tr>
  <td>Keterlambatan </td>
  <td>:</td>
  <td>Rp. <?php echo $detail->potongan_terlambat ?></td>
</tr>
<tr>
  <td>Pinjaman Karyawan </td>
  <td>:</td>
  <td><?php echo rupiah($detail->pinjaman) ?></td>
</tr>
<tr>
  <td>Potongan Pajak Penghasilan</td>
  <td>:</td>
  <td><?php echo rupiah($detail->pajak) ?></td>
</tr>
<tr>
  <td><b>Total Potongan</b></td>
  <td><b>:</b></td>
  <td><b>Rp. <?php echo $detail->total_potongan ?></b></td>
</tr>
<tr>
  <td><b>Total Gaji yang Diterima Karyawan Sebesar</b></td>
  <td><b>:</b></td>
  <td><b><?php echo rupiah($detail->gaji_keseluruhan) ?></b></td>
</tr>
<tr>
  <td></td>
</tr>


<tr>
  <td>Palembang, <span id="tanggalwaktu"></span></td>
</tr>
<tr>
  <td>Diterima Oleh,</td>
</tr>
<tr>
  <td></td>
</tr>
<tr>
  <td></td>
</tr>
<tr>
  <td><?php echo $detail->nama ?></td>
</tr>





</tbody>
</table> 
</div>






            
            
                  
                  <a class="btn btn-primary float-right" href="<?php echo base_url('admin/print_karyawan/'.$detail->id); ?>">
                              <i class="fas fa-print">
                              </i>
                              Cetak
                          </a>
                           
                   
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>

  <script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>