<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="gojo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kalkulator</title>
</head>
<body class="container bg-primary bg-opacity-75" style="cursor: wait;">
    <?php
        include "fungsi.php";
        $Kalku = new Kalkulator();
        echo '<center class="mt-2 mb-3">';
        echo '<H3 class="text-info">Latihan Membuat Program</H3>';
        echo '<div class="card shadow-lg bg-secondary">';
        echo '<form class="input-group" action="kalkulator.php" method="POST">';
        echo '<input class=" border border-0 form-control bg-info text-white" type="text" name="x" autocomplete="off" placeholder="Nilai 1/Berat Badan" required>';
        echo '<input class="border border-0 form-control bg-info text-white" type="text" name="y" autocomplete="off" placeholder="Nilai 2/Tinggi Badan" required>';
        echo '<select class="border border-0 form-select bg-info text-white" name="operasi">
            <option selected hidden>Chose type...</option>
            <option value="Urut">Urut Angka</option>
            <option value="IMT">IMT</option>
            <option value="Prima">Prima</option>
            </select>';
        echo '<button class="btn btn-info text-white" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
      </svg></button>';
        echo '</form></center></div>';
        echo '<div class="text-white input text-center table">';
        if ($_POST) {
            $x = $_POST['x'];
            $y = $_POST['y'];
            if ($_POST['operasi'] == "Urut") {
                echo "<br>";
                echo $Kalku->setUrut($x, $y)."<br>";
            } elseif ($_POST['operasi'] == "IMT") {
                echo "<center><br><br>";
                echo $Kalku->setImt($x, $y);
                echo "</center><br><br>";
            } elseif ($_POST['operasi'] == "Prima") {
                echo "<center><br><br>";
                echo $Kalku->setPrima($x, $y);
                echo "</center><br><br>";
            }
        }else {
            echo '<center>
            <div class="spinner-border m-5" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            </center>';
        }
        echo '</div>';
    ?>
</body>
</html>