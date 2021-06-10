<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center">Travel Packages</h1>

        <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article>
                <h2><?php echo e($travel->city); ?></h2>
                <h4><?php echo e($travel->state); ?></h4>
                <div>Hotel: <?php echo e($travel->hotel); ?></div>
                <div>Transportation: <?php echo e($travel->transportation); ?></div>
                <div>Price: <?php echo e(number_format($travel->price, 0, ',', '.')); ?>$</div>
                <?php if(!$travel->last): ?>
                    <hr>
                <?php endif; ?>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <section class="mt-5">
            <?php echo e($travels->links()); ?>

        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\laravel-migration-seeder\resources\views/travels.blade.php ENDPATH**/ ?>