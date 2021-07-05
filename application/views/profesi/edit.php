<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT jenis_wisata</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <?php $this->load->view('template/header'); ?>
    <body>
    <div class="container-fluid">
           
                <?php echo form_open_multipart('jenis_wisata/update'); ?>
                    
				<input type="hidden" name="id" id="id" value="<?php echo $jenis_wisata->id; ?>"/>
				
                        <label for="">Nama</label>
                        <input type="text" name="nama" placeholder="masukan nama jenis_wisata" value="<?= $jenis_wisata->nama?>" class="form-control">
                        
                        
           
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    
                        <?php echo form_close(); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
    </body>
</html>