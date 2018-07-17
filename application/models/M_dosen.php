<?php

    class M_dosen extends CI_Model{

      public function tambah_dosen($NIP_Dosen, $Nama_Dosen, $Pola_Jari)
      {
          $q = "insert into data_dosen (NIP_Dosen,Nama_Dosen,Pola_Jari)
          values ('$NIP_Dosen','$Nama_Dosen','$Pola_Jari')";
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

        public function proseshapusdosen($id)
        {
            $data = array(

              'NIP_Dosen' => $id

            );

            $query = $this->db->delete('data_dosen', $data);
            return $query;
        }

        public function proseseditdosen($id, $Pola_Jari, $Nama_Dosen)
          {
              $data = array (

                  'Pola_Jari' => $Pola_Jari,
                  'Nama_Dosen' => $Nama_Dosen

              );

              return $this->db->update('data_dosen', $data, array('NIP_Dosen' => $id));

          }

        // public function prosesedit($id)
        // {
        //     $query = "select * from data_mahasiswa where NIM_Mahasiswa = $id";
        //     return $this->db->query($query);
        // }

        public function editDosen($id)
        {
            $query = "select * from data_dosen where NIP_Dosen = $id";
            return $this->db->query($query);
        }


    }






?>
