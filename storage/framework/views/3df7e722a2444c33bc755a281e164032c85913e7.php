<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $home_headers = \App\Models\HomeHeader::all() ); ?>
<?php ( $home_abouts = \App\Models\HomeAbout::all() ); ?>
<?php ( $team = \App\Models\tedxphteams::orderBy('id', 'asc')->limit(5)->get() ); ?>

<section class="section section--singular2 video bg-black">
    <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <?php $__currentLoopData = $home_headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <img src="<?php echo e(asset('uploads/homepage')); ?>/<?php echo e($data->file_path); ?>" class="d-block w-100" alt="Image">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

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
                            <img src="<?php echo e(asset('files/media/data.jpg')); ?>" alt="">
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
                    <img src="<?php echo e(asset('files/media/question.png')); ?>" alt="">
                    <img src="<?php echo e(asset('files/media/voiceslogo.png')); ?>" alt="">
                </h5>
                <p class="text-white bottom fw-bold fw-18">Voices allows you to speak up against societal ills and
                    malpractices
                    happening in our communities and
                    provide government representatives with information on the citizen’s sentiments and expectations.We
                    collate the data based on the voice outs of citizens and publish this on the listen page so that
                    government representatives are aware of the people’s needs by so doing responds according and in the
                    situation of crisis intervene before the situation escalates.</p>
                <button class="btn border border-white text-white py-3 p-2 mt-3" type="button"> <a
                        style="text-decoration: none !important; color:#fff !important;"
                        href="https://voices.i-amvocal.org/join">See More</a> </button>
            </div>
            <div class="col-lg-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img class="mt-5" src="<?php echo e(asset('files/media/vphone.png')); ?>" alt="">
            </div>
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
                            <a href="<?php echo e(route('careers')); ?>#donations"
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

<section class="section bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                <img class="homeimg" src="<?php echo e(asset('files/media/slide.jpg')); ?>" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                <img class="homeimg" src="<?php echo e(asset('files/media/slide1.jpg')); ?>" alt="">
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


<!--<section class="section-block  bg-black">
    <div class="container abtTedxph py-5">
        <div class="row">
            <div class="col-12">
                <h5 class="text-white py-4">Join our mailing list</h5>
            </div>
            <div class="col-lg-12 pb-4">
                <div class="signup-form-container">
                    <form class="signup-form" action="#" novalidate="">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 py-1">
                                <div class="field-wrapper">
                                    <input type="email" name="email" class="py-3" placeholder="Email address*"
                                        tabindex="2" required="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 py-1">
                                <input type="submit" value="Subscribe Now" class="btn bg-red rounded-0 py-3 ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/index.blade.php ENDPATH**/ ?>