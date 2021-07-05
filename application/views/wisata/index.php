<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $this->load->view('template/header'); ?>
<body>
<div class="container-fluid">

<a href="<?= base_url()?>index.php/Wisata/add" class="btn btn-primary">add</a>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Data Wisata</h1>

<table class="table table-dark">
<thead>
                            <tr>
                                <th>ID</th>
                                <th>nama</th>
                                <th>Deskripsi</th>
                                <th>Jenis wisata</th>
                                <th>fasilitas</th>
                                <th>bintang</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>latlong</th>

                                <th>Email</th>
                                <th>web</th>
                                <th>Jenis Kuliner</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                                foreach($Wisata->result() as $Wisata){
                                    echo '
                                    <tr>
                                        <td>'.$Wisata->id.'</td>
                                        <td>'.$Wisata->nama.'</td>
                                        <td>'.$Wisata->deskripsi.'</td>
                                        <td>'.$Wisata->jenis_wisata_id.'</td>
                                        <td>'.$Wisata->fasilitas.'</td>
                                        <td>'.$Wisata->bintang.'</td>
                                        <td>'.$Wisata->kontak.'</td>
                                        <td>'.$Wisata->alamat.'</td>
                                        <td>'.$Wisata->latlong.'</td>
                                        <td>'.$Wisata->email.'</td>
                                        <td>'.$Wisata->web.'</td>
                                        <td>'.$Wisata->jenis_kuliner_id.'</td>
                                        
                                        
                                        
                                        
                                      
                                        
                                        
                                        <td>
                                        <a href="'.base_url().'index.php/Wisata/view/'.$Wisata->id.'">View</a>
                                        <a href="'.base_url().'index.php/Wisata/edit/'.$Wisata->id.'">Edit</a>
                                        <a  onclick="return confirm(‘Yakin Hapus?’)" href="'.base_url().'index.php/Wisata/delete/'.$Wisata->id.'">Delete</a>
                                        </td>
                                        
                                    </tr>';
                                }
                            ?>
                        </tbody>
</table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; SIWIKODE 2021</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


</div>
</div>
</div>
</div>


</body>
</html>
