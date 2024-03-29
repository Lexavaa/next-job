<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Perumahan | {{ $title }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <script src="https://kit.fontawesome.com/0fdd5e9bfc.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['{{ asset('assets/css/fonts.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
	<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/azzara.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <x-NavbarPart />
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <x-HeaderTitle :title="$title" :induk="$induk" />
                    {{ $slot }}
                </div>
            </div>
        </div>
        <x-SidebarPart />

        {{-- NEW PAGE --}}

        <x-SetPart />
    </div>
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Moment JS -->
    <script src="{{ asset('assets/js/plugin/moment/moment.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- Bootstrap Toggle -->
    <script src="{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Google Maps Plugin -->
    <script src="{{ asset('assets/js/plugin/gmaps/gmaps.js') }}"></script>

    <!-- Azzara JS -->
    <script src="{{ asset('assets/js/ready.min.js') }}"></script>
    <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
    
</body>
@if ($title == 'Dashboard')
    <script>
        //Notify
        $.notify({
            icon: 'fa-solid fa-bell',
            title: 'Selamat Datang {{ auth()->user()->username }}',
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
@endif

</html>
