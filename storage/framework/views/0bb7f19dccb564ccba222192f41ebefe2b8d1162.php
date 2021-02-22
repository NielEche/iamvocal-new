<?php $__env->startSection('title'); ?>
Admin Dashboard | Speakers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-container ">
    <div class="page-content-wrapper ">
        <div class="content ">


            <div class="container">
                <div class="card shadow mb-2">
                    <div class="card-body">
                        <div class="card-header p-0">
                            <h4 class=" font-weight-bold text-black">Sub Events</h4>
                        </div>
                    </div>
                </div>
            </div>

            <?php if(session()->has('message')): ?>
            <div class="alert alert-success w-50" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong> <?php echo e(session()->get('message')); ?></strong>
            </div>
            <?php endif; ?>


            <div class=" container-fluid   container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                       
                        <div class="paragraph in-view in-view--in">
                            <div class="row in-view__child in-view__child--fadein in-view__child--in">
                                <div class="col-12 col-lg-6">
                                    <!--<div class="dashed in-view__child in-view__child--in">
	                          <p>We curate our speakers bearing in mind the African narrative. Our speakers are thinkers, builders and innovators that are Africans by origin, working on African problems or Africans in the diaspora making a difference in the societies they find themselves notwithstanding the fact that peoples of other descent can as well be invited to speak to our audience as far as they meet our rigorous screening process during curation.</p>
	                        </div>-->
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="card-header ">
                        <div class="pull-right">
                            <div class="col-xs-12">
                                <button data-toggle="modal" data-target="#addspeakers" id="btnStickUpSizeToggler"
                                    class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add events
                                </button>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="container-class">
            </div>

            <div class=" container-fluid  container-fixed-lg">

                <div class="row">
                    <?php if($speakers->count() > 0): ?>
                    <?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $speaker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="card-title speakers">
                            <div class="active">
                                <img src="<?php echo e(asset('uploads/speakers/')); ?>/<?php echo e($speaker->file_path); ?>"
                                    class="eventsimg w-100" alt="">
                            </div>
                        </div>

                        <h5 style="font-size:16px;"><?php echo e($speaker->name); ?></h5>
                        <div class="card card-transparent ">
                            <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                <li class="nav-item">
                                    <a href="#" class="active" data-toggle="tab"
                                        data-target="#<?php echo e($speaker->id); ?>1"><span>Profile</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" data-toggle="tab"
                                        data-target="#<?php echo e($speaker->id); ?>2"><span>Details</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" data-toggle="tab"
                                        data-target="#<?php echo e($speaker->id); ?>3"><span>Video</span></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane slide-left active" id="<?php echo e($speaker->id); ?>1">
                                    <div class="row column-seperation">
                                        <div class="col-lg-12">
                                            <h6 style="text-transform:uppercase; font-size:12px;" class="bold">
                                                <?php echo e($speaker->name); ?></h6>
                                            <p><?php echo e($speaker->date); ?></p>
                                            <p><?php echo e($speaker->venue); ?></p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane slide-left" id="<?php echo e($speaker->id); ?>2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="font-size:10px;" class="m-0">About</p>
                                            <p><?php echo e($speaker->bio); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane slide-left" id="<?php echo e($speaker->id); ?>3">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class='member__name member__name1 in-view__child in-view__child--fadein in-view__child--in'
                                                height="100px"><?php echo e($speaker->flickr); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group">
                            <a class="dropdown-item" href=<?php echo e("editS/".$speaker->id); ?>>
                                <button type="submit" name="edit_speaker_btn" class="btn btn-success"><i
                                        class="fa fa-pencil"></i>
                                </button>
                            </a>
                            <a class="dropdown-item" href=<?php echo e("deletespeaker/".$speaker['id']); ?>>
                                <button type="submit" name="speaker_delete_btn" class="btn btn-danger"><i
                                        class="fa fa-trash-o"></i>
                                </button>
                            </a>
                        </div>
                        <hr>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="text-center">
                        
                            ADD Events
                       
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.partials.modals.addspeakers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(function () {

            $('form[name=events]').validate({

                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    event_name: "required",
                    event_theme: "required",
                    date: "required",
                    about: "required"
                },
                // Specify validation error messages
                messages: {
                    event_name: "Please enter your event name",
                    event_theme: "Please enter your event theme",
                    date: "Please select a date",
                    about: "Please write a description"
                },


                submitHandler: function (form) {
                    $('#submit').val('Submiting')
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function (response) {
                            if (response.success != true) {
                                swal({
                                    title: "OOPS!",
                                    text: resoponse.message,
                                    icon: "error",
                                    button: "Ok",
                                });
                                document.forms['events'].reset()
                                $('#submit').val('submit')
                            } else {
                                swal({
                                    title: "GOOD JOB!",
                                    text: response.message,
                                    icon: "success",
                                    button: "Ok",
                                });
                                document.forms['events'].reset()
                                $('#submit').val('submit')
                            }
                        },
                        error: function (xhr) {
                            $('#submit').val('submit')
                            swal({
                                title: "OOPS!",
                                text: "Something went wrong",
                                icon: "error",
                                button: "Ok",
                            });
                            document.forms['events'].reset()
                            $('#submit').val('submit')
                        }
                    });
                }
            });
        });

    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/admin/speakers/index.blade.php ENDPATH**/ ?>