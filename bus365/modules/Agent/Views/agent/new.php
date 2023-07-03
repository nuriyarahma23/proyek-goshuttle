<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

  <?php echo $this->include('common/message') ?>

  <div class="card mb-4">
      <div class="card-body">

            <form action="<?php echo base_url(route_to('create-agent')) ?>" id="locationform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php echo $this->include('common/security') ?>

                        <div class="row">

                          <div class="col-2">

                          </div>

                          <div class="col-8">
                              <div class="row">
                                  <div class="col-3 mt-3">
                                      <label for="first_name"><?php echo lang("Localize.first_name") ?></label>
                                      <input type="text" name="first_name" class="form-control" value="<?php echo old('first_name')?>" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First Name" required>
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="last_name"><?php echo lang("Localize.last_name") ?></label>
                                      <input type="text" name="last_name"  class="form-control" value="<?php echo old('last_name')?>" placeholder="<?php echo lang("Localize.last_name") ?>" aria-label="Last Name" required>
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="location_id"><?php echo lang("Localize.location") ?></label>
                                        <select class="form-select" name="location_id" id="location_id" required>
                                            <option value="">None</option>
                                              <?php foreach ($location as $locationvalue): ?>
                                                <option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>
                                              <?php endforeach?>
                                        </select>
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="phone"><?php echo lang("Localize.mobile") ?> </label>
                                      <input type="number" name="login_mobile"  class="form-control" value="<?php echo old('login_mobile')?>" placeholder="<?php echo lang("Localize.mobile") ?>" aria-label="Mobile" required>
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="email"><?php echo lang("Localize.email") ?> </label>
                                      <input type="email" name="login_email"  class="form-control" value="<?php echo old('login_email')?>" placeholder="<?php echo lang("Localize.email") ?>" aria-label="Email" required>
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="blood"> <?php echo lang("Localize.blood") ?> </label>
                                      <input type="text" name="blood"  class="form-control" value="<?php echo old('blood')?>" placeholder="<?php echo lang("Localize.blood") ?>" aria-label="Blood">
                                  </div>



                                  <div class="col-3 mt-3">
                                      <label for="id_type"> <?php echo lang("Localize.id_type") ?></label>
                                      <input type="text" name="id_type"  class="form-control" value="<?php echo old('id_type')?>" placeholder="<?php echo lang("Localize.id_type") ?>" aria-label="Id Type">
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="id_number"> <?php echo lang("Localize.nid_passport_number") ?></label>
                                      <input type="text" name="id_number"  class="form-control" value="<?php echo old('id_number')?>" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="commission"> <?php echo lang("Localize.commission") ?> %</label>
                                      <input type="number" name="commission"  class="form-control" step=any value="<?php echo old('commission')?>" placeholder="<?php echo lang("Localize.commission") ?> %" aria-label="commission">
                                  </div>


                                  <div class="col-3 mt-3">
                                      <label for="country_id"><?php echo lang("Localize.country_name") ?></label>
                                        <select class="form-select" name="country_id" id="country_id" required>
                                          <option value="">None</option>
                                            <?php foreach ($country as $countryvalue): ?>
                                              <option value="<?php echo $countryvalue->id ?>"><?php echo $countryvalue->name ?></option>
                                            <?php endforeach?>
                                        </select>
                                  </div>

                                  <div class="col-3 mt-3">
                                      <label for="city"><?php echo lang("Localize.city_name") ?></label>
                                      <input type="text" name="city"  class="form-control" value="<?php echo old('city')?>" placeholder="City Name" aria-label="City Name">
                                  </div>


                                  <div class="col-3 mt-3">
                                      <label for="zip"><?php echo lang("Localize.zip_code") ?></label>
                                      <input type="number" name="zip"  class="form-control" value="<?php echo old('zip')?>" placeholder="Zip Code" aria-label="Zip Code">
                                  </div>             


                                  <div class="col-12 mt-3">
                                      <label for="address" class="form-label"> <?php echo lang("Localize.address") ?> </label>
                                      <textarea class="form-control" name="address"  id="address" rows="3" required><?php echo old('address')?></textarea>
                                  </div>  
                                  
                                  

                                  <div class="col-4 mt-3">
                                    <label for="document_pic" class="form-label"> <?php echo lang("Localize.nid_passport_image") ?></label>
                                      <div id="document">

                                      </div>
                                  </div>

                                  <div class="col-4 mt-3">
                                    <label for="profile_pic" class="form-label"> <?php echo lang("Localize.profile_image") ?> </label>
                                      <div id="profile">

                                      </div>
                                  </div>

                              </div>

                              <div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>

                          </div>


                            <br>
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>


                            <div class="col-2">

                            </div>    
                            

                        </div>

            </form>

      </div>
  </div>
<?php echo $this->endSection() ?>