<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_item extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    }

    public function simpan($buah, $harga) {

    $this->db->query("insert into items(nama_item, harga) values 
                                            ('$buah','$harga')");
    }

    public function customer_baru() {
    	$this->db->query("delete from items");
    }


    public function list_bayar() {
    	$list = $this->db->query("select * from items");
    	return $list;
    }






}
