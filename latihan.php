<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Hello World dengan PHP</h1>
<?php
    echo "Hello World!";
?>

<h2>Tabel Data</h2>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Alice</td>
        <td>25</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Bob</td>
        <td>30</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Charlie</td>
        <td>28</td>
    </tr>
</table>

<h2>Formulir</h2>
<form action="" method="post">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="age">Umur:</label>
    <input type="number" id="age" name="age" required>
    <br><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo "<h3>Data yang Dikirim:</h3>";
    echo "Nama: $name<br>";
    echo "Umur: $age";
}
?>

</body>
</html>