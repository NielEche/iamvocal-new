<?php $__env->startSection('title'); ?>
Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section section--singular">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <header class="page-header">
                    <h1 class="page-title">How can we <br>help you today?</h1>
                </header>
                <div class="row double-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5 class="color--secondary">TEDxPortHarcourt</h5>
                        <p class="color--body-alt">PortHarcourt <br>Nigeria</p>
                        <p><a class="PageActive link" href="mailto:team@tedxeuston.com">info@tedxportharcourt.com</a></p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <p class="big">Interested in working with us or just want to say hello?</p>
                        <?php if(Session::has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('success')); ?>

                            <?php
                                Session::forget('success');
                            ?>
                        </div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(route('contact-form.store')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <p>
                                <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Name">
                                <?php if($errors->has('name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </p>
                            <p>
                                <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" size="40" aria-required="true"
                                    aria-invalid="false" placeholder="Email">
                                <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </p>
                            <p>
                                <textarea name="message" id="message"  cols="40" rows="10" aria-invalid="false"
                                    placeholder="How can we help?"><?php echo e(old('message')); ?></textarea>
                                <?php if($errors->has('message')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('message')); ?></span>
                                <?php endif; ?>
                            </p>
                            <p>
                                <button type="submit" class="btn bg-red btn-submit" style="border-radius: 0px !important;">Send Message</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/tedxph/resources/views/pages/contact.blade.php ENDPATH**/ ?>