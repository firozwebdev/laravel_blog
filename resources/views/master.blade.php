@include('front/header')

@yield('slider')



<!--main content--->
<div class="content-wrap container" style="margin-top:100px;">
    <div class="row">

        @yield('content')
        @yield('sidebar')

    </div>
</div>
<!--end main content-->

@include('front/footer')
