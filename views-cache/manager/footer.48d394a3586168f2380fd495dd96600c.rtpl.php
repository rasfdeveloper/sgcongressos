<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; SG Congressos.</strong>
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="/res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/res/admin/bootstrap/js/bootstrap.min.js"></script>


<!-- AdminLTE App -->
<script src="/res/admin/dist/js/app.min.js"></script>
<!-- FastClick -->
<script src="/res/admin/plugins/fastclick/fastclick.js"></script>

<script src="/res/admin/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="/res/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/res/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/res/admin/dist/js/demo.js"></script>

<script src="/res/admin/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="/res/admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/res/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/res/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/res/admin/plugins/daterangepicker/daterangepicker.js"></script>

<script src="/res/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- bootstrap datepicker -->
<script src="/res/admin/plugins/datepicker/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq2oSPiL6IcpK3pCKHW8EWZI9yh0Rr3R4&libraries=places"></script>


<script>
  $(function () {
    $('#usertable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    $("[data-mask]").inputmask();

    $('#date1').datepicker({
      autoclose: true,
      format :"dd/mm/yyyy",
      
    });

    $('#date2').datepicker({
      autoclose: true,
      format :"dd/mm/yyyy",
      
    });

     $('#date3').datepicker({
      autoclose: true,
      format :"dd/mm/yyyy",
     
      
    });

    $('#regs1').datepicker({
      autoclose: true,
      format :"dd/mm/yyyy",
      
    });

    $('#regs2').datepicker({
      autoclose: true,
      format :"dd/mm/yyyy",
      
    });

    $(".timer").timepicker({
      showInputs: false
    });

          
  });


var input = document.getElementById('searchTextField');
var options = {
  types: ['(regions)']
};

autocomplete = new google.maps.places.Autocomplete(input, options);

// function fillInAddress() {
//   // Get the place details from the autocomplete object.
//   var place = autocomplete.getPlace();

//   for (var component in componentForm) {
//     document.getElementById(component).value = '';
//     document.getElementById(component).disabled = false;
//   }

//   // Get each component of the address from the place details
//   // and fill the corresponding field on the form.
//   for (var i = 0; i < place.address_components.length; i++) {
//     var addressType = place.address_components[i].types[0];
//     if (componentForm[addressType]) {
//       var val = place.address_components[i][componentForm[addressType]];
//       document.getElementById(addressType).value = val;
//     }
//   }
// }






</script>

</body>
</html>
