<html>
	<head>
    	<link rel="icon" href="../beluga-modified.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	    <title>Looping</title>
	</head>
	<body style="cursor: wait;">   
	<!-- penanganan form dengan method POST -->
		<form method="post" action="">
        <div class="container">
        <div class="card shadow mt-5 mb-3">
        <div class="input-group">
  <span class="input-group-text">Input Number</span>
  <input type="text" name="n1" placeholder="First Number" class="form-control" autocomplete="off" required>
  <input type="text" name="n2" placeholder="Last Number" class="form-control" autocomplete="off" required>
  <button class="btn btn-outline-secondary">Kirim</button>
</div>
        </div>
        <br>
        <?php
        // memasukkan data
        if (isset($_POST['n1'])) {
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                //Menggunakan if untuk memilih
                if ($n1 <= $n2) {
                    for ($l = $n1; $l <= $n2; $l++) {
                        if ($l % 30 == 0) {
                            echo "{$l}<br>";
                            continue;
                        }
                        echo "{$l} ";
                    }
                }else{
                    for ($l = $n1; $l >= $n2; $l--) {
                        if ($l %  30 == 0) {
                            echo "{$l}<br>";
                            continue;
                        }
                        echo "{$l} ";
                    }
                }
            }
        ?>
        </div>
		</form>
	</body>
</html>