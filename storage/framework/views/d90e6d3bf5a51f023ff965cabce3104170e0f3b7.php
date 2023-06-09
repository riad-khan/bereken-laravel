<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 | Bereken.nl</title>
    <?php echo $__env->make('livewire.includes.cdn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
</head>
<body>
    <?php echo $__env->make('livewire.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="row">
        <div class="col-md-12 text-center">
          <div class="error_number mt-10">
           
                404
            <hr>
          </div>
          <div class="error_title text-muted">
            
          </div>
          <div class="error_description text-muted">
            <small>
                Please <a href='javascript:history.back()''>go back</a> or return to <a href="/" class="p-2 text-center outline-btn btn-translate-z bg-[#112954] text-white text-xs font-bold rounded-md">Home Page</a>
           </small>
          </div>
        </div>
      </div>
      <style>
        .error_number {
          font-size: 120px;
          font-weight: 600;
          line-height: 100px;
        }
        .error_number small {
          font-size: 56px;
          font-weight: 700;
        }
    
        .error_number hr {
          margin-top: 60px;
          margin-bottom: 0;
          width: 50px;
        }
    
        .error_title {
          margin-top: 40px;
          font-size: 36px;
          font-weight: 400;
        }
    
        .error_description {
          font-size: 24px;
          font-weight: 400;
        }
      </style>
    <?php echo $__env->make('livewire.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/custom/404.blade.php ENDPATH**/ ?>