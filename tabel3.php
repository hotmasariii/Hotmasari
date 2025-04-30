<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai</title>
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

        /* Optional: Add some margin to the table */
        table {
            margin: auto;
            max-width: 800px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
    </tr>
    <tr>
        <td rowspan="2">1</td>
        <td rowspan="2">Hotma</td>
        <td>Pemrograman Web</td>
        <td>70</td>
    </tr>
    <tr>
        <td>Pemrograman Web Praktik</td>
        <td>90</td>
    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Sari</td>
        <td>Pemrograman Web</td>
        <td>60</td>
    </tr>
    <tr>
        <td>Pemrograman Web Praktik</td>
        <td>80</td>
    </tr>
</table>

</body>
</html>