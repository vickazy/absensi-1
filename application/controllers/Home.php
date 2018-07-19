<?php

    class Home extends CI_Controller{

        public function tampil()
        {
            $this->load->view('hDepan');
        }
        public function tampilhalmahasiswa()
        {
            $this->load->view('hMahasiswa');
        }
        public function tampilhaldosen()
        {
            $this->load->view('hDosen');
        }
        public function tampilhalpresensi()
        {
            $this->load->view('hPresensi');
        }
        public function tampilhallaporan()
        {
            $this->load->view('hLaporan');
        }

        public function tampilhallaporandosen()
        {
            $this->load->view('hLaporanDosen');
        }

        public function inputdataMahasiswa()
        {
            $this->load->view('hInputMahasiswa');
        }

        public function inputpresensiMahasiswa()
        {
            $alert = array('alert' => null);
            $this->load->view('hInputPresensi',$alert);
        }

        public function inputlaporanMahasiswa()
        {
            $this->load->view('hInputLaporan');
        }

        public function inputlaporanDosen()
        {
            $this->load->view('hInputLaporanDosen');
        }

        public function inputdataDosen()
        {
            $this->load->view('hInputDosen');
        }

        public function cekdatamahasiswa()
        {
            if ($Pola_Jari != NULL)
            {
              echo $Pola_Jari;
            }
            else if ($NIM_Mahasiswa != NULL)
            {
              echo $NIM_Mahasiswa;
            }
            else
            {
              echo "Data Tidak Ditemukan";
            }
            redirect("Home/tambahdatamahasiswa");

        }

        public function tambahlaporan()
        {
            $NIM_Mahasiswa = $this->input->post('NIM_Mahasiswa');
            $Nama_Mahasiswa = $this->input->post('Nama_Mahasiswa');
            $sakit = $this->input->post('sakit');
            $izin = $this->input->post('izin');
            $alpha = $this->input->post('alpha');
            $total = $sakit + $izin + $alpha;

            $q = $this->m_laporan->tambah_laporan($NIM_Mahasiswa,$Nama_Mahasiswa,$sakit,$izin,$alpha,$total);
            redirect("Home/tampillaporan");
        }

        public function tambahlaporandosen()
        {
            $NIP_Dosen = $this->input->post('NIP_Dosen');
            $Nama_Dosen = $this->input->post('Nama_Dosen');
            $sakit = $this->input->post('sakit');
            $izin = $this->input->post('izin');
            $alpha = $this->input->post('alpha');
            $total = $this->input->post('total');

            $q = $this->m_laporan->tambah_laporanDosen($NIP_Dosen,$Nama_Dosen,$sakit,$izin,$alpha,$total);
            redirect("Home/tampillaporandosen");

        }

        public function tambahdatamahasiswa()
        {
            $NIM_Mahasiswa = $this->input->post('NIM_Mahasiswa');
            $Nama_Mahasiswa = $this->input->post('Nama_Mahasiswa');
            $Pola_Jari = $this->input->post('Pola_Jari');

            $q = $this->m_mahasiswa->tambah_mahasiswa($NIM_Mahasiswa,$Nama_Mahasiswa,$Pola_Jari);
            redirect("Home/tampilmahasiswa");


        }

        public function tambahdatadosen()
        {
            $NIP_Dosen = $this->input->post('NIP_Dosen');
            $Nama_Dosen = $this->input->post('Nama_Dosen');
            $Pola_Jari = $this->input->post('Pola_Jari');

            $q = $this->m_dosen->tambah_dosen($NIP_Dosen,$Nama_Dosen,$Pola_Jari);
            redirect("Home/tampildosen");


        }            

        public function tambahpresensi()
        {
            $Pola_Jari = $this->input->post('Pola_Jari');

            $q = $this->m_presensi->tambah_presensi($Tanggal,$Pola_Jari,$NIM_Mahasiswa,$Nama_Mahasiswa);
            redirect("Home/cekdatamahasiswa");


        }

  //   public function tambahdatamahasiswa()    {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		$config['upload_path'] = './upload/';
  //       	$config['allowed_types'] = 'gif|jpg|png';
  //       	$config['max_size']	= '1000';
  //       	$config['max_width']  = '2000';
  //       	$config['max_height']  = '1024';
  //
  //           $this->upload->initialize($config);
  //           if(!$this->upload->do_upload('Pola_Jari'))
  //           {
  //           	$gambar="";
  //           }
  //           else
  //           {
  //               $gambar=$this->upload->file_name;
  //           }
  //              $NIM_Mahasiswa = $this->input->post('NIM_Mahasiswa');
  //              $Nama_Mahasiswa = $this->input->post('Nama_Mahasiswa');
  //              $Pola_Jari = $this->input->post('Pola_Jari');
  //
  //
	// 		$data = array(
	// 			'NIM_Mahasiswa' => $NIM_Mahasiswa,
	// 			'Nama_Mahasiswa' => $Nama_Mahasiswa,
	// 			'Pola_Jari' => $Pola_Jari
  //
  //
	// 			);
	// 		$this->m_mahasiswa->tambah_mahasiswa($data);
	// 		redirect("Home/tampilmahasiswa");
	// 	}
	// 	else
	// 	{
  //     print_r
	// 		redirect("Home/tampilmahasiswa");
  //
	// 	}
	// }

  public function deleteLaporanMahasiswa($id)
  {
    $delete = $this->m_laporan->proseshapuslaporanmahasiswa($id);
    if(!$delete)
    {
      echo "gagal dihapus";
    }
    else {
      redirect("Home/tampillaporan");
    }
  }

  public function editLaporanMahasiswa($id)
  {
    $data['lunas'] = $this->m_laporan->proseseditlaporanmahasiswa($id);
    $this->load->view('hEditLaporanmahasiswa', $data);
  }

  public function deleteLaporanDosen($id)
  {
    $delete = $this->m_laporan->proseshapuslaporandosen($id);
    if(!$delete)
    {
      echo "gagal dihapus";
    }
    else {
      redirect("Home/tampillaporandosen");
    }
  }

  public function editLaporanDosen($id)
  {
    $data['lunas'] = $this->m_laporan->proseseditlaporandosen($id);
    $this->load->view('hEditLaporandosen', $data);
  }

        public function deleteDosen($id)
        {
          $delete = $this->m_dosen->proseshapusdosen($id);
          if(!$delete)
          {
            echo "gagal dihapus";
          }
          else {
            redirect("Home/tampildosen");
          }
        }

        public function editDosen($id)
        {
          $data['lunas'] = $this->m_dosen->displaydosen();
          $this->load->view('hEditdosen', $data);
        }

        public function deleteMahasiswa($id)
        {
          $delete = $this->m_mahasiswa->proseshapus($id);
          if(!$delete)
          {
            echo "gagal dihapus";
          }
          else {
            redirect("Home/tampilmahasiswa");
          }
        }

        public function editMahasiswa($id)
        {
          $data['lunas'] = $this->m_mahasiswa->editMahasiswa($id);
          $this->load->view('hEditmahasiswa', $data);
        }

        //memanggil fungsi display mahasiswa, untuk mengambil data mahasiswa didalam database.
        public function tampilmahasiswa()
        {
            $data['lunas'] = $this->m_mahasiswa->displaymahasiswa();
            $this->load->view('hMahasiswa', $data);
        }

        //memanggil fungsi display dosen, untuk mengambil data dosen didalam database.
        public function tampildosen()
        {
            $data['lunas'] = $this->m_dosen->displaydosen();
            $this->load->view('hDosen', $data);
        }

        public function tampillaporan()
        {
            $data['lunas'] = $this->m_laporan->displaylaporanmahasiswa();
            $this->load->view('hLaporan', $data);
        }

        public function tampillaporandosen()
        {
            $data['lunas'] = $this->m_laporan->displaylaporandosen();
            $this->load->view('hLaporanDosen', $data);
        }

        public function tampilpresensimahasiswa()
        {
            $data['lunas'] = $this->m_presensi->displaypresensimahasiswa();
            $this->load->view('hPresensi', $data);
        }

        public function total()
          {
              $q = "Select NIM_Mahasiswa, Nama_Mahasiswa, SUM(IF(sakit, izin, alpha,)) as total, from laporan_mahasiswa";
              return $this->db->query($q);
          }

          public function presensi_mahasiswa($pola_jari)
        {
            $where = array(
              'Pola_Jari' => $pola_jari
            );

            $cek = $this->m_mahasiswa->cekJariMahasiswa($where);
            if($cek->num_rows() > 0){

              foreach($cek->result() as $value){
                $q = $this->m_presensi->tambah_presensi($value->Pola_Jari,$value->NIM_Mahasiswa,$value->Nama_Mahasiswa);
                break;
              }

              echo ("berhasil");
            }else{
              echo ("gagal");
            }    
        }

        public function connect(){
          $ch = curl_init();
          $headers = array(
          'Accept: application/json',
          'Content-Type: application/json',
      
          );
          curl_setopt($ch, CURLOPT_URL, "http://localhost/projekabsen/home/presensi_mahasiswa/12312321");
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($ch, CURLOPT_HEADER, 0);
          $body = '{}';
      
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
          curl_setopt($ch, CURLOPT_POSTFIELDS,$body);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      
          // Timeout in seconds
          curl_setopt($ch, CURLOPT_TIMEOUT, 30);
      
          $authToken = curl_exec($ch);

          if($authToken == "berhasil"){
            //buka pintu
          }
          elseif($authToken == "gagal"){
            //tutup pintu
          }
        
        }

        public function presensi_mahasiswa_post()
        {
            $where = array(
              'Pola_Jari' => $this->input->post('pola_jari')
            );

            $cek = $this->m_mahasiswa->cekJariMahasiswa($where);
            if($cek->num_rows() > 0){

              foreach($cek->result() as $value){
                $q = $this->m_presensi->tambah_presensi($value->Pola_Jari,$value->NIM_Mahasiswa,$value->Nama_Mahasiswa);
                break;
              }

              redirect("Home/tampilpresensimahasiswa");
            }else{
              $alert = array('alert' => "Data tidak ditemukan!");
    
              $this->load->view('hInputPresensi',$alert);

            }    
        }

    }
























?>
