<?php
/**
 * Created by PhpStorm.
 * User: Us
 * Date: 1/25/2019
 * Time: 9:28 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class my_model extends CI_Controller
{
    public function read_data(){
        $sql = $this->db->query("SELECT * FROM data");
        return $sql;
    }

    public function create_data($nama, $nim, $tgl, $email,$jenis_kelamin,$kabupaten,$hobi,$img){
        $add = $this->db->query("INSERT INTO `data` (`id_uts`, `nama`, `nim`, `tgl`, `email`, `jenis_kelamin`, `kabupaten`, `hobi`, `img`) VALUES (NULL, '$nama', '$nim', '$tgl', '$email', '$jenis_kelamin', '$kabupaten','$hobi', '$img')");
        return $add;
    }

    public function delete_data($id){
        $hapus = $this->db->query("DELETE FROM data WHERE id_uts = '$id'");
        return $hapus;
    }

    public function update_data($id, $nama, $nim, $tgl, $email,$jenis_kelamin,$kabupaten,$hobi,$gbr){
        $update = $this->db->query("UPDATE data SET nama = '$nama', nim = '$nim', tgl ='$tgl', email = '$email', jenis_kelamin = '$jenis_kelamin', kabupaten ='$kabupaten', hobi = '$hobi', img='$gbr' WHERE id_uts = '$id'");
        return $update;
    }
}