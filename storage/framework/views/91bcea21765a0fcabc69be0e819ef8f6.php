<!DOCTYPE html>
<html>
  <head> 
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <style type="text/css"> 
    .post_title
    {
        font-size: 30px;
        font-weight : bold;
        text-align : center;
        padding : 30px;
    }

    .div_center
    {
        text-align : center;
        padding : 30px;
    }

    label
    {
        display: inline-block;
        width: 200px;
    }
    
    </style>

  </head>
  <body>
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
      <!-- Sidebar Header-->
       <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Sidebar Navigation end-->

        <div class="page-content">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hideen="true">x</button>
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <h1 class="post_title"> Add Post </h1>

            <div>
                <form action="<?php echo e(url('add_post')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="div_center">
                        <label>Post Title </label>
                        <input type="text" name="title">
                    </div>
                    <div class="div_center">
                        <label>Post Description </label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="div_center">
                        <label>Add Image </label>
                        <input type="file" name="image">
                    </div>
                    <div class="div_center">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>



        </div>

     <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH D:\pswproject\resources\views/admin/post_page.blade.php ENDPATH**/ ?>