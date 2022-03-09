@include('admin.layouts.header')
@include('admin.partials.navbar')
@include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
     @yield('konten')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('admin.layouts.footer')
