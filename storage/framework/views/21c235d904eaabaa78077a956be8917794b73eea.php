<?php $__env->startSection('title'); ?>
Media
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $media = \App\Models\Media::all() ); ?>
<?php ( $news = \App\Models\News::all() ); ?>
<!--<section class=" bg-black py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="team-members">
                    <div class="in-view in-view--in pt-5 pb-4">
                        <h1 class="page-title page-title2 text-white">Live Stream</h1>
                    </div>
                    <iframe width="100%" height="515" src="https://www.youtube.com/embed/Y2C3uNcoivk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
               
            </div>
        </div>
    </div>
</section>-->

<style>
    #st-el-1 .st-btn[data-network='facebook'],
    #st-el-1 .st-btn[data-network='twitter'],
    #st-el-1 .st-btn[data-network='pinterest'],
    #st-el-1 .st-btn[data-network='email'],
    #st-el-1 .st-btn[data-network='sharethis'],
    #st-el-1 .st-btn[data-network='whatsapp'] {
        background-color: #000 !important;
    }

</style>

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="team-members pt-5">
                    <div class="in-view in-view--in py-4">
                        <h1 class="page-title page-title2 PageActive">Media Gallery</h1>
                    </div>
                </div>
            </div>
            <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.modals.videos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="member">
                    <div class=" poster poster--square ">
                        <a href="#" data-toggle="modal" data-target="#videosDetails<?php echo e($data->id); ?>">
                            <figure class="m-0">
                                <img class="lazyload--el in-view__child lazyloaded in-view__child--in"
                                    src="<?php echo e(asset('uploads/eventgallery')); ?>/<?php echo e($data->file_path); ?>" alt="" width="445"
                                    height="445">
                                <div class="poster--cover in-view in-view__child in-view--in in-view__child--in">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="member__info in-view in-view--in">
                        <h6 style="font-size:15px !important;"
                            class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in">
                            <?php echo e($data->event_theme); ?>

                        </h6>
                        <p style="font-size:12px !important; line-height:13px !important; text-transform:capitalize !important; letter-spacing:1px !important;"
                            class="PageActive member__title member__title1 sub-head-2 in-view__child in-view__child--fadein in-view__child--in">
                            <?php echo e($data->event_name); ?>

                        </p>
                    </div>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<section class="bg-black pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="team-members pt-5">
                    <div class="in-view in-view--in text-white py-4">
                        <h2 class="fw-26 ">iamvocal | news & archives</h2>
                        <p class="col-lg-5 px-0  fw-14 lh-1-5">We are a community of people who have decided to let
                            their voices be heard in matters concerning their governance as well as their overall
                            wellbeing. We believe that when people trust the system of selection of their leaders, they
                            would be active participants in their governance.</p>
                    </div>
                </div>
            </div>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.modals.videos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-4">
                <div class="member">
                    <div class="poster poster--square ">
                        <a href=<?php echo e("allnews/".$news['id']); ?>>
                            <figure class="m-0">
                                <img class="lazyload--el in-view__child lazyloaded in-view__child--in"
                                    src="<?php echo e(asset('uploads/news')); ?>/<?php echo e($news->file_path); ?>" alt="" width="445"
                                    height="445">
                                <div class="poster--cover in-view in-view__child in-view--in in-view__child--in">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="member__info in-view in-view--in">
                        <h6 style="font-size:15px !important;"
                            class="text-white member__name member__name1 in-view__child in-view__child--fadein in-view__child--in">
                            <?php echo e($news->title); ?>

                        </h6>
                    </div>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<script type="text/javascript">
    function showpics() {
        var a = $("#box").val();
        $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?tags=" + a +
            "&tagmode=any&format=json&jsoncallback=?",
            function (a) {
                $("#images").hide().html(a).fadeIn("fast"), $.each(a.items, function (a, e) {
                    $("<img/>").attr("src", e.media.m).appendTo("#images")
                })
            })
    }

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/pages/media.blade.php ENDPATH**/ ?>