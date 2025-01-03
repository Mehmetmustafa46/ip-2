@extends('layouts.app')

@section('title', 'Yeni Rezervasyon Ekle')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Yeni Rezervasyon Ekle</h1>

        <form action="{{ route('rezervasyonlar.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="otel_id" class="form-label">Otel</label>
                <select name="otel_id" id="otel_id" class="form-control">
                    @foreach($otellers as $otel)
                        <option value="{{ $otel->id }}">{{ $otel->isim }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="kullanici_id" class="form-label">Kullanıcı</label>
                <select name="kullanici_id" id="kullanici_id" class="form-control">
                    @foreach($kullanicilar as $kullanicis)
                        <option value="{{ $kullanicis->id }}">{{ $kullanicis->isim }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="giris_tarihi" class="form-label">Giriş Tarihi</label>
                <input type="date" class="form-control" id="giris_tarihi" name="giris_tarihi">
            </div>

            <div class="mb-3">
                <label for="cikis_tarihi" class="form-label">Çıkış Tarihi</label>
                <input type="date" class="form-control" id="cikis_tarihi" name="cikis_tarihi">
            </div>

            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

    <style>
        .container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn {
            margin-top: 20px;
        }
    </style>
@endsection
