<?php echo $this->extend('template/admin/main') ?>
  <?php echo $this->section('content') ?>
  <div class="card mb-4">
      <div class="card-body">

<form action="<?php echo base_url(route_to('create-trip')) ?>" id="locationform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
				<?php echo $this->include('common/security') ?>
        <input type="hidden" id="baseurl" name="basurl"  value="<?php echo base_url(); ?>">
<label for="Trip Setup" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.section") ?></label>
  <div class="col-3 ">
  <label for="pick_location_id" class="form-label"><?php echo lang("Localize.pick_up") ?> *</label>
	<select class="form-select" name="pick_location_id" id="pick_location_id" required>
		<option value="">None</option>
			<?php foreach ($location as $locationvalue): ?>

				<option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>

			<?php endforeach?>
	</select>
  </div>


  <div class="col-3 ">
  <label for="drop_location_id" class="form-label"><?php echo lang("Localize.drop") ?> *</label>
    <select class="form-select" name="drop_location_id" id="drop_location_id" required>
		<option value="">None</option>
			<?php foreach ($location as $locationvalue): ?>

				<option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>

			<?php endforeach?>
	</select>
  
  </div>

<div class="col-3 ">
	  
	  <label for="stoppage" class="form-label"><?php echo lang("Localize.stoppage") ?> <?php echo lang("Localize.point") ?> *</label>
    <select multiple="multiple" name="stoppage[]" class="testselect3">
      <option value="" >None</option>
			<?php foreach ($location as $locationvalue): ?>

				<option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>

			<?php endforeach?>
    </select>
</div>

<div class="col-3 ">
<label for="schedule_id" class="form-label"><?php echo lang("Localize.schedule") ?> <?php echo lang("Localize.time") ?> *</label>
<select  name="schedule_id" class="testselect1" required>
      <option value="" >None</option>
			<?php foreach ($schedule as $schedulevalue): ?>

				<option value="<?php echo $schedulevalue->id ?>"><?php echo $schedulevalue->start_time ?> - <?php echo $schedulevalue->end_time ?></option>

			<?php endforeach?>
    </select>
  </div>

  <label for="" class="form-label"><?php echo lang("Localize.boarding") ?> <?php echo lang("Localize.point") ?> *</label>
    <div class="row" id="boarding">
      <div class="col-3 ">
      <label for="picktime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> *</label>
        <input type="text" id="picktime" name="picktime[]" class="form-control" value="<?php echo old('time')?>" placeholder="Select Time">
      </div>

    <div class="col-3 ">
      <label for="stand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> *</label>
      <select  name="picstand[]" class="form-control testselect1" required>
            <option value="" >None</option>
            <?php foreach ($stand as $standvalue): ?>

              <option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>

            <?php endforeach?>
          </select>
    </div>


    <div class="col-3 ">
      <label for="detail" class="form-label"><?php echo lang("Localize.detail") ?> </label>
        <input type="text" id="detail" name="detail[]" class="form-control" value="<?php echo old('detail')?>" placeholder="<?php echo lang("Localize.detail") ?>">
      </div>

      <input type="hidden"  name="type[]"  value="1">
      <div class="col-3 mt-4">
      
      <a  id="boardingadd" class="btn btn-success mt-1 text-white" onclick="addfieldboard()">+</a>
      </div>

      </div>

      <div class="row" id="boardinadd">

      </div>

        <hr>


  <label for="" class="form-label"><?php echo lang("Localize.dropping") ?> <?php echo lang("Localize.point") ?> *</label>
  <div class="row" id="droping">
      <div class="col-3 ">
      <label for="droptime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> *</label>
        <input type="text" id="droptime" name="droptime[]" class="form-control" value="" placeholder="Select Time">
      </div>

    <div class="col-3 ">
      <label for="dropstand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> *</label>
      <select  name="dropstand[]" class="form-control testselect1" required>
            <option value="" >None</option>
            <?php foreach ($stand as $standvalue): ?>

              <option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>

            <?php endforeach?>
          </select>
    </div>


    <div class="col-3 ">
      <label for="dropdetail" class="form-label"><?php echo lang("Localize.detail") ?></label>
        <input type="text" id="detail" name="dropdetail[]" class="form-control" value="" placeholder="<?php echo lang("Localize.detail") ?>">
      </div>

      <input type="hidden"  name="droptype[]"  value="0">
      <div class="col-3 mt-4">
      
      <a  id="boardingadd" class="btn btn-success mt-1 text-white" onclick="addfielddrop()">+</a>
      </div>

      </div>

      <div class="row" id="droppingadd">

      </div>
        <hr>

  <div class="col-3 ">
  <label for="child_seat" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.seat") ?> </label>
    <input type="number" id="child_seat" name="child_seat" class="form-control" value="<?=old('child_seat')?>" placeholder="<?php echo lang("Localize.children") ?> <?php echo lang("Localize.seat") ?>"  min="1">
  </div>

  <div class="col-3 ">
  <label for="child_fair" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?></label>
    <input type="number" id="child_fair" name="child_fair" class="form-control" value="<?=old('child_fair')?>" placeholder="<?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?>"  min="1">
  </div>

  <div class="col-3 ">
  <label for="special_seat" class="form-label"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?></label>
    <input type="number" id="special_seat" name="special_seat" class="form-control" value="<?=old('special_seat')?>" placeholder="<?php echo lang("Localize.special") ?> <?php echo lang("Localize.seat") ?>"  min="1">
  </div>

  <div class="col-3 ">
  <label for="special_fair" class="form-label"><?php echo lang("Localize.special") ?> <?php echo lang("Localize.fair") ?> </label>
    <input type="number" id="special_fair" name="special_fair" class="form-control" value="<?=old('special_fair')?>" placeholder="<?php echo lang("Localize.special") ?> <?php echo lang("Localize.fair") ?>"  min="1">
  </div>

  <div class="col-3 ">
  <label for="adult_fair" class="form-label"><?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?> *</label>
    <input type="number" id="adult_fair" name="adult_fair" class="form-control" value="<?=old('adult_fair')?>" placeholder="<?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?>"  min="1" required>
  </div>

  <div class="col-3 ">
  <label for="adult_fair" class="form-label"><?php echo lang("Localize.distance") ?> *</label>
    <input type="number" id="distance" name="distance" class="form-control" value="<?=old('distance')?>" placeholder="<?php echo lang("Localize.distance") ?>"  min="1" >
  </div>

  <div class="col-3 ">
  <label for="journey_hour" class="form-label"><?php echo lang("Localize.approximate") ?> <?php echo lang("Localize.time") ?> *</label>
    <input type="number" id="journey_hour" name="journey_hour" class="form-control" value="<?=old('journey_hour')?>" placeholder="<?php echo lang("Localize.approximate") ?> <?php echo lang("Localize.time") ?>"  min="1" step=1>
  </div>


  <div class="col-3 ">
<label for="weekend" class="form-label"><?php echo lang("Localize.weekend") ?> </label>
<select multiple="multiple" name="weekend[]" class="testselect3">
	<?php foreach ($weekday as  $key =>  $weekdayvalue): ?>

				<option value="<?php echo $key ?>"><?php echo $weekdayvalue ?> </option>

			<?php endforeach?>
    </select>
  </div>

 
<div class="col-3 ">
<label for="startdate" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.start") ?> <?php echo lang("Localize.date") ?>  *</label>
<div class="input-group date" id="startdate" >
    <input type="text" class="form-control" name="startdate" readonly>
    <div class="input-group-addon">
        
    </div>
</div>
</div>


<div class="col-3 ">
	  
	  <label for="facility" class="form-label"><?php echo lang("Localize.facility") ?> </label>
    <select multiple="multiple" name="facility[]" class="testselect3">
      <option value="" >None</option>
			<?php foreach ($facility as $facilityvalue): ?>

				<option value="<?php echo $facilityvalue->id ?>"><?php echo $facilityvalue->name ?></option>

			<?php endforeach?>
    </select>
</div>
<hr>

<label for="" class="form-label"><?php echo lang("Localize.vehicle") ?> </label>

  <div class="col-3 ">
<label for="fleet_id" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> *</label>
<select id="fleet_id" name="fleet_id" class="testselect1" required>
      <option value="" >None</option>
			<?php foreach ($fleet_type as $fleet_typevalue): ?>

				<option value="<?php echo $fleet_typevalue->id ?>"><?php echo $fleet_typevalue->type ?></option>

			<?php endforeach?>
    </select>
  </div>




<div class="col-3 ">
  <label for="vehicle_id" class="form-label"><?php echo lang("Localize.vehicle") ?> <?php echo lang("Localize.list") ?> *</label>
  <select id="vehicle_id" name="vehicle_id" class="form-select" required >
        
  </select>
</div>

<div class="col-3 ">
	  
	  <label for="driver" class="form-label"><?php echo lang("Localize.driver") ?> <?php echo lang("Localize.list") ?> *</label>
    <select multiple="multiple" name="driver[]" class="testselect3">
      <option value="" >None</option>
			<?php foreach ($driver as $drivervalue): ?>

				<option value="<?php echo $drivervalue->id ?>"><?php echo $drivervalue->first_name ?> <?php echo $drivervalue->last_name ?></option>

			<?php endforeach?>
    </select>
</div>

<div class="col-3 ">
	  
	  <label for="assistant" class="form-label"><?php echo lang("Localize.assistant") ?> <?php echo lang("Localize.list") ?>  *</label>
    <select multiple="multiple" name="assistant[]" class="testselect3">
      <option value="" >None</option>
			<?php foreach ($assistant as $assistantvalue): ?>

				<option value="<?php echo $assistantvalue->id ?>"><?php echo $assistantvalue->first_name ?> <?php echo $assistantvalue->last_name ?></option>

			<?php endforeach?>
    </select>
</div>


<div class="col-3 ">
  <label for="company_name" class="form-label"><?php echo lang("Localize.company") ?> <?php echo lang("Localize.name") ?> *</label>
    <input type="text" id="company_name" name="company_name" class="form-control" value="<?=old('company_name')?>" placeholder="<?php echo lang("Localize.company") ?> <?php echo lang("Localize.name") ?>"  min="1">
</div>

<label for="status" class="form-label"><?php echo lang("Localize.trip") ?> <?php echo lang("Localize.status") ?> </label>
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
 

                              <div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>
	
	
	<br>
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

