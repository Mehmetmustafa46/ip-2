@extends('layout')

@section('title', 'Kampanyalar')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Kampanyalar</h1>

        <div class="row">
            @foreach($kampanyalars as $kampanya)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://cdn2.enuygun.com/media/lib/1120x520/uploads/image/otel2024-57287.webp" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kampanya->isim }}</h5>
                            <p class="card-text">{{ Str::limit($kampanya->aciklama, 100) }}</p>

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

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
@endsection
