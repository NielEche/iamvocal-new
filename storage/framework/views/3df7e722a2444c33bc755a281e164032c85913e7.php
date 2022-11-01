<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $home_headers = \App\Models\HomeHeader::all() ); ?>
<?php ( $home_abouts = \App\Models\HomeAbout::all() ); ?>
<?php ( $homeimages = \App\Models\HomeImages::all() ); ?>
<?php ( $team = \App\Models\tedxphteams::orderBy('id', 'asc')->limit(5)->get() ); ?>

<section class="section section--singular2 video bg-black">
    <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
        <div class="carousel-inner">
            <?php $__currentLoopData = $home_headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item  <?php echo e($loop->first ? 'active' : ''); ?>">
                <img src="<?php echo e(asset('uploads/homepage')); ?>/<?php echo e($data->file_path); ?>" class="d-block w-100" alt="Image">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 13%">
                    <h1 class="py-3" style="text-align:left !important;"><?php echo e($data->button_text); ?></h1>
                    <?php if($data->button_link != null): ?>
                    <a style="text-align:left !important; font-size:15px !important; float:left !important;"
                        class="py-2" href="<?php echo e($data->button_link); ?>">
                        <button style="font-size:15px !important; border-radius:0px !important;"
                            class="btn bg-blue text-white py-2" type="button">See More</button>
                    </a>
                    <?php else: ?>

                    <?php endif; ?>

                </div>
                <div class="carousel-caption d-md-none" style="margin-bottom: 0%">
                    <h1 class="py-1 fw-24" style="text-align:left !important;"><?php echo e($data->button_text); ?></h1>
                    <a style="text-align:left !important; font-size:15px !important; float:left !important;"
                        class="py-1" href="<?php echo e($data->button_link); ?>">
                        <button style="font-size:10px !important; border-radius:0px !important;"
                            class="btn bg-blue text-white py-2" type="button">See More</button>
                    </a>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

</section>

<section class="section bg-blue">
    <div class="container abtTedxph bg-blue pt-3 pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12  text-white p-5">
                <div class="col-lg-12 py-2">
                    <h5> What do we aim to create?</h5>
                </div>

                <?php $__currentLoopData = $home_abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-blue">
                    <div class="text-white">
                        <p class="fw-20"><?php echo e($about->event_text); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container  section-block hero-3 bg-white bottom nopadding" style="height: 0px !important;">
        <div class="row tmh-perspective">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-5 pb-5"
                data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-threshold="0.5"
                style=" backface-visibility: hidden;transition-property: transform, opacity; transition-duration: 1000ms; transition-timing-function: cubic-bezier(0.11, 0.69, 0.66, 1.01); transition-delay: 200ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                <div style="background-color: #fff !important; border-top:none !important;">
                    <div class="text-black bottom " style="height:100% !important;">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
                            <img src="<?php echo e(asset('files/media/IAMVPMArtboard 7.svg')); ?>" alt="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-5">
                            <h4 class="PageActive fw-14"><span class="italic">About</span></h4>
                            <h2 class="PageActive"
                                style=" text-align:left !important; font-size:30px !important; line-height: 37px !important;">
                                <span>
                                    Our Mission</span>
                            </h2>
                            <p class="fw-18">To possess accurate and relevant data of 100 million Nigerians by 2020; and
                                500 million
                                Africans by 2025. Utilize said data to streamline the political process in Africa by
                                encouraging active citizen involvement and providing accurate insights to leaders.</p>
                            <p class="fw-18">Utilize said data to provide targeted insights about customers and clients
                                to businesses
                                and corporations bearing in mind user anonymity.</p>

                            <h2 class="PageActive"
                                style=" text-align:left !important; font-size:30px !important; line-height: 37px !important;">
                                <span>
                                    Our Vision</span>
                            </h2>
                            <p class="fw-18">To harness the transformative power of data to transform followership,
                                leadership, businesses and lives in Africa.</p>

                            <a href="<?php echo e(route('about')); ?>"><button class="btn bg-blue text-white py-2" type="button">
                                    See More</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mt-4">
                <h5 class="py-5">
                    <!--<img src="<?php echo e(asset('files/media/question.png')); ?>" alt="">-->
                    <img src="<?php echo e(asset('files/media/voiceslogo.png')); ?>" alt="">
                </h5>
                <p class="text-white bottom fw-bold fw-18 mb-4">VOICES - is an online tool that maps, tracks and
                    measures systemic impact of Complex Social Policy ( CSP) problems commonly known as "wicked
                    problems" in the social purpose sector. Wicked problems are hard to resolve as each takes place
                    within a unique context and has many interconnected root causes. Examples of wicked problems
                    include: climate change, poverty, Violence , corruption etc.

                    It is difficult to successfully tackle these problems with traditional linear, analytical
                    approaches, where individual initiatives focus on one or a few root cause, or by replicating
                    initiatives that have been developed in other contexts.
                </p>
                <button class="btn border border-white text-white py-2 px-2 " type="button"> <a
                        style="text-decoration: none !important; color:#fff !important;"
                        href="https://www.i-amvocal.org/ourevents/5">See More</a> </button>
                <a target="_blank" href="https://voices.i-amvocal.org/login"
                    class="text-decoration-none text-right px-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff"
                        class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="col-lg-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img class="mt-5" src="<?php echo e(asset('files/media/vphone.png')); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section bg-black">
    <div class="container-fluid">
        <div class="row">
            <?php $__currentLoopData = $homeimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                <h2 class="px-5 text-white text-center py-"
                    style="position:absolute; text-align:center !important; line-height: 37px !important; margin-top:30%; font-size:22px !important;">
                    <span>
                        <?php echo e($data->caption); ?></span>
                </h2>
                <a style="position:absolute; margin-top:37%; font-size:15px !important;" class="pt-2 px-5 text-white"
                    href="<?php echo e($data->links); ?>"><button style="font-size:15px !important; border-radius:0px !important;"
                        class="btn bg-blue text-white py-2 " type="button">
                        See More</button></a>

                <img style="object-fit:cover;" class="homeimg"
                    src="<?php echo e(asset('uploads/homepage')); ?>/<?php echo e($data->file_path); ?>" alt="<?php echo e($data->caption); ?>">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-fluid container2 section-block hero-3 hero-3-services-1 bottom nopadding"
        style="height: 0px !important;">
        <div class="row tmh-perspective">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-threshold="0.5"
                style=" backface-visibility: hidden;transition-property: transform, opacity; transition-duration: 1000ms; transition-timing-function: cubic-bezier(0.11, 0.69, 0.66, 1.01); transition-delay: 200ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                <div style="background-color: rgba(0,0,0,0.1) !important; border-top:none !important;"
                    class="hero-content">
                    <div class="color-white bottom" style="height:100% !important;">

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 px-5 my-5">
                            <h2
                                style=" text-align:left !important; font-size:30px !important; line-height: 37px !important;">
                                <span>
                                    Become a Volunteer</span>
                            </h2>
                            <p>Join a large community of clapham omnibus who are passionate
                                about changing the
                                status quo in our society, volunteering with us is an opportunity to serve mankind
                                and also improve your skills set. Be a part of our community of social good
                                advocates.</p>

                            <a href="<?php echo e(route('careers')); ?>#volu" class="text-decoration-none ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff"
                                    class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 px-3 my-5">
                            <h2
                                style=" text-align:center !important; font-size:30px !important; line-height: 37px !important;">
                                <span>
                                    Donate Us Now</span>
                            </h2>
                            <p class="px-3" style=" text-align:center !important;">Let’s help make our communities
                                better by improving the quality of lives and providing basic needs for the less
                                privileged and the forgotten in our society. Join others and make a commitment today.
                            </p>
                            <a href="<?php echo e(route('donate')); ?>#donations"
                                class="text-decoration-none d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff"
                                    class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
    .member,
    .member__info {
        margin-top: 15%;
    }

    @media (max-width: 993px) {
        .member__info {
            margin-top: -5%;
        }
    }

    .speaker-title {
        margin: 0px;
        font-size: 1.1em;
        text-decoration: none !important;
        text-transform: none !important;
        line-height: 1;
    }

    .speaker-link {
        text-decoration: none;
        text-transform: none;
        margin-top: 0px;
    }

</style>

<!--<section class="container-fluid webinar-speakers parallax2" id="details">
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
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $speak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="speaker-neat">
                    <div class="speaker-neat__image poster in-view">

                        <input type="hidden" name="speaker_details_id" value=" ">
                        <input type="hidden" name="events_details_id" value=" ">
                        <figure><a href="<?php echo e("showSpeakerss/".$speak->id); ?>"
                                style="cursor:pointer; border:0px !important; background:none !important;" type="submit"
                                name="speaker_details_btn">
                                <img class="lazyload--el lazyload in-view__child"
                                    src="<?php echo e(asset('uploads/team')); ?>/<?php echo e($speak->file_path); ?>" alt="" width="445"
                                    height="600">
                                <div class="poster--cover in-view in-view__child"></div>
                            </a></figure>
                    </div>
                    <div class="speaker-neat__copy in-view">
                        <h5 style="text-transform:uppercase;" class="in-view__child in-view__child--fadein text-white">
                            <?php echo e($speak->name); ?>

                        </h5>
                    
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>-->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/index.blade.php ENDPATH**/ ?>