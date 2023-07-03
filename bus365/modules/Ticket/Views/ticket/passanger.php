
<div class="col-4 mt-4">
  <label for="login_mobile"><?php echo lang("Localize.mobile") ?> *</label>
    <input type="number" name="login_mobile" id="login_mobile"  class="form-control" value="<?php echo old('login_mobile')?>" placeholder="<?php echo lang("Localize.mobile") ?>" aria-label="Mobile" required min="1">
  </div>

  <div class="col-4 mt-4">
  <label for="login_email"><?php echo lang("Localize.email") ?> *</label>
    <input type="email" name="login_email" id="login_email" class="form-control" value="<?php echo old('login_email')?>" placeholder="<?php echo lang("Localize.email") ?>" aria-label="Email" required>
  </div>


 <div class="col-4 mt-4">
   <label for="first_name"><?php echo lang("Localize.first_name") ?> *</label>
    <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo old('first_name')?>" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First name" required>
  </div>
  <div class="col-4 mt-2 ">
  <label for="last_name"><?php echo lang("Localize.last_name") ?> *</label>
    <input type="text" name="last_name"  class="form-control" id="last_name" value="<?php echo old('last_name')?>" placeholder="Last name" aria-label="Last name" required>
  </div>


  

  <div class="col-4 mt-2">
  <label for="id_type"><?php echo lang("Localize.id_type") ?> *</label>
    <input type="text" name="id_type"  class="form-control" id="id_type" value="<?php echo old('id_type')?>" placeholder="<?php echo lang("Localize.nid_passport") ?>" aria-label="Passport/Nid">
  </div>

  <div class="col-4 mt-2">
  <label for="id_number"><?php echo lang("Localize.nid_passport_number") ?> *</label>
    <input type="text" name="id_number"  class="form-control" id="id_number" value="<?php echo old('id_number')?>" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
  </div>



  <div class="col-4 mt-2">
  <label for="country_id"><?php echo lang("Localize.country_name") ?> *</label>
	<select class="form-select" name="country_id" id="country_id" required>
	<option value="">None</option>
	<?php foreach ($country as $countryvalue): ?>

		<option value="<?php echo $countryvalue->id ?>"><?php echo $countryvalue->name ?></option>

	<?php endforeach?>


	</select>

</div>

<div class="col-4 mt-2">
<label for="city mt-2"><?php echo lang("Localize.city_name") ?> </label>
    <input type="text" name="city"  class="form-control" id="city" value="<?php echo old('city')?>" placeholder="City Name" aria-label="City Name">
</div>

<div class="col-4 mt-2">
<label for="zip_code"><?php echo lang("Localize.zip_code") ?> </label>
    <input type="text" name="zip_code"  class="form-control" id="zip_code"  value="<?php echo old('zip_code')?>" placeholder="Zip Code" aria-label="Zip Code">
</div>

<div class="col-12 mt-2">
<label for="address"><?php echo lang("Localize.address") ?></label>

  <textarea class="form-control" name="address"  id="address" rows="3" required><?php echo old('address')?></textarea>
</div>


