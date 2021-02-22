<?php $__env->startSection('title'); ?>
About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $tedxphteams = \App\Models\tedxphteams::all() ); ?>

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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="paragraph in-view in-view--in">
                    <div class=" in-view__child in-view__child--fadein in-view__child--in">
                        <div
                            class="col-lg-12 col-md-12 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive">WHO ARE WE</h2>
                                <h5 class="page-subtitle fw-12 "><span>About Us...</span></h5>
                            </header>
                            <div style="margin-left: 0px !important;" class="indent">
                                <p>
                                    The I_AMVOCAL Organization is concerned with improving youth engagement in community
                                    leadership and stewardship through technology, advocacy and related creative
                                    offerings. The founders of I_AMVOCAL believe that to appropriately engage youths,
                                    elements of contemporary culture e.g. social media and music must be welded to the
                                    actual levers that move society, for example, polling booths and grassroots
                                    mobilization.
                                </p>
                                <p>We are a community of people who have decided to let their voices be heard in matters
                                    concerning their governance as well as their overall wellbeing. We believe that when
                                    people trust the system of selection of their leaders, they would be active
                                    participants in their governance</p>
                                <p>
                                    Never before has there been such silence in our communities that the silence has
                                    become so deafening and we can't afford to keep quiet anymore. We are a community of
                                    change agents who believe in civilized discourse and consequent necessary action
                                    needed for effecting positive change in our society as well as delivering the
                                    dividends of good governance to the people
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="paragraph in-view in-view--in">
                    <div class=" in-view__child in-view__child--fadein in-view__child--in">
                        <div
                            class="col-lg-12 col-md-12 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive">Our Approach</h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="indent">
                                <p>
                                    We have built a transparent system of conducting elections and getting opinions of
                                    citizens on matters that concern them powered by the concept of the blockchain which
                                    is hinged on transparency and verifiability of transactions on the system.
                                </p>
                                <p>Community engagement activities to spur action and active participation in the
                                    governance process. We engage in physical community-building activities so as to
                                    foster active participation in societal issues.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>

                <div class="paragraph in-view in-view--in">
                    <div class="row in-view__child in-view__child--fadein in-view__child--in">
                        <div
                            class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive">Our Mission</h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="reveal__copy indent">
                                <p class=" in-view__child in-view__child--fadein in-view__child--in">To possess accurate
                                    and relevant data of 100 million Nigerians by 2020; and 500 million Africans by
                                    2025. Utilize said data to streamline the political process in Africa by encouraging
                                    active citizen involvement and providing accurate insights to leaders.</p>
                                <p class=" in-view__child in-view__child--fadein in-view__child--in">Utilize said data
                                    to provide targeted insights about customers and clients to businesses and
                                    corporations bearing in mind user anonymity.</p>
                            </div>
                        </div>
                        <div
                            class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                            <header style="margin-bottom: 10px !important;" class="page-header">
                                <h2 class="page-title PageActive">Our Vision</h2>
                            </header>
                            <div style="margin-left: 0px !important;" class="reveal__copy indent">
                                <p class="in-view__child in-view__child--fadein in-view__child--in">To harness the transformative power of data to transform followership, leadership, businesses and lives in Africa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid webinar-speakers parallax2" id="details">
    <header class="text-center pt-5">
        <h4 class="title text-white pt-3"><span>Our Board Members</span></h4>
    </header>
    <br>
    <div class="container abtTedxph">
        <p class="text-center px-5 fw-bold text-white" style="line-height:20px;">The board comprises of passionate
            individuals in
            diverse fields with a zest
            for
            promoting social welfare,
            equality and civic justice in the society.</p>
    </div>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $tedxphteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.modals.team-bio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="team" class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="speaker-neat">
                    <div class="speaker-neat__image poster in-view">

                        <input type="hidden" name="speaker_details_id" value=" ">
                        <input type="hidden" name="events_details_id" value=" ">
                        <figure><a data-toggle="modal" data-target="#teamBio<?php echo e($data->id); ?>"
                                style="cursor:pointer; border:0px !important; background:none !important;" type="submit"
                                name="speaker_details_btn">
                                <img class="lazyload--el lazyload in-view__child"
                                    src="<?php echo e(asset('uploads/team')); ?>/<?php echo e($data->file_path); ?>" alt="" width="445"
                                    height="600">
                                <div class="poster--cover in-view in-view__child"></div>
                            </a></figure>
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