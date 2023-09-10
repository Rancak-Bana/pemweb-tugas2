<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Angka</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Angka Pertama</td>
                <td>
                    <input name="angka1" type="number" value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>Angka Kedua</td>
                <td>
                    <input name="angka2" type="number" value="<?php echo isset($_POST['angka2']) ? $_POST['angka2'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button name="operasi" type="submit">Cek Angka</button>
                </td>
            </tr>
            <tr>
                <td>Angka Genap</td>
                <td>
                    <?php
                    if (isset($_POST['operasi'])) {
                        $angka1 = $_POST['angka1'];
                        $angka2 = $_POST['angka2'];
                        // loop untuk tampil angka genap
                        $hasil = "";
                        $i = $angka1;
                        while ($i <= $angka2) {
                            if ($i % 2 == 0) {
                                $hasil .= $i . " ";
                            }
                            $i++;
                        }
                        // tampilkan hasil
                        echo '<input name="hasil" type="text" value="' . $hasil . '" readonly>';
                    } else {
                        echo '<input name="hasil" type="text" value="" readonly>';
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
