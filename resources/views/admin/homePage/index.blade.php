@extends('layouts.admin')

@section('title')
Admin Dashboard | Home
@endsection

@section('content')
<div class="page-container ">
    <div class="page-content-wrapper ">
        <div class="content ">
        

            @if(session()->has('message'))
            <div class="alert alert-success w-50" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong> {{ session()->get('message') }}</strong>
            </div>
            @endif


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

            <div class="container py-4">
                <div class="pull-right">
                    <div class="col-xs-12">
                        <button data-toggle="modal" data-target="#addslider" id="btnStickUpSizeToggler"
                            class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Image
                        </button>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            

            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    @if ($homeHeader->count() > 0)
                    @foreach($homeHeader as $index => $slider)
                    <div class="col-md-3 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header col-lg-12 col-sm-12">
                                <div class="card-title events">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('uploads/homepage/') }}/{{ $slider->file_path }}"
                                                    class="eventsimg w-100" alt="">
                                                    <p>{{ $slider->button_text }}</p>
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
                                            <a class="dropdown-item" href={{"editHS/".$slider['id']}}>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <a class="dropdown-item" href={{"deleteheader/".$slider['id']}}>
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
                    @endforeach
                    @else
                    <div class="text-center">
                        <h2 class="text-black ">
                            NO DATA AVAILABLE , ADD
                        </h2>
                    </div>
                    @endif
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
                    @if ($homeAbout->count() > 0)
                    @foreach($homeAbout as $index => $about)
                    <div class="col-md-12 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header pt-0">
                                <div class="card-title events">
                                      <h4>{{ $about->event_theme }}</h4>
                                </div>
                                <div class=" events">
                                    <p>{{ $about->event_text }}</p>
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
                                            <a class="dropdown-item" href={{"editHA/".$about['id']}}>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <!-- <a class="dropdown-item" href={{"deleteheader/".$about['id']}}>
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
                    @endforeach
                    @else
                    <div class="text-center">
                        <h2 class="text-black ">
                            NO DATA AVAILABLE , ADD
                        </h2>
                    </div>
                    @endif

                    
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
                    @if ($homeImages->count() > 0)
                    @foreach($homeImages as $index => $images)
                    <div class="col-md-6 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header ">
                                <div class="card-title events">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('uploads/homepage/') }}/{{ $images->file_path }}"
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
                                            <a class="dropdown-item" href={{"editHI/".$images['id']}}>
                                                <button name="edit_event_btn"
                                                    class="btn btn-success"> EDIT <i class="fa fa-pencil"></i></button>
                                            </a>
                                           <!-- <a class="dropdown-item" href={{"deleteheader/".$slider['id']}}>
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
                    @endforeach
                    @else
                    <div class="text-center">
                        <h2 class="text-black ">
                            NO DATA AVAILABLE , ADD
                        </h2>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.partials.modals.addaim')
@include('admin.partials.modals.addslider')
@endsection

@section('script')
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
@endsection
