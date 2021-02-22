<?php $__env->startSection('title'); ?>
Partners
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $careers = \App\Models\Careers::all() ); ?>

<section class="section section--singular2 video bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block text-left mb-5">
                    <h2 class="fw-12 underline">CAREERS</h2>
                    <h3 class="fw-40">Join Our Team</h3>
                </div>
                <img src="<?php echo e(asset('files/media/aboutmain1.jpg')); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section section--singular2 video bg-black pt-2">
    <div class="container abtTedxph">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3">
                <p class="text-center px-4 text-white fw-24 py-3">Join a large community of clapham omnibus who are
                    passionate about changing the status quo in our society, volunteering with us is an opportunity to
                    serve mankind and also improve your skills set. Be a part of our community of social good advocates.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="section section--singular2 video py-5">
    <div class="container abtTedxph">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center py-3">
                <h2>Open Positions</h2>
                <p class="px-4 fw-16 py-3">We’re looking for people to join the team who are as
                    excited as we are to help build the platform that is passionate about changing the status quo in our
                    society. Be a part of our community of social good advocates</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 cool-xs-12 text-left">
                <?php if($careers->count() > 0): ?>
                <?php $__currentLoopData = $careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                    <a class="text-black" href="<?php echo e("viewCareer/".$data['id']); ?>">
                        <div class="positions border p-4">
                            <h3 class="pt-3 fw-12"> <?php echo e($data->position); ?></h3>
                            <p> <?php echo e($data->location); ?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="text-center">
                    <h4>No Available Positions</h4>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section section--singular parallax2 bg-blue py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="team-members">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <h1 style="margin-bottom:0px;" class="text-white" id="donations">Donate Us Today !!</h1>
                            <p class="text-white">Let’s help make our communities better by improving the quality of
                                lives and providing basic needs for the less privileged and the forgotten in our
                                 society. Join others and make a commitment today.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                            <p class="d-flex justify-content-center pt-5">
                                <button type="submit" class="btn text-white bg-blue btn-submit"
                                    style="border-radius: 0px !important;">Donate</button>
                            </p>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/partners.blade.php ENDPATH**/ ?>