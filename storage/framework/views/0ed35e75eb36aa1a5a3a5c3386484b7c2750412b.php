<?php $__env->startSection('title'); ?>
Media
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php ( $media = \App\Models\Media::all() ); ?>
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
    #st-el-1 .st-btn[data-network='facebook'] ,
    #st-el-1 .st-btn[data-network='twitter'] ,
    #st-el-1 .st-btn[data-network='pinterest'] ,
    #st-el-1 .st-btn[data-network='email'] ,
    #st-el-1 .st-btn[data-network='sharethis'] ,
    #st-el-1 .st-btn[data-network='whatsapp'] {
  background-color: #000 !important;
}

</style>

<section class="section bg-black py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="team-members">
                    <div class="in-view in-view--in pt-5 pb-4">
                        <h1 class="page-title page-title2 text-white">Video Gallery</h1>
                    </div>

                    <!--<form method="POST" id="search_form" class="searchform " action="searchform.php"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4">
                                <br class="visible-xs">
                                <label class="text-white">Type</label>
                                <select class="form-control" name="talk_type">
                                    <option>All</option>
                                    <option value="talk">Talk</option>
                                    <option value="performance">Performance</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <br class="visible-xs">
                                <label class="text-white">Category</label>
                                <select class="form-control" name="speaker_tags">
                                    <option>All</option>
                                    <option value="African Ideas">African Ideas</option>
                                    <option value="Art">Art</option>
                                    <option value="Community">Community</option>
                                    <option value="Culture">Culture</option>
                                    <option value="Design">Design</option>
                                    <option value="Ideas">Ideas</option>
                                    <option value="TEDx">TEDx</option>
                                    <option value="Education">Education</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Film">Film</option>
                                    <option value="Music">Music</option>
                                    <option value="Youth">Youth</option>
                                    <option value="General and Miscellaneous">General &amp; Miscellaneous</option>
                                    <option value="Environment">Environment</option>
                                    <option value="Global Issues">Global Issues</option>
                                    <option value="Science">Science</option>
                                    <option value="Sustainability">Sustainability</option>
                                    <option value="Startups">Startups</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Health">Health</option>
                                    <option value="Humanities">Humanities</option>
                                    <option value="Society">Society</option>
                                    <option value="Lifestyle">Lifestyle</option>
                                    <option value="Performance">Performance</option>
                                    <option value="Behind The Scenes">Behind The Scenes</option>
                                    <option value="Civil Rights">Civil Rights</option>
                                    <option value="LGBTI">LGBTI</option>
                                    <option value="Life">Life</option>
                                    <option value="Cities">Cities</option>
                                    <option value="Business">Business</option>
                                    <option value="Food">Food</option>
                                    <option value="Finance">Finance</option>
                                    <option value="How Ideas Spread">How Ideas Spread</option>
                                    <option value="Politics">Politics</option>
                                    <option value="Social Science">Social Science</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <br class="visible-xs">
                                <label class="text-white">Event</label>
                                <select class="form-control" name="event_name">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-sm-12">
                                <label class="text-white pt-1">Keywords</label>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <input id="q" class="form-control" name="search" value="">
                                    </div>
                                    <div class="col-sm-2"><br class="visible-xs">  
                                        <a type="submit" class="btn button border border-white text-white p-2"
                                        target="blank">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>--> 
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.modals.videos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="member">
                    <div class="member__image poster poster--square in-view in-view--in">
                        <a href="#" data-toggle="modal" data-target="#videosDetails<?php echo e($data->id); ?>">
                            <figure>
                                <img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="<?php echo e(asset('uploads/eventgallery')); ?>/<?php echo e($data->file_path); ?>" 
                                    alt="" width="445" height="445">
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
                        <p style="font-size:12px !important; line-height:13px !important; color:red !important; text-transform:capitalize !important; letter-spacing:1px !important;"
                            class="member__title member__title1 sub-head-2 in-view__child in-view__child--fadein in-view__child--in">
                            <?php echo e($data->event_name); ?>

                        </p>
                    </div>
                </div>
             
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section bg-black" id="gallery">
    <div class="container">
        <div class="row pt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="in-view in-view--in py-5">
                    <h1 class="page-title page-title2 text-white">Events Gallery</h1>
                </div>
                <div class="in-view in-view--in">
                    <iframe style="position: relative; top: 0; left: 0; width: 100%;"
                        src="https://flickrembed.com/cms_embed.php?source=flickr&amp;layout=responsive&amp;input=www.flickr.com/photos/96605729@N05&amp;sort=0&amp;by=user&amp;theme=default&amp;scale=fit&amp;speed=5000&amp;limit=100&amp;skin=default&amp;autoplay=true"
                        scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"
                        height="700" frameborder="0"></iframe>
                </div>
            </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tedxiydt/public_html/resources/views/pages/media.blade.php ENDPATH**/ ?>