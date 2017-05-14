<?php
class Mtransaksi extends CI_model{
	function getTransaksi(){
		$this->db->select('*');//memilih semua field
		$this->db->from('transaksi');//memeilih tabel
		$this->db->join('pemilik', 'transaksi.id_pemilik = pemilik.id_pemilik');//join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
		$this->db->join('kustomer', 'pemilik.id_kustomer = kustomer.id_kustomer'); //join tabel pemilik field id_kustomer dengan tabel kustomer field yang punya isi sama		
		
		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $hasilTransaksi[] = $data;
            }
        return $hasilTransaksi; //hasil dari semua proses ada dimari
        }
	}
}
?>
 