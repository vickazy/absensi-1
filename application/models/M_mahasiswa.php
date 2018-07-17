<?php

    class M_mahasiswa extends CI_Model{

        public function tambah_mahasiswa($NIM_Mahasiswa, $Nama_Mahasiswa, $Pola_Jari)
        {
            $q = "insert into data_mahasiswa (NIM_Mahasiswa,Nama_Mahasiswa,Pola_Jari)
            values ('$NIM_Mahasiswa','$Nama_Mahasiswa','$Pola_Jari')";
            return $this->db->query($q);
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

        public function prosespelunasan($id)
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

        public function proseseditmahasiswa($id)
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

        function cekJariMahasiswa($where){
            return $this->db->get_where("data_mahasiswa",$where);
        }

    }






?>
