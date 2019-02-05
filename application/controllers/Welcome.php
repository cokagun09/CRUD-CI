<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model("my_model");
        $this->load->library('upload');
    }

    public function index()
	{
        $data['title'] = "Upload Resize | cok.com";
        $data['sql1'] = $this->my_model->read_data();
		$this->load->view('welcome_message', $data);
	}

    public function tambah_data()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl = $this->input->post('tgl');
        $email = $this->input->post('email');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $kabupaten = $this->input->post('kabupaten');
        $hobi = implode(',', $this->input->post('hobi'));

        //Upload gambar
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){

            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);

                $gambar=$gbr['file_name'];
                $this->my_model->create_data($nama, $nim, $tgl, $email,$jenis_kelamin,$kabupaten,$hobi, $gambar);
                redirect('Welcome');
            }

        }else{
            echo "Image yang diupload kosong";
        }



    }

    public function hapus_data($id)
    {
        $this->my_model->delete_data($id);
        redirect('Welcome');
    }

    public function edit_data($id){

//        $id = $this->input->post('id_periode');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl = $this->input->post('tgl');
        $email = $this->input->post('email');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $kabupaten = $this->input->post('kabupaten');
        $hobi = implode(',', $this->input->post('hobi'));


        //Upload gambar
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){

            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);

                $gambar=$gbr['file_name'];
                $this->my_model->update_data($id, $nama, $nim, $tgl, $email, $jenis_kelamin, $kabupaten,$hobi, $gambar);
                redirect('Welcome');
            }

        }else{
            echo "Image yang diupload kosong";
        }

    }
}
