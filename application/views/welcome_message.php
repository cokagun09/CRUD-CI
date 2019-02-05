<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet"
          media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css"
          rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"
          media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6" style="padding-top: 30px;padding-left: 50px;">
                            <div class="card">
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#myModal">
                                        <i class="fa fa-dot-circle-o"></i> Tambah Siswa
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12" style="padding-left: 50px; padding-right: 50px; padding-top: 20px">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3" border="solid" id="mydata">
                                        <thead>
                                        <tr>
                                            <th colspan="9">
                                                <center><strong>Data Mahasiswa</strong></center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nim</th>
                                            <th>Tgl Lahir</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kabupaten</th>
                                            <th>Hobi</th>
                                            <th>Image</th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($sql1->result() as $data) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data->nama; ?></td>
                                                <td><?php echo $data->nim; ?></td>
                                                <td><?php echo $data->tgl; ?></td>
                                                <td><?php echo $data->email; ?></td>
                                                <td><?php echo $data->jenis_kelamin; ?></td>
                                                <td><?php echo $data->kabupaten; ?></td>
                                                <td><?php echo $data->hobi; ?></td>
                                                <td>
                                                    <img height="50px" width="50px"
                                                         src="<?php echo ($data->img == "") ? base_url() . "/assets/images/logo.png" : base_url() . "/assets/images/" . $data->img; ?>">
                                                </td>
                                                <td>
                                                    <center>
                                                        <button type="submit" class="btn btn-xs btn-info"
                                                                data-toggle="modal"
                                                                data-target="#myEdit<?php echo $data->id_uts; ?>">Edit
                                                        </button>
                                                        <a href="javascript:if(confirm('Hapus Data?')){document.location='<?php echo base_url(); ?>/index.php/Welcome/hapus_data/<?php echo $data->id_uts; ?>'}"
                                                           class="btn btn-xs btn-danger">Hapus</a>
                                                    </center>
                                                </td>

                                            </tr>

                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <!-- Modal Tambah -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(); ?>/index.php/Welcome/tambah_data"
                                  method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="email">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="email">Nim</label>
                                    <input type="text" class="form-control" id="nim" placeholder="Nim" name="nim">
                                </div>
                                <div class="form-group">
                                    <label for="email">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl" placeholder="Tanggal Lahir"
                                           name="tgl">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Jenis Kelamin</label>
                                    <input type="radio" name="jenis_kelamin" value="laki-laki"/>Laki-laki
                                    <input type="radio" name="jenis_kelamin" value="perempuan"/>Perempuan
                                </div>
                                <div class="form-group">
                                    <label for="email">Hobi</label><br>
                                    <input type="checkbox" name="hobi[]" value="Memasak">Memasak<br>
                                    <input type="checkbox" name="hobi[]" value="Coding">Coding<br>
                                    <input type="checkbox" name="hobi[]" value="Tidur">Tidur<br>
                                    <input type="checkbox" name="hobi[]" value="Travel">Travel<br>
                                </div>
                                <div class="form-group">
                                    <label for="email">Asal Kabupaten</label>
                                    <select class="form-control" name="kabupaten">
                                        <option value="Tabanan">Tabanan</option>
                                        <option value="Badung">Badung</option>
                                        <option value="Denpasar">Denpasar</option>
                                        <option value="Badung">Badung</option>
                                        <option value="Bangli">Bangli</option>
                                        <option value="Klungkung">Klungkung</option>
                                        <option value="Karangasem">Karangasem</option>
                                        <option value="Buleleng">Buleleng</option>
                                        <option value="Jembrana">Jembrana</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input type="file" class="form-control" name="filefoto">
                                </div>

                                <button type="submit" class="btn btn-info">Simpan</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal Update -->

            <?php
            foreach ($sql1->result_array() as $item):
                $id = $item['id_uts'];
                $nama = $item['nama'];
                $nim = $item['nim'];
                $tgl = $item['tgl'];
                $email = $item['email'];
                $jenis_kelamin = $item['jenis_kelamin'];
                $kabupaten = $item['kabupaten'];
                $hobi = explode(',', $item['hobi']);
                $img = $item['img'];
                ?>

                <div class="modal fade" id="myEdit<?php echo $id; ?>" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url(); ?>/index.php/Welcome/edit_data/<?php echo $id; ?>"
                                      method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="email">Nama</label>
                                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama"
                                               value="<?php echo $nama; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Nim</label>
                                        <input type="text" class="form-control" id="nim" placeholder="nim" name="nim"
                                               value="<?php echo $nim; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl" placeholder="tgl" name="tgl"
                                               value="<?php echo $tgl; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="email"
                                               name="email" value="<?php echo $email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Jenis Kelamin</label>
                                        <label><input type="radio" name="jenis_kelamin"
                                                      value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ? "checked" : "" ?>/>Laki-laki</label>
                                        <label><input type="radio" name="jenis_kelamin"
                                                      value="perempuan" <?php echo ($jenis_kelamin == 'perempuan') ? "checked" : "" ?>/>Perempuan</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Hobi</label><br>
                                        <input type="checkbox" name="hobi[]"
                                               value="Memasak" <?php in_array('Memasak', $hobi) ? print "checked" : ""; ?>>Memasak<br>
                                        <input type="checkbox" name="hobi[]"
                                               value="Coding" <?php in_array('Coding', $hobi) ? print "checked" : ""; ?>>Coding<br>
                                        <input type="checkbox" name="hobi[]"
                                               value="Tidur" <?php in_array('Tidur', $hobi) ? print "checked" : ""; ?>>Tidur<br>
                                        <input type="checkbox" name="hobi[]"
                                               value="Travel" <?php in_array('Travel', $hobi) ? print "checked" : ""; ?>>Travel<br>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Kabupaten</label>
                                        <select class="form-control" name="kabupaten">
                                            <option value="Tabanan" <?php echo ($kabupaten == 'Tabanan') ? "selected" : "" ?> >
                                                Tabanan
                                            </option>
                                            <option value="Badung" <?php echo ($kabupaten == 'Badung') ? "selected" : "" ?>>
                                                Badung
                                            </option>
                                            <option value="Denpasar"
                                            <<?php echo ($kabupaten == 'Denpasar') ? "selected" : "" ?>>Denpasar
                                            </option>
                                            <option value="Bangli" <?php echo ($kabupaten == 'Bangli') ? "selected" : "" ?>>
                                                Bangli
                                            </option>
                                            <option value="Klungkung" <?php echo ($kabupaten == 'Klungkung') ? "selected" : "" ?>>
                                                Klungkung
                                            </option>
                                            <option value="Karangasem" <?php echo ($kabupaten == 'Karangasem') ? "selected" : "" ?>>
                                                Karangasem
                                            </option>
                                            <option value="Buleleng" <?php echo ($kabupaten == 'Buleleng') ? "selected" : "" ?> >
                                                Buleleng
                                            </option>
                                            <option value="Jembrana" <?php echo ($kabupaten == 'Jembrana') ? "selected" : "" ?> >
                                                Jembrana
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Upload Foto</label>
                                        <div>
                                            <input type="file" class="form-control" name="filefoto">
                                            <center>
                                                <img height="100px" width="100px" style="margin-top: 10px;"
                                                     src="<?php echo ($img == "") ? base_url() . "/assets/images/logo.png" : base_url() . "/assets/images/" . $img; ?>">
                                            </center>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url(); ?>assets/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>