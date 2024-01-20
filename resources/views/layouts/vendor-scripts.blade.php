<!-- JAVASCRIPT -->
@vite(['resources/js/app.js', 'resources/js/commom.js','resources/js/plugins.js'])
<script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>


@yield('script')
