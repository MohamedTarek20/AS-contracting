   <!--   Core JS Files   -->
   <script src="{{ asset('dashboard/assets/js/core/popper.min.js') }}"></script>
   <script src="{{ asset('dashboard/assets/js/core/bootstrap.min.js') }}"></script>
   <script src="{{ asset('dashboard/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
   <script src="{{ asset('dashboard/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
   <!-- Github buttons -->
   <script async defer src="{{asset('dashboard/assets/js/buttons.js')}}"></script>
   <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
   {{-- <script src="{{ asset('dashboard/assets/js/material-dashboard.min.js?v=3.2.0') }}"></script> --}}
   <script src="{{ asset('dashboard/assets/js/material-dashboard.js') }}"></script>
   @stack('scripts')
