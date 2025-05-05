<!DOCTYPE html>
<html>
<head>
    <title>Jual Item Game</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; background-color: #f9f9f9;">

    <?php if(session()->has('username')): ?>
    <!-- Navbar -->
    <div style="background-color: #1abc9c; padding: 15px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <a href="<?php echo e(route('dashboard')); ?>" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">🏠 Dashboard</a>
            <a href="<?php echo e(route('pengelolaan')); ?>" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">🛒 Pengelolaan</a>
            <a href="<?php echo e(route('topup')); ?>" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">💰 Top Up</a>
            <a href="<?php echo e(route('profile')); ?>" style="color:white; margin-right:20px; font-weight:bold; text-decoration: none;" class="clickable">👤 Profile</a>
        </div>
        <div>
            <span style="color: white; margin-right: 20px;">🪙 <?php echo e(session('emas')); ?> emas</span>
            <a href="<?php echo e(route('logout')); ?>" style="color:#e74c3c; font-weight:bold; text-decoration: none;" class="clickable">🚪 Logout</a>
        </div>
    </div>
    <?php endif; ?>

    <!-- Content -->
    <div style="padding: 30px;">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <div style="background-color:#2c3e50; color:#ecf0f1; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%;">
        &copy; 2025 - Jual Item Game Menggunakan Emas
    </div>

    <!-- Suara Klik -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Load sound for every click
            const clickSound = new Audio("<?php echo e(asset('sounds/buwok.mp3')); ?>");

            // Set volume (optional) - adjust this value between 0 and 1
            clickSound.volume = 1.0;  // Volume maksimal

            // Ensure the sound plays completely every time
            clickSound.onended = function() {
                // Reset or additional behavior after sound finishes
            };

            // Add event listener to all clickable elements including navbar links
            document.querySelectorAll('a, button, input[type="submit"], .clickable').forEach(el => {
                el.addEventListener('click', function () {
                    // Ensure the sound plays from start each time
                    clickSound.currentTime = 2; // Restart the sound each click
                    clickSound.play().catch(e => {
                        // Handle errors like autoplay being blocked
                    });
                });
            });
        });
    </script>

</body>
</html>
<?php /**PATH C:\Users\arfon\OneDrive\Documents\PWEB_PRAKTIKUM\jual-item-game-emas\resources\views/layouts/app.blade.php ENDPATH**/ ?>