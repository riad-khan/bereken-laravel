<!DOCTYPE html>
<html lang="en">


<head>
    <?php echo $__env->yieldContent('meta'); ?>
    <?php echo $__env->make('livewire.includes.cdn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <META NAME="robots" CONTENT="noindex,nofollow">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
    
</head>

<body>
    <?php echo $__env->make('livewire.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e($slot); ?>


    <?php echo $__env->make('livewire.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/layouts/app.blade.php ENDPATH**/ ?>