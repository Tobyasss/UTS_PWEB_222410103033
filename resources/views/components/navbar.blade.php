<div style="background-color: #1abc9c; padding: 15px; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="{{ route('dashboard') }}" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">🏠 Dashboard</a>
        <a href="{{ route('pengelolaan') }}" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">🛒 Pengelolaan</a>
        <a href="{{ route('topup') }}" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">💰 Top Up</a>
        <a href="{{ route('profile') }}" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">👤 Profile</a>
    </div>
    <div>
        <span style="color: white; margin-right: 20px;">🪙 {{ session('emas') }} emas</span>
        <a href="{{ route('logout') }}" style="color:#e74c3c; font-weight:bold; text-decoration: none;" class="clickable">🚪 Logout</a>
    </div>
</div>
