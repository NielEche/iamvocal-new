<?php $__env->startSection('title'); ?>
Speaker Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section section--singular">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2">
                            <img class="w-100 lazyload--el lazyload in-view__child"
                                src="<?php echo e(asset('uploads/speakers')); ?>/<?php echo e($speakers->file_path); ?>"
                                alt="<?php echo e($speakers['name']); ?>" style="height:400px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="mypanel pb-3">

                        <ul style="padding:0px !important;">
                            <li style="list-style:none;">
                                <div class="board board--left">

                                </div>
                            </li>
                            <li style="list-style:none;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="board__copy in-view">
                                            <h2 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                <?php echo e($speakers['name']); ?>

                                            </h2>
                                            <h6 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                Venue: <?php echo e($speakers['venue']); ?>

                                            </h6>
                                            <h6 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                Date: <?php echo e(\Carbon\Carbon::parse($speakers->date)->format('M d Y')); ?>

                                            </h6>
                                            <h6 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                Time: <?php echo e($speakers['time']); ?>

                                            </h6>
                                            <p style="text-transform: uppercase;"
                                                class="sub-head dashed in-view__child in-view__child--fadein text-black">
                                                <?php echo e($speakers['occupation']); ?>

                                            </p>
                                            <p style="margin-left:0px;"
                                                class="indent in-view__child in-view__child--fadein text-black">
                                                <?php echo e($speakers['bio']); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="row bg-blue">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-4">
                            <div class="in-view">

                                <div
                                    class="m-0 member__name member__name1 in-view__child in-view__child--fadein in-view__child--in js-video-lead">
                                    <img style="object-fit: cover;  width:525px; height:296px;"
                                        src="<?php echo e(asset('files/media/iamv.jpg')); ?>" alt="" width="525px " height="296px">
                                    <div style="position:relative; overflow:hidden; margin-bottom:0px;"
                                        class=' newvideo member__name1 in-view__child in-view__child--fadein in-view__child--in'>
                                        <iframe width="525" height="296" src="<?php echo e($speakers->embed); ?>" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>

                                    </div>
                                </div>

                            </div>
                            <script>
                                function video_lead_play_state(element, active) {
                                    var $active = $(element).closest(
                                        ".js-video-lead").find(
                                        ".btn-play-active");
                                    var $default = $(element).closest(
                                        ".js-video-lead").find(
                                        ".btn-play-default");

                                    if (active) {
                                        $active.show();
                                        $default.hide();
                                    } else {
                                        $active.hide();
                                        $default.show();
                                    }
                                }


                                $(document).ready(function () {
                                    // hide the videos and show the images
                                    var $videos = $(
                                        ".js-video-lead iframe");
                                    $videos.hide();
                                    $(".js-video-lead > img").not(
                                        ".btn-play").show();

                                    // position the video holders
                                    $(".js-video-lead").css("position",
                                        "relative");

                                    // prevent autoplay on load and add the play button
                                    $videos.each(function (index, video) {
                                        var $video = $(video);

                                        // prevent autoplay due to normal navigation
                                        var url = $video.attr(
                                            "src");
                                        if (url.indexOf(
                                                "&autoplay") > -1) {
                                            url = url.replace(
                                                "&autoplay=1",
                                                "");
                                        } else {
                                            url = url.replace(
                                                "?autoplay=1",
                                                "");
                                        }
                                        $video.attr("src", url)
                                            .removeClass(
                                                "js-video-lead-autoplay"
                                            );

                                        // add and position the play button
                                        var top = parseInt(
                                            parseFloat($video
                                                .css("height")
                                            ) / 2) - 15;
                                        var left = parseInt(
                                            parseFloat($video
                                                .css("width")) /
                                            2) - 21;
                                        var $btn_default = $(
                                            "<img />").attr(
                                            "src",
                                            "<?php echo e(asset('files/media/play-default.png')); ?>"
                                        ).css({
                                            "position": "absolute",
                                            "top": 130 +
                                                "px",
                                            "left": left +
                                                "px",
                                            "z-index": 100
                                        }).addClass(
                                            "btn-play btn-play-default"
                                        );
                                        var $btn_active = $(
                                            "<img />").attr(
                                            "src",
                                            "<?php echo e(asset('files/media/play-active.png')); ?>"
                                        ).css({
                                            "display": "none",
                                            "position": "absolute",
                                            "top": 130 +
                                                "px",
                                            "left": left +
                                                "px",
                                            "z-index": 110
                                        }).addClass(
                                            "btn-play btn-play-active"
                                        );
                                        $(".js-video-lead").append(
                                                $btn_default)
                                            .append($btn_active);
                                    });


                                    $(".js-video-lead img").on("click",
                                        function (event) {
                                            var $holder = $(this)
                                                .closest(
                                                    ".js-video-lead");
                                            var $video = $holder.find(
                                                "iframe");
                                            var url = $video.attr(
                                                "src");
                                            url += (url.indexOf("?") > -
                                                1) ? "&" : "?";
                                            url += "autoplay=1";
                                            $video.addClass(
                                                "js-video-lead-autoplay"
                                            ).attr("src", url);
                                            $holder.find("img")
                                                .remove();
                                            $video.show();
                                        });

                                    $(".js-video-lead > img").on(
                                        "mouseenter",
                                        function (event) {
                                            video_lead_play_state(this,
                                                true);
                                        });

                                    $(".js-video-lead > img").not(
                                        ".btn-play").on("mouseleave",
                                        function (event) {
                                            video_lead_play_state(this,
                                                false);
                                        });
                                });

                            </script>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-3 mt-2">
                            <?php echo $speakers->flickr; ?>

                        </div>
                    </div>

                    <div class="row">
                        <div style="display:flex; align-items:flex-end;"
                            class="py-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="board__copy in-view">

                                <div style="display:flex; justify-content:flex-start; margin:0px !important;"
                                    class="board__copy--links indent in-view__child in-view__child--fadein">
                                    <input type="hidden" name="event_speaker_id" value="">
                                    <a href="<?php echo e(url()->previous()); ?>"
                                        style="cursor:pointer; border:0px; background:none;" class="nopadding"
                                        name="add_eventspeaker_btn">
                                        <p style="text-transform: uppercase; line-height:1.1; "
                                            class="sub-head  in-view__child in-view__child--fadein">
                                            <i style="font-size:20px; color:#0b24fa;"
                                                class="fa fa-arrow-circle-left"></i>
                                            Back To Event</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <header class="page-header mb-4">
                                <h4 class="page-title text-black text-right">ALL EVENTS</h4>
                            </header>
                            <?php
                            $event_id = $speakers->event_id;
                            $date = new Carbon;
                            ?>

                            <?php ( $speakerss = \App\Models\Speakers::where('event_id', $event_id)->get()); ?>


                            <?php $__currentLoopData = $speakerss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="board__copy in-view">

                                    <div class="">
                                        <img style="height:200px; object-fit:cover;"
                                            class="w-100 lazyload--el lazyload in-view__child "
                                            src="<?php echo e(asset('uploads/speakers')); ?>/<?php echo e($datas->file_path); ?>" alt="">
                                    </div>
                                    <p><?php echo e($datas->name); ?> </p>
                                    <div class="m-0 pb-3 board__copy--links indent in-view__child in-view__child--fadein">
                                        <input type="hidden" name="speaker_details_id" value="">
                                        <input type="hidden" name="events_details_id" value="">
                                            <?php if($date < $datas->date): ?>
                                                <a target="_blank" href="<?php echo e($datas->register); ?>"><button
                                                        class="btn bg-blue text-white pt-2" type="button">
                                                        Register</button></a>
                                                <?php else: ?>
                                                <a href="<?php echo e(route('allevents', [ $datas->id])); ?>" ><button class="btn bg-blue text-white pt-2"
                                                    type="button">
                                                    View</button></a>
                                            <?php endif; ?>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/speakers/speakers.blade.php ENDPATH**/ ?>