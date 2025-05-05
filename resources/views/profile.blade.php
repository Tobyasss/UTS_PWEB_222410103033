@extends('layouts.app')

@section('content')
<h2>👤 Profil Pengguna</h2>
<div style="margin-top: 20px;">
    <p><strong>Username:</strong> {{ $username }}</p>
    <p><strong>Total Emas:</strong> {{ $emas }} 🪙</p>
</div>
@endsection
