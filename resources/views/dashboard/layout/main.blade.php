<!DOCTYPE html>
<html lang="en">

@include('dashboard.layout.head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('dashboard.layout.navbar')
        @include('dashboard.layout.sidebar')
        @include('dashboard.layout.content', ['title'=> isset($title)?$title:''])
        @include('dashboard.layout.footer')

    </div>
    <!-- ./wrapper -->

    <script src="{{asset('dashboard-resources/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dashboard-resources/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard-resources/dist/js/adminlte.min.js')}}"></script>

    {{-- All included scripts are going here --}}
    @yield('scripts')

</body>

</html>
