<?php ( $events = \App\Models\Events::all() ); ?>
<header class="site-header bg-blue" id="masthead">
    <div class="site-header__wrap pt-0">
        <div class="container-fluid">
            <div class="row in-view">
                <div class="col-12 col-xl-10 offset-xl-1 ">
                    <div class="site-header__elements">
                        <div class="site-header__mobile hidden-lg-up">
                            <button class="site-header__mobile--trigger side-menu-trigger">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="site-header__branding">
                            <div class="site-branding">
                                <a class="pb-2 mb-2" href="<?php echo e(route('index')); ?>"
                                    style="color: rgb(247, 23, 53); text-decoration: underline;">
                                    <img src="<?php echo e(asset('files/media/iamvlogo.png')); ?>" class="mt-4" alt=""
                                        style="width: 94px; height: 43px">
                                </a>
                            </div>
                        </div>
                        <div class="site-header__nav hidden-md-down">
                            <div class="site-header__menu">
                                <nav class="main-navigation" aria-label="Site Menu" role="navigation">
                                    <div class="menu-top-menu-container">
                                        <ul class="menu" id="top-menu">
                                            <li class=" <?php echo e((\Request::route()->getName() == 'index') ? ' PageActive1' : ''); ?> "> 
                                                <a href="<?php echo e(route('index')); ?>">Home</a>  
                                            </li> 
                                            
                                            <li class="menu-item-has-children <?php echo e((\Request::route()->getName() == 'about') ? ' PageActive1' : ''); ?>">
                                                <a href="<?php echo e(route('about')); ?>">About</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="<?php echo e(route('about')); ?>#ourstory">
                                                            <span>Who We Are</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo e(route('about')); ?>#team">
                                                            <span>Team</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo e(route('careers')); ?>">
                                                            <span>Careers</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo e(route('donate')); ?>#donations">
                                                            <span>Donate</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children <?php echo e((\Request::route()->getName() == 'events') ? ' PageActive1' : ''); ?>">
                                                <a href="#">Programs & Initiatives</a>
                                                <ul class="sub-menu">
                                                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('subevents', [ $data->id])); ?>">
                                                            <span><?php echo e($data->event_name); ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                </ul>
                                            </li>
                                          
                                            <li class="<?php echo e((\Request::route()->getName() == 'media') ? ' PageActive1' : ''); ?>">
                                                <a href="<?php echo e(route('media')); ?>">Media</a>
                                            </li>
                                            <li class="<?php echo e((\Request::route()->getName() == 'contact-form') ? ' PageActive1' : ''); ?>">
                                                <a href="<?php echo e(route('contact-form')); ?>">Contact</a>
                                            </li>
                                           <!-- <li
                                                style="background-color: #ee543c !important; color:#fff; padding-left:16px !important; padding-right: 16px; margin-top: 0px; ">
                                               

                                               <a class="tickets" href=" admin/upload/' .$row['file_link']. '" download="Legacy Programme"></a> 
                    

                                            </li>-->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/iamvocalnew/resources/views/partials/header.blade.php ENDPATH**/ ?>