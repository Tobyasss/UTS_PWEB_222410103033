@extends('layouts.app')

@section('content')
<h2>🛒 Pengelolaan Item</h2>
<p>Saldo emas Anda: <strong>{{ $emas }} 🪙</strong></p>

@if (session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
@if (session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr style="background-color: #34495e; color: white;">
            <th style="padding: 10px;">Item</th>
            <th style="padding: 10px;">Harga</th>
            <th style="padding: 10px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr style="background-color: #ecf0f1;">
            <td style="padding: 10px;">{{ $item['name'] }}</td>
            <td style="padding: 10px;">{{ $item['price'] }} 🪙</td>
            <td style="padding: 10px;">
                <form method="POST" action="{{ route('buy', $item['id']) }}">
                    @csrf
                    <button type="submit" style="padding: 8px 12px; background: #2ecc71; border: none; color: white; border-radius: 4px;">Buy</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
