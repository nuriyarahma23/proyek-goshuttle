<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('css') ?>
  <link rel="stylesheet" href="<?php echo base_url('public/css/customestyle.css'); ?>" type="text/css">
<?php echo $this->endSection() ?>

  <?php echo $this->section('content') ?>

  <?php echo $this->include('common/message') ?>



  <div class="card mb-4">
      <div class="card-body">

	  <form action="<?php echo base_url(route_to('update-Subtrip', $subtrip->id)) ?>" id="employee" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
		<?php echo $this->include('common/securityupdate') ?>


		
	  		<div class="row">
				<div class="col-3"></div>

				<div class="col-6">

					<div class="row">


				
					<div class="col-6 mt-3">
		<label for="pick_location_id" class="form-label"><?php echo lang("Localize.pick_up") ?></label>
			<select class="form-select" name="pick_location_id" id="pick_location_id" required>
				<option value="">None</option>
					<?php foreach ($location as $locationvalue): ?>
						<?php if ($locationvalue->id == $subtrip->pick_location_id) : ?>
								<option value="<?php echo $locationvalue->id ?>" selected><?php echo $locationvalue->name ?></option>
							<?php else : ?>
								<option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
							<?php endif ?>
						<?php endforeach?>
			</select>
		</div>



		<div class="col-6 mt-3">
		<label for="drop_location_id" class="form-label"><?php echo lang("Localize.drop") ?></label>
    		<select class="form-select" name="drop_location_id" id="drop_location_id" required>
				<option value="">None</option>
					<?php foreach ($location as $locationvalue): ?>
						<?php if ($locationvalue->id == $subtrip->drop_location_id) : ?>
								<option value="<?php echo $locationvalue->id ?>" selected><?php echo $locationvalue->name ?></option>
							<?php else : ?>
								<option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
							<?php endif ?>
						<?php endforeach?>
			</select>
		</div>


	

		


		

		<div class="col-6 mt-3">
			<label for="child_fair" class="form-label"><?php echo lang("Localize.children") ?> <?php echo lang("Localize.fair") ?></label>
			<input type="number" id="child_fair" name="child_fair" class="form-control" value="<?=old('child_fair') ?? $subtrip->child_fair ?>"   min="1">
	</div>

	

	<div class="col-6 mt-3">
	<label for="special_fair" class="form-label"><?php echo lang("Localize.special") ?>  <?php echo lang("Localize.fair") ?></label>
		<input type="number" id="special_fair" name="special_fair" class="form-control" value="<?=old('special_fair') ?? $subtrip->special_fair?>" placeholder="<?php echo lang("Localize.special") ?>  <?php echo lang("Localize.fair") ?>"  min="1">
	</div>



	<div class="col-6 mt-3">
<label for="adult_fair" class="form-label"><?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?></label>
    <input type="number" id="adult_fair" name="adult_fair" class="form-control" value="<?=old('adult_fair') ?? $subtrip->adult_fair?>" placeholder="<?php echo lang("Localize.adult") ?> <?php echo lang("Localize.fair") ?>"  min="1" required>
  </div>

<?php if ($subtrip->show == 1) : ?>
	<div class="col-6 mt-3">
  <label for="show" class="form-label"><?php echo lang("show_in_home_page") ?></label>
  <div class="form-check mt-1">
  <input class="form-check-input" type="checkbox" value="1" id="show" name="show" checked>
  <label class="form-check-label" for="show">
  <?php echo lang("show_in_home_page") ?>
  </label>
</div>
</div>

<div class="col-12 mt-3">
<label for="picsection" class="form-label"><?php echo lang("trip") ?> <?php echo lang("image") ?></label>
 <div id="picsection">
   <div id="editsubtripimage">
        
   </div>

 </div>
 
 
</div>
<?php else : ?>
<div class="col-3 mt-3 ">
  <label for="show" class="form-label"><?php echo lang("show_in_home_page") ?></label>
  <div class="form-check mt-1">
  <input class="form-check-input" type="checkbox" value="1" id="show" name="show" >
  <label class="form-check-label" for="show">
  <?php echo lang("show_in_home_page") ?>
  </label>
</div>
</div>

<div class="col-12 mt-3">
<label for="picsection" class="form-label"><?php echo lang("trip") ?> <?php echo lang("image") ?></label>
 <div id="picsection">
   <div id="editsubtripimage">
        
   </div>

 </div>
</div>

<?php endif ?>



<label for="status" class="form-labe mt-3"><?php echo lang("trip") ?> <?php echo lang("status") ?></label>

<?php if ($subtrip->status == 1) : ?>
	<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="active" value="1" checked>
  <label class="form-check-label" for="active">
  <?php echo lang("active") ?>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="0" id="disable" >
  <label class="form-check-label" for="disable">
  <?php echo lang("disable") ?>
  </label>
</div>
<?php else : ?>
	<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="active" value="1" >
  <label class="form-check-label" for="active">
  <?php echo lang("active") ?>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="0" id="disable" checked>
  <label class="form-check-label" for="disable">
  <?php echo lang("disable") ?>
  </label>
</div>
<?php endif ?>



<div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>




<input type="hidden"  name ="id" value="<?=esc($subtrip->id)?>" >
<input type="hidden" id="imagepath" name ="imagepath" value="<?php echo esc($subtrip->imglocation)?>">
<input type="hidden" id="trip_id" name="trip_id"  value="<?php echo esc($subtrip->trip_id)?>">
<input type="hidden"  name ="baseurl" id="baseurl" value="<?php echo base_url()?>">
<br>
<br>
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>



					</div>

				</div>

				<div class="col-3"></div>

			</div>




		</form>

</div>
</div>
<?php echo $this->endSection() ?>
