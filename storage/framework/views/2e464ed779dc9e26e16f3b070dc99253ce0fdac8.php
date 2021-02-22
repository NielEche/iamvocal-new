<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $home_headers = \App\Models\HomeHeader::all() ); ?>
<?php ( $home_abouts = \App\Models\HomeAbout::all() ); ?>
<?php ( $speakers = \App\Models\Speakers::orderBy('id', 'asc')->where('event_id', 1)->limit(4)->get() ); ?> 

<section class="section section--singular2 video bg-black">
    <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <?php $__currentLoopData = $home_headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-caption d-none  d-md-block">
                     
                        <noscript><a href="https://www.eventbrite.com/e/tedxportharcourt-tickets-26902766900"
                                rel="noopener noreferrer" target="_blank"></noscript>
                      
                                <button class="btn border border-white text-white py-3 p-2 mt-3"  type="button"> <a style="text-decoration: none !important; color:#fff !important;" href="<?php echo e($data->button_link); ?>"><?php echo e($data->button_text); ?></a> </button>
                        <noscript></a>Buy Tickets on Eventbrite</noscript>

                        <script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

                        <script type="text/javascript">
                            var exampleCallback = function () {
                                console.log('Order complete!');
                            };

                            window.EBWidgets.createWidget({
                                widgetType: 'checkout',
                                eventId: '26902766900',
                                modal: true,
                                modalTriggerElementId: 'eventbrite-widget-modal-trigger-26902766900',
                                onOrderComplete: exampleCallback
                            });

                        </script>
                </div>
                <img src="<?php echo e(asset('uploads/homepage')); ?>/<?php echo e($data->file_path); ?>" class="d-block w-100" alt="Image">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
           
        </div>
       
    </div>
</section>

<section class="section bg-black">
    <div class="container abtTedxph bg-black pt-3 pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                <?php $__currentLoopData = $home_abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-5 text-white">
                    <h5>About TEDxPortHarcourt</h5>
                    <h4 class="PageActive fw-14"><span class="italic"><?php echo e($about->event_theme); ?></span></h4>
                    <p class="fw-20"><?php echo e($about->event_text); ?></p>
                    <a href="<?php echo e(route('about')); ?>" class="btn border border-white text-white p-2 fw-12">Read
                        More</a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-black">
                            <div class="p-5 text-white">
                                <h5>About TEDxPortHarcourt Salon </h5>
                                <p>TEDxPortHarcourt introduces the Salon: amonthly speaker
                                    series which brings some of the city’s most inspired thinkers to share perspectives
                                    and spark conversation. A unique mixture of talks,workshops and interactive
                                    experiences. </p>
                                <p>Salon events will bring our community ofinnovators and instigators together in informal evening forums to learn andengage on provocative themes each...</p>
                                <button class="btn border border-white text-white p-2 fw-12">Read More</button>
                            </div>
                        </div>-->
        </div>
    </div>
</section>

<section class="section" id="registration">
    <div class="container-fluid container2 section-block hero-3 hero-3-services-1 bottom nopadding"
        style="height: 0px !important;">
        <div class="row1 tmh-perspective" style="max-width: 100% !important; ">
           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-threshold="0.5"
                style="padding-left:0px !important; padding-right:0px !important; backface-visibility: hidden;transition-property: transform, opacity; transition-duration: 1000ms; transition-timing-function: cubic-bezier(0.11, 0.69, 0.66, 1.01); transition-delay: 200ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                <div style="background-color: rgba(0,0,0,0.1) !important; border-top:none !important;" class="hero-content py-10 ">
                    <div class="color-white bottom " style="height:100% !important;">

                        <div class="indent my-5 ">
                            <div class="col-12 col-xl-6 offset-xl-1  nopadding">
                                <h2 class="margin-top "
                                    style=" text-align:left !important; font-size:30px !important; line-height: 37px !important;">
                                    <span style="width:80%; ">Get your tickets today and be part of
                                        TEDxPortHarcourt</span>
                                </h2>
                            </div>
                            <div class="col-12 col-xl-10 offset-xl-1  nopadding">
                        
                                <!-- Noscript content for added SEO -->
                                <noscript><a href="https://www.eventbrite.com/e/tedxportharcourt-tickets-26902766900"
                                        rel="noopener noreferrer" target="_blank"></noscript>
                                <!-- You can customize this button any way you like -->
                                <?php $__currentLoopData = $home_headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button class="btn border border-white text-white py-3 p-2 mt-3"  type="button"> <a style="text-decoration: none !important; color:#fff !important;" href="<?php echo e($data->button_link); ?>"><?php echo e($data->button_text); ?></a> </button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <noscript></a>Buy Tickets on Eventbrite</noscript>

                                <script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

                                <script type="text/javascript">
                                    var exampleCallback = function () {
                                        console.log('Order complete!');
                                    };

                                    window.EBWidgets.createWidget({
                                        widgetType: 'checkout',
                                        eventId: '26902766900',
                                        modal: true,
                                        modalTriggerElementId: 'eventbrite-widget-modal-trigger-26902766900',
                                        onOrderComplete: exampleCallback
                                    });

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="bottom: 7px" class="section bg-black">
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
<br>
<section class="container webinar-speakers" id="details">
    <header class="heading-underline">
        <h4 class="title"><span>Speakers</span></h4>
    </header>
    <br>
    <br>
    <div class="row">
        <?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $speak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="speaker-neat">
                <div class="speaker-neat__image poster in-view">

                    <input type="hidden" name="speaker_details_id" value=" ">
                    <input type="hidden" name="events_details_id" value=" ">
                    <figure><a href="<?php echo e("showSpeakerss/".$speak->id); ?>" style="cursor:pointer; border:0px !important; background:none !important;" type="submit"
                            name="speaker_details_btn">
                            <img class="lazyload--el lazyload in-view__child" src="<?php echo e(asset('uploads/speakers')); ?>/<?php echo e($speak->file_path); ?>"
                                alt="" width="445" height="600">
                            <div class="poster--cover in-view in-view__child"></div>
                        </a></figure>
                </div>
                <div class="speaker-neat__copy in-view">
                    <h5 style="text-transform:uppercase;" class="in-view__child in-view__child--fadein">
                        <?php echo e($speak->name); ?>

                    </h5>
                    <p style="text-transform:uppercase;" class="in-view__child in-view__child--fadein">
                        <?php echo e($speak->occupation); ?>

                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    </div>

    <header class="heading-underline">
        <h4 style="top:0px !important;" class="title">
            <span><a href="<?php echo e(route('events')); ?>" class="link">See all speakers</a></span><br><br>
        </h4>
    </header>
</section>

<!--<section class="section bg-black py-5">
    <div class="container abtTedxph mb-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-5">
                <h2 class="text-center f-48 text-white">SCHEDULE</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2">
                <h5 class="PageActive">December 5</h5>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">12pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">DR. IPALIBO HARRY BANIGO</p>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="" data-toggle="modal" data-target="#ipalibo" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">12:09pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">BIODOMOYE AMANDA THOM-OKOROH</p>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="#" data-toggle="modal" data-target="#amanda" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">12:20pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">NNAMDI UDECHUKWU</p>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="#" data-toggle="modal" data-target="#nnamdi" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">12:24pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">KBLACKTHEBLACK</p>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="#" data-toggle="modal" data-target="#kblack" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">12:36pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">CELESTINA OBIEKEA</p>
                </div>
               <div class="col-lg-4 p-0">
                    <a href="#" data-toggle="modal" data-target="#celestina" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">12:48pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">ANDREW OBUOFORIBO</p>
                </div>
               <div class="col-lg-4 p-0">
                    <a href="#" data-toggle="modal" data-target="#andrew" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">12:59pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">DR. MINA OGBANGA</p>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="#" data-toggle="modal" data-target="#mina" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">1:07pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">DR. NSOFOR IFEANYI</p>
                </div>
               <div class="col-lg-4 p-0">
                    <a href="#"  data-toggle="modal" data-target="#nsofor" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">1:18pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">KOTRELL</p>
                </div>
                <div class="col-lg-4 p-0">
                    <a href="#" data-toggle="modal" data-target="#kotrell" class="btn bg-red py-2 rounded-0 fw-16">Watch video</a>
                </div>
            </div>
            

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">1:39pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">DR. ITORO EMEMBOLU</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">1:41pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">OLUSEUN ONIGBINDE</p>
                </div>
               
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">1:46pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">KOTRELL EXTRAS</p>
                </div>
                
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16 font-weight-bold">1:30pm WAT</p>
                </div>
                <div class="col-lg-4 p-0">
                    <p class="text-white fw-16">SHER NAWAZ</p>
                </div>
                
            </div>

        </div>
    </div>
</section>-->

<section class="section bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                <img class="homeimg" src="<?php echo e(asset('files/media/slide5.jpg')); ?>" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
                <img class="homeimg" src="<?php echo e(asset('files/media/slide6.jpg')); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-block  bg-black">
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
</section>

<?php echo $__env->make('partials.speakerModal.ipalibo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.amanda', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.ipalibo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.nnamdi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.kblack', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.celestina', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.andrew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.mina', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.nsofor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.speakerModal.kotrell', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tedxiydt/public_html/resources/views/pages/index.blade.php ENDPATH**/ ?>