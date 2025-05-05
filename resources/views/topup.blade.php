@extends('layouts.app')

@section('content')
<h2>💰 Top Up Emas</h2>
<p>Saldo emas saat ini: <strong>{{ $emas }} 🪙</strong></p>

@if (session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('topup') }}" style="max-width: 400px; margin-top: 20px;">
    @csrf
    <label>Jumlah Emas:</label><br>
    <input type="number" name="amount" required min="1" style="width: 100%; padding: 10px; margin: 10px 0;"><br>
    <button type="submit" style="padding: 10px 15px; background: #f39c12; color: white; border: none; border-radius: 5px;">Top Up</button>
</form>
@endsection
