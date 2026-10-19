@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Katalog Mainan Anak</h2>
</div>

<div class="row g-4">
    @foreach ($toys as $item)
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <!-- Container gambar dengan tinggi pas dan tidak terpotong -->
            <div class="p-3 text-center bg-white rounded-top d-flex align-items-center justify-content-center" style="height: 160px;">
                <img src="{{ asset('assets/images/' . $item->image) }}" 
                     class="img-fluid" 
                     style="max-height: 140px; width: 100%; object-fit: contain;" 
                     alt="{{ $item->name }}">
            </div>
            
            <div class="card-body d-flex flex-column">
                <span class="badge bg-info text-dark mb-2 align-self-start">{{ $item->category }}</span>
                <h5 class="card-title fw-semibold fs-6">{{ $item->name }}</h5>
                <p class="card-text text-muted small mb-2">Usia: {{ $item->age_group }}</p>
                
                <div class="mt-auto">
                    <p class="text-primary fw-bold fs-6 mb-2">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    <a href="{{ route('toys.show', $item->id) }}" class="btn btn-primary btn-sm w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection