<div class="modal fade " id="teamBio<?php echo e($data->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content bg-white">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-12 col-sm-12 ">
                        <div class="member" style="padding-bottom: 0px; margin-bottom:0px;">
                            <div class="speaker-neat__image poster in-view">

                                <figure>
                                    <img class="lazyload--el lazyload in-view__child"
                                        src="<?php echo e(asset('uploads/team')); ?>/<?php echo e($data->file_path); ?>" alt="Image" width="445"
                                        height="600">
                                    <div class="poster--cover in-view in-view__child"></div>
                                </figure>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-sm-12 ">
                        <div class="member">
                            <div class="member__info in-view in-view--in">
                                <h6
                                    class= member__name member__name1 in-view__child in-view__child--fadein in-view__child--in">
                                    <?php echo e($data->name); ?></h6>
                                <p class="PageActive member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in"
                                    id="team_title" style="margin-bottom: 0px;"><?php echo e($data->position); ?></p>
                                <p
                                    class=" member__title member__title1  in-view__child in-view__child--fadein in-view__child--in ">
                                    <?php echo e($data->about); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="statusMsg"></p>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/partials/modals/team-bio.blade.php ENDPATH**/ ?>