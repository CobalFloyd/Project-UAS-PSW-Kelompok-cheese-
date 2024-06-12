<div class="services_section layout_padding">
         <div class="catalogblock">
                        <h1 class="services_taital">BIRDNEST DELIGHTS</h1>
                        <p class="services_text">"With delicious flavors and perfect presentation, We bring you an unforgettable culinary experience"</p>
         </div>
         
         <section id="catalog">
            <div class="container">
               <div class="services_section_2">
                  <div class="row">
                     <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-4 mb-5">


                        <h2 class="services_taital"><?php echo e($post->title); ?></h2>
                        <div><img src="/postimage/<?php echo e($post->image); ?>" class="services_img"></div>
                        <div class="services_desblock">
                           <h3 class="services_descrip"><?php echo e($post->description); ?><h3>
                        </div>
                     </div>
                     
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div><?php /**PATH D:\pswproject\resources\views/home/services.blade.php ENDPATH**/ ?>