<?php $__env->startSection('content'); ?>
<h2>💰 Top Up Emas</h2>
<p>Saldo emas saat ini: <strong><?php echo e($emas); ?> 🪙</strong></p>

<?php if(session('success')): ?>
    <p style="color:green;"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('topup')); ?>" style="max-width: 400px; margin-top: 20px;">
    <?php echo csrf_field(); ?>
    <label>Jumlah Emas:</label><br>
    <input type="number" name="amount" required min="1" style="width: 100%; padding: 10px; margin: 10px 0;"><br>
    <button type="submit" style="padding: 10px 15px; background: #f39c12; color: white; border: none; border-radius: 5px;">Top Up</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arfon\OneDrive\Documents\PWEB_PRAKTIKUM\jual-item-game-emas\resources\views/topup.blade.php ENDPATH**/ ?>