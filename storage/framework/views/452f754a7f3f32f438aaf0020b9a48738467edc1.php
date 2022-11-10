<?php $__env->startSection('main-content'); ?>
<link rel="stylesheet" href="css/main.css">
<body style="background-color: rgb(230, 230, 230);">
    <div class="title">
        <h1><?php echo e($header_title); ?></h1>
    </div>
    <?php for($i=0; $i < 5; $i++): ?>
    <div class="card text-center" style="width: 18rem; margin: 10px;">
        <img class="card-img-top" src="<?php echo e($image); ?>" alt="Green Bird">
        <div class="card-body">
            <h5 class="card-title">Green Bird</h5>
            <p class="card-text">A description of a green bird</p>
        </div>
    </div>
    <?php endfor; ?>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC-Session-6-main\resources\views/main.blade.php ENDPATH**/ ?>