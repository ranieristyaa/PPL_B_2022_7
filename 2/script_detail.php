<script type="text/javascript">
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
</script>