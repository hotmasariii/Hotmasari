<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>No</th>
        <th colspan="2">Data</th>
    </tr>
    <tr>
        <td></td>
        <th>Nama</th>
        <th>Nilai</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Hotma</td>
        <td>70</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Mitsuri</td>
        <td>80</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Sari</td>
        <td>90</td>
    </tr>
</table>

</body>
</html>