<?php $__env->startSection('title'); ?>
Admin Dashboard | Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-container ">
    <div class="page-content-wrapper ">
        <div class="content ">
        

            <?php if(session()->has('message')): ?>
            <div class="alert alert-success w-50" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong> <?php echo e(session()->get('message')); ?></strong>
            </div>
            <?php endif; ?>


            <div class=" container-fluid   container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                        <header class="page-header pt-2">
                            <h1 class="page-title" style="font-weight: bold !important;">HomePage Header</h1>
                            <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
                        </header>
                    </section>
  
                </div>
            </div>

            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    <?php if($homeHeader->count() > 0): ?>
                    <?php $__currentLoopData = $homeHeader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header ">
                                <div class="card-title events">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo e(asset('uploads/homepage/')); ?>/<?php echo e($slider->file_path); ?>"
                                                    class="eventsimg w-100" alt="">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                            <div class="card-body ">
                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href=<?php echo e("editHS/".$slider['id']); ?>>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <!-- <a class="dropdown-item" href=<?php echo e("deleteheader/".$slider['id']); ?>>
                                               <button type="submit" name="event_delete_btn"
                                                        class="btn btn-danger">DELETE <i
                                                            class="fa fa-trash-o"></i></button> 
                                            </a>-->
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
                        <h2 class="text-black ">
                            NO DATA AVAILABLE , ADD
                        </h2>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class=" container-fluid  container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;"><br>
                        <header class="page-header">
                            <h1 class="page-title" style="font-weight: bold !important;">Homepage About</h1>
                        </header>
                    </section>
                    <!--<div class="card-header pt-0">
                        <div class="pull-right">
                            <div class="col-xs-12">
                                <button data-toggle="modal" data-target="#addaim" id="btnStickUpSizeToggler"
                                    class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add
                                </button>
                            </div>

                        </div>
                    </div>-->
                </div>
            </div>

            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    <?php if($homeAbout->count() > 0): ?>
                    <?php $__currentLoopData = $homeAbout; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header pt-0">
                                <div class="card-title events">
                                      <h4><?php echo e($about->event_theme); ?></h4>
                                </div>
                                <div class=" events">
                                    <p><?php echo e($about->event_text); ?></p>
                              </div>
                            </div>
                            
                            <div class="card-body ">
                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href=<?php echo e("editHA/".$about['id']); ?>>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <!-- <a class="dropdown-item" href=<?php echo e("deleteheader/".$about['id']); ?>>
                                               <button type="submit" name="event_delete_btn"
                                                        class="btn btn-danger">DELETE <i
                                                            class="fa fa-trash-o"></i></button> 
                                            </a>-->
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
                        <h2 class="text-black ">
                            NO DATA AVAILABLE , ADD
                        </h2>
                    </div>
                    <?php endif; ?>

                    
                </div>
            </div>

            <div class=" container-fluid   container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                        <header class="page-header pt-2">
                            <h1 class="page-title" style="font-weight: bold !important;">HomePage Images</h1>
                            <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
                        </header> 
                    </section>
                </div>
            </div>

            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    <?php if($homeImages->count() > 0): ?>
                    <?php $__currentLoopData = $homeImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header ">
                                <div class="card-title events">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo e(asset('uploads/homepage/')); ?>/<?php echo e($images->file_path); ?>"
                                                    class="eventsimg w-100" alt="">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                            <div class="card-body ">
                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href=<?php echo e("editHI/".$images['id']); ?>>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <!-- <a class="dropdown-item" href=<?php echo e("deleteheader/".$slider['id']); ?>>
                                               <button type="submit" name="event_delete_btn"
                                                        class="btn btn-danger">DELETE <i
                                                            class="fa fa-trash-o"></i></button> 
                                            </a>-->
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
                        <h2 class="text-black ">
                            NO DATA AVAILABLE , ADD
                        </h2>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.partials.modals.addaim', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/admin/homePage/index.blade.php ENDPATH**/ ?>