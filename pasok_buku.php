<?php
include "config/koneksi.php";
include "library/controller.php";

$go = new controller();
$tabel = "tbl_distributor , tbl_buku, tbl_pasok";
$redirect = "?menu=pasok_buku";
@$where = "id_distributor = $_GET[id]";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasok Buku</title>
</head>
<body>
<div class="container-fluid" id= "content" >
    <div class="card">
	    <div class="card-header">
		    LAPORAN PASOK BUKU
	    </div>
    </div>
    <div style="padding:10px;">
        <form class="d-flex">
            <label class="me-3">Periode</label>
            <input class="form-control me-3" type="date" name="tglawal" aria-label="Search">
            <label class="me-3">Sd</label>
            <input class="form-control me-3" type="date" name="tglakhir" aria-label="Search">
            <button class="btn btn-primary me-2" type="submit" name="tampi" value="tampil">Tampilkan</button>
            <button class="btn btn-primary me-2" type="submit">Refresh</button>
            <button class="btn btn-outline-success" type="submit">cetak</button>
        </form>
        <div class="table-responsive">
            <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="data">
                <tr>
                    <th>No</th>
                    <th>Nama Distributor</th>
                    <th>Judul Buku</th>
                    <th>NO ISBN</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Jumlah Pasok</th>
                    <th>Tanggal</th>

                </tr>

                <?php
                
                $no=0;
                $data = $go->tampil($con,$tabel);    
                if($data ==""){
                    echo "<tr><td colspan='5'>No Record</td></tr>";
                }else{
                    foreach($data as $r){
                    $no++

               
                ?>
                <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $r['nama_distributor']?></td>
                    <td><?php echo $r['judul']?></td>
                    <td><?php echo $r['noisbn']?></td>
                    <td><?php echo $r['penulis']?></td>
                    <td><?php echo $r['penerbit']?></td>
                    <td><?php echo $r['harga_jual']?></td>
                    <td><?php echo $r['stok']?></td>
                    <td><?php echo $r['jumlah']?></td>
                    <td><?php echo $r['tanggal']?></td>
                </tr>
                <?php } }?>
            </table>
        </div>
    </div>
</div>
</body>
</html>