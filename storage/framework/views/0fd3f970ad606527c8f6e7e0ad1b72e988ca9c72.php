<?php $__env->startSection('title'); ?>
About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $tedxphteams = \App\Models\tedxphteams::all() ); ?>
<?php ( $aboutus = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '1')->get() ); ?>
<?php ( $approach = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '2')->get() ); ?>
<?php ( $mission = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '3')->get() ); ?>
<?php ( $ourvision = \App\Models\AboutUs::orderBy('id', 'asc')->where('id', '4')->get() ); ?>

<section class="section section--singular2 video">
    <div class="container-fluid">
        <div class="row">
            <div class="embed-responsive ">
                <img src="<?php echo e(asset('files/media/aboutmain.jpg')); ?>" class="d-block w-100" alt="Image">
            </div>
        </div>
    </div>

    <!--<video controls poster="assets/media/group.jpg" style="width: 100%;" height="auto">
        <source src="assets/media/aboutvid.mp4" type="video/mp4">
    </video>-->
</section>


<section class="section section--singular pt-5" id="ourstory" style=" !important;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="paragraph in-view in-view--in">
                    <div class=" in-view__child in-view__child--fadein in-view__child--in">
                        <?php $__currentLoopData = $aboutus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive"><?php echo e($data->header); ?></h2>
                                <h5 class="page-subtitle fw-12 "><span>About Us...</span></h5>
                            </header>
                            <div style="margin-left: 0px !important;" class="indent">
                                <p>
                                    <?php echo $data->details; ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="paragraph in-view in-view--in">
                    <div class=" in-view__child in-view__child--fadein in-view__child--in">
                        <?php $__currentLoopData = $approach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="col-lg-12 col-md-12 col-sm-12 col-12 px-0 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive"><?php echo $data->header; ?></h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="indent">
                                <p>
                                    <?php echo $data->details; ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "><br>

                <div class="paragraph in-view in-view--in">
                    <div class="row in-view__child in-view__child--fadein in-view__child--in">
                        <?php $__currentLoopData = $mission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive"> <?php echo $data->header; ?></h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="reveal__copy indent">
                                <p class=" in-view__child in-view__child--fadein in-view__child--in"> <?php echo $data->details; ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $ourvision; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive"><?php echo $data->header; ?></h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="reveal__copy indent">
                                <p class="in-view__child in-view__child--fadein in-view__child--in"><?php echo $data->details; ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="parallax2" id="details">
    <div class="container pb-4">
        <header id="team" class="text-center pt-5">
            <h4 class="title text-white pt-3"><span>Our Board Members</span></h4>
        </header>
        <br>
        <div class="container abtTedxph">
            <p class="text-center fw-bold text-white" style="line-height:20px;">The board comprises of passionate
                individuals in
                diverse fields with a zest
                for
                promoting social welfare,
                equality and civic justice in the society.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $tedxphteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.modals.team-bio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div class="speaker-neat">
                    <div class="speaker-neat__image poster in-view">
                        <figure><a data-toggle="modal" data-target="#teamBio<?php echo e($data->id); ?>"
                                style="cursor:pointer; border:0px !important; background:none !important;" type="submit"
                                name="speaker_details_btn">
                                <img class="lazyload--el lazyload in-view__child"
                                    src="<?php echo e(asset('uploads/team')); ?>/<?php echo e($data->file_path); ?>" alt="" width="445"
                                    height="600">
                                <div class="poster--cover in-view in-view__child"></div>
                            </a>
                        </figure>
                    </div>
                    <div class="speaker-neat__copy in-view">
                        <h5 style="text-transform:uppercase;" class="in-view__child in-view__child--fadein text-white">
                            <?php echo e($data->name); ?>

                        </h5>
                        <!--<p style="text-transform:uppercase;" class="in-view__child in-view__child--fadein">
                            <?php echo e($data->position); ?>

                        </p>-->
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/about.blade.php ENDPATH**/ ?>