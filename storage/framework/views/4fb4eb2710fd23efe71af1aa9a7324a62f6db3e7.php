<?php $__env->startSection('title'); ?>
Partners
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $principal = \App\Models\Partners::orderBy('id', 'asc')->where('type', 'principal')->get() ); ?> 
<?php ( $sponsors = \App\Models\Partners::orderBy('id', 'asc')->where('type', 'sponsors')->get() ); ?> 
<?php ( $hospitality = \App\Models\Partners::orderBy('id', 'asc')->where('type', 'hospitality')->get() ); ?> 

<section class="section section--singular">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="team-members">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <h1 style="margin-bottom:0px;">Our partners</h1>
                            <h4>Together, we are all working as one to share ideas and accelerate African innovation
                            </h4>
                            <p>Collaboration is at the heart of what we do at TEDxPH. Each year, we work with a
                                range of organisations to deliver a series of inspiring events for our community. Thanks
                                to the generosity of our partners, we have been able to champion a new generation of
                                thought leadership and responsible engagement with Africa.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row"  style="margin-left: 0px !important;">
                                <h4>Principal Partners</h4>
                              </div>
                            <div class="row" style="margin-left: 0px !important;">
                                <?php $__currentLoopData = $principal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <figure> <img class="lazyload--el in-view__child lazyloaded in-view__child--in"
                                            src="<?php echo e(asset('uploads/partners')); ?>/<?php echo e($data->file_path); ?>" alt="" width="445"
                                            height="445">
                                        <div
                                            class="poster--cover in-view in-view__child in-view--in in-view__child--in">
                                        </div>
                                    </figure>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row"  style="margin-left: 0px !important;">
                                <h4>Sponsors</h4>
                              </div>
                            <div class="row" style="margin-left: 0px !important;">
                                <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in"
                                            src="<?php echo e(asset('uploads/partners')); ?>/<?php echo e($sponsor->file_path); ?>" alt="" width="445"
                                            height="445">
                                        <div
                                            class="poster--cover in-view in-view__child in-view--in in-view__child--in">
                                        </div>
                                    </figure>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2">
                            <div class="row"  style="margin-left: 0px !important;">
                                <h4>Hospitality Partners</h4>
                              </div>
                            <div class="row" style="margin-left: 0px !important;">
                                <?php $__currentLoopData = $hospitality; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <figure> <img class="lazyload--el in-view__child lazyloaded in-view__child--in"
                                            src="<?php echo e(asset('uploads/partners')); ?>/<?php echo e($hospital->file_path); ?>" alt="" width="445"
                                            height="445">
                                            
                                        <div
                                            class="poster--cover in-view in-view__child in-view--in in-view__child--in">
                                        </div>
                                        <p style="text-transform:uppercase;" class="text-center in-view__child in-view__child--fadein in-view__child--in">
                                            <?php echo e($hospital->name); ?>

                                        </p>
                                    </figure>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tedxiydt/public_html/resources/views/pages/partners.blade.php ENDPATH**/ ?>