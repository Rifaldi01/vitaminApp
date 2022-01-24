@include('layouts.component.head')
@include('layouts.component.header')
@include('layouts.component.slider')
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>
@include('layouts.component.footer')
@include('layouts.component.js')
@include('layouts.component.head')