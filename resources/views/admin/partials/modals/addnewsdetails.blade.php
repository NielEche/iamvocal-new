<div class="modal fade stick-up" id="addnewsdetails" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                        class="pg-close fs-14"></i>
                </button>
                <h5>Add <span class="semi-bold">News</span></h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('newsdetails.store') }}" method="POST" enctype="multipart/form-data"
                    name="news" id="news">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>News Image</label>
                                <input type="file" id="file_path" name="file_path" accept="image/*"
                                    class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>News id</label>
                                <input type="text" name="news_id" value="{{$id}}" placeholder="{{$id}}"
                                    class="form-control" readonly required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>News details</label>
                                <textarea  id="editor" rows="10" type="text" name="details" placeholder="News Details"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="submit" name="submit" id="submit" value="submit"
                                class="btn btn-primary btn-block m-t-5">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>