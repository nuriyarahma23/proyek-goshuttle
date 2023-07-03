<div class="col-4 mt-2 mb-2">
<label for="trip_id" class="form-label"><?php echo lang("Localize.main") ?> <?php echo lang("Localize.trip") ?></label>
<select id="trip_id" name="trip_id" class="testselect1" required>
      <option value="" >None</option>
      <option value="all" >ALL</option>
			<?php foreach ($trip as $tripvalue): ?>

				<option value="<?php echo $tripvalue->tripid ?>">
          <?php echo $tripvalue->pickup_location_name ?> - <?php echo $tripvalue->drop_location_name  ?>
          (<?php echo $tripvalue->start_time ?> - <?php echo $tripvalue->end_time ?>)
       </option>

			<?php endforeach?>
    </select>
  </div>




<div class="col-4 mt-2 mb-2">
  <label for="subtrip_id" class="form-label"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.trip") ?></label>
  <select id="subtrip_id" name="subtrip_id" class="form-select" required >
        
  </select>
</div>

