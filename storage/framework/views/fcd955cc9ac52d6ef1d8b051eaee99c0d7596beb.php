<div class="modal fade stick-up" id="addpartners" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                        class="pg-close fs-14"></i>
                </button>
                <h5>Add <span class="semi-bold">Partners Details</span></h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('eventpartners.store')); ?>" method="POST" enctype="multipart/form-data"
                    name="partners" id="partners">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Partner Image</label>
                                <input type="file" id="file_path" name="file_path" accept="image/*"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Partner Name</label>
                                <input type="text" name="name" placeholder="name"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default ">
                                <label>Partner Type</label>
                                <select class="form-control" name="type">
                                    <option value="principal">Principal Partners</option>
                                    <option value="sponsors">Sponsors</option>
                                    <option value="hospitality">Hospitality Partners</option>
                                </select>
                                
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
</div><?php /**PATH /home/tedxiydt/public_html/resources/views/admin/partials/modals/addpartners.blade.php ENDPATH**/ ?>