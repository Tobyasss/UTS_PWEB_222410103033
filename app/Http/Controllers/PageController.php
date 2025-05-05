<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        session([
            'username' => $request->username,
            'emas' => 100 // default emas saat login
        ]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        if (!session()->has('username')) return redirect()->route('login');
        return view('dashboard', ['username' => session('username')]);
    }

    public function pengelolaan()
    {
        if (!session()->has('username')) return redirect()->route('login');

        $items = [
            ['id' => 1, 'name' => 'Sword of Power', 'price' => 100],
            ['id' => 2, 'name' => 'Shield of Protection', 'price' => 75],
            ['id' => 3, 'name' => 'Health Potion', 'price' => 10],
        ];

        return view('pengelolaan', [
            'username' => session('username'),
            'emas' => session('emas'),
            'items' => $items
        ]);
    }

    public function buy($id)
    {
        if (!session()->has('username')) return redirect()->route('login');

        $items = [
            1 => ['name' => 'Sword of Power', 'price' => 100],
            2 => ['name' => 'Shield of Protection', 'price' => 75],
            3 => ['name' => 'Health Potion', 'price' => 10],
        ];

        if (!isset($items[$id])) {
            return back()->with('error', 'Item tidak ditemukan');
        }

        $item = $items[$id];
        $emas = session('emas');

        if ($emas < $item['price']) {
            return back()->with('error', 'Emas tidak cukup!');
        }

        session(['emas' => $emas - $item['price']]);
        return back()->with('success', 'Berhasil membeli ' . $item['name']);
    }

    public function topupForm()
    {
        if (!session()->has('username')) return redirect()->route('login');
        return view('topup', [
            'username' => session('username'),
            'emas' => session('emas')
        ]);
    }

    public function topup(Request $request)
    {
        $request->validate(['amount' => 'required|numeric|min:1']);
        $emas = session('emas');
        session(['emas' => $emas + $request->amount]);
        return back()->with('success', 'Top up berhasil!');
    }

    public function profile()
    {
        if (!session()->has('username')) return redirect()->route('login');

        return view('profile', [
            'username' => session('username'),
            'emas' => session('emas')
        ]);
    }
}
