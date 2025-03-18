<footer class="footer"> 
    <div class="container-fluid">
      <div class="row"> 
        <div class="col-md-6 footer-copyright">
          <p class="mb-0"> © Copyright {{ date('Y') }} - 24Sevenupdates All Rights Reserved. | Designed and Developed by Shivam.</p>
        </div>
        <div class="col-md-6">
         
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
<!-- jquery-->
<script src="{{asset('backend/assets/js/vendors/jquery/jquery.min.js')}}"></script>

<!-- bootstrap js-->
<script src="{{asset('backend/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}" defer=""></script>
<script src="{{asset('backend/assets/js/vendors/bootstrap/dist/js/popper.min.js')}}" defer=""></script>
<!--fontawesome-->
<script src="{{asset('backend/assets/js/vendors/font-awesome/fontawesome-min.js')}}"></script>
<!-- feather-->

<script src="{{asset('backend/assets/js/vendors/feather-icon/custom-script.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('backend/assets/js/sidebar.js')}}"></script>
<!-- height_equal-->
<script src="{{asset('backend/assets/js/height-equal.js')}}"></script>
<!-- config-->
<script src="{{asset('backend/assets/js/config.js')}}"></script>
<!-- apex-->
<!-- scrollbar-->
<script src="{{asset('backend/assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('backend/assets/js/scrollbar/custom.js')}}"></script>
<!-- slick-->
<script src="{{asset('backend/assets/js/slick/slick.min.js')}}"></script>
<script src="{{asset('backend/assets/js/slick/slick.js')}}"></script>
<!-- data_table-->
<script src="{{asset('backend/assets/js/js-datatables/datatables/jquery.dataTables.min.js')}}"></script>
<!-- page_datatable-->
<script src="{{asset('backend/assets/js/js-datatables/datatables/datatable.custom.js')}}"></script>
<!-- page_datatable1-->
<script src="{{asset('backend/assets/js/js-datatables/datatables/datatable.custom1.js')}}"></script>
<!-- page_datatable-->
<script src="{{asset('backend/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<!-- theme_customizer-->
<script src="{{asset('backend/assets/js/theme-customizer/customizer.js')}}"></script>


<script src="{{asset('backend/assets/js/choices/add-post-custom.js')}}"></script>

<script src="{{asset('backend/assets/js/dashboard/dashboard_1.js')}}"></script>
<script src="{{asset('backend/assets/js/icon/iconly.js')}}"></script>
<script src="{{asset('backend/assets/js/icon/icons-notify.js')}}"></script>
<script src="{{asset('backend/assets/js/icon/iconly_icon.js')}}"></script>
<script src="{{asset('backend/assets/js/summernote/summernote-bs4.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- custom script -->
<script src="{{asset('backend/assets/js/script.js')}}"></script>

<script>
  // Display validation errors
  @if ($errors->any())
      let errorMessages = '';
      @foreach ($errors->all() as $error)
          errorMessages += '<li>{{ $error }}</li>';
      @endforeach
      Swal.fire({
          icon: 'error',
          title: 'Validation Errors',
          html: '<ul style="text-align: left;">' + errorMessages + '</ul>',
          confirmButtonText: 'OK',
      });
  @endif

  // Display success message
  @if (session('success'))
      Swal.fire({
          icon: 'success',
          title: 'Success',
          text: '{{ session('success') }}',
          confirmButtonText: 'OK',
          timer: 3000,
          timerProgressBar: true,
      });
  @endif

  // Display error message
  @if (session('error'))
      Swal.fire({
          icon: 'error',
          title: 'Error',
          text: '{{ session('error') }}',
          confirmButtonText: 'OK',
      });
  @endif

  // Display info message
  @if (session('info'))
      Swal.fire({
          icon: 'info',
          title: 'Info',
          text: '{{ session('info') }}',
          confirmButtonText: 'OK',
      });
  @endif
</script>
<script>
  $(document).ready(function() {
      $('#summernote').summernote({
          height: 300, // Set the height of the editor
          placeholder: 'Write your content here...',
          tabsize: 2,
      });
  });
</script>
</body>

</html>