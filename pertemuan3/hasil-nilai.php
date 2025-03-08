<?php
if (!isset($_POST['nama']))
    echo '<script>alert("Anda harus mengisi form terlebih dahulu")</script>
    <meta http-equiv="refresh" content="0; url=form-nilai.php">';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8d3e0; 
            font-family: 'Poppins', sans-serif;
        }
        .table {
            background-color: white; 
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        th, td {
            padding: 15px; 
        }
        h1 {
            color: #d5006d; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Hasil Nilai Mahasiswa</h1>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td><?= $_POST['nama'] ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?= $_POST['nim'] ?></td>
            </tr>
            <tr>
                <th>Rombel</th>
                <td><?= $_POST['rombel'] ?></td>
            </tr>
            <tr>
                <th>Mata Kuliah</th>
                <td><?= $_POST['matkul'] ?></td>
            </tr>
            <tr>
                <th>Nilai Tugas</th>
                <td><?= $_POST['tugas'] ?></td>
            </tr>
            <tr>
                <th>Nilai UTS</th>
                <td><?= $_POST['uts'] ?></td>
            </tr>
            <tr>
                <th>Nilai UAS</th>
                <td><?= $_POST['uas'] ?></td>
            </tr>
            <tr>
                <th>Predikat</th>
                <td>
                    <?php
                    $tugas = $_POST['tugas'] * (35/100);
                    $uts = $_POST['uts'] * (30/100);
                    $uas = $_POST['uas'] * (35/100);
                    $total = $tugas + $uts + $uas;

                    if ($total <= 35) {
                        $pred = "E";
                    } elseif ($total <= 55) {
                        $pred = "D";
                    } elseif ($total <= 69) {
                        $pred = "C";
                    } elseif ($total <= 84) {
                        $pred = "B";
                    } elseif ($total <= 100) {
                        $pred = "A";
                    } else {
                        $pred = "Tidak Diketahui";
                    }
                    echo $pred;
                    ?>
                </td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>
                    <?php
                    switch ($pred) {
                        case 'A':
                            echo "Sangat Baik";
                            break;
                        case 'B':
                            echo "Baik";
                            break;
                        case 'C':
                            echo "Cukup";
                            break;
                        case 'D':
                            echo "Kurang";
                            break;
                        case 'E':
                            echo "Sangat Kurang";
                            break;
                        default:
                            echo "Tidak diketahui";
                            break;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>