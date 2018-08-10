@extends('admin.layouts.master')

@section('layout')
    @include('admin.layouts.navbar')

    <div id="wrapper">
      @include('admin.layouts.sidebar')
      <div id="content-wrapper">

        <div class="container-fluid">
          @yield('breadcrumb')
          @yield('content')
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
@endsection
