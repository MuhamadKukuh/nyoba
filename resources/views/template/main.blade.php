<!DOCTYPE html>
<html lang="en">
@include('template.head')
<body>
    <div id="wrapper">
        @include('template.sidebar')
        @include('template.navbar')
        <div class="clearfix"></div>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    @include('template.js')
</body>
</html>