<?php $y = 1; ?>					
			<label for="" class="form-label"><?php echo lang("Localize.dropping") ?> <?php echo lang("Localize.point") ?> *</label>
		  <?php foreach ($departure as $departurevalue): ?>

				<?php if ($y == 1) : ?>
					<div class="row" id="droping">
					
					<div class="col-3 ">
					<label for="droptime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> *</label>
						<input type="text" id="droptime" name="droptime[]" class="form-control" value="<?php echo esc(old('time')) ?? $departurevalue->time  ?>" placeholder="Select Time">
					</div>

					<div class="col-3 ">
					<label for="dropstand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> *</label>
      				<select  name="dropstand[]" class="form-control testselect1" required>
								<option value="" >None</option>
								<?php foreach ($stand as $standvalue): ?>

									<?php if ($departurevalue->stand_id == $standvalue->id) : ?>
										<option value="<?php echo $standvalue->id ?>" selected><?php echo $standvalue->name ?></option>
									<?php else : ?>
										<option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>
									<?php endif ?>

								<?php endforeach?>
							</select>
					 </div>

							

					<div class="col-3 ">
					<label for="dropdetail" class="form-label"><?php echo lang("Localize.detail") ?></label>
						<input type="text" id="detail" name="dropdetail[]" class="form-control" value="<?php echo old('detail') ?? $departurevalue->detail ?>" placeholder="<?php echo lang("Localize.detail") ?>">
					</div>

					<input type="hidden"  name="droptype[]"  value="<?php echo old('droptype') ?? $departurevalue->type ?>">

					

					<div class="col-3 mt-4">
      
					<a  id="boardingadd" class="btn btn-success mt-1 text-white" onclick="addfielddrop()">+</a>
					</div>

					<div class="row" id="droppingadd">

      				</div>

					</div>
				<?php else : ?>
				<div class="row" id="droppingadd">
				  <div class="row mt-3"> 
					<div class="col-3 ">
					<label for="droptime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> *</label>
						<input type="text" id="droptime" name="droptime[]" class="form-control element" onclick="timepic()" value="<?php echo esc(old('time')) ?? $departurevalue->time  ?>" placeholder="Select Time">
					</div>


					<div class="col-3 ">
						<label for="stand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> *</label>
						<select  name="dropstand[]" class="form-control testselect1" required>
								<option value="" >None</option>
								<?php foreach ($stand as $standvalue): ?>

									<?php if ($departurevalue->stand_id == $standvalue->id) : ?>
										<option value="<?php echo $standvalue->id ?>" selected><?php echo $standvalue->name ?></option>
									<?php else : ?>
										<option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>
									<?php endif ?>

								<?php endforeach?>
							</select>
					 </div>

					 <div class="col-3 ">
					<label for="detail" class="form-label"><?php echo lang("Localize.detail") ?> </label>
						<input type="text" id="detail" name="dropdetail[]" class="form-control" value="<?php echo old('detail') ?? $departurevalue->detail ?>" placeholder="Detail">
					</div>	

					 <input type="hidden"  name="droptype[]"  value="<?php echo old('droptype') ?? $departurevalue->type ?>">
					<div class="col-3 mt-4">
					
					<a id="removeedit" class="btn btn-danger mt-1 text-white" onclick="removerowedit()">X</a>
					</div>

					</div>
					</div>
				<?php endif ?>
				<?php $y= $y+1; ?>
			<?php endforeach?>

