@include('backend.layouts.libs_css')

<!-- Begin page -->
<div id="layout-wrapper">

    @include('backend.layouts.header')


    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    @include('backend.layouts.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @include($template)
        <!-- End Page-content -->
        @include('backend.layouts.footer')


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->





@include('backend.layouts.libs_js')




