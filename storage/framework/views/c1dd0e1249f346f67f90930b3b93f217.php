<?php $__env->startSection('content'); ?>
<h2>🛒 Pengelolaan Item</h2>
<p>Saldo emas Anda: <strong><?php echo e($emas); ?> 🪙</strong></p>

<?php if(session('success')): ?>
    <p style="color:green;"><?php echo e(session('success')); ?></p>
<?php endif; ?>
<?php if(session('error')): ?>
    <p style="color:red;"><?php echo e(session('error')); ?></p>
<?php endif; ?>

<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr style="background-color: #34495e; color: white;">
            <th style="padding: 10px;">Item</th>
            <th style="padding: 10px;">Harga</th>
            <th style="padding: 10px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="background-color: #ecf0f1;">
            <td style="padding: 10px;"><?php echo e($item['name']); ?></td>
            <td style="padding: 10px;"><?php echo e($item['price']); ?> 🪙</td>
            <td style="padding: 10px;">
                <form method="POST" action="<?php echo e(route('buy', $item['id'])); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" style="padding: 8px 12px; background: #2ecc71; border: none; color: white; border-radius: 4px;">Buy</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arfon\OneDrive\Documents\PWEB_PRAKTIKUM\jual-item-game-emas\resources\views/pengelolaan.blade.php ENDPATH**/ ?>