<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

<div class="card mb-4">
    <div class="card-body">

<form action="<?php echo base_url(route_to('create-vehicle'))?>" id="vehical" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
          <?php echo $this->include('common/security') ?>


  <div class="col-3">
  <label for="reg_no" class="form-label"><?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?> : </label>
    <input type="text" placeholder="Reg No"  name ="reg_no" value="<?php echo esc(old('reg_no'))  ?>" class="form-control"  >
	</div>


  <div class="col-3">
  <label for="engine_no" class="form-label"><?php echo lang("Localize.eng") ?> <?php echo lang("Localize.no") ?> :</label>
    <input type="text"  name ="engine_no" id="engine_no" placeholder="Eng No" value="<?php echo esc(old('engine_no')) ?>" class="form-control">
	</div>


  <div class="col-3">
  <label for="model_no" class="form-label"><?php echo lang("Localize.model") ?> <?php echo lang("Localize.no") ?> :</label>
    <input type="text"  name ="model_no" id="model_no" placeholder="Model No" value="<?php echo esc(old('model_no'))  ?>" class="form-control">
	</div>



  <div class="col-3">
  <label for="fleet_id" class="form-label"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> :</label>
  	<select id="fleet_id" name="fleet_id" required="required"  class="form-control">
                            <option value="" disabled selected>Fleet Type</option>
                            <?php foreach ($fleet as $value) : ?>
                              <option value="<?= $value->id ?>"><?= $value->type ?></option>
                            <?php endforeach ?>
      </select> 
   </div>

 
   <div class="col-3">
  <label for="chasis_no" class="form-label"><?php echo lang("Localize.chassis") ?> <?php echo lang("Localize.no") ?> :</label>
     <input type="text"  name ="chasis_no" id="chasis_no" placeholder="Chasis No" value="<?php echo esc(old('chasis_no'))  ?>" class="form-control">
	</div>

  <div class="col-3">
    <label for="woner" class="form-label"><?php echo lang("Localize.woner") ?> :</label>
    <input type="text"  name ="woner" id="woner" placeholder="Woner" value="<?php echo esc(old('woner'))  ?>" class="form-control">
	</div>


  <div class="col-3">
    <label for="woner_mobile" class="form-label"><?php echo lang("Localize.woner") ?> <?php echo lang("Localize.mobile") ?> :</label>
  <input type="text"  name ="woner_mobile" id="woner_mobile" value="<?php echo esc(old('woner_mobile'))  ?>" placeholder="Woner Mobile" class="form-control"  >
	</div>


  <div class="col-3">
    <label for="company" class="form-label"><?php echo lang("Localize.company") ?> :</label>
  <input type="text"  name ="company" id="company" value="<?php echo esc(old('company'))  ?>" placeholder="Company" class="form-control"  >
	</div>

<label class="form-group" for="">
<?php echo lang("Localize.status") ?>
  </label>
<div class="form-check">
	<input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
	<label class="form-check-label" for="exampleRadios1">
  <?php echo lang("Localize.active") ?> 
	</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="status" value="0">
  <label class="form-check-label" for="exampleRadios2">
  <?php echo lang("Localize.disable") ?> 
  </label>
</div>

<input type="hidden"  name ="assign" id="assign" value="0" class="form-control">




<div class="col-12">
  <label for="buspic" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.image") ?> </label>
  	<div id="buspic">

    </div>
 
</div>

                              <div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>

 


</form>

</div>

</div>

<?php echo $this->endSection() ?>

