@extends('layouts.admin')

@section('title')
Admin Dashboard | Partners
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


            <div class=" container-fluid  container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;"><br>
                        <header class="page-header">
                            <h1 class="page-title" style="font-weight: bold !important;">About Us</h1>
                            <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
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
                    <div class="col-md-12">
                        @if ($aboutus->count() > 0)
                        @foreach($aboutus as $index => $about)
                        <div class="col-md-12 p-0">
                            <div class="card card-transparent m-0">
                                <div class="card-header pt-0">
                                    <div class="card-title events">
                                        <h4>{{ $about->header }}</h4>
                                    </div>
                                    <div class=" events">
                                        <p>{!! $about->details !!}</p>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div style="display: flex;">
                                        <div class="dropdown dropdown-default">
                                            <button class="btn dropdown-toggle text-center"
                                                style="width:150px!important;" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href={{"editAbout/".$about['id']}}>
                                                    <button name="edit_event_btn" class="btn btn-success"> EDIT <i
                                                            class="fa fa-pencil"></i></button>
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
                            <h4 class="text-black ">
                                NO DATA AVAILABLE , ADD
                            </h4>
                        </div>
                        @endif
                    </div>
                </div>
            </div>


            <div class=" container-fluid   container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                        <header class="page-header pt-5">
                            <h1 class="page-title" style="font-weight: bold !important;">Team</h1>
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
                                <button data-toggle="modal" data-target="#addteam" id="btnStickUpSizeToggler"
                                    class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Team
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
                    @if ($tedxphteams->count() > 0)
                    @foreach($tedxphteams as $index => $team)
                    <div class="col-md-3 p-0">
                        <div class="card card-transparent m-0">
                            <div class="card-header ">
                                <div class="card-title events">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('uploads/team/') }}/{{ $team->file_path }}"
                                                class="eventsimg w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="eventdetails">
                                    <h5 class="m-0">{{ $team->name }}</h5>
                                    <p class="m-0">{{ $team->position }}</p>
                                    <p class="m-0">{{ $team->serial_id }}</p>
                                </div>

                                <div style="display: flex;">
                                    <div class="dropdown dropdown-default">
                                        <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href={{"editT/".$team['id']}}>
                                                <button name="edit_event_btn" class="btn btn-success"> EDIT <i
                                                        class="fa fa-pencil"></i></button>
                                            </a>
                                            <a class="dropdown-item" href={{"deleteteam/".$team['id']}}>
                                                <button type="submit" name="event_delete_btn"
                                                    class="btn btn-danger">DELETE <i class="fa fa-trash-o"></i></button>
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
        </div>
    </div>
</div>

@include('admin.partials.modals.addteam')
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
