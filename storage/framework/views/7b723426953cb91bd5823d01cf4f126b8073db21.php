<?php $__env->startSection('title'); ?>
Speaker Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section section--singular">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br>
                <div class="container">
                    <div class="mypanel">

                        <ul style="padding:0px !important;">
                            <li style="list-style:none;">
                                <div class="board board--left">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
                                            <div style="height:442px; width:auto;" class="board__image poster in-view">
                                                <img class="lazyload--el lazyload in-view__child"
                                                    src="<?php echo e(asset('files/media/speakers/ipalibo.jpg')); ?>"
                                                    alt="'.$row['name'].'" width="100%" height="100%">
                                                <div class="poster--cover in-view in-view__child">
                                                </div>
                                            </div>
                                        </div>

                                        <div style="background-color: #000;"
                                            class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div style="padding-top:2px;" class="in-view">

                                                <div
                                                    class=" member__name member__name1 in-view__child in-view__child--fadein in-view__child--in js-video-lead">
                                                    <img style="object-fit: cover;  width:555px; height:370px;"
                                                        src="<?php echo e(asset('files/media/lb.png')); ?>" alt="" width="555px "
                                                        height="370px">
                                                    <div style="position:relative; overflow:hidden; margin-bottom:0px;"
                                                        class=' newvideo member__name1 in-view__child in-view__child--fadein in-view__child--in'>
                                                        <!--<iframe width="560" height="315"
                                                            src="https://www.youtube.com/embed/sX_BUWjspoY"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>-->

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
                                                            "files/media/play-default.png"
                                                        ).css({
                                                            "position": "absolute",
                                                            "top": top +
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
                                                            "files/media/play-active.png"
                                                        ).css({
                                                            "display": "none",
                                                            "position": "absolute",
                                                            "top": top +
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

                                            <div style=" padding-top:10px;" class="board__copy in-view">
                                                <p
                                                    class="sub-head dashed in-view__child in-view__child--fadein text-white">
                                                    LEADERSHIP IN THE TIME OF CRISES
                                                    </span> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="list-style:none;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="board__copy in-view">
                                            <h2 style="text-transform: uppercase;"
                                                class="in-view__child in-view__child--fadein text-black">
                                                DR. IPALIBO HARRY BANIGO
                                            </h2>
                                            <p style="text-transform: uppercase;"
                                                class="sub-head dashed in-view__child in-view__child--fadein text-black">
                                                Deputy Governor at Rivers State Government
                                            </p>
                                            <p style="margin-left:0px;"
                                                class="indent in-view__child in-view__child--fadein text-black">
                                                Dr. Mrs. Ipalibo Harry Banigo epitomizes courage and inner strength that
                                                enable her to nurture her talents and stand out among her peers in her
                                                educational and professional careers, as well as in the enormously
                                                challenging arena of politics. This woman of substance is a delightful
                                                mix of beauty and brains. Her beauty is surpassed only by her
                                                intellectual competence, her friendly disposition, heartwarming
                                                humility, a sense of humor that puts people at ease when in her presence
                                                and a clam motherly mien.
                                                Dr. Ipalibo Harry Banigo was born to the Harry’s family of Obuama in
                                                Degema Local Government Area of Rivers State, Nigeria, on the 20th day
                                                of December 1952. She made history as the First Female Deputy Governor
                                                of Rivers State, since May 29, 2015 to present. She attended Queens
                                                College Yaba, Lagos between 1964 – 1968 and returned to the same school
                                                between 1969 – 1970 for high school result. She obtained Division One in
                                                the West African School Certificate examination in 1968, and Distinction
                                                in the High School results in 1970.
                                                Having equipped herself with these basic Qualifications, she proceeded
                                                to the University of Ibadan, University College Hospital and obtained
                                                degree as Bachelor of Medicine and Bachelor of Surgery (MBBS) and thus
                                                qualified as a Medical Doctor in 1976. Being a woman of distinction, Dr.
                                                Mrs. Harry Banigo attended top-notch institutions to boost her
                                                professional career. She enrolled in Harvard University School of Public
                                                Health and obtained a master of public health degree in June 1981. In
                                                1990, she got a post-graduate diploma in tropical hygiene from the
                                                London School of Hygiene and Tropical Medicine. In July 1992, she
                                                obtained a Diploma in Dermatology from University of London, and having
                                                acquired such array of academic honors; Dr Banigo was ready to affect
                                                her world positively.
                                                Dr. Mrs. Ipalibo Harry Banigo was the Senior Medical Officer In-Charge,
                                                Port Harcourt Health Services, Rivers State, from 1st July 1981 –
                                                December 1984. She became Honorary Consultant Dermatologist, University
                                                of Port Harcourt Teaching Hospital. She was Appointed Principal, Rivers
                                                State School of Health Technology, Port Harcourt from 2nd January 1985 –
                                                11th February 1994.
                                                Dr. Harry Banigo became the Director, Public Health, Rivers State
                                                Ministry of Health and Social Welfare in February 1994 – December 1995.
                                                This Outstanding Woman was appointed acting commissioner for health and
                                                social welfare in December 1996 – June 1997. She was Director General,
                                                Ministry of Health and Social Welfare and eventually became the
                                                Permanent Secretary, Rivers state Ministry of Health and Social Welfare
                                                in April 1998.
                                                Moving on, she capped her public service career with her appointment as
                                                Head of Service of Rivers State from May – October, 1998. She got the
                                                best achievement of her public service career when she became the
                                                Secretary to the Rivers State Government from May 1998– July 1999.
                                                Dr. Banigo was appointed Public Health Advisor to Shell Petroleum
                                                Development Company (East) in 2000, and she was Executive Director
                                                National Primary Health Care Development Agency, and later became
                                                Secretary to The Board of The Agency.
                                                She was a Member of the Governing Council, University of Calabar, and
                                                the Governing Board, University of Nigeria Teaching Hospital. She was
                                                also a member of reference board (DFID) and member, Rivers State Food
                                                and Nutrition Committee.
                                                She was also a Project Director, United Nations Fund for Population
                                                Activities (UNFPA). She was Chairman, Rivers State Relief Committee,
                                                member, Rivers state Hospital Management Board, and Project Director
                                                UNICEF among others.
                                            </p>
                                            <p style="margin-left:0px;"
                                                class="board__copy--links indent in-view__child in-view__child--fadein">
                                                <span
                                                    class="sub-head dashed dashed--reverse dashed--hover in-view__child">
                                                    <a href="https://www.instagram.com/harrybanigo/"><span
                                                            class="sr-only">Follow us on instagram</span><i
                                                            class="fa fa-lg fa-instagram"></i></a>
                                                    <a href="https://ng.linkedin.com/in/dr-ipalibo-banigo-13038936"><span
                                                            class="sr-only">Follow us on linkedin</span><i
                                                            class="fa fa-lg fa-linkedin-square"></i></a>
                                                    <a href="https://twitter.com/HarryBanigo"><span
                                                            class="sr-only">Follow us on twitter</span><i
                                                            class="fa fa-lg fa-twitter-square"></i></a>
                                                    <a href="https://www.facebook.com/DrMrsIpaliboHarryBanigo/"><span
                                                            class="sr-only">Follow us on facebook</span><i
                                                            class="fa fa-lg fa-facebook-square"></i></a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div style="display:flex; align-items:flex-end;"
                                        class="pt-3 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="board__copy in-view">

                                            <div style="display:flex; justify-content:flex-start; margin:0px !important;"
                                                class="board__copy--links indent in-view__child in-view__child--fadein">
                                                <input type="hidden" name="event_speaker_id" value="">
                                                <a href="<?php echo e(route('events')); ?>"
                                                    style="cursor:pointer; border:0px; background:none;"
                                                    class="nopadding" name="add_eventspeaker_btn">
                                                    <p style="text-transform: uppercase; line-height:1.1; "
                                                        class="sub-head  in-view__child in-view__child--fadein">
                                                        <i style="font-size:20px; color:#f71735;"
                                                            class="fa fa-arrow-circle-left"></i>
                                                        Back To Event</p>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="board__copy in-view">

                                            <div style="display:flex; justify-content:flex-end;" class="">
                                                <img class="lazyload--el lazyload in-view__child nextimg"
                                                    src="<?php echo e(asset('files/media/speakers/sher.jpg')); ?>" alt="">
                                            </div>
                                            <div style="display:flex; justify-content:flex-end;"
                                                class="board__copy--links indent in-view__child in-view__child--fadein">
                                                <input type="hidden" name="speaker_details_id" value="">
                                                <input type="hidden" name="events_details_id" value="">
                                                <a style="cursor:pointer; border:0px; background:none;"
                                                    class="nopadding" href="<?php echo e(route('sher')); ?>"
                                                    name="speaker_details_btn">
                                                    <p style="text-transform: uppercase; padding-top:12px;"
                                                        class="sub-head in-view__child in-view__child--fadein">
                                                        Next Talk <i style=" font-size:20px; color:#f71735;"
                                                            class="fa fa-arrow-circle-right"></i>
                                                    </p>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tedxiydt/public_html/resources/views/pages/speakers/ipalibo.blade.php ENDPATH**/ ?>