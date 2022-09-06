<html>
	<head>
    	<link rel="icon" href="../beluga-modified.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	    <title>Bilangan Prima</title>
	</head>
	<body style="cursor: wait;">   
	<!-- penanganan form dengan method POST -->
		<form class="text-center" method="post" action="">
    <input type="text" class="form-control is-valid " value="Hasil" hidden required>
    <div class="valid-feedback">
    <?php
        if (isset($_POST['n1'])) {
            $n1 = $_POST['n1'];
            $hasil = true;
            if ($n1 > 1) { 
                for ($i = 2; $i < $n1; $i++) {
                    if ($n1 % $i == 0)
                        $hasil = false;
                }
                echo 'Angka <b>'.$n1.'</b><br/>';
                echo $hasil ? 'Termasuk bilangan prima' : 'Bukan bilangan prima';
        }elseif ($n1 == 1) {
            echo 'Angka <b>'.$n1.'</b><br>';
            echo 'Bukan bilangan prima';
        }else{
            echo 'Bilangan tidak bisa dibawah atau sama dengan 0';
        }
        }
        ?>
    </div>
  </div>
        <div class="input-group mt-2">
			<input placeholder="Input Number" type="text" class="form-control" name="n1" autocomplete="off" required>
            <br><br>
            <button class="btn btn-outline-secondary">Submit</button>
            </div>
        </form>
        <br>
	</body>
</html>