<?php

<h1>Daftar Laporan Magang</h1>
<table>
    <tr>
        <th>Nama Intern</th>
        <th>Perusahaan</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
    </tr>
    @foreach($reports as $report)
    <tr>
        <td>{{ $report->intern_name }}</td>
        <td>{{ $report->company_name }}</td>
        <td>{{ $report->start_date }}</td>
        <td>{{ $report->end_date }}</td>
    </tr>
    @endforeach
</table>
