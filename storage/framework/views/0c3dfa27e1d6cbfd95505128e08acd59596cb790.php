<?php $__env->startSection('title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section class="section bg-black mt-5">
    <div class="container bg-black pt-4 pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                <?php $__currentLoopData = $careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-5 text-left text-white px-0">
                    <h4 class="fw-30"><?php echo e($careers['position']); ?></h4>
                    <h5 class="fw-20"><?php echo e($careers['location']); ?></h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2 text-white px-0">
                    <p class="fw-20"><?php echo $careers['about']; ?></p>
                </div>
                <div class="speaker-neat__copy in-view pb-4">
                    <a target="_blank" href="<?php echo e($careers->apply); ?>"><button class="btn bg-blue text-white "
                            type="button">
                            Apply</button></a>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/allcareers.blade.php ENDPATH**/ ?>