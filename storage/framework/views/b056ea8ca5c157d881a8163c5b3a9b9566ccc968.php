<?php $__env->startSection('title'); ?>
Light Bearer
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section bg-black mt-5">
    <div class="container abtTedxph bg-black pt-5 pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                <div class="p-5 text-white">
                    <h5>TEDxPortHarcourt 2020</h5>
                    <h4 class="PageActive fw-14"><span class="italic">Light Bearer</span></h4>
                    <p class="fw-20">In a crisis, hope can often be the only thing we can hold onto. For many, there is
                        little to be hopeful for in the fight against ( The pandemic) challenges, but like with
                        anything, there is always a bright side</p>
                    <p class="fw-20">At TEDxPortHarcourt 2020 under the theme “Light Bearer “ we want to characterize
                        the despairing individual, his motivations, and his capacity for decision-making amidst the
                        darkness and uncertainty. </p><br>
                    <h5 class=" fw-"><span class="PageActive">VENUE:</span> Virtual</h5>
                    <h5 class=" fw-"><span class="PageActive">DATE:</span> December 05, 2020</h5>
                    <h5 class=" fw-"><span class="PageActive">TIME:</span> </h5>
                </div>
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

<section class="section section--singular pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section>
                    <header class="page-header mb-4">
                        <h1 class="page-title">Speakers</h1>
                        <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
                    </header>
                    <div class="paragraph in-view in-view--in">
                        <div class="row in-view__child in-view__child--fadein in-view__child--in">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <!--<div class="dashed in-view__child in-view__child--in">
                        <p>We curate our speakers bearing in mind the African narrative. Our speakers are thinkers, builders and innovators that are Africans by origin, working on African problems or Africans in the diaspora making a difference in the societies they find themselves notwithstanding the fact that peoples of other descent can as well be invited to speak to our audience as far as they meet our rigorous screening process during curation.</p>
                    </div>-->
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-5 text-center">
                        <h2>Speaker lineup will be<br> announced soon.</h2>
                    </div>
            
                    <!--<div class="col-lg-4">
                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <a style="text-transform: uppercase;" class="speakersname">
                                    <h5 class="in-view__child in-view__child--fadein">Donald Okudu</h5>
                                </a>
                                
                                    <input type="hidden" name="speaker_details_id" value=" ">
                                    <input type="hidden" name="events_details_id" value=" ">
                                    <figure><a
                                            style="cursor:pointer;  border:0px !important; background:none !important;"
                                            href="<?php echo e(route('speaker')); ?>">
                                            <img class="lazyload--el lazyload in-view__child"
                                                src="<?php echo e(asset('files/media/mrD.jpg')); ?>" alt="" width="445"
                                                height="600">
                                            <div class="poster--cover in-view in-view__child"></div>
                                        </a></figure>
                            </div>
                            <div class="speaker-neat__copy in-view">
                                <p style="text-transform: uppercase;" class="in-view__child in-view__child--fadein">
                                    ART/CREATIVE DIRECTOR</p>
                                <p class="speaker-neat__links in-view__child in-view__child--fadein">
                                    <span class="sub-head dashed dashed--reverse dashed--hover in-view__child">
                                        <a href=""><span class="sr-only">Follow us on instagram</span><i
                                                class="fa fa-lg fa-instagram"></i></a>
                                        <a href=""><span class="sr-only">Follow us on linkedin</span><i
                                                class="fa fa-lg fa-linkedin-square"></i></a>
                                        <a href=""><span class="sr-only">Follow us on twitter</span><i
                                                class="fa fa-lg fa-twitter-square"></i></a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>-->

                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/tedxph/resources/views/pages/event-details.blade.php ENDPATH**/ ?>