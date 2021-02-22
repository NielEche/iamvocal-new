<?php $__env->startSection('title'); ?>
Admin Dashboard | Partners
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-container ">
    <div class="page-content-wrapper ">
        <div class="content ">
          

            <div class="jumbotron" data-pages="parallax">
                <div class=" container-fluid   container-fixed-lg">
                    <div class="inner">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Web Pages</a></li>
                            <li class="breadcrumb-item active">Events Page</li>
                        </ol>
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
                        <header class="page-header">
                            <h1 class="page-title" style="font-weight: bold !important;">Partners</h1>
                            <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
                        </header>
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
                                <button data-toggle="modal" data-target="#addpartners" id="btnStickUpSizeToggler"
                                    class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Partners
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
                    <?php if($partners->count() > 0): ?>
                    <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header ">
                                <div class="card-title events">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo e(asset('uploads/partners/')); ?>/<?php echo e($partner->file_path); ?>"
                                                    class="eventsimg w-100" alt="">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                            <div class="card-body ">
                                <div class="eventdetails">
                                    <h5 class="m-0"><?php echo e($partner->name); ?></h5>
                                    <p class="m-0"><?php echo e($partner->type); ?></p>
                                </div>

                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href=<?php echo e("editp/".$partner['id']); ?>>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                            <a class="dropdown-item" href=<?php echo e("deletepartner/".$partner['id']); ?>>
                                               <button type="submit" name="event_delete_btn"
                                                        class="btn btn-danger">DELETE <i
                                                            class="fa fa-trash-o"></i></button> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="text-center">
                        <a href="" class="btn blue-btn text-white" id="add_activity">
                            ADD Partners
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.partials.modals.addpartners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tedxiydt/public_html/resources/views/admin/partners/index.blade.php ENDPATH**/ ?>