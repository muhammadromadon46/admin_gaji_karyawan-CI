<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Admin extends CI_Controller {
 
 public function __construct(){
		parent::__construct();
		$this->load->model('m_model');
	}
	
	
   public function load_view($view,$data = "")
    {
    	$this->load->view('admin/header');    
    	$this->load->view('admin/sidebar');    
    	$this->load->view($view,$data);    
    	$this->load->view('admin/footer');   
    }

    function index() {
    	
      $data['karyawan'] = $this->m_model->total_karyawan();
      $data['jabatan'] = $this->m_model->total_jabatan();
      $data['user'] = $this->m_model->total_user();
      $data['gaji'] = $this->m_model->gaji_ttl();
    	$this->load_view('admin/content',$data);
    }
	
	public function data_karyawan()
   	{
   		$data['karyawan']= $this->m_model->get_data();
      $data['jabatan']= $this->m_model->inerjoin();
   		$this->load_view('admin/data_karyawan',$data);

   	}

    public function tam()
    {
      $data['karyawan']= $this->m_model->get_data();
      $data['jabatan']= $this->m_model->inerjoin();
      $this->load_view('admin/tam',$data);

    }

    

    public function tambah_karyawan()
    {
     $this->form_validation->set_rules('id', 'Nomor Karyawan', 'required|numeric|is_natural_no_zero|trim|is_unique[tb_karyawan.id]');
      $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required|trim|alpha_numeric_spaces|is_unique[tb_karyawan.nama]');
      
      $data = array(
          'id' => $this->input->post('id'),
          'nama' => $this->input->post('nama'),
          'id_jabatan' => $this->input->post('id_jabatan'),
          'id_gaji' => $this->input->post('id_gaji')
        );
      if($this->form_validation->run() == false){
        $data['jabatan'] = $this->m_model->get_jabatan();
        $this->load_view('admin/tambah_karyawan',$data);
      }else{
        if($this->m_model->input_data($data)){
          $this->session->set_flashdata('added','Tambah Karyawan added Successfully');
          $data['jabatan'] = $this->m_model->get_jabatan();
          $this->load_view('admin/tambah_karyawan',$data);
        }
      }
      
    }

    public function edit_data()
   {
     $karyawan_id = $this->uri->segment(3);
     $this->form_validation->set_rules('id', 'Nomor ID', 'required|numeric|is_natural_no_zero');
      $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required|trim|alpha_numeric_spaces');

      if($this->form_validation->run() == false){
        $data['karyawan'] = $this->m_model->getkaryawanwhere($karyawan_id);
        $data['jabatan'] = $this->m_model->get_jabatan();
        $this->load_view('admin/edit_data',$data);
        }else{
      
      $data = array(
          'id' => $this->input->post('id'),
          'nama' => $this->input->post('nama'),
          'id_jabatan' => $this->input->post('id_jabatan')
        );
      
        if($this->m_model->editdata($karyawan_id,$data)){
          $this->session->set_flashdata('edited',' Karyawan Edited Successfully');
         $data['karyawan'] = $this->m_model->getkaryawanwhere($karyawan_id);
         $data['jabatan'] = $this->m_model->get_jabatan();
          $this->load_view('admin/edit_data',$data);
        }
      }
      
    }
    

    public function hapus_karyawan($id)
    {
      # code...
      if ($this->m_model->hapus_data($id)) {
        $this->session->set_flashdata('deleted','Data Karyawan deleted Successfully');
        redirect('admin/data_karyawan');
      }
    }
    
    
   	public function gaji_karyawan()
   	{
   		$data['karyawan']= $this->m_model->get_data();
      $data['jabatan']= $this->m_model->inerjoin();
   		$this->load_view('admin/gaji_karyawan',$data);

   	}



    public function data_jabatan()
    {
      
      $data['jabatan']= $this->m_model->get_jabatan();
      $this->load_view('admin/data_jabatan',$data);

    }


     public function tambah_jabatan()
    {
     $this->form_validation->set_rules('id_jabatan', 'ID Jabatan', 'required|numeric|is_natural_no_zero|trim|is_unique[tb_jabatan.id_jabatan]');
      $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim|alpha_numeric_spaces|is_unique[tb_jabatan.jabatan]');
      
      $data = array(
          'id_jabatan' => $this->input->post('id_jabatan'),
          'jabatan' => $this->input->post('jabatan')
          
        );
      if($this->form_validation->run() == false){
        $data['jabatan'] = $this->m_model->get_jabatan();
        $this->load_view('admin/tambah_jabatan',$data);
      }else{
        if($this->m_model->input_jabatan($data)){
          $this->session->set_flashdata('added','Tambah Karyawan added Successfully');
          $data['jabatan'] = $this->m_model->get_jabatan();
          $this->load_view('admin/tambah_jabatan',$data);
        }
      }
      
    }



      public function gaji_jabatan()
    {
      $data['karyawan']= $this->m_model->get_data();
      $data['jabatan']= $this->m_model->get_jabatan();
      $this->load_view('admin/gaji_jabatan',$data);

    }


      public function hapus_jabatan($id_jabatan)
    {
      # code...
      if ($this->m_model->hapus_jabatan($id_jabatan)) {
        $this->session->set_flashdata('deleted','Data Jabatan deleted Successfully');
        redirect('admin/data_jabatan');
      }
    }

    public function edit_jabatan()
   {
     $jabatan_id = $this->uri->segment(3);
     $this->form_validation->set_rules('id_jabatan', ' ID Jabatan', 'required|numeric|is_natural_no_zero');
      $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim|alpha_numeric_spaces');

      if($this->form_validation->run() == false){
       
        $data['jabatan'] = $this->m_model->getjabatanwhere($jabatan_id);
        
        $this->load_view('admin/edit_jabatan',$data);
        }else{
      
      $data = array(
          'id_jabatan' => $this->input->post('id_jabatan'),
          'jabatan' => $this->input->post('jabatan'),
          'gaji_pokok' => $this->input->post('gaji_pokok'),
          'uang_makan'=> $this->input->post('uang_makan'),
          'tunjangan_jabatan' => $this->input->post('tunjangan_jabatan'),
          'insentif'=> $this->input->post('insentif'),
          'thr' => $this->input->post('thr'),
          'sewa_kendaraan'=> $this->input->post('sewa_kendaraan'),
          'total_gaji'=> $this->input->post('total_gaji'),
          'bpjs' => $this->input->post('bpjs'),
          'pajak'=> $this->input->post('pajak')
          

        );
      
        if($this->m_model->editjabatan($jabatan_id,$data)){
          $this->session->set_flashdata('edited',' Jabatan Edited Successfully');
          
         $data['jabatan'] = $this->m_model->getjabatanwhere($jabatan_id);

          $this->load_view('admin/edit_jabatan',$data);
        }
      }
      
    }

     public function input_gaji()
   {
     $this->form_validation->set_rules('id', 'Nomor Karyawan', 'required|numeric|is_natural_no_zero|trim|is_unique[tb_karyawan.id]');
      $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required|trim|alpha_numeric_spaces|is_unique[tb_karyawan.nama]');
      
      $data = array(
          'id' => $this->input->post('id'),
          'nama' => $this->input->post('nama'),
          'id_jabatan' => $this->input->post('id_jabatan'),
          'id_gaji' => $this->input->post('id_gaji')
        );
      if($this->form_validation->run() == false){
        $data['jabatan'] = $this->m_model->get_jabatan();
        $data['karyawan']= $this->m_model->inerjoin();
        $this->load_view('admin/input_gaji',$data);
      }else{
        if($this->m_model->input_data($data)){
          $this->session->set_flashdata('added','Tambah Karyawan added Successfully');
          $data['jabatan'] = $this->m_model->get_jabatan();
          $data['karyawan']= $this->m_model->inerjoin();
          $this->load_view('admin/input_gaji',$data);
        }
      }
      
    }

     public function update_gaji()
    {
      
      $this->form_validation->set_rules('id_gaji', 'Nomor ID Gaji Sudah Ada Bos!!!', 'required|numeric|is_natural_no_zero|trim|is_unique[tb_gaji.id_gaji]');
       $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('gaji_lembur', 'Lembur', 'required');
        $this->form_validation->set_rules('potongan_terlambat', 'keterlambatan', 'required');
        $this->form_validation->set_rules('pinjaman', 'Pinjaman', 'required');
        $this->form_validation->set_rules('total_potongan', 'Total Potongan', 'required');
        $this->form_validation->set_rules('gaji_keseluruhan', 'Total Bersih Gaji Yang Diterima', 'required');
      
      $data = array(
          'id_gaji' => $this->input->post('id_gaji'),
          'gaji_lembur' => $this->input->post('gaji_lembur'),
          'potongan_terlambat' => $this->input->post('potongan_terlambat'),
          'pinjaman' => $this->input->post('pinjaman'),
          'total_potongan' => $this->input->post('total_potongan'),
          'gaji_keseluruhan' => $this->input->post('gaji_keseluruhan'),
          'tanggal' => $this->input->post('tanggal')
          
        );
      if($this->form_validation->run() == false){
        $data['karyawan'] = $this->m_model->get_karyawan();
        $this->load_view('admin/update_gaji',$data);
      }else{
        if($this->m_model->input_gaji($data)){
          $this->session->set_flashdata('added','Tambah Karyawan added Successfully');
          $data['karyawan'] = $this->m_model->get_karyawan();
          $this->load_view('admin/update_gaji',$data);
        }
      }
   
    }

    public function edit_gaji()
   {
     $gaji_id = $this->uri->segment(3);
     
     $inner_id = $this->uri->segment(3);

     $this->form_validation->set_rules('id_gaji', 'Nomor ID Gaji', 'required');
      

      if($this->form_validation->run() == false){
        $data['gaji'] = $this->m_model->getgajiwhere($gaji_id);
      
       $data['inner'] = $this->m_model->getinnerwhere($inner_id);
        
        $this->load_view('admin/edit_gaji',$data);
        }else{
      
      $data = array(
          'id_gaji' => $this->input->post('id_gaji'),
          'gaji_lembur' => $this->input->post('gaji_lembur'),
          'potongan_terlambat' => $this->input->post('potongan_terlambat'),
          'pinjaman' => $this->input->post('pinjaman'),
          'total_potongan' => $this->input->post('total_potongan'),
          'gaji_keseluruhan' => $this->input->post('gaji_keseluruhan')
        );
      
        if($this->m_model->editgaji($gaji_id,$data)){
          $this->session->set_flashdata('edited',' Gaji Karyawan Edited Successfully');
         $data['gaji'] = $this->m_model->getgajiwhere($gaji_id);
          
            $data['inner'] = $this->m_model->getinnerwhere($inner_id);
         
          $this->load_view('admin/edit_gaji',$data);
        }
      }
      
    }

    public function hapus_gaji($id_gaji)
    {
      # code...
      if ($this->m_model->hapus_gaji($id_gaji)) {
        $this->session->set_flashdata('deleted','Data Gaji Karyawan  deleted Successfully');
        redirect('admin/gaji_karyawan');
      }
    }

    function get_combobox()
    {
        $nama =$this->input->post('nama');
        $data=$this->m_model->combo_box($nama);
        echo json_encode($data);
    }


    public function update_gaji12()
   {
     $karyawan_id = $this->uri->segment(3);
     $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required|trim|alpha_numeric_spaces');

      if($this->form_validation->run() == false){
        $data['karyawan'] = $this->m_model->getkaryawanwhere($karyawan_id);
        $data['jabatan'] = $this->m_model->get_jabatan();
        $this->load_view('admin/update_gaji',$data);
        }else{
      
      $data = array(
          'id' => $this->input->post('id'),
          'nama' => $this->input->post('nama'),
          'id_jabatan' => $this->input->post('id_jabatan'),
          'id_lembur' => $this->input->post('id_lembur'),
          'id_keterlambatan' => $this->input->post('id_keterlambatan'),
          'pinjaman' => $this->input->post('pinjaman'),
          'total_potongan' => $this->input->post('total_potongan'),
          'gaji_keseluruhan' => $this->input->post('gaji_keseluruhan')
        );
      
        if($this->m_model->editdata($karyawan_id,$data)){
          $this->session->set_flashdata('edited',' Karyawan Edited Successfully');
         $data['karyawan'] = $this->m_model->getkaryawanwhere($karyawan_id);
         $data['jabatan'] = $this->m_model->get_jabatan();
          $this->load_view('admin/update_gaji',$data);
        }
      }
      
    }
    


    public function autocomplate(){
        if (isset($_GET['term'])) {
        $result = $this->m_model->search_blog($_GET['term']);
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label'         => $row->jabatan,
                    'gaji'   => $row->gaji_pokok,
                    'uang_makan'   => $row->uang_makan,
                    'tunjangan_jabatan'   => $row->tunjangan_jabatan,
                    'insentif'   => $row->insentif,
                    'thr'   => $row->thr,
                    'sewa_kendaraan'   => $row->sewa_kendaraan,
                    'total_gaji'   => $row->total_gaji,
                    'bpjs'   => $row->bpjs,
                    'pajak'   => $row->pajak,
             );
                echo json_encode($arr_result);
        }
    }
}
 public function autocomplateid(){
        if (isset($_GET['term'])) {
        $result = $this->m_model->auto_idkaryawan($_GET['term']);
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label'         => $row->id,
                    'nama'   => $row->nama,
                    
             );
                echo json_encode($arr_result);
        }
    }
}

 public function autocomplatekaryawan(){
        if (isset($_GET['term'])) {
        $result = $this->m_model->auto_karyawan($_GET['term']);
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label'         => $row->nama,
                    'jabatan'   => $row->jabatan,
                    'gaji_pokok'   => $row->gaji_pokok,
                    'uang_makan'   => $row->uang_makan,
                    'tunjangan_jabatan'   => $row->tunjangan_jabatan,
                    'insentif'   => $row->insentif,
                    'thr'   => $row->thr,
                    'sewa_kendaraan'   => $row->sewa_kendaraan,
                    'total_gaji'   => $row->total_gaji,
                    'bpjs'   => $row->bpjs,
                    'pajak'   => $row->pajak,
                    
             );
                echo json_encode($arr_result);
        }
    }
}

 public function autocomplatelembur(){
        if (isset($_GET['term'])) {
        $result = $this->m_model->search_bloglembur($_GET['term']);
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label'         => $row->waktu_lembur,
                    'gaji'   => $row->gaji_lembur,
                    
             );
                echo json_encode($arr_result);
        }
    }
}



 public function keterlambatan(){
        if (isset($_GET['term'])) {
        $result = $this->m_model->terlambat($_GET['term']);
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label'         => $row->waktu_terlambat,
                    'gaji'   => $row->potongan_terlambat,
                    
             );
                echo json_encode($arr_result);
        }
    }
}

    public function update_gaji1()
     {
     $this->form_validation->set_rules('id_gaji', 'Nomor ID', 'required|numeric|is_natural_no_zero|trim|is_unique[tb_karyawan.id]');
      $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required|trim|alpha_numeric_spaces|is_unique[tb_karyawan.nama]');
      
      $data = array(
          'id_gaji' => $this->input->post('id_gaji'),
          'gaji_pokok' => $this->input->post('gaji_pokok'),
          'uang_makan' => $this->input->post('uang_makan'),
          'sewa_kendaraan' => $this->input->post('sewa_kendaraan'),
          'tunjangan_jabatan' => $this->input->post('tunjangan_jabatan'),
          'lembur' => $this->input->post('lembur'),
          'insentif' => $this->input->post('insentif'),
          'thr' => $this->input->post('thr'),
          'total_gaji' => $this->input->post('total_gaji'),
          'bpjs' => $this->input->post('bpjs'),
          'keterlambatan' => $this->input->post('keterlambatan'),
          'pinjaman' => $this->input->post('pinjaman'),
          'pajak' => $this->input->post('pajak'),
          'total_bersih' => $this->input->post('total_bersih'),
          'tanggal' => $this->input->post('tanggal')
        );
      if($this->form_validation->run() == false){
        $data['jabatan'] = $this->m_model->get_jabatan();
        $this->load_view('admin/update_gaji',$data);
      }else{
        if($this->m_model->input_data($data)){
          $this->session->set_flashdata('added','Tambah Karyawan added Successfully');
          $data['jabatan'] = $this->m_model->get_jabatan();
          $this->load_view('admin/update_gaji',$data);
        }
      }
      
    }


    public function detail($id)
    {
      
      $this->load->model('m_model');
      $detail= $this->m_model->detail_data($id);
      $data['detail']= $detail;
     
      $this->load_view('admin/detail',$data);

    }

     public function print_karyawan($id)
    {
     $id = $this->uri->segment(3);
      $this->load->model('m_model');
      $detail= $this->m_model->detail_data($id);
      $data['detail']= $detail;
      $data['karyawan']= $this->m_model->get_data();
      $data['jabatan']= $this->m_model->detail_jabatan($id);
      $data['gaji']= $this->m_model->detail_gaji($id);
      $this->load->view('admin/print_karyawan',$data);
    

    }

     public function tambah_user()
    {
     $this->form_validation->set_rules('username', 'Username', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      
      $data = array(
          'username' => $this->input->post('username'),
          'password' => md5($this->input->post('password'))
        );
      if($this->form_validation->run() == false){
        
        $this->load_view('admin/tambah_user',$data);
      }else{
        if($this->m_model->input_user($data)){
          $this->session->set_flashdata('added','Tambah User added Successfully');
          
          $this->load_view('admin/tambah_user',$data);
        }
      }
      
    }

    public function data_user()
    {
      $data['user']= $this->m_model->get_user();
      $this->load_view('admin/data_user',$data);

    }
 

    public function login()
    {
      if($this->session->userdata('logged_in') == true){
          redirect('admin');
        }
      $this->form_validation->set_rules('username', 'User Name', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/login');
      } else {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        if($this->m_model->login($username,$password) == 1){
          //success
          $user_id = $this->m_model->getuserid($username)->id;
          $userdata = array(
                'username'  => $username,
                'user_id'     => $user_id,
                'logged_in' => TRUE
        );
        $this->session->set_userdata($userdata);
          redirect('admin/');
        }else{
          //error
          $this->session->set_flashdata('error', 'Error in Username or Password');
          $this->load->view('admin/login');
        }

      }
      
    }

    public function register()
    {
     
      $this->load->view('admin/register');
    

    }

     public function logout()
    {
      $this->session->sess_destroy();
      redirect('admin/login');
    }


     public function v_pdf()
    {
      $this->load->library('pdf');
        $html = $this->load->view('v_pdf', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }



}
