 <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="#" target="_blank">Cyberworx.in</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url('assets/admin/');?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	  
	  
	  <!--- datatable --->
	     <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/plugins/datatable/data-table-jquery.js"></script>
	     <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/plugins/datatable/data-tabel-bs.js"></script>
	  
	  <!--- datatable --->
	  
	   <script src="<?php echo base_url('assets/admin/');?>assets/plugins/table-export/tableExport.js" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/table-export/jquery.base64.js" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/table-export/html2canvas.js" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/table-export/sprintf.js" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/table-export/jspdf.js" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/table-export/base64.js" type="text/javascript"></script>
	  
      <!-- lobipanel -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="<?php echo base_url('assets/admin/');?>assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="<?php echo base_url('assets/admin/');?>assets/plugins/monthly/monthly.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
         <script src="<?php echo base_url('assets/admin/');?>assets/plugins/summernote/summernote.js" type="text/javascript"></script>
      <!-- Dashboard js -->
      <script src="<?php echo base_url('assets/admin/');?>assets/dist/js/dashboard.js" type="text/javascript"></script>
       <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
   <!--  <script>tinymce.init({ selector:'textarea' });</script> -->
    <!--select2-->
      <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/select2/select2.min.js"></script>
      <!-- End Theme label Script ===================-->
       <script src="<?php echo base_url('assets/admin/');?>assets/ckeditor/ckeditor.js"></script>
       <script src="<?php echo base_url('assets/admin/');?>assets/custom.js"></script>
  
    
	  <script>

	$(document).ready(function() {
    $('#example').DataTable({ 
		responsive: true,
		ordering    : false
		 
	});
	} );
	  </script>
	  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
	    <script>
            //Summernote
            function sumnote() {
              var note = $('.summernote');
              $(note).summernote({
             height: 200, // set editor height
             minHeight: null, // set minimum height of editor
             maxHeight: null, // set maximum height of editor
             focus: true  // set focus to editable area after initializing summernote
          });
           }
           sumnote();
        </script>
        <script>
            //Summernote
            function sumnotee() {
              var note = $('#summernotee');
              $(note).summernote({
             height: 200, // set editor height
             minHeight: null, // set minimum height of editor
             maxHeight: null, // set maximum height of editor
             focus: true  // set focus to editable area after initializing summernote
          });
           }
           sumnotee();
        </script>
		 <script type="text/javascript">
     //select2
     $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});  
     </script>
		 <script type="text/javascript">
      //function for explan
function show_hide_row(row)
{
 $("#"+row).toggle();
}
</script>
 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
					CKEDITOR.replace( 'editor1' );
					CKEDITOR.replace( 'editor' );
            CKEDITOR.replace( 'editor2' );
            </script>
            <script type="text/javascript">
  $(document).on('click','#checkAl',function(){
$('input:checkbox').not(this).prop('checked', this.checked);
});



</script>
   </body>
 
</html>