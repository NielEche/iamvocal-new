<?php $__env->startSection('title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section class="section bg-black mt-5">
    <div class="container-fluid p-0">
        <div class="row">
            <?php $__currentLoopData = $eventss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->first): ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center">
                <img class="w-100" src="<?php echo e(asset('uploads/events')); ?>/<?php echo e($eve->file_path1); ?>" alt="">
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="container bg-black pt-4 pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                <?php $__currentLoopData = $eventss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-5 text-left text-white">
                    <h4 class="fw-30"><?php echo e($eve['event_name']); ?></h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-4 text-white">
                    <p class="fw-20"><?php echo e($eve['about']); ?></p><br>
                </div>
                <?php endif; ?>
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


<section class="section bg-black ">
    <div class="container bg-black pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <header class="page-header mb-4">
                    <h1 class="page-title text-white">EVENTS</h1>
                </header>
                <?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $speak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $date = new Carbon;
                ?>
                <?php if($date < $speak->date): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <div class="eventcard">
                                    <a style="text-transform: uppercase;" class="speakersname">
                                        <h5 class="eventText fw-16 in-view__child in-view__child--fadein text-white">
                                            <?php echo e($speak->name); ?>

                                        </h5>
                                        <p style="text-transform: uppercase; line-height:1;"
                                            class="eventText fw-14 pt-4 in-view__child in-view__child--fadein text-white">
                                            <?php echo e(\Carbon\Carbon::parse($speak->date)->format('M d Y')); ?></p>
                                        <p style="text-transform: uppercase;  line-height:0.5;"
                                            class="eventText fw-14 pt-5 in-view__child in-view__child--fadein text-white">
                                            <?php echo e($speak->time); ?></p>
                                    </a>
                                    <div class="eventsall">
                                        <a style="cursor:pointer;" class=" nopadding">
                                            <img style="object-fit: cover; width:600px !important; height:100%;"
                                                src="<?php echo e(asset('uploads/speakers')); ?>/<?php echo e($speak->file_path); ?>"
                                                class="img-top lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                                alt="Card Back">
                                            <img style="object-fit: cover; width:600px !important; height:100%; "
                                                src="<?php echo e(asset('uploads/speakers')); ?>/<?php echo e($speak->file_path); ?>"
                                                class="lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                                alt="Card Front">

                                            <div class="poster--cover in-view in-view__child"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-neat__copy in-view pt-2">
                                <a target="_blank" href="<?php echo e($speak->register); ?>"><button
                                        class="btn bg-blue text-white pt-2" type="button">
                                        Register</button></a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $speak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($date > $speak->date): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        <div class="speaker-neat">
                            <div class="speaker-neat__image poster in-view">
                                <div class="eventcard">
                                    <a style="text-transform: uppercase;" class="speakersname">
                                        <h5 class="eventText fw-16 in-view__child in-view__child--fadein text-white">
                                            <?php echo e($speak->name); ?>

                                        </h5>
                                        <p style="text-transform: uppercase; line-height:1;"
                                            class="eventText fw-14 pt-4 in-view__child in-view__child--fadein text-white">
                                            <?php echo e(\Carbon\Carbon::parse($speak->date)->format('M d Y')); ?></p>
                                        <p style="text-transform: uppercase;  line-height:0.5;"
                                            class="eventText fw-14 pt-5 in-view__child in-view__child--fadein text-white">
                                            <?php echo e($speak->time); ?></p>
                                    </a>
                                    <div class="eventsall">
                                        <a style="cursor:pointer;" class=" nopadding">
                                            <img style="object-fit: cover; width:600px !important; height:100%;"
                                                src="<?php echo e(asset('uploads/speakers')); ?>/<?php echo e($speak->file_path); ?>"
                                                class="img-top lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                                alt="Card Back">
                                            <img style="object-fit: cover; width:600px !important; height:100%; "
                                                src="<?php echo e(asset('uploads/speakers')); ?>/<?php echo e($speak->file_path); ?>"
                                                class="lazyload--el eventsimage eventsimage1 lazyload in-view__child"
                                                alt="Card Front">

                                            <div class="poster--cover in-view in-view__child"></div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="speaker-neat__copy in-view pt-2">
                                <?php
                                $date = new Carbon;
                                ?>

                                <a href="<?php echo e("showSpeaker/".$speak->id); ?>"><button class="btn bg-blue text-white pt-2"
                                        type="button">
                                        View</button></a>

                            </div>
                        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/event-details.blade.php ENDPATH**/ ?>