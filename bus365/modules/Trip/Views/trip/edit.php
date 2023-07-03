<?php echo $this->extend('template/admin/main') ?>
  <?php echo $this->section('content') ?>

  <div class="card mb-4">
      <div class="card-body">
<form action="<?php echo base_url(route_to('update-trip', $trip->id)) ?>" id="employee" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
		<?php echo $this->include('common/securityupdate') ?>

		<label for="Trip Setup" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.section") ?></label>
		<div class="col-3 ">
		<label for="pick_location_id" class="form-label">Pick Up</label>
			<select class="form-select" name="pick_location_id" id="pick_location_id" required>
				<option value="">None</option>
					<?php foreach ($location as $locationvalue): ?>
						<?php if ($locationvalue->id == $trip->pick_location_id) : ?>
								<option value="<?php echo $locationvalue->id ?>" selected><?php echo $locationvalue->name ?></option>
							<?php else : ?>
								<option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
							<?php endif ?>
						<?php endforeach?>
			</select>
		</div>



		<div class="col-3 ">
		<label for="drop_location_id" class="form-label"><?php echo lang("Localize.drop") ?> *</label>
    		<select class="form-select" name="drop_location_id" id="drop_location_id" required>
				<option value="">None</option>
					<?php foreach ($location as $locationvalue): ?>
						<?php if ($locationvalue->id == $trip->drop_location_id) : ?>
								<option value="<?php echo $locationvalue->id ?>" selected><?php echo $locationvalue->name ?></option>
							<?php else : ?>
								<option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
							<?php endif ?>
						<?php endforeach?>
			</select>
		</div>


		<div class="col-3 ">
		
		<label for="stoppage" class="form-label"><?php echo lang("Localize.stoppage") ?> <?php echo lang("Localize.point") ?> *</label>

		<select multiple="multiple" name="stoppage[]" class="testselect3">
		
				<?php foreach ($location as $dropkye => $dlocationvalue): ?>
					
					
						<?php if (in_array($dlocationvalue->id, $stoppage)) : ?>
							<option value="<?php echo $dlocationvalue->id ?>" selected><?php echo $dlocationvalue->name ?></option>
						
						<?php else : ?>

							<option value="<?php echo $dlocationvalue->id ?>"><?php echo $dlocationvalue->name ?></option>
						<?php endif ?>
						
				
				<?php endforeach?>

		</select>

		</div>

		<div class="col-3 ">
			<label for="schedule_id" class="form-label"><?php echo lang("Localize.schedule") ?> <?php echo lang("Localize.time") ?> *</label>
			<select  name="schedule_id" class="testselect1" required>
				<option value="" >None</option>
						<?php foreach ($schedule as $schedulevalue): ?>

							<?php if ($schedulevalue->id == $trip->schedule_id) : ?>
								<option value="<?php echo $schedulevalue->id ?>" selected><?php echo $schedulevalue->start_time ?> - <?php echo $schedulevalue->end_time ?></option>
							<?php else : ?>
								<option value="<?php echo $schedulevalue->id ?>"><?php echo $schedulevalue->start_time ?> - <?php echo $schedulevalue->end_time ?></option>
							<?php endif ?>
						

						<?php endforeach?>
				</select>
  		</div>
		  
		  <?php echo $this->include( $viewpath.'/trip/editarrival') ?>
		  
		  
			<hr>

		  <?php echo $this->include( $viewpath.'/trip/editdeparture') ?>						

		<hr>






		<div class="col-3 ">
			<label for="child_seat" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.seat") ?> </label>
			<input type="number" id="child_seat" name="child_seat" class="form-control" value="<?=old('child_seat')?? $trip->child_seat ?>" placeholder="<?php echo lang("Localize.children") ?> <?php echo lang("Localize.seat") ?>"  min="1">
		</div>

		<div class="col-3 ">
			<label for="child_fair" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?> </label>
			<input type="number" id="child_fair" name="child_fair" class="form-control" value="<?=old('child_fair') ?? $trip->child_fair ?>" placeholder="<?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?>"  min="1">
	</div>

	<div class="col-3 ">
	<label for="special_seat" class="form-label"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?></label>
		<input type="number" id="special_seat" name="special_seat" class="form-control" value="<?=old('special_seat') ?? $trip->special_seat ?>" placeholder="<?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?>"  min="1">
	</div>

	<div class="col-3 ">
	<label for="special_fair" class="form-label"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?> <?php echo lang("Localize.fair") ?></label>
		<input type="number" id="special_fair" name="special_fair" class="form-control" value="<?=old('special_fair') ?? $trip->special_fair?>" placeholder="<?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?> <?php echo lang("Localize.fair") ?>"  min="1">
	</div>



<div class="col-3 ">
  <label for="adult_fair" class="form-label"><?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?> * </label>
    <input type="number" id="adult_fair" name="adult_fair" class="form-control" value="<?=old('adult_fair') ?? $trip->adult_fair?>" placeholder="<?php echo lang("Localize.adult") ?> <?php echo lang("Localize.seat") ?> <?php echo lang("Localize.fair") ?> *"  min="1" required>
  </div>

  <div class="col-3 ">
  <label for="adult_fair" class="form-label"><?php echo lang("Localize.distance") ?> * </label>
    <input type="number" id="distance" name="distance" class="form-control" value="<?=old('distance') ?? $trip->distance?>" placeholder="<?php echo lang("Localize.distance") ?>"  min="1">
  </div>

  <div class="col-3 ">
  <label for="journey_hour" class="form-label"><?php echo lang("Localize.approximate") ?> <?php echo lang("Localize.time") ?> *</label>
    <input type="number" id="journey_hour" name="journey_hour" class="form-control" value="<?=old('journey_hour') ?? $trip->journey_hour ?>" placeholder="<?php echo lang("Localize.approximate") ?> <?php echo lang("Localize.time") ?>"   step=any >
  </div>

  
  <div class="col-3 ">
<label for="weekend" class="form-label"><?php echo lang("Localize.weekend") ?> </label>
<select multiple="multiple" name="weekend[]" class="testselect3">
	<?php foreach ($weekday as  $key =>  $weekdayvalue): ?>
		
		
						<?php if ( in_array($key, $weekoff)) : ?>
							<option value="<?php echo $key ?>" selected><?php echo $weekdayvalue ?>  </option>
						
						<?php else : ?>
							<option value="<?php echo $key ?>" ><?php echo $weekdayvalue ?> </option>
						<?php endif ?>
					
			

		<?php endforeach?>
    </select>
  </div>

  <div class="col-3 ">
<label for="startdate" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.start") ?> <?php echo lang("Localize.date") ?></label>
<div class="input-group date" id="startdate" >
    <input type="text" class="form-control" name="startdate" value="<?php echo $trip->startdate ?>" readonly>
    <div class="input-group-addon">
        
    </div>
</div>
</div>


<div class="col-3 ">
	  
	  <label for="facility" class="form-label"><?php echo lang("Localize.facility") ?></label>
    <select multiple="multiple" name="facility[]" class="testselect3">
      <option value="" >None</option>
			<?php foreach ($facility as $fkye => $facilityvalue): ?>

				<?php if ( in_array($facilityvalue->id, $facilityold)) : ?>
					<option value="<?php echo $facilityvalue->id ?>" selected><?php echo $facilityvalue->name ?></option>
					<?php else : ?>
						<option value="<?php echo $facilityvalue->id ?>"><?php echo $facilityvalue->name ?></option>

				<?php endif ?>

				
			<?php endforeach?>
    </select>
</div>


  <hr>

<label for="" class="form-label"><?php echo lang("Localize.vehicle") ?> </label>

  <div class="col-3 ">
<label for="fleet_id" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> * </label>
<select id="fleet_id" name="fleet_id" class="testselect1" required>
      <option value="" >None</option>
			<?php foreach ($fleet_type as $fleet_typevalue): ?>

				<?php if ($fleet_typevalue->id == $trip->fleet_id) : ?>
					<option value="<?php echo $fleet_typevalue->id ?>" selected><?php echo $fleet_typevalue->type ?></option>
				<?php else : ?>
					<option value="<?php echo $fleet_typevalue->id ?>"><?php echo $fleet_typevalue->type ?></option>
				<?php endif ?>

			<?php endforeach?>
    </select>
  </div>

  <div class="col-3 ">
  <label for="vehicle_id" class="form-label"><?php echo lang("Localize.vehicle") ?> <?php echo lang("Localize.list") ?> *</label>
  <select id="vehicle_id" name="vehicle_id" class="form-select" required >

  <?php foreach ($vehicle_id as $vehiclevalue): ?>

	<?php if ($vehiclevalue->id == $trip->vehicle_id) : ?>
		<option value="<?php echo $vehiclevalue->id ?>" selected><?php echo $vehiclevalue->reg_no ?></option>
	<?php endif ?>

	<?php endforeach?>
 
  </select>
</div>

<div class="col-3 ">
	  
	  <label for="driver" class="form-label"><?php echo lang("Localize.driver") ?> <?php echo lang("Localize.list") ?> *</label>
    <select multiple="multiple" name="driver[]" class="testselect3">
      <option value="" >None</option>
			<?php foreach ($driver as $drivervalue): ?>
				<?php if (in_array($drivervalue->id, $olddriver)) : ?>
					<option value="<?php echo $drivervalue->id ?>" selected><?php echo $drivervalue->first_name ?> <?php echo $drivervalue->last_name ?></option>
				<?php else : ?>
					<option value="<?php echo $drivervalue->id ?>"><?php echo $drivervalue->first_name ?> <?php echo $drivervalue->last_name ?></option>
				<?php endif ?>

				

			<?php endforeach?>
    </select>
</div>


<div class="col-3 ">
	  
	  <label for="assistant" class="form-label"><?php echo lang("Localize.assistant") ?> <?php echo lang("Localize.list") ?>  * </label>
    <select multiple="multiple" name="assistant[]" class="testselect3">
      <option value="" >None</option>
			<?php foreach ($assistant as $assistantvalue): ?>

				<?php if  (in_array($assistantvalue->id, $olddassistant)) : ?>
					<option value="<?php echo $assistantvalue->id ?>" selected><?php echo $assistantvalue->first_name ?> <?php echo $assistantvalue->last_name ?></option>
				<?php else : ?>
					<option value="<?php echo $assistantvalue->id ?>"><?php echo $assistantvalue->first_name ?> <?php echo $assistantvalue->last_name ?></option>
				<?php endif ?>

				

			<?php endforeach?>
    </select>
</div>


<div class="col-3 ">
  <label for="company_name" class="form-label"><?php echo lang("Localize.company") ?> <?php echo lang("Localize.name") ?> *</label>
    <input type="text" id="company_name" name="company_name" class="form-control" value="<?=old('company_name') ?? $trip->company_name?>" placeholder="<?php echo lang("Localize.company") ?> <?php echo lang("Localize.name") ?>"  min="1">
</div>



<label for="status" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.status") ?></label>

<?php if ($trip->status == 1) : ?>
	<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="active" value="1" checked>
  <label class="form-check-label" for="active">
  <?php echo lang("Localize.active") ?>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="0" id="disable" >
  <label class="form-check-label" for="disable">
  <?php echo lang("Localize.disable") ?>
  </label>
</div>
<?php else : ?>
	<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="active" value="1" >
  <label class="form-check-label" for="active">
  <?php echo lang("Localize.active") ?>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="0" id="disable" checked>
  <label class="form-check-label" for="disable">
  <?php echo lang("Localize.disable") ?>
  </label>
</div>
<?php endif ?>




					<div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>




<input type="hidden"  name ="id" value="<?=esc($trip->id)?>" >
<input type="hidden" id="baseurl" name="baseurl"  value="<?php echo esc(base_url())?>" >

<br>
    <div class="col-12 text-center">
                              <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>


</form>

</div>
</div>
<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
<script src="<?php echo base_url('public/js/ajax.js'); ?>"></script>
<script src="<?php echo base_url('public/js/dynamicinput.js'); ?>"></script>
<?php echo $this->endSection() ?>
