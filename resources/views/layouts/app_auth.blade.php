<!DOCTYPE html>

@if (\Request::is('rtl'))
    <html dir="rtl" lang="ar">
    @else
        <html lang="en" >
        @endif

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            @if (env('IS_DEMO'))
                <x-demo-metas></x-demo-metas>
            @endif

            <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/template-soft-ui/assets/img/apple-icon.png')}}">
            <link href="{{asset('uploads/'.App\Models\Setting::getSetting('favicon'))}}" rel="icon">

            <title>
                @yield('title')
            </title>
            <!--     Fonts and icons     -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
            <!-- Nucleo Icons -->
            <link href="{{asset('assets/template-soft-ui/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
            <link href="{{asset('assets/template-soft-ui/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
            <!-- Font Awesome Icons -->
            <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
            <link href="{{asset('assets/template-soft-ui/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
            <!-- CSS Files -->
            <link id="pagestyle" href="{{asset('assets/template-soft-ui/assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>

        <body class="g-sidenav-show  bg-gray-100 {{ (\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : '')) }} ">

            @yield('guest')

        @if(session()->has('success'))
            <div x-data="{ show: true}"
                 x-init="setTimeout(() => show = false, 4000)"
                 x-show="show"
                 class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
                <p class="m-0">{{ session('success')}}</p>
            </div>
        @endif
        <!--   Core JS Files   -->
        <script src="{{asset('assets/template-soft-ui/assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('assets/template-soft-ui/assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/template-soft-ui/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('assets/template-soft-ui/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
        <script src="{{asset('assets/template-soft-ui/assets/js/plugins/fullcalendar.min.js')}}"></script>
        <script src="{{asset('assets/template-soft-ui/assets/js/plugins/chartjs.min.js')}}"></script>
        @stack('rtl')
        @stack('dashboard')
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{asset('assets/template-soft-ui/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
        </body>
        @yield('script')
        </html>
