<?php
class Kalkulator{
    private $x;
    private $y;

    public function setPrima($x, $y){
        $this->x = $x;
        $this->y = $y;
            $hasil = true;
            if ($x > 1) { 
                for ($i = 2; $i < $x; $i++)
                {
                    if ($x % $i == 0)
                        $hasil = false;
                }
                echo 'Angka <b>'.$x.'</b><br/>';
                echo $hasil ? 'Termasuk bilangan prima' : 'Bukan bilangan prima';
        }elseif ($x == 1) {
            echo 'Angka <b>'.$x.'</b><br>';
            echo 'Bukan bilangan prima';
        }else{
            echo 'Bilangan '.$x.' berada dibawah 1';
        }
    }

    public function setUrut($x, $y){
        $this->x = $x;
        $this->y = $y;
        if ($x <= $y) {
            for ($l = $x; $l <= $y; $l++) {
                if ($l % 30 == 0) {
                    echo "{$l}<br>";
                    continue;
                }
                echo "{$l} ";
            }
        }else{
            for ($l = $x; $l >= $y; $l--) {
                if ($l %  30 == 0) {
                    echo "{$l}<br>";
                    continue;
                }
                echo "{$l} ";
            }
        }
    }

    public function setImt($x, $y){
        $this->x = $x;
        $this->y = $y;
        $z = $y / 100;
        $hasil = $x / ($z**2); 
        switch ($hasil) {
            case $hasil < 17 :
                echo '<table border="1" cellspacing="0" cellpadding="3">
                <thead>
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
                echo '<table border="1" cellspacing="0" cellpadding="3">
                <thead>
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
                echo '<table border="1" cellspacing="0" cellpadding="3">
                <thead>
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
                        <th>Berat badan ideal</th>
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
                echo '<table border="1" cellspacing="0" cellpadding="3">
                <thead>
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
                echo '<table border="1" cellspacing="0" cellpadding="3">
                <thead>
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
}
?>