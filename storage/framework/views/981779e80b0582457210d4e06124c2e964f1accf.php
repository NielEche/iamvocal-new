<header class="site-header" id="masthead" style="background:#000;">
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
                                <a href="<?php echo e(route('index')); ?>"
                                    style="color: rgb(247, 23, 53); text-decoration: underline;">
                                    <img src="<?php echo e(asset('files/media/tedxphlogo.png')); ?>" class="mt-4" alt=""
                                        style="width: 180px; height: 17.3px">
                                </a>
                            </div>
                        </div>
                        <div class="site-header__nav hidden-md-down">
                            <div class="site-header__menu">
                                <nav class="main-navigation" aria-label="Site Menu" role="navigation">
                                    <div class="menu-top-menu-container">
                                        <ul class="menu" id="top-menu">
                                            <li class=" <?php echo e((\Request::route()->getName() == 'index') ? ' PageActive' : ''); ?> "> 
                                                <a href="<?php echo e(route('index')); ?>">Home</a>  
                                            </li> 
                                            <li class="menu-item-has-children <?php echo e((\Request::route()->getName() == 'about') ? ' PageActive' : ''); ?>">
                                                <a href="<?php echo e(route('about')); ?>">About</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="<?php echo e(route('about')); ?>#ourstory">
                                                            <span>About TedxPh</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo e(route('about')); ?>#team">
                                                            <span>Team</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="<?php echo e((\Request::route()->getName() == 'events') ? ' PageActive' : ''); ?>">
                                                <a href="<?php echo e(route('events')); ?>">Events</a>
                                            </li>
                                            <li class="<?php echo e((\Request::route()->getName() == 'partners') ? ' PageActive' : ''); ?>">
                                                <a href="<?php echo e(route('partners')); ?>">Partners</a>
                                            </li>
                                            <li class="<?php echo e((\Request::route()->getName() == 'media') ? ' PageActive' : ''); ?>">
                                                <a href="<?php echo e(route('media')); ?>">Media</a>
                                            </li>
                                            <li class="<?php echo e((\Request::route()->getName() == 'contact-form') ? ' PageActive' : ''); ?>">
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
</header><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/tedxph/resources/views/partials/header.blade.php ENDPATH**/ ?>