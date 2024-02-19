<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Perumahan | <?php echo e($title); ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <script src="https://kit.fontawesome.com/0fdd5e9bfc.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?php echo e(asset('assets/img/icon.ico')); ?>" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo e(asset('assets/js/plugin/webfont/webfont.min.js')); ?>"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['<?php echo e(asset('assets/css/fonts.css')); ?>']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
	<script src="<?php echo e(asset('assets/js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/azzara.min.css')); ?>">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo.css')); ?>">
</head>

<body>
    <div class="wrapper">
        <?php if (isset($component)) { $__componentOriginalf1de69f547d7d0ebc8c2161decc3a90b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf1de69f547d7d0ebc8c2161decc3a90b = $attributes; } ?>
<?php $component = App\View\Components\NavbarPart::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('NavbarPart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NavbarPart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf1de69f547d7d0ebc8c2161decc3a90b)): ?>
<?php $attributes = $__attributesOriginalf1de69f547d7d0ebc8c2161decc3a90b; ?>
<?php unset($__attributesOriginalf1de69f547d7d0ebc8c2161decc3a90b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf1de69f547d7d0ebc8c2161decc3a90b)): ?>
<?php $component = $__componentOriginalf1de69f547d7d0ebc8c2161decc3a90b; ?>
<?php unset($__componentOriginalf1de69f547d7d0ebc8c2161decc3a90b); ?>
<?php endif; ?>
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <?php if (isset($component)) { $__componentOriginala9460c3f03249ecfefb27342dfe2f2cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9460c3f03249ecfefb27342dfe2f2cc = $attributes; } ?>
<?php $component = App\View\Components\HeaderTitle::resolve(['title' => $title,'induk' => $induk] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('HeaderTitle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HeaderTitle::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9460c3f03249ecfefb27342dfe2f2cc)): ?>
<?php $attributes = $__attributesOriginala9460c3f03249ecfefb27342dfe2f2cc; ?>
<?php unset($__attributesOriginala9460c3f03249ecfefb27342dfe2f2cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9460c3f03249ecfefb27342dfe2f2cc)): ?>
<?php $component = $__componentOriginala9460c3f03249ecfefb27342dfe2f2cc; ?>
<?php unset($__componentOriginala9460c3f03249ecfefb27342dfe2f2cc); ?>
<?php endif; ?>
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginal429703d8d940a83ab1fa10bb34122ff5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal429703d8d940a83ab1fa10bb34122ff5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarPart::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('SidebarPart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarPart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal429703d8d940a83ab1fa10bb34122ff5)): ?>
<?php $attributes = $__attributesOriginal429703d8d940a83ab1fa10bb34122ff5; ?>
<?php unset($__attributesOriginal429703d8d940a83ab1fa10bb34122ff5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal429703d8d940a83ab1fa10bb34122ff5)): ?>
<?php $component = $__componentOriginal429703d8d940a83ab1fa10bb34122ff5; ?>
<?php unset($__componentOriginal429703d8d940a83ab1fa10bb34122ff5); ?>
<?php endif; ?>

        

        <?php if (isset($component)) { $__componentOriginal7e3085249a6917ba5552f06345ef6302 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7e3085249a6917ba5552f06345ef6302 = $attributes; } ?>
<?php $component = App\View\Components\SetPart::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('SetPart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SetPart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7e3085249a6917ba5552f06345ef6302)): ?>
<?php $attributes = $__attributesOriginal7e3085249a6917ba5552f06345ef6302; ?>
<?php unset($__attributesOriginal7e3085249a6917ba5552f06345ef6302); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7e3085249a6917ba5552f06345ef6302)): ?>
<?php $component = $__componentOriginal7e3085249a6917ba5552f06345ef6302; ?>
<?php unset($__componentOriginal7e3085249a6917ba5552f06345ef6302); ?>
<?php endif; ?>
    </div>
    <script src="<?php echo e(asset('assets/js/core/jquery.3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>

    <!-- jQuery UI -->
    <script src="<?php echo e(asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo e(asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>

    <!-- Moment JS -->
    <script src="<?php echo e(asset('assets/js/plugin/moment/moment.min.js')); ?>"></script>

    <!-- Chart JS -->
    <script src="<?php echo e(asset('assets/js/plugin/chart.js/chart.min.js')); ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo e(asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?>"></script>

    <!-- Chart Circle -->
    <script src="<?php echo e(asset('assets/js/plugin/chart-circle/circles.min.js')); ?>"></script>

    <!-- Datatables -->
    <script src="<?php echo e(asset('assets/js/plugin/datatables/datatables.min.js')); ?>"></script>

    <!-- Bootstrap Notify -->
    <script src="<?php echo e(asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>

    <!-- Bootstrap Toggle -->
    <script src="<?php echo e(asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')); ?>"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?php echo e(asset('assets/js/plugin/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')); ?>"></script>

    <!-- Google Maps Plugin -->
    <script src="<?php echo e(asset('assets/js/plugin/gmaps/gmaps.js')); ?>"></script>

    <!-- Azzara JS -->
    <script src="<?php echo e(asset('assets/js/ready.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/setting-demo.js')); ?>"></script>
    
</body>
<?php if($title == 'Dashboard'): ?>
    <script>
        //Notify
        $.notify({
            icon: 'fa-solid fa-bell',
            title: 'Selamat Datang <?php echo e(auth()->user()->username); ?>',
            message: 'Sekarang, Anda Telah Login Sebagai ....',
        }, {
            type: 'info',
            placement: {
                from: "bottom",
                align: "right"
            },
            time: 1000,
        });
    </script>
<?php endif; ?>

</html>
<?php /**PATH X:\laravel\next-job\resources\views/components/templates/DashboardLayout.blade.php ENDPATH**/ ?>