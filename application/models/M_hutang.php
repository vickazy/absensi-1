<?php

    class M_hutang extends CI_Model{

        public function tambah_hutang($nama, $untuk, $jumlah,$tanggal, $status)
        {
            $q = "insert into piutangg (nama,untuk,jumlah,tanggal,keterangan)
            values ('$nama','$untuk','$jumlah','$tanggal','$status')";
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

    }






?>
