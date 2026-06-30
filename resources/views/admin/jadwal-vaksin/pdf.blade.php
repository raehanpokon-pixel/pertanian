<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <style>

        body{
            font-family: DejaVu Sans;
            font-size:12px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table,th,td{
            border:1px solid black;
        }

        th{
            background:#164d27;
            color:white;
            padding:8px;
        }

        td{
            padding:8px;
        }

        h2{
            text-align:center;
        }

    </style>

</head>

<body>

<h2>
Kalender Jadwal Vaksin 
</h2>

<table>

<thead>

<tr>
    <th>No</th>
    <th>Nama Vaksin</th>
    <th>Tanggal</th>
    <th>Jam</th>
    <th>Lokasi</th>
    <th>Desa</th>
    <th>Status</th>
</tr>

</thead>

<tbody>

@foreach($jadwals as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->nama_vaksin }}</td>

<td>{{ $item->tanggal }}</td>

<td>{{ $item->jam }}</td>

<td>{{ $item->lokasi }}</td>

<td>{{ $item->desa }}</td>

<td>{{ $item->status }}</td>

</tr>

@endforeach

</tbody>

</table>

</body>
</html>