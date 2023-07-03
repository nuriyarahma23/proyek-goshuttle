<?php $x = 1; ?>					
		  <label for="" class="form-label"><?php echo lang("Localize.boarding") ?> <?php echo lang("Localize.point") ?> </label>
		  <?php foreach ($arrival as $arrivalvalue): ?>

				<?php if ($x == 1) : ?>
					<div class="row" id="boarding">
					<div class="col-3 ">
					<label for="picktime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> *</label>
						<input type="text" id="picktime" name="picktime[]" class="form-control" value="<?php echo esc(old('time')) ?? $arrivalvalue->time  ?>" placeholder="Select Time">
					</div>

					<div class="col-3 ">
						<label for="stand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> *</label>
						<select  name="picstand[]" class="form-control testselect1" required>
								<option value="" >None</option>
								<?php foreach ($stand as $standvalue): ?>

									<?php if ($arrivalvalue->stand_id == $standvalue->id) : ?>
										<option value="<?php echo $standvalue->id ?>" selected><?php echo $standvalue->name ?></option>
									<?php else : ?>
										<option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>
									<?php endif ?>

								<?php endforeach?>
							</select>
					 </div>

					 <div class="col-3 ">
					<label for="detail" class="form-label"><?php echo lang("Localize.detail") ?></label>
						<input type="text" id="detail" name="detail[]" class="form-control" value="<?php echo old('detail') ?? $arrivalvalue->detail ?>" placeholder="<?php echo lang("Localize.detail") ?>">
					</div>				
					
					<input type="hidden"  name="type[]"  value="<?php echo old('type') ?? $arrivalvalue->type ?>">
					<div class="col-3 mt-4">
					
					<a  id="boardingadd" class="btn btn-success mt-1 text-white" onclick="addfieldboard()">+</a>
					</div>


					<div class="row" id="boardinadd">

      				</div>

					</div>
				<?php else : ?>
				<div class="row" id="boardinadd">
				  <div class="row mt-3"> 
					<div class="col-3 ">
					<label for="picktime" class="form-label"><?php echo lang("Localize.select") ?> <?php echo lang("Localize.time") ?> *</label>
						<input type="text" id="picktime" name="picktime[]" class="form-control element" onclick="timepic()" value="<?php echo esc(old('time')) ?? $arrivalvalue->time  ?>" placeholder="Select Time">
					</div>


					<div class="col-3 ">
						<label for="stand" class="form-label"><?php echo lang("Localize.bus") ?> <?php echo lang("Localize.stand") ?> * </label>
						<select  name="picstand[]" class="form-control testselect1" required>
								<option value="" >None</option>
								<?php foreach ($stand as $standvalue): ?>

									<?php if ($arrivalvalue->stand_id == $standvalue->id) : ?>
										<option value="<?php echo $standvalue->id ?>" selected><?php echo $standvalue->name ?></option>
									<?php else : ?>
										<option value="<?php echo $standvalue->id ?>"><?php echo $standvalue->name ?></option>
									<?php endif ?>

								<?php endforeach?>
							</select>
					 </div>

					 <div class="col-3 ">
					<label for="detail" class="form-label"><?php echo lang("Localize.detail") ?></label>
						<input type="text" id="detail" name="detail[]" class="form-control" value="<?php echo old('detail') ?? $arrivalvalue->detail ?>" placeholder="<?php echo lang("Localize.detail") ?>">
					</div>	

					 <input type="hidden"  name="type[]"  value="<?php echo old('type') ?? $arrivalvalue->type ?>">
					<div class="col-3 mt-4">
					
					<a id="remove" class="btn btn-danger mt-1 text-white" onclick="removerow()">X</a>
					</div>

					</div>
					</div>
				<?php endif ?>
				<?php $x= $x+1; ?>
			<?php endforeach?>


