<!-- NIM: H1D022006
Nama: Jehian Athaya Tsani Az Zuhry
Matkul: Pemrograman Web I Kelas A -->

<!-- jawaban nomor 2 ada di cekangka.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
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
                    <button name="operasi" type="submit" value="+">+</button>
                    <button name="operasi" type="submit" value="-">-</button>
                    <button name="operasi" type="submit" value="*">*</button>
                    <button name="operasi" type="submit" value="/">/</button>
                </td>
            </tr>
            <tr>
                <td>Hasil</td>
                <td>
                    <?php
                    // cek apakah tombol operasi sudah di klik
                    if (isset($_POST['operasi'])) {
                        $angka1 = $_POST['angka1'];
                        $angka2 = $_POST['angka2'];
                        $operasi = $_POST['operasi'];
                        // cek operasi apa yang dipilih
                        switch ($operasi) {
                            case '+':
                                $hasil = $angka1 + $angka2;
                                break;
                            case '-':
                                $hasil = $angka1 - $angka2;
                                break;
                            case '*':
                                $hasil = $angka1 * $angka2;
                                break;
                            case '/':
                                if ($angka2 != 0) {
                                    $hasil = $angka1 / $angka2;
                                } else {
                                    $hasil = "Tidak bisa dibagi dengan nol";
                                }
                                break;
                            default:
                                $hasil = "Operasi tidak valid";
                                break;
                        }
                        // tampilkan hasil
                        echo '<input name="hasil" type="text" value="' . $hasil . '" readonly>';
                    } else {
                        // jika tombol operasi belum di klik
                        echo '<input name="hasil" type="text" value="" readonly>';
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>