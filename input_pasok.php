<?php
include "config/koneksi.php";
include "library/controller.php";

$go = new controller();
$tabel = "tbl_distributor";
$redirect = "?menu=input_pasok";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pasok Buku</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		    Form Pasok Buku
	    </div>
	    <div class="card-body">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Distributor</label>
                    <?php
                $data = $go->tampil($con,$tabel);
                $no = 0;
                if($data ==""){
                    echo "<tr><td colspan='5'>No Record</td></tr>";
                }else{
                    foreach($data as $r){
                    $no++
                ?>
                <select type="text" name="nama_distributor"  class="form-control" id="exampleFormControlInput1" required>
                <option value="<?php echo $edit['nama_distributor']?>"><?php echo @$edit['nama_distributor']?></option>
                    <?php
                    $jenis = $go->tampil($con,$tabel);
                    foreach($jenis as $r){
                    ?>
                    <option value="<?php echo $r['nama_distributor'] ?>"><?php echo $r['nama_distributor']?></option>
                    <?php } } } ?>
                </select>
                </div>
            </form>
	    </div>
    </div>
</body>
</html>