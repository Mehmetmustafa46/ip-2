@extends('layouts.app')

@section('title', 'Rezervasyon Düzenle')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Rezervasyon Düzenle</h1>

        <form action="{{ route('rezervasyonlar.update', $rezervasyon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="otel_id" class="form-label">Otel</label>
                <select name="otel_id" id="otel_id" class="form-control">
                    @foreach($otellers as $otel)
                        <option value="{{ $otel->id }}" @if($otel->id == $rezervasyon->otel_id) selected @endif>
                            {{ $otel->isim }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="kullanici_id" class="form-label">Kullanıcı</label>
                <select name="kullanici_id" id="kullanici_id" class="form-control">
                    @foreach($kullanicilar as $kullanicis )
                        <option value="{{ $kullanicis->id }}" @if($kullanicis->id == $rezervasyon->kullanicis_id) selected @endif>
                            {{ $kullanicis->isim }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="giris_tarihi" class="form-label">Giriş Tarihi</label>
                <input type="date" class="form-control" id="giris_tarihi" name="giris_tarihi" value="{{ $rezervasyon->giris_tarihi }}">
            </div>

            <div class="mb-3">
                <label for="cikis_tarihi" class="form-label">Çıkış Tarihi</label>
                <input type="date" class="form-control" id="cikis_tarihi" name="cikis_tarihi" value="{{ $rezervasyon->cikis_tarihi }}">
            </div>

            <button type="submit" class="btn btn-success">Güncelle</button>
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
