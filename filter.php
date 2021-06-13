<?php
include "config/koneksi.php";
include "library/controller.php";

$go = new controller();
$tabel = "tbl_distributor";
$redirect = "?menu=filter";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Pasok Buku</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		   Filter Pasok Berdasarkan DIstributor
	    </div>
	    <div class="card-body">
                <form method="post">
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
                    <?php } ?>
                </select>
                <?php } } ?>
                <button class="btn btn-primary " style="height:40px; width:100px; text-align:center; margin-top:10px;" type="submit">Lihat</button>
            </form>
        </div>
	</div>
</div>
</body>
</html>