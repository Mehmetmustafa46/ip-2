@extends('layout')

@section('title', 'Rezervasyonlar')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Rezervasyonlar</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Rezervasyon Tipi</th>
                <th>Rezervasyon Tarihi</th>
                <th>Toplam Tutar</th>
                <th>Durum</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rezervasyonlar as $rezervasyon)
                <tr>
                    <td>{{ $rezervasyon->RezervasyonTipi }}</td>
                    <td>{{ $rezervasyon->RezervasyonTarihi }}</td>
                    <td>{{ $rezervasyon->ToplamTutar }} ₺</td>
                    <td>{{ $rezervasyon->Durum }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
            font-family: Arial, sans-serif;
        }

        .table th, .table td {
            text-align: left;
            padding: 10px;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .table-bordered {
            border: 1px solid #ddd;
        }

        .thead-dark {
            background-color: #343a40;
            color: white;
        }

        /* Hover effect for rows */
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Style for the alert message */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
    </style>
@endsection

