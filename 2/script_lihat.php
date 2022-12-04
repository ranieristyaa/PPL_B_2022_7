<script type="text/javascript">
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
</script>