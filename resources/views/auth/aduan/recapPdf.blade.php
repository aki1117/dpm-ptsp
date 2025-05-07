<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
    @page { margin: 10px; }
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 9px;
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        th, td {
            border: 1px solid #999;
            padding: 4px;
            text-align: left;
            word-wrap: break-word;
        }
        th {
            background-color: #eee;
        }
</style>
</head>

<body>
    <h2>Laporan Data Aduan</h2>
    <table>
        <thead>
            <tr>
                <th> Nama </th>
                <th> Jenis Kelamin </th>
                <th> Alamat rumah </th>
                <th> Pekerjaan </th>
                <th> Alamat kantor </th>
                <th> Email </th>
                <th> No KTP </th>
                <th> No Telp </th>
                <th> Jenis Aduan </th>
                <th> judul Laporan </th>
                <th> Isi Laporan </th>
                <th> Tanggal </th>
                <th> Lokasi </th>
                <th> Tujuan pengaduan </th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporans as $laporan)
            <tr>
                <td> {{ $laporan->name }} </td>
                <td> {{ $laporan->jenisKelamin == 1 ? 'Perempuan' : 'Laki-laki' }} </td>
                <td>
                    {{ $laporan->rumah }}
                </td>
                <td> {{ $laporan->pekerjaan }} </td>
                <td> {{ $laporan->kantor }} </td>
                <td> {{ $laporan->email }} </td>
                <td> {{ $laporan->ktp }} </td>
                <td>
                    {{ $laporan->phone_number }}
                </td>
                <td> {{ $laporan->jenis->name }} </td>
                <td> {{ $laporan->subjek }} </td>
                <td> {{ $laporan->isian }} </td>
                <td> {{ $laporan->tanggal_kejadian }} </td>
                <td> {{ $laporan->lokasi}} </td>
                <td>
                    {{ $laporan->tujuan_pengaduan }}
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
</body>

</html>