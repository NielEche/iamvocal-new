@extends('layouts.admin')

@section('title')
Admin Dashboard | Edit News Details
@endsection

@section('content')

<div d="editevent" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left pt-5">
                <h5>Edit <span class="semi-bold"> Details</span></h5>
            </div>
            <div class="modal-body">
                <form action="/editnewsdetails" method="POST" enctype="multipart/form-data">

                    {{-- </form> --}}
                    {{-- <form action="{{ route('events.update')}}" method="POST" enctype="multipart/form-data"
                    name="events" id="events"> --}}
                    @csrf

                    <input type="hidden" name="id" value="{{$newsDetails['id']}}">

                    <div class="row">
                        <div class="col-md-12">
                            @if ($newsDetails->file_path)
                            <div class="form-group form-group-default">
                                <label>Header Image</label>
                                <input type="file" id="file_path" value="{{$newsDetails['file_path']}}" name="file_path"
                                    accept="image/*" class="form-control">
                                <p class="pt-2"> Dimension: 1110 x 500 px</p>
                            </div>
                            @else

                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>News id</label>
                                <input type="text" name="news_id" value="{{$newsDetails['news_id']}}"
                                    placeholder="{{$newsDetails['news_id']}}" class="form-control" readonly required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                @if ($newsDetails->details)
                                <label>News Details</label>
                                <textarea id="editor" rows="10" type="text" value="" name="details"
                                    placeholder="News Details"
                                    class="form-control">{{$newsDetails['details']}}</textarea>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 m-t-10">
                            <button value="submit" class="btn btn-primary btn-block m-t-5"> <a class="text-white"
                                    href="{{ url()->previous() }}">Cancel</a></button>
                        </div>
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="submit" name="submit" id="submit" value="submit"
                                class="btn btn-success  btn-block m-t-5">Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    // $(document).ready(function () {

    //     $(function () {

    //         $('form[name=events]').validate({

    //             rules: {
    //                 // The key name on the left side is the name attribute
    //                 // of an input field. Validation rules are defined
    //                 // on the right side
    //                 event_name: "required",
    //                 event_theme: "required",
    //                 date: "required",
    //                 about: "required"
    //             },
    //             // Specify validation error messages
    //             messages: {
    //                 event_name: "Please enter your event name",
    //                 event_theme: "Please enter your event theme",
    //                 date: "Please select a date",
    //                 about: "Please write a description"
    //             },


    //             submitHandler: function (form) {
    //                 $('#submit').val('Submiting')
    //                 $.ajax({
    //                     url: form.action,
    //                     type: form.method,
    //                     data: $(form).serialize(),
    //                     success: function (response) {
    //                         if (response.success != true) {
    //                             swal({
    //                                 title: "OOPS!",
    //                                 text: resoponse.message,
    //                                 icon: "error",
    //                                 button: "Ok",
    //                             });
    //                             document.forms['events'].reset()
    //                             $('#submit').val('submit')
    //                         } else {
    //                             swal({
    //                                 title: "GOOD JOB!",
    //                                 text: response.message,
    //                                 icon: "success",
    //                                 button: "Ok",
    //                             });
    //                             document.forms['events'].reset()
    //                             $('#submit').val('submit')
    //                         }
    //                     },
    //                     error: function (xhr) {
    //                         $('#submit').val('submit')
    //                         swal({
    //                             title: "OOPS!",
    //                             text: "Something went wrong",
    //                             icon: "error",
    //                             button: "Ok",
    //                         });
    //                         document.forms['events'].reset()
    //                         $('#submit').val('submit')
    //                     }
    //                 });
    //             }
    //         });
    //     });

    // });

</script>
@endsection
