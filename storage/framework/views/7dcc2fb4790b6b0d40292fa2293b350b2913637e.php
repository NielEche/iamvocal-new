

<div class="modal fade stick-up" id="addspeakers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"><br>
            <div class="modal-header clearfix text-left">
                <h5>Add <span class="semi-bold">Event Details</span></h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('editspeaker.store')); ?>" method="POST" enctype="multipart/form-data"
                    name="events" id="events">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label> Name</label>
                                <input type="text" name="name" placeholder="name"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Date</label>
                                <input type="date" name="date" placeholder="date"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                  <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Venue</label>
                                <input type="text" name="venue" placeholder="venue"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Time</label>
                                <input type="time" name="time" placeholder="time"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event id</label>
                                <input type="text" name="event_id" value="<?php echo e($id); ?>" placeholder="<?php echo e($id); ?>"
                                    class="form-control" readonly required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Flickr</label>
                                <input type="text" name="flickr" placeholder="flickr "
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Youtube Embed</label>
                                <input type="text" name="embed" placeholder="embed "
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Register Link</label>
                                <input type="text" name="register" placeholder="register link"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>About</label>
                                <textarea rows="10" type="text" name="bio" placeholder="About Event"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Image</label>
                                <input type="file" id="file_path" name="file_path" accept="image/*"
                                    class="form-control" required>
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

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/admin/partials/modals/addspeakers.blade.php ENDPATH**/ ?>