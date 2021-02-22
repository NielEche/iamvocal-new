<div class="modal fade " id="videosDetails<?php echo e($data->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-small" role="document">

        <div class="modal-content bg-black">
            <div class="modal-header border-0">
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body pt-0">
                <div class="row">
                    <div class="col-12 col-lg-12 col-sm-12 ">
                        <div class="mb-3">
                            <div class="member__info in-view in-view--in">
                                <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in"
                                    style="color: red;">  <?php echo e($data->event_theme); ?></h6>
                                <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in text-white"
                                    id="team_title" style="margin-bottom: 0px;">  <?php echo e($data->event_name); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-sm-12 ">
                        <div class="member" style="padding-bottom: 0px; margin-bottom:0px;">
                            <div class="member__image poster poster--square in-view in-view--in">
                                <iframe width="100%" height="315" src="<?php echo e($data->embed); ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="statusMsg"></p>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/tedxiydt/public_html/resources/views/partials/modals/videos.blade.php ENDPATH**/ ?>