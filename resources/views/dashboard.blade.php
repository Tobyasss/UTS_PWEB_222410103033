@extends('layouts.app')

@section('content')
<div style="text-align: center; padding: 60px; background-color: #f1f8ff; border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <h1 style="font-size: 3em; color: #2980b9; margin-bottom: 20px;">🎉 Selamat Datang, {{ $username }}! 🎮</h1>
    <p style="font-size: 1.2em;">Petualanganmu dimulai sekarang. Gunakan emasmu untuk membeli item terbaik di dunia game ini!</p>
    <p style="margin-top: 30px;">
        <a href="{{ route('pengelolaan') }}" style="padding: 15px 25px; background-color: #27ae60; color: white; text-decoration: none; border-radius: 8px; font-weight: bold; font-size: 1.1em;">
            🚀 Mulai Belanja Item
        </a>
    </p>
</div>
@endsection
