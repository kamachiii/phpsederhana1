<?php
if (isset($_POST['bb']) && isset($_POST['tb'])) {
    $bb = $_POST['bb'];
    $b = $_POST['tb'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imt1-modified-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>FORM IMT</title>
</head>
<body style="cursor: wait;">
    <div class="container">
    <!-- penanganan form dengan method POST -->
	<form class="mb-3 card shadow mt-3 " method="post" action="">
    <div class="card-header bg-success">
        <h2 class="text-center text-white">Form Input</h2>
    </div>
    <div class="card-body mt-3">
		<label class="form-group">Berat Badan <b>(kg)</b></label>
		<input class="form-control" type="text" placeholder="Masukkan Berat Badan" name="bb" autocomplete="off" required>
        <br><br>
		<label class="form-group">Tinggi Badan <b>(cm)</b></label>
		<input class="form-control" placeholder="Masukkan Tinggi Badan" type="text" name="tb" autocomplete="off" required>
        <br><br>
        <button class="btn btn-success mt-3" type="submit" value="Kirim">Kirim</button>
        </div>
    </form>
    <br><br>
    <?php if(isset($_POST['bb'])) { ?>
    <div class="card mt-3 mb-3 shadow">
            <div class="card-header bg-success">
                <h2 class="text-center text-white">
                    Hasil Input
                </h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered- border-white table-success border mt-2 mb-4">
        <?php
            $tb = $b / 100;
            $hasil = $bb / ($tb**2);
            switch ($hasil) {
                case $hasil < 17 :
                    echo '<thead>
                        <tr>
                            <th></th>
                            <th>Kategori</th>
                            <th>IMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="2"><u>Kurus</u></th>
                            <th><u>Kekurangan berat badan tingkat berat</u></th>
                            <th> < 17,0 </th>
                        </tr>
                        <tr>
                            <td>Kekurangan berat badan tingkat rendah</td>
                            <td> 17,0 - 18,4 </td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>Berat badan ideal</td>
                            <td> 18,5 - 25,0 </td>
                        </tr>
                        <tr>
                            <td rowspan="2">Gemuk</td>
                            <td>Kelebihan berat badan tingkat ringan</td>
                            <td> 25,1 - 27,0 </th>
                        </tr>
                        <tr>
                            <td>Kelebihan berat badan tingkat berat</td>
                            <td> >27,0 </td>
                    </tbody>
                </table> ';
                break;
                case $hasil > 17 && $hasil < 18.5 :
                    echo '<thead>
                        <tr>
                            <th></th>
                            <th>Kategori</th>
                            <th>IMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="2"><u>Kurus</u></th>
                            <td>Kekurangan berat badan tingkat berat</td>
                            <td> < 17,0 </th>
                        </tr>
                        <tr>
                            <th><u>Kekurangan berat badan tingkat rendah</u></th>
                            <th> 17,0 - 18,4 </th>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>Berat badan ideal</td>
                            <td> 18,5 - 25,0 </td>
                        </tr>
                        <tr>
                            <td rowspan="2">Gemuk</td>
                            <td>Kelebihan berat badan tingkat ringan</td>
                            <td> 25,1 - 27,0 </th>
                        </tr>
                        <tr>
                            <td>Kelebihan berat badan tingkat berat</td>
                            <td> >27,0 </td>
                    </tbody>
                </table> ';
                break;
                case $hasil > 18.4 && $hasil < 25.1 :
                    echo '<thead>
                        <tr>
                            <th></th>
                            <th>Kategori</th>
                            <th>IMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">Kurus</td>
                            <td>Kekurangan berat badan tingkat berat</td>
                            <td> < 17,0 </th>
                        </tr>
                        <tr>
                            <td>Kekurangan berat badan tingkat rendah</td>
                            <td> 17,0 - 18,4 </td>
                        </tr>
                        <tr>
                            <th><u>Normal</u></th>
                            <th><u>Berat badan ideal</u></th>
                            <th> 18,5 - 25,0 </th>
                        </tr>
                        <tr>
                            <td rowspan="2">Gemuk</td>
                            <td>Kelebihan berat badan tingkat ringan</td>
                            <td> 25,1 - 27,0 </th>
                        </tr>
                        <tr>
                            <td>Kelebihan berat badan tingkat berat</td>
                            <td> >27,0 </td>
                    </tbody>
                </table> ';
                break;
                case $hasil > 25 && $hasil < 27 :
                    echo '<thead>
                        <tr>
                            <th></th>
                            <th>Kategori</th>
                            <th>IMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">Kurus</td>
                            <td>Kekurangan berat badan tingkat berat</td>
                            <td> < 17,0 </th>
                        </tr>
                        <tr>
                            <td>Kekurangan berat badan tingkat rendah</td>
                            <td> 17,0 - 18,4 </td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>Berat badan ideal</td>
                            <td> 18,5 - 25,0 </td>
                        </tr>
                        <tr>
                            <th rowspan="2"><u>Gemuk</u></th>
                            <th><u>Kelebihan berat badan tingkat ringan</u></th>
                            <th> 25,1 - 27,0 </th>
                        </tr>
                        <tr>
                            <td>Kelebihan berat badan tingkat berat</td>
                            <td> >27,0 </td>
                    </tbody>
                </table> ';
                break;
                case $hasil > 27 :
                    echo '<thead>
                        <tr>
                            <th></th>
                            <th>Kategori</th>
                            <th>IMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">Kurus</td>
                            <td>Kekurangan berat badan tingkat berat</td>
                            <td> < 17,0 </th>
                        </tr>
                        <tr>
                            <td>Kekurangan berat badan tingkat rendah</td>
                            <td> 17,0 - 18,4 </td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>Berat badan ideal</td>
                            <td> 18,5 - 25,0 </td>
                        </tr>
                        <tr>
                            <th rowspan="2"><u>Gemuk</u></th>
                            <td>Kelebihan berat badan tingkat ringan</td>
                            <td> 25,1 - 27,0 </th>
                        </tr>
                        <tr>
                            <th><u>Kelebihan berat badan tingkat berat</u></th>
                            <th> >27,0 </th>
                    </tbody>
                </table> ';
                break;
                default :
                echo "";
                break;
            }
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(isset($hasil)) {
        echo "<script>
        Swal.fire(
            'Sukses !',
            'Berhasil Menghitung IMT !',
            'success'
        );
        </script>";
    }?>
</body>
</html>