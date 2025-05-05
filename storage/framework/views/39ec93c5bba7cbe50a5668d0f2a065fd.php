<?php $__env->startSection('content'); ?>
<h2>👤 Profil Pengguna</h2>
<div style="margin-top: 20px;">
    <p><strong>Username:</strong> <?php echo e($username); ?></p>
    <p><strong>Total Emas:</strong> <?php echo e($emas); ?> 🪙</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arfon\OneDrive\Documents\PWEB_PRAKTIKUM\jual-item-game-emas\resources\views/profile.blade.php ENDPATH**/ ?>