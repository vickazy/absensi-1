<?php

    class M_laporan extends CI_Model{

        public function tambah_laporan($NIM_Mahasiswa, $Nama_Mahasiswa, $sakit, $izin, $alpha, $total)
        {
            $q = "insert into laporan_mahasiswa (NIM_Mahasiswa,Nama_Mahasiswa,sakit,izin,alpha,total)
            values ('$NIM_Mahasiswa','$Nama_Mahasiswa','$sakit','$izin','$alpha','$total')";
            return $this->db->query($q);
        }

        public function tambah_laporanDosen($NIP_Dosen, $Nama_Dosen, $sakit, $izin, $alpha, $total)
        {
            $q = "insert into laporan_dosen (NIP_Dosen,Nama_Dosen,sakit,izin,alpha,total)
            values ('$NIP_Dosen','$Nama_Dosen','$sakit','$izin','$alpha','$total')";
            return $this->db->query($q);
        }

        public  function displaylaporanmahasiswa()
        {
            $query = "select * from laporan_mahasiswa";
            return $this->db->query($query);
        }

        public  function displaylaporandosen()
        {
            $query = "select * from laporan_dosen";
            return $this->db->query($query);
        }

        //untuk menampilkan data mahasiswa
        public  function displaymahasiswa()
        {
            $query = "select * from data_mahasiswa";
            return $this->db->query($query);
        }

        //untuk menampilkan data dosen
        public  function displaydosen()
        {
            $query = "select * from data_dosen";
            return $this->db->query($query);
        }

        public function prosesselesai($id)
        {
            $data = array (
                'keterangan' => lunas
            );

            return $this->db->update('piutangg', $data, array('id' => $id));
        }

        public function proseshapus($id)
        {
            $data = array(

              'NIM_Mahasiswa' => $id

            );

            $query = $this->db->delete('data_mahasiswa', $data);
            return $query;
        }

        public function proseseditmahasiswa($id, $Pola_Jari, $Nama_Mahasiswa)
          {
              $data = array (

                  'Pola_Jari' => $Pola_Jari,
                  'Nama_Mahasiswa' => $Nama_Mahasiswa

              );

              return $this->db->update('data_mahasiswa', $data, array('NIM_Mahasiswa' => $id));

          }

        // public function prosesedit($id)
        // {
        //     $query = "select * from data_mahasiswa where NIM_Mahasiswa = $id";
        //     return $this->db->query($query);
        // }

        public function editMahasiswa($id)
        {
            $query = "select * from data_mahasiswa where NIM_Mahasiswa = $id";
            return $this->db->query($query);
        }

        public function proseshapuslaporanmahasiswa($id)
        {
            $data = array(

              'NIM_Mahasiswa' => $id

            );

            $query = $this->db->delete('laporan_mahasiswa', $data);
            return $query;
        }

        public function proseseditlaporanmahasiswa($id)
          {
              $data = array (

                  'NIM_Mahasiswa' => $NIM_Mahasiswa,
                  'Nama_Mahasiswa' => $Nama_Mahasiswa

              );
        }

        public function proseshapuslaporandosen($id)
        {
            $data = array(

              'NIP_Dosen' => $id

            );

            $query = $this->db->delete('laporan_dosen', $data);
            return $query;
        }

        public function proseseditlaporandosen($id)
          {
              $data = array (

                  'NIP_Dosen' => $NIP_Dosen,
                  'Nama_Dosen' => $Nama_Dosen

              );
            }

    }






?>
