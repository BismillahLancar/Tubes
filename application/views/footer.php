<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#example').DataTable({
	  "processing":true,
				"serverSide":true,
				"lengthMenu": [[6,10,20,-3],[6,10,20,"All"]],
				"ajax":{
					url : "<?php echo site_url('pegawai/data_server')?>",
					type : "POST"
				},
				"columnDefs":
				[
					{
						"targets":0,
						"data":"nama",
					},
					{
						"targets":1,
						"data":"nip",
					},
					{
						"targets":2,
						"data":"tanggal",
					},
					{
						"targets":3,
						"data":"alamat",
					},
					{
						"targets":4,
						"data":"jabatan",
					},
					{
						"targets":5,
						"data":"foto",
						"render":function(data, type, full, meta){
							return '<img src="<?php echo base_url()?>assets/uploads/'+data+'"width="80">';
						}
					},
					{
						"targets":6,
						"data":null,
						"searchable":false,
						"render":function(data, type, full, meta){
							return '<a href="<?php echo site_url()?>/pegawai/update/'+data["id"]+'">Edit</a>'
						}
					},
					{
						"targets":7,
						"data":null,
						"searchable":false,
						"render":function(data, type, full, meta){
							return '<a href="<?php echo site_url()?>/pegawai/delete/'+data["id"]+'">Delete</a>'
						}
					},
				]
			});
		});
</script>
</body>
</html>