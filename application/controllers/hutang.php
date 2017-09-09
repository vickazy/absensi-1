<?php

    class Hutang extends CI_Controller{

        public function tampil()
        {
            $this->load->view('hDepan');
        }

        public function tambah()
        {
            $nama = $this->input->post('nama');
            $untuk = $this->input->post('untuk');
            $jumlah = $this->input->post('jumlah');
            $tanggal = $this->input->post('tanggal');
            $status = $this->input->post('keterangan');

            $q = $this->m_hutang->tambah_hutang($nama,$untuk,$jumlah,$tanggal,$status);
            redirect("hutang/tampil");


        }

        public function tampilunas()
        {
            $data['lunas'] = $this->m_hutang->displaylunas();
            $this->load->view('hal_lunas', $data);
        }

        public function tampilblunas()
        {
            $data['blunas'] = $this->m_hutang->displayblunas();
            $this->load->view('hal_bl', $data);
        }

        public function pelunasan($id)
        {
            $keputusan = $this->m_hutang->prosespelunasan($id);
            if (!$keputusan)
            {
                echo "Gagal diputuskan";
            }
            else
            {
                redirect(base_url()."hutang/tampilblunas");
            }
        }








    }
























?>