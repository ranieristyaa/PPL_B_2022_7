
    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		$('#Tanggal_Lahir').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>
	
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// Dosen
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "mhs_pkl_modal_edit.php",
					type: "GET",
					data : {nim: m,},
					success: function (ajaxData){
					$("#ModalEditPKL").html(ajaxData);
					$("#ModalEditPKL").modal('show',{backdrop: 'true'});
					}
				});
			});
		
		// Mahasiswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "mahasiswa_modal_edit.php",
					type: "GET",
					data : {NIM: m,},
					success: function (ajaxData){
					$("#ModalEditMahasiswa").html(ajaxData);
					$("#ModalEditMahasiswa").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// mhs_skripsi
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "mhs_skripsi_modal_edit.php",
					type: "GET",
					data : {nim: m,},
					success: function (ajaxData){
					$("#ModalEditSkripsi").html(ajaxData);
					$("#ModalEditSkripsi").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Matakuliah
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "matakuliah_modal_edit.php",
					type: "GET",
					data : {Kode_Matakuliah: m,},
					success: function (ajaxData){
					$("#ModalEditMatakuliah").html(ajaxData);
					$("#ModalEditMatakuliah").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jurusan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jurusan_modal_edit.php",
					type: "GET",
					data : {Kode_Jurusan: m,},
					success: function (ajaxData){
					$("#ModalEditJurusan").html(ajaxData);
					$("#ModalEditJurusan").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jenjang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jenjang_modal_edit.php",
					type: "GET",
					data : {Kode_Jenjang: m,},
					success: function (ajaxData){
					$("#ModalEditJenjang").html(ajaxData);
					$("#ModalEditJenjang").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jadwal
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jadwal_modal_edit.php",
					type: "GET",
					data : {Id_Jadwal: m,},
					success: function (ajaxData){
					$("#ModalEditJadwal").html(ajaxData);
					$("#ModalEditJadwal").modal('show',{backdrop: 'true'});
					}
				});
			});
		});

		$(".open_detail").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "irs_detail.php",
					type: "GET",
					data : {NIM: m,},
					success: function (ajaxData){
					$("#ModalDetail").html(ajaxData);
					$("#ModalDetail").modal('show',{backdrop: 'true'});
					}
				});
			});

			$(".open_lihat").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "dt_mhs_modal.php",
					type: "GET",
					data : {NIM: m,},
					success: function (ajaxData){
					$("#ModalMahasiswa").html(ajaxData);
					$("#ModalMahasiswa").modal('show',{backdrop: 'true'});
					}
				});
			});

			

		$("#a20").click(function(e) {
				$.ajax({
					url: "mhs_20.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#a20").click(function(e) {
				$("#title").html('<center><h3>Mahasiswa Angkatan 20</h3></center>');
			});
		

			$("#all").click(function(e) {
				$.ajax({
					url: "mhs_all.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#all").click(function(e) {
				$("#title").html('<center><h3>Semua Mahasiswa</h3></center>');
			});

			$("#a21").click(function(e) {
				$.ajax({
					url: "mhs_21.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#a21").click(function(e) {
				$("#title").html('<center><h3>Mahasiswa Angkatan 21</h3></center>');
			});

			$("#a22").click(function(e) {
				$.ajax({
					url: "mhs_22.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#a22").click(function(e) {
				$("#title").html('<center><h3>Mahasiswa Angkatan 22</h3></center>');
			});

			$("#a16").click(function(e) {
				$.ajax({
					url: "mhs_16.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#a16").click(function(e) {
				$("#title").html('<center><h3>Mahasiswa Angkatan 16</h3></center>');
			});

			$("#a17").click(function(e) {
				$.ajax({
					url: "mhs_17.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#a17").click(function(e) {
				$("#title").html('<center><h3>Mahasiswa Angkatan 17</h3></center>');
			});

			$("#a18").click(function(e) {
				$.ajax({
					url: "mhs_18.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#a18").click(function(e) {
				$("#title").html('<center><h3>Mahasiswa Angkatan 18</h3></center>');
			});

			$("#a19").click(function(e) {
				$.ajax({
					url: "mhs_19.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#data").html(ajaxData);
					}
				});
			});
			$("#a19").click(function(e) {
				$("#title").html('<center><h3>Mahasiswa Angkatan 19</h3></center>');
			});

			$("#1").click(function(e) {
				$.ajax({
					url: "detail1.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});
			$("#2").click(function(e) {
				$.ajax({
					url: "detail2.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});
			$("#3").click(function(e) {
				$.ajax({
					url: "detail3.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});
			$("#4").click(function(e) {
				$.ajax({
					url: "detail4.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});
			$("#5").click(function(e) {
				$.ajax({
					url: "detail5.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});
			$("#6").click(function(e) {
				$.ajax({
					url: "detail6.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});
			$("#7").click(function(e) {
				$.ajax({
					url: "detail7.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});
			$("#8").click(function(e) {
				$.ajax({
					url: "detail8.php",
					type: "GET",
					data : {},
					success: function (ajaxData){
					$("#smt").html(ajaxData);
					}
				});
			});

			function a20(){
				var xmlhttp = getXMLHTTPRequest();
				var page = 'mhs_21.php';
				var inner = 'data';
				xmlhttp.open("GET", page, true);
				xmlhttp.onreadystatechange = function() {
					document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
					if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
						document.getElementById(inner).innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.send(null);
			}
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
		function confirm_verif(verif_url){
			$("#modal_verif").modal('show', {backdrop: 'static'});
			document.getElementById('verif_link').setAttribute('href', verif_url);
		}
		
	</script>