@include('users.header')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   @include('users.nav')
    <!-- partial -->
    @include('users.partial')  
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
 @include('users.script')
  <!-- End custom js for this page-->
</body>

</html>

