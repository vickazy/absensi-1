<?php

    class m_hutang extends CI_Model{

        public function tambah_hutang($nama, $untuk, $jumlah,$tanggal, $status)
        {
            $q = "insert into piutang (nama,untuk,jumlah,tanggal,keterangan)
            values ('$nama','$untuk','$jumlah','$tanggal','$status')";
            return $this->db->query($q);
        }

        public  function displaylunas()
        {
            $query = "select * from piutang where keterangan = 'lunas'";
            return $this->db->query($query);
        }

        public  function displayblunas()
        {
            $query = "select * from piutang where keterangan = 'belum lunas'";
            return $this->db->query($query);
        }

        public function prosespelunasan($id)
        {
            $data = array (
                'keterangan' => lunas
            );

            return $this->db->update('piutang', $data, array('id' => $id));
        }

    }






?>