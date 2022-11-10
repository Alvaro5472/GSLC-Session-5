<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand p-2" href="<?php echo e(url('/')); ?>">GSLC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <span class="navbar-text">Session 5</span>
        </div>
    </nav>

    <div class="row justify-content-center mt-4">
        <?php echo $__env->yieldContent('main-content'); ?>
    </div>
</body>
<footer class="fixed-bottom flex-shrink-0 py-2 bg-dark text-white-50">
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
</html>

<?php /**PATH C:\xampp\htdocs\GSLC_Session_5-Ahmad_Zemar_Alvaro-2440052400\resources\views/navbar.blade.php ENDPATH**/ ?>