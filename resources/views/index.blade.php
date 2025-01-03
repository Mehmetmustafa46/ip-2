@extends('layouts.app')

@section('title', 'Rezervasyonlar')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Rezervasyonlar</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('rezervasyonlar.create') }}" class="btn btn-primary mb-3">Yeni Rezervasyon Ekle</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Otel</th>
                <th>Kullanıcı</th>
                <th>Giriş Tarihi</th>
                <th>Çıkış Tarihi</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rezervasyonlars as $rezervasyon)
                <tr>
                    <td>{{ $rezervasyon->id }}</td>
                    <td>{{ $rezervasyon->otel->isim }}</td> <!-- Otel ismi -->
                    <td>{{ $rezervasyon->kullanici->isim }}</td> <!-- Kullanıcı ismi -->
                    <td>{{ $rezervasyon->giris_tarihi }}</td>
                    <td>{{ $rezervasyon->cikis_tarihi }}</td>
                    <td>
                        <a href="{{ route('rezervasyonlar.edit', $rezervasyon->id) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('rezervasyonlar.destroy', $rezervasyon->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        table {
            margin-top: 20px;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .btn {
            margin: 5px;
        }
    </style>
@endsection
