@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('toys.index') }}" class="btn btn-secondary btn-sm">&larr; Kembali ke Katalog</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="{{ asset('assets/images/' . $toy->image) }}" 
                     class="img-fluid rounded" 
                     style="max-height: 200px; object-fit: contain;" 
                     alt="{{ $toy->name }}">
            </div>
            <div class="col-md-7">
                <span class="badge bg-info text-dark mb-2">{{ $toy->category }}</span>
                <h3 class="fw-bold mb-2">{{ $toy->name }}</h3>
                
                <p class="fs-4 text-success fw-bold mb-3">
                    Rp {{ number_format($toy->price, 0, ',', '.') }}
                </p>

                <div class="mb-2">
                    <strong>Rekomendasi Usia:</strong> {{ $toy->age_group }}
                </div>
                <div class="mb-3">
                    <strong>Kategori Mainan:</strong> {{ $toy->category }}
                </div>

                <h5>Deskripsi Produk:</h5>
                <p class="text-muted">{{ $toy->description }}</p>

                @php
                    // Ganti dengan nomor WhatsApp Anda (format awal 62)
                    $nomorWA = '6289639112308'; 
                    $pesan = "Halo, saya ingin membeli produk *" . $toy->name . "* dengan harga Rp " . number_format($toy->price, 0, ',', '.') . ". Apakah stok masih tersedia?";
                    $urlWA = "https://wa.me/" . $nomorWA . "?text=" . urlencode($pesan);
                @endphp

                <!-- Tombol mengarah ke variabel $urlWA, bukan route Laravel -->
                <a href="{{ $urlWA }}" target="_blank" class="btn btn-success mt-3">
                    <i class="bi bi-whatsapp"></i> Beli Produk
                </a>
            </div>
        </div>
    </div>
</div>
@endsection