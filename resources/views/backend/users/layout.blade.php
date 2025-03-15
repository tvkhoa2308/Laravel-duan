@include('backend.layouts.libs_css')

<!-- Begin page -->
<div id="layout-wrapper">

    @include('backend.layouts.header')



    @include('backend.layouts.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->


        @include($template)
        <!-- End Page-content -->
        @include('backend.layouts.footer')


 
</div>
<!-- END layout-wrapper -->





@include('backend.layouts.libs_js')




