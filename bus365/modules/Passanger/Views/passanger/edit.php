<?php echo $this->extend('template/admin/main') ?>
<?php echo $this->section('content') ?>

<div class="card mb-4">
      <div class="card-body">



<form action="<?php echo base_url(route_to('update-passanger',$passanger->id))?>" id="passangerfrom" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
		
					<?php echo $this->include('common/securityupdate') ?>

          <div class="row">

              <div class="col-2">
              </div>

              <div class="col-8">

                <div class="row">

                    <div class="col-3 mt-3 ">
                        <label for="first_name"><?php echo lang("Localize.first_name") ?></label>
                        <input type="text" name="first_name" class="form-control" value="<?php echo old('first_name') ?? $passanger->first_name ?>" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First Name" required>
                    </div>

                    <div class="col-3 mt-3 ">
                      <label for="last_name"><?php echo lang("Localize.last_name") ?></label>
                        <input type="text" name="last_name"  class="form-control" value="<?php echo old('last_name') ?? $passanger->last_name  ?>" placeholder="<?php echo lang("Localize.last_name") ?>" aria-label="Last Name" required>
                    </div>

                    <div class="col-3 mt-3 ">
                        <label for="id_type"><?php echo lang("Localize.id_type") ?></label>
                        <input type="text" name="id_type"  class="form-control" value="<?php echo old('id_type') ?? $passanger->id_type ?>" placeholder="<?php echo lang("Localize.nid_passport") ?>" aria-label="Passport/Nid">
                    </div>

                    <div class="col-3 mt-3 ">
                        <label for="id_number"><?php echo lang("Localize.nid_passport_number") ?></label>
                        <input type="text" name="id_number"  class="form-control" value="<?php echo old('id_number') ?? $passanger->id_number ?>" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
                    </div>



                    <div class="col-3 mt-3 ">
                        <label for="country_id"><?php echo lang("Localize.country_name") ?></label>
                          <select class="form-select" name="country_id" id="country_id" required>
                          
                            <?php foreach ($country as $countryvalue): ?>	

                              <?php if ($countryvalue->id == $passanger->country_id) : ?>

                                <option value="<?php echo $countryvalue->id ?>" selected><?php echo $countryvalue->name ?></option>

                              <?php else :?>
                                <option value="<?php echo $countryvalue->id ?>"><?php echo $countryvalue->name ?></option>

                              <?php endif ?>

                            <?php endforeach?>


                          </select>

                    </div>


                    <div class="col-3 mt-3 ">
                        <label for="city"><?php echo lang("Localize.city_name") ?></label>
                        <input type="text" name="city"  class="form-control" value="<?php echo old('city') ?? $passanger->city ?>" placeholder="<?php echo lang("Localize.city_name") ?>" aria-label="City Name">
                    </div>

                    <div class="col-3 mt-3 ">
                        <label for="zip_code"><?php echo lang("Localize.zip_code") ?></label>
                        <input type="number" name="zip_code" min="1"  class="form-control" value="<?php echo old('zip_code') ?? $passanger->zip_code ?>" placeholder="<?php echo lang("Localize.zip_code") ?>" aria-label="Zip Code">
                    </div>


                    <div class="col-12 mt-3 ">
                        <label for="address"><?php echo lang("Localize.address") ?></label>
                        <textarea class="form-control" name="address"  id="address" rows="3" required><?php echo old('address') ?? $passanger->address ?></textarea>
                    </div>



                </div>

                      <div class="text-danger mt-2">
                          <?php if (isset($validation)) : ?>
                          <?= $validation->listErrors(); ?>  
                          <?php endif ?>
                      </div> 
                      
                      <br>
              </div>

             
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div> 

              <div class="col-2">

              </div>

              <input type="hidden" name="user_id" value="<?php echo  $passanger->user_id ?>">

          </div>


<br>

  
</form>


</div>
</div>


<?php echo $this->endSection() ?>
