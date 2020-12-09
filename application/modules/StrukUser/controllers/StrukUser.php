<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StrukUser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('StrukUser_m');
        date_default_timezone_set("Asia/Jakarta");
        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }


    public function index()
    {
        $data = [
            'tittle'          => 'Data Slip',
            'struk' => $this->StrukUser_m->getdata()
        ];
        // $data['struk'] = $this->StrukUser_m->getdata();
        // var_dump($data);
        $this->template->load('template', 'v_strukUser', $data);
    }

    public function tambah()
    {
        $data = [
            'tittle'          => 'Struk'

        ];
        $this->template->load('template', 'v_tambah', $data);
    }

    public function simpan_struk()
    {
        $tgl = $this->input->post('tgl');
        $idusr = $this->input->post('iduser');
        $transaksi = "";
        if (count($array = $this->input->post('transaksi', TRUE))) {
            $transaksi = implode(",", $array);
        }
        // $transaksi = implode(',', $this->input->post('transaksi', TRUE));
        $validasi = $this->input->post('validasi');
        $penerima = "";
        if (count($array = $this->input->post('penerima', TRUE))) {
            $penerima = implode(",", $array);
        }
        $penduduk = "";
        if (count($array = $this->input->post('penduduk', TRUE))) {
            $penduduk = implode(",", $array);
        }
        // $penerima = implode(',', $this->input->post('penerima', TRUE));
        // $penduduk = implode(',', $this->input->post('penduduk', TRUE));
        $nama = $this->input->post('nama');
        $no_rek = $this->input->post('no_rek');
        $nama_bank = $this->input->post('nama_bank');
        $alamat = $this->input->post('address');
        $jn = $this->input->post('jn');
        $tujuan = "";
        if (count($array = $this->input->post('tujuan', TRUE))) {
            $tujuan = implode(",", $array);
        }
        // $tujuan = implode(',', $this->input->post('tujuan', TRUE));
        $brita = $this->input->post('brita');
        $jml_trans = $this->input->post('jml_trans');
        $Komisi = $this->input->post('komisi');
        $biaya_pengirim = $this->input->post('biaya_pengirim');
        $biaya_kores = $this->input->post('biaya_kores');
        $sub_total = $this->input->post('sub_total');
        $rate = $this->input->post('rate');
        $total = $this->input->post('total');
        $ttd = $this->input->post('ttd');
        $pengirim = "";
        if (count($array = $this->input->post('pengirim', TRUE))) {
            $pengirim = implode(",", $array);
        }
        // $pengirim = implode(',', $this->input->post('pengirim', TRUE));
        $nik = $this->input->post('nik');
        $info = "";
        if (count($array = $this->input->post('info', TRUE))) {
            $info = implode(",", $array);
        }
        $status = "";
        if (count($array = $this->input->post('status', TRUE))) {
            $status = implode(",", $array);
        }
        // $info = implode(',', $this->input->post('info', TRUE));
        // $status = implode(',', $this->input->post('status', TRUE));
        $nama2 = $this->input->post('nama2');
        $alamat2 = $this->input->post('alamat2');
        $metode = "";
        if (count($array = $this->input->post('metode', TRUE))) {
            $metode = implode(",", $array);
        }
        // $metode = implode(',', $this->input->post('metode', TRUE));
        $isi = $this->input->post('isi');
        $bank1 = $this->input->post('bank1');
        $bank2 = $this->input->post('bank2');
        $no_cek1 = $this->input->post('no_cek1');
        $no_cek2 = $this->input->post('no_cek2');
        $valuta1 = $this->input->post('valuta1');
        $valuta2 = $this->input->post('valuta2');
        $nominal1 = $this->input->post('nominal1');
        $nominal2 = $this->input->post('nominal2');
        $stor = $this->input->post('stor');
        $terbilang = $this->input->post('terbilang');
        $sumber = "";
        if (count($array = $this->input->post('sumber', TRUE))) {
            $sumber = implode(",", $array);
        }
        $biaya_trans = "";
        if (count($array = $this->input->post('biaya_trans', TRUE))) {
            $biaya_trans = implode(",", $array);
        }
        // $sumber = implode(',', $this->input->post('sumber', TRUE));
        // $biaya_trans = implode(',', $this->input->post('biaya_trans', TRUE));
        $debet = $this->input->post('debet');
        $biaya_bank = "";
        if (count($array = $this->input->post('biaya_bank', TRUE))) {
            $biaya_bank = implode(",", $array);
        }
        $biaya_bank = implode(',', $this->input->post('biaya_bank', TRUE));
        $lain = $this->input->post('lain');
        $nama3 = $this->input->post('nama3');
        $alamat3 = $this->input->post('alamat3');
        $nik_paspor = $this->input->post('nik_paspor');
        $ket = $this->input->post('ket');

        $data = array(
            'user_id' => $idusr,
            'tanggal_input' => date('Y-m-d'),
            'tanggal' => $tgl,
            'transaksi' => $transaksi,
            'validasi' => $validasi,
            'penerima' => $penerima,
            'status_penduduk' => $penduduk,
            'nama' => $nama,
            'no_rek' => $no_rek,
            'bank' => $nama_bank,
            'alamat' => $alamat,
            'jn_identitas' => $jn,
            'tujuan_transaksi' => $tujuan,
            'berita_transaksi' => $brita,
            'jml_transfer' => $jml_trans,
            'komisi' => $Komisi,
            'biaya_pengiriman' => $biaya_pengirim,
            'biaya_kores' => $biaya_kores,
            'sub_total' => $sub_total,
            'kurs' => $rate,
            'total' => $total,
            'ttd' => $ttd,
            'pengirim' => $pengirim,
            'nik' => $nik,
            'informasi' => $info,
            'status_penduduk2' => $status,
            'nama2' => $nama2,
            'alamat2' => $alamat2,
            'metode' => $metode,
            'isi_debet' => $isi,
            'bank_tertarik' => $bank1,
            'bank_tertarik2' => $bank2,
            'no_cek' => $no_cek1,
            'no_cek2' => $no_cek2,
            'valuta' => $valuta1,
            'valuta2' => $valuta2,
            'nominal' => $nominal1,
            'nominal2' => $nominal2,
            'stor' => $stor,
            'terbilang' => $terbilang,
            'sumber' => $sumber,
            'biaya_trans' => $biaya_trans,
            'biaya_bank' => $biaya_bank,
            'nama3' => $nama3,
            'alamat3' => $alamat3,
            'nik_paspor' => $nik_paspor,
            'isi_rek' => $debet,
            'lain' => $lain
        );
        $d = array(
            'tanggal' => date('Y-m-d'),
            'user' => $idusr,
            'rupiah' => $stor,
            'ket' => $ket

        );

        $this->StrukUser_m->add_struk($data);
        $this->StrukUser_m->add_histori($d);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                    <div class=\"alert-body\">
                    <button class=\"close\" data-dismiss=\"alert\">
                        <span>×</span>
                    </button>
                    Data Admin Berhasil Disimpan
                    </div>
                </div>");

        redirect(base_url('StrukUser'));



        // redirect('Struk');
    }

    public function edit($id = null)
    {
        $data = [
            'tittle'          => 'Edit',
            'isi' => $this->StrukUser_m->get_id($id)
        ];
        $this->template->load('template', 'v_edit', $data);
    }

    public function editpost()
    {
        $id = $this->input->post('id');
        $tgl = $this->input->post('tgl');
        $idusr = $this->input->post('iduser');
        $transaksi = "";
        if (count($array = $this->input->post('transaksi', TRUE))) {
            $transaksi = implode(",", $array);
        }
        // $transaksi = implode(',', $this->input->post('transaksi', TRUE));
        $validasi = $this->input->post('validasi');
        $penerima = "";
        if (count($array = $this->input->post('penerima', TRUE))) {
            $penerima = implode(",", $array);
        }
        $penduduk = "";
        if (count($array = $this->input->post('penduduk', TRUE))) {
            $penduduk = implode(",", $array);
        }
        // $penerima = implode(',', $this->input->post('penerima', TRUE));
        // $penduduk = implode(',', $this->input->post('penduduk', TRUE));
        $nama = $this->input->post('nama');
        $no_rek = $this->input->post('no_rek');
        $nama_bank = $this->input->post('nama_bank');
        $alamat = $this->input->post('address');
        $jn = $this->input->post('jn');
        $tujuan = "";
        if (count($array = $this->input->post('tujuan', TRUE))) {
            $tujuan = implode(",", $array);
        }
        // $tujuan = implode(',', $this->input->post('tujuan', TRUE));
        $brita = $this->input->post('brita');
        $jml_trans = $this->input->post('jml_trans');
        $Komisi = $this->input->post('komisi');
        $biaya_pengirim = $this->input->post('biaya_pengirim');
        $biaya_kores = $this->input->post('biaya_kores');
        $sub_total = $this->input->post('sub_total');
        $rate = $this->input->post('rate');
        $total = $this->input->post('total');
        $ttd = $this->input->post('ttd');
        $pengirim = "";
        if (count($array = $this->input->post('pengirim', TRUE))) {
            $pengirim = implode(",", $array);
        }
        // $pengirim = implode(',', $this->input->post('pengirim', TRUE));
        $nik = $this->input->post('nik');
        $info = "";
        if (count($array = $this->input->post('info', TRUE))) {
            $info = implode(",", $array);
        }
        $status = "";
        if (count($array = $this->input->post('status', TRUE))) {
            $status = implode(",", $array);
        }
        // $info = implode(',', $this->input->post('info', TRUE));
        // $status = implode(',', $this->input->post('status', TRUE));
        $nama2 = $this->input->post('nama2');
        $alamat2 = $this->input->post('alamat2');
        $metode = "";
        if (count($array = $this->input->post('metode', TRUE))) {
            $metode = implode(",", $array);
        }
        // $metode = implode(',', $this->input->post('metode', TRUE));
        $isi = $this->input->post('isi');
        $bank1 = $this->input->post('bank1');
        $bank2 = $this->input->post('bank2');
        $no_cek1 = $this->input->post('no_cek1');
        $no_cek2 = $this->input->post('no_cek2');
        $valuta1 = $this->input->post('valuta1');
        $valuta2 = $this->input->post('valuta2');
        $nominal1 = $this->input->post('nominal1');
        $nominal2 = $this->input->post('nominal2');
        $stor = $this->input->post('stor');
        $terbilang = $this->input->post('terbilang');
        $sumber = "";
        if (count($array = $this->input->post('sumber', TRUE))) {
            $sumber = implode(",", $array);
        }
        $biaya_trans = "";
        if (count($array = $this->input->post('biaya_trans', TRUE))) {
            $biaya_trans = implode(",", $array);
        }
        // $sumber = implode(',', $this->input->post('sumber', TRUE));
        // $biaya_trans = implode(',', $this->input->post('biaya_trans', TRUE));
        $debet = $this->input->post('debet');
        $biaya_bank = "";
        if (count($array = $this->input->post('biaya_bank', TRUE))) {
            $biaya_bank = implode(",", $array);
        }
        $biaya_bank = implode(',', $this->input->post('biaya_bank', TRUE));
        $lain = $this->input->post('lain');
        $nama3 = $this->input->post('nama3');
        $alamat3 = $this->input->post('alamat3');
        $nik_paspor = $this->input->post('nik_paspor');
        $ket = $this->input->post('ket');

        $data = array(
            'user_id' => $idusr,
            'tanggal_input' => date('Y-m-d'),
            'tanggal' => $tgl,
            'transaksi' => $transaksi,
            'validasi' => $validasi,
            'penerima' => $penerima,
            'status_penduduk' => $penduduk,
            'nama' => $nama,
            'no_rek' => $no_rek,
            'bank' => $nama_bank,
            'alamat' => $alamat,
            'jn_identitas' => $jn,
            'tujuan_transaksi' => $tujuan,
            'berita_transaksi' => $brita,
            'jml_transfer' => $jml_trans,
            'komisi' => $Komisi,
            'biaya_pengiriman' => $biaya_pengirim,
            'biaya_kores' => $biaya_kores,
            'sub_total' => $sub_total,
            'kurs' => $rate,
            'total' => $total,
            'ttd' => $ttd,
            'pengirim' => $pengirim,
            'nik' => $nik,
            'informasi' => $info,
            'status_penduduk2' => $status,
            'nama2' => $nama2,
            'alamat2' => $alamat2,
            'metode' => $metode,
            'isi_debet' => $isi,
            'bank_tertarik' => $bank1,
            'bank_tertarik2' => $bank2,
            'no_cek' => $no_cek1,
            'no_cek2' => $no_cek2,
            'valuta' => $valuta1,
            'valuta2' => $valuta2,
            'nominal' => $nominal1,
            'nominal2' => $nominal2,
            'stor' => $stor,
            'terbilang' => $terbilang,
            'sumber' => $sumber,
            'biaya_trans' => $biaya_trans,
            'biaya_bank' => $biaya_bank,
            'nama3' => $nama3,
            'alamat3' => $alamat3,
            'nik_paspor' => $nik_paspor,
            'isi_rek' => $debet,
            'lain' => $lain
        );
        $d = array(
            'tanggal' => date('Y-m-d'),
            'user' => $idusr,
            'rupiah' => $stor,
            'ket' => $ket
        );
        $this->StrukUser_m->update_struk($id, $data);
        $this->StrukUser_m->add_histori($d);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                    <div class=\"alert-body\">
                    <button class=\"close\" data-dismiss=\"alert\">
                        <span>×</span>
                    </button>
                    Data Admin Berhasil Disimpan
                    </div>
                </div>");

        redirect(base_url('StrukUser'));
    }

    public function delete($id)
    {
        $data = array('id_struk' => $id);
        $this->StrukUser_m->del($data);
        $this->session->set_flashdata("pesan", "<div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\" id=\"alert\">
			<span class=\"badge badge-pill badge-success\"></span>Data Berhasil Dihapus<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>");
        redirect(base_url('StrukUser'));
    }

    public function tes($id = null, $id_user = null)
    {
        $this->db->where('id_struk', $id);
        $this->db->where('id_user', $id_user);
        $cek = $this->db->get_where('tb_cetak');

        if ($cek->num_rows() > 0) {
            $cek = $cek->row();
            $jml_ = (int)$cek->jml_cetak;
            // echo $jml_;
            $up = [
                'jml_cetak' => $jml_ + 1,
                'ket' => 'update tambah jml cetak'
            ];
            $this->db->where('id_struk', $id);
            $this->db->where('id_user', $id_user);
            $this->db->update('tb_cetak', $up);
        } else {
            $ins = [
                'id_struk' => $id,
                'id_user' => $id_user,
                'tanggal_cetak' => date('Y-m-d'),
                'jml_cetak' => 1,
                'ket' => 'cetak'
            ];
            $this->db->insert('tb_cetak', $ins);
        }
        $this->db->where('id_struk', $id);
        $this->db->where('user_id', $id_user);
        $cek2 = $this->db->get_where('tb_struk')->row();

        $d = [
            'tanggal' => date('Y-m-d'),
            'rupiah' => $cek2->stor,
            'user' => $cek2->user_id,
            'ket' => 'CETAK SLIP BANK'
        ];

        $this->StrukUser_m->add_histori($d);

        $data = [
            'struk' => $this->StrukUser_m->get_id($id)
            // 'struk' => $this->StrukUser_m->getprint()
        ];

        // $this->mypdf->generate('v_dompdf', $data);
        $this->mypdf->generate('v_cetak', $data);
        // var_dump($data);
    }
}

/* End of file StrukUser.php */