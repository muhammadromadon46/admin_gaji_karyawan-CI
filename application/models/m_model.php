<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_model extends CI_Model {
 
	public function get_data()
	{
		return $this->db->get('tb_karyawan')->result_array();

	} 
	public function get_karyawan()
	{
		$query = $this->db->get('tb_karyawan');
		return $query->result();
		
	} 

	public function get_jabatan() 
	{
		$query = $this->db->get('tb_jabatan');
		return $query->result();
	}

	public function get_gaji()
	{
		$query = $this->db->get('tb_gaji');
		return $query->result();
		
	} 

	public function get_lembur() 
	{
		$query = $this->db->get('tb_lembur');
		return $query->result();
	}

	public function get_user()
	{
		$query = $this->db->get('users');
		return $query->result();
		
	} 

	public function inerjoin() 
	{
	    $this->db->select('tb_karyawan.id_jabatan,tb_jabatan.id_jabatan,id,nama,jabatan,gaji_pokok,uang_makan,sewa_kendaraan,tunjangan_jabatan,insentif,thr,total_gaji,bpjs,pajak,gaji_lembur,potongan_terlambat,pinjaman,total_potongan,gaji_keseluruhan');
        $this->db->from('tb_karyawan');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_karyawan.id_jabatan');
        $this->db->join('tb_gaji', 'tb_gaji.id_gaji = tb_karyawan.id_gaji');
        $query = $this->db->get();
        return $query->result();
    }


    public function inerjoin_gaji() 
	{
	    
		$this->db->select('tb_gaji.id,tb_karyawan.id,nama,id_jabatan');
		$this->db->from('tb_gaji');
		$this->db->join('tb_karyawan', 'tb_karyawan.id = tb_gaji.id');
        $query = $this->db->get();
        return $query->result();
    }


    public function inerjoinlembur() 
	{
	    $this->db->select('tb_jabatan.id_lembur,tb_lembur.id_lembur,waktu_lembur,gaji_lembur');
        $this->db->from('tb_jabatan');
        $this->db->join('tb_lembur', 'tb_lembur.id_lembur = tb_jabatan.id_lembur');
        $query = $this->db->get();
        return $query->result();
    }


	

	public function detail_data($id = NULL){
		$this->db->select('tb_karyawan.id_jabatan,tb_jabatan.id_jabatan,id,nama,jabatan,gaji_pokok,uang_makan,sewa_kendaraan,tunjangan_jabatan,insentif,thr,total_gaji,bpjs,pajak,gaji_lembur,potongan_terlambat,pinjaman,total_potongan,gaji_keseluruhan');
        $this->db->from('tb_karyawan');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_karyawan.id_jabatan');
        $this->db->join('tb_gaji', 'tb_gaji.id_gaji = tb_karyawan.id_gaji');
        $this->db->where('id', $id);
		$query = $this->db->get_where()->row();
		return $query;
	}
	public function detail_jabatan($id = NULL){
		$query = $this->db->get_where('tb_jabatan', array('id_jabatan'=> $id))->row();
		return $query;
	}

	public function detail_gaji($id = NULL){
		$query = $this->db->get_where('tb_gaji', array('id_gaji'=> $id))->row();
		return $query;
	}

	public function login($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users', 1);
		return $query->num_rows();
	}

	public function getuserid($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function input_data($data)
	{
		return $this->db->insert('tb_karyawan',$data);
		
	}

	public function input_user($data)
	{
		return $this->db->insert('users',$data);
		
	}

	

	public function input_karyawan($data)
	{


		return $this->db->insert('tb_karyawan',$data);
		

		
	}


	public function input_jabatan($data)
	{
		return $this->db->insert('tb_jabatan',$data);
		
	}
	public function input_gaji($data)
	{

		return $this->db->insert('tb_gaji',$data);

		
		
	}

	public function editinerjoin($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tb_karyawan');
		return $query->row();
		
	}

	public function combo_box($nama)
    {
        $this->db->where('nama', $nama);
        $this->db->order_by('nama', 'ASC');
        $this->db->select('tb_karyawan.id_jabatan,tb_jabatan.id_jabatan,id,nama,jabatan,gaji_pokok,uang_makan,sewa_kendaraan,tunjangan_jabatan,insentif,thr,total_gaji,bpjs,pajak');
        $this->db->from('tb_karyawan');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_karyawan.id_jabatan');
        $query = $this->db->get();
        return $query->result();
       
    }
	
	public function getkaryawanwhere($karyawan_id)
	{
		$this->db->where('id', $karyawan_id);
		$query = $this->db->get('tb_karyawan');
		return $query->row();
	}

	public function getjabatanwhere($jabatan_id)
	{
		$this->db->where('id_jabatan', $jabatan_id);
		$query = $this->db->get('tb_jabatan');
		return $query->row();
	}

	public function getinnerwhere($inner_id)
	{$this->db->select('tb_karyawan.id_jabatan,tb_jabatan.id_jabatan,tb_gaji.id_gaji,id,nama,jabatan,gaji_pokok,uang_makan,sewa_kendaraan,tunjangan_jabatan,insentif,thr,total_gaji,bpjs,pajak,gaji_lembur,potongan_terlambat,pinjaman,total_potongan,gaji_keseluruhan');
        $this->db->from('tb_karyawan');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_karyawan.id_jabatan');
        $this->db->join('tb_gaji', 'tb_gaji.id_gaji = tb_karyawan.id_gaji');
       $this->db->where('id', $inner_id);
		$query = $this->db->get_where()->row();
		return $query;
		
		
	}

	public function getgajiwhere($gaji_id)

	{
		$this->db->where('id_gaji', $gaji_id);
		$query = $this->db->get('tb_gaji');
		return $query->row();
	}


	public function editdata($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_karyawan', $data);
	}


	public function editjabatan($id_jabatan,$data)
	{
		$this->db->where('id_jabatan', $id_jabatan);
		return $this->db->update('tb_jabatan', $data);
	}

	public function editgaji($gaji_id,$data)
	{
		$this->db->where('id_gaji', $gaji_id);
		return $this->db->update('tb_gaji', $data);
	}


	public function hapus_data($id)
	{
		# code...
		$this->db->where('id', $id);
		return $this->db->delete('tb_karyawan');
	}

	public function hapus_jabatan($id_jabatan)
	{
		# code...
		$this->db->where('id_jabatan', $id_jabatan);
		return $this->db->delete('tb_jabatan');
	}

	public function hapus_gaji($id_gaji)
	{
		# code...
		$this->db->where('id_gaji', $id_gaji);
		return $this->db->delete('tb_gaji');
	}

	public function auto_karyawan($nama){
        $this->db->like('nama', $nama , 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        $this->db->select('tb_karyawan.id_jabatan,tb_jabatan.id_jabatan,id,nama,jabatan,gaji_pokok,uang_makan,sewa_kendaraan,tunjangan_jabatan,insentif,thr,total_gaji,bpjs,pajak');
        $this->db->from('tb_karyawan');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_karyawan.id_jabatan');
        $query = $this->db->get();
        return $query->result();

    }

    public function auto_idkaryawan($id){
        $this->db->like('id', $id , 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_karyawan')->result();

    }


	public function search_blog($jabatan){
        $this->db->like('jabatan', $jabatan , 'both');
        $this->db->order_by('jabatan', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_jabatan')->result();
    }

    public function search_bloglembur($waktu_lembur){
        $this->db->like('waktu_lembur', $waktu_lembur , 'both');
        $this->db->order_by('waktu_lembur', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_lembur')->result();
    }

     public function terlambat($waktu_terlambat){
        $this->db->like('waktu_terlambat', $waktu_terlambat , 'both');
        $this->db->order_by('waktu_terlambat', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_keterlambatan')->result();
    }

    public function total_karyawan()
{   
     $query = $this->db->get('tb_karyawan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}


public function total_jabatan()
{   
     $query = $this->db->get('tb_Jabatan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function total_user()
{   
     $query = $this->db->get('users');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function gaji_ttl()
{   
     $query = $this->db->get('tb_gaji');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function total_gaji($jabatan_id)
{   
		$this->db->where('id_jabatan', $jabatan_id);
		$this->db->select('( gaji_pokok+uang_makan) as total_gaji');
		$this->db->from('tb_jabatan');

		$query = $this->db->get();
        return $query->row()->total_gaji;

}









}
