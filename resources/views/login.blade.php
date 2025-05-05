@extends('layouts.app')

@section('content')
<div style="max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <h2 style="text-align: center;">🔐 Login</h2>
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label>Username:</label><br>
        <input type="text" name="username" required style="width: 100%; padding: 10px; margin: 8px 0;"><br>

        <label>Password:</label><br>
        <input type="password" name="password" required style="width: 100%; padding: 10px; margin: 8px 0;"><br>

        <button type="submit" style="width: 100%; padding: 10px; background: #3498db; color: white; border: none; border-radius: 5px;">Login</button>
    </form>
</div>
@endsection
