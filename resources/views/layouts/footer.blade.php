
  
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>



<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            'csv', 
            'excel', 
            'pdf', 
            'print'
        ]
    } );
} );
</script>
  
  {{-- <script src="{{asset ('assets/libs/jquery/dist/jquery.min.js')}}"></script> --}}
  <script src="{{asset ('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset ('assets/js/app.min.js')}}"></script>
  <script src="{{asset ('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset ('assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset ('assets/js/dashboard.js')}}"></script>
  <script src="https://api.windy.com/assets/map-forecast/libBoot.js"></script>
</body>

</html>