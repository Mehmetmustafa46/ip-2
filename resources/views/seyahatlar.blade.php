@extends('layout')

@section('title', 'Seyahatler')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Seyahatler</h1>

        <div class="row">
            @foreach($seyahatlars as $seyahat)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-xWiOPpioYIuKUZVzenEOWrm5pBDmozZLVw&s">
                        <div class="card-body">
                            <h5 class="card-title">{{ $seyahat->isim }}</h5>
                            <p class="card-text">{{ Str::limit($seyahat->aciklama, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
@endsection
