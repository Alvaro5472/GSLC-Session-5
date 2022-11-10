<?php $__env->startSection('main-content'); ?>
<?php for($i=0; $i < 5; $i++): ?>
    <div class="card text-center" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo e(asset('img/Angry Birds Realistic.jpg')); ?>" alt="Green Bird">
        <div class="card-body">
            <h5 class="card-title">Green Bird</h5>
            <p class="card-text">A description of a green bird</p>
        </div>
    </div>
<?php endfor; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC_Session_5-Ahmad_Zemar_Alvaro-2440052400\resources\views/main.blade.php ENDPATH**/ ?>