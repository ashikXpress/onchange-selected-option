<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Codeigniter CRUD Application </title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<style>
		.mt40{
			margin-top: 40px;
		}
	</style>
</head>
<body>

<div class="container">

	<div class="row">
		<div class="col-lg-12 mt40">
			<div class="pull-left">
				<h2>Add Note</h2>
			</div>
		</div>
	</div>


	<form action="" method="POST" name="edit_note">
		<input type="hidden" name="id">
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<div class="form-group">
					<label>Country Name</label>
					<select class="form-control" name="country" id="country">
						<option selected disabled>select country</option>
						<?php foreach ($countries as $country){ ?>
						<option value="<?php echo $country->id?>"><?php echo $country->name?></option>
						<?php }?>
					</select>

				</div>
			</div>
			<div class="col-md-4 col-md-offset-3">
				<div class="form-group">
					<label>State Name</label>
					<select class="form-control" id="state" name="state">

					</select>
				</div>
			</div>
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>


</div>
<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>



<script>
$(document).ready(function () {
	$('#country').change(function () {
		var	country_id=$('#country').val();
		if (country_id !=''){
			$.ajax({
				url:"<?php echo base_url()?>admin/state",
				method:"POST",
				data:{country_id:country_id},
				success:function (data) {
					$('#state').html(data);
				}
			});
		}

});

});





</script>
</body>
</html>
