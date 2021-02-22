

<div class="modal fade stick-up" id="addspeakers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"><br>
            <div class="modal-header clearfix text-left">
                <h5>Add <span class="semi-bold">Speakers Details</span></h5>
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
                                <label>Occupation</label>
                                <input type="text" name="occupation" placeholder="occupation"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                  <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Name</label>
                                <input type="text" name="event_name" placeholder="event name"
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
                                <label>Instagram</label>
                                <input type="text" name="instagram" placeholder="instagram "
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Linkedin</label>
                                <input type="text" name="linkedin" placeholder="linkedin "
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Twitter</label>
                                <input type="text" name="twitter" placeholder="twitter "
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Facebook</label>
                                <input type="text" name="facebook" placeholder="facebook"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Embed</label>
                                <input type="text" name="embed" placeholder="embed "
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default ">
                                <label>Type</label>
                                <select class="form-control" name="talk_type">
                                <option>All</option>
                                <option value="talk">Talk</option>
                                <option value="performance">Performance</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Talk Title</label>
                                <input type="text" name="talk_title" placeholder="talk_title "
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
                                <label>Tags</label>
                                <input type="text" name="tags" placeholder="tags "
                                    class="form-control" required>
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

<?php /**PATH /home/tedxiydt/public_html/resources/views/admin/partials/modals/addspeakers.blade.php ENDPATH**/ ?>