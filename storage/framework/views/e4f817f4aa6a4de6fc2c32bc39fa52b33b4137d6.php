

<?php $__env->startSection('main-content'); ?>
<div class="container mt-3">
    <h2>Looping Input</h2>
    <form action="/action_page.php">
      <div class="mb-3 mt-3">
        <label for="number">Input number:</label>
        <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC-Session-6-main\resources\views/mainContent/input.blade.php ENDPATH**/ ?>