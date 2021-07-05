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

<a href="<?= base_url()?>index.php/Testimoni/add" class="btn btn-primary">add</a>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Data Testimoni</h1>
<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M7.488 24h-.001c-.266 0-.487-.216-.487-.487v-.513c-1.104 0-2-.896-2-2v-13c0-1.104.896-2 2-2h2v-5c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v5h2c1.105 0 2 .896 2 2v13c0 1.104-.895 2-2 2v.488c0 .283-.228.512-.512.512h-.001c-.265 0-.487-.214-.487-.487v-.513h-8v.488c0 .283-.229.512-.512.512zm9.012-13c.277 0 .5-.224.5-.5s-.223-.5-.5-.5h-9c-.276 0-.5.224-.5.5s.224.5.5.5h.507c-.072 1.037.389 1.936.996 2.352l-.003 1.476 3.529 3.543 2.834-2.823-3.529-3.542-1.289-.003c-.124-.364-.335-.721-.578-1.003h6.533zm-4.851 3.271l1.821 1.821-.354.353-1.821-1.82.354-.354zm.683 1.744l-.353.354-1.214-1.214.354-.353 1.213 1.213zm-.153-2.274l1.821 1.821-.354.353-1.82-1.821.353-.353zm-1.572-.726c-.102.283-.331.462-.606.539.042.416.551.6.85.303.279-.276.142-.754-.244-.842zm-1.361-2.015c.334.257.614.638.763 1.002l-1.003-.002-.001.682-.018-.022c-.332-.401-.529-.99-.477-1.66h.736zm4.254-9h-3c-.276 0-.5.224-.5.5v3.5h4v-3.5c0-.276-.224-.5-.5-.5z"/></svg>
<table class="table table-dark">
<thead>
                            <tr>
                                <th>ID</th>
                                <th>nama</th>
                                <th>Komentar</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                                foreach($Testimoni->result() as $Testimoni){
                                    echo '
                                    <tr>
                                        <td>'.$Testimoni->id.'</td>
                                        <td>'.$Testimoni->nama.'</td>
                                        <td>'.$Testimoni->komentar.'</td>
                                        
                                      
                                        
                                        
                                        <td>
                                        <a href="'.base_url().'index.php/Testimoni/view/'.$Testimoni->id.'">View</a>
                                        <a href="'.base_url().'index.php/Testimoni/edit/'.$Testimoni->id.'">Edit</a>
                                        <a  onclick="return confirm(‘Yakin Hapus?’)" href="'.base_url().'index.php/Testimoni/delete/'.$Testimoni->id.'">Delete</a>
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
