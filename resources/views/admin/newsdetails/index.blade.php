@extends('layouts.admin')

@section('title')
Admin Dashboard | News Details
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

            @foreach($news as $index => $news)
            <div class="container">
                <div class="card shadow mb-2">
                    <div class="card-body">
                        <div class="card-header p-0">
                            <h4 class=" font-weight-bold text-black">{{ $news->title }}</h4>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card card-transparent">
                    <div class="d-flex py-4 bg-none" style="justify-content: flex-end;">
                        <div class="col-xs-12">
                            <button data-toggle="modal" data-target="#addnewsdetails" id="btnStickUpSizeToggler"
                                class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add section
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class=" container-fluid container-fixed-lg">
                <div class="card card-transparent">
                    <section style="padding-bottom:0px;">
                        <div class="row in-view__child in-view__child--fadein in-view__child--in">
                            <div class="col-md-12">
                                <div class="card-title speakers">
                                    <img src="{{ asset('uploads/news/') }}/{{ $news->file_path1 }}"
                                        class="eventsimg w-100" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <p>{!! $news->details !!}</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @endforeach

            <div class=" container-fluid  container-fixed-lg">
                <div class="row">
                    @if ($newsDetails->count() > 0)
                    @foreach($newsDetails as $index => $news)
                    <div class="col-md-12">
                        <div class="card-title speakers">
                            <div class="active">
                                @if ($news->file_path)
                                <img src="{{ asset('uploads/news/') }}/{{ $news->file_path }}" class="eventsimg w-100"
                                    alt="">
                                @else

                                @endif

                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <p>{!! $news->details !!}</p>
                        </div>


                        <div style="display: flex;">
                            <div class="dropdown dropdown-default">
                                <button class="btn dropdown-toggle text-center" style="width:150px!important;"
                                    type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item py-1" href={{"editS/".$news->id}}>
                                        <button type="submit" name="edit_speaker_btn" class="btn btn-success"><i
                                                class="fa fa-pencil"></i>
                                        </button>
                                    </a>
                                    <a class="dropdown-item" href={{"deleteND/".$news['id']}}>
                                        <button type="submit" name="speaker_delete_btn" class="btn btn-danger"><i
                                                class="fa fa-trash-o"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    @endforeach
                    @else
                    <div class="text-center">

                        ADD NEWS DETAILS

                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.partials.modals.addnewsdetails')
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
