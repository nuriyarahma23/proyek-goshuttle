<?php echo $this->extend('template/admin/main') ?>
	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>


	<div class="row">

		<div class="col-6 mt-3">

		<div class="card mb-4">

			<div class="card-body">

				<div class="row">

					<div class="col-2"></div>

					<div class="col-8">
						
								<form action="<?php echo base_url(route_to('changelogininfo-user', $user->id)) ?>" id="taxedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
										<?php echo $this->include('common/securityupdate') ?>

										<div class="col-12 ">
											<label for="login_email"><?php echo lang("Localize.email") ?></label>
											<input type="text"  name ="login_email" value="<?php echo esc(old('login_email') ?? $user->login_email)?>" class="form-control"  > 
										</div>	


										<div class="col-12">
											<label for="login_mobile" class=""><?php echo lang("Localize.mobile") ?></label>	
											<input type="number" id="login_mobile" name ="login_mobile" value="<?php echo esc(old('login_mobile') ?? $user->login_mobile)  ?>" class="form-control ">
										</div>


										<div class="col-12">
											<label for="password" class=""><?php echo lang("Localize.password") ?></label>	
											<input type="password" id="password" name ="password"  class="form-control text-uppercase"  placeholder="********" required>
										</div>


										<div class="text-danger">
												<?php if (isset($validation)): ?>
													<?php  
													if ($validation->hasError('login_email')) {
														echo $validation->getError('login_email');
													}
													if ($validation->hasError('login_mobile')) {
														echo $validation->getError('login_mobile');
													}
													if ($validation->hasError('password')) {
														echo $validation->getError('password');
													}
													;?>
												<?php endif?>
											</div>


										<br>
										<div class="col-12 text-center">
										<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
										</div>			


								</form>
					</div>

					<div class="col-2"></div>
				</div>
			</div>
		</div>


		</div>

		<div class="col-6 mt-3">

			<div class="card mb-4">

				<div class="card-body">

					<div class="row">

						<div class="col-2"></div>

						<div class="col-8">

							
									<form action="<?php echo base_url(route_to('changepassword-user', $user->id)) ?>" id="taxedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
											<?php echo $this->include('common/securityupdate') ?>

											<div class="col-12 ">
												<label for="password"><?php echo lang("Localize.newpassword") ?></label>
												<input type="password"  name ="password"  class="form-control" placeholder="********" required> 
											</div>	


											<div class="col-12">
												<label for="repassword" class=""><?php echo lang("Localize.repassword") ?></label>	
												<input type="password" id="repassword" name ="repassword"  class="form-control" placeholder="********" required>
											</div>


											<div class="col-12">
												<label for="oldpassword" class=""><?php echo lang("Localize.oldpassword") ?></label>	
												<input type="password" id="oldpassword" name ="oldpassword"  class="form-control text-uppercase"  placeholder="********" required>
											</div>


											<div class="text-danger">
												<?php if (isset($validation)): ?>
													<?php  
													if ($validation->hasError('password')) {
														echo $validation->getError('password');
													}
													if ($validation->hasError('repassword')) {
														echo $validation->getError('repassword');
													}
													if ($validation->hasError('oldpassword')) {
														echo $validation->getError('oldpassword');
													}
													;?>
												<?php endif?>
											</div>


											<br>
											<div class="col-12 text-center">
											<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
											</div>			


									</form>

								

						</div>
						
						<div class="col-2"></div>

					</div>

				</div>
			</div>


		</div>

	</div>



	<div class="row">

		<div class="col-4">

			<div class="card mb-4">

				<div class="card-body">

					<div class="row">

						<div class="col-2"></div>

						<div class="col-8">

							<form action="<?php echo base_url(route_to('profilepicupload-user', $user_detail->id)) ?>" id="taxedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
										  <?php echo $this->include('common/securityupdate') ?>

										  <div class="col-12 mt-3 text-center">
												<label for="document" class="form-label"><?php echo lang("Localize.profile_image") ?></label>
												<div id="adminprofileedit">

												</div>
												<input type="hidden"  id ="adminprofile" name="adminprofile" value="<?php echo $user_detail->image?>" >	
												<input type="hidden"  id ="baseurl" name="baseurl" value="<?php echo base_url();?>" >
												<span class=""> max 1920x1080</span>		
										  </div>


												<br>
												<div class="col-12 text-center">
													<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
												</div> 



							</form>

						</div>


						<div class="col-2"></div>

					</div>

				</div>

			</div>

		</div>
		
		<div class="col-8">

			<div class="card mb-4">

				<div class="card-body">

					<div class="row">

						<div class="col-2"></div>

						<div class="col-8">

							<form action="<?php echo base_url(route_to('changeprofileinfo-user', $user_detail->id)) ?>" id="taxedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
											<?php echo $this->include('common/securityupdate') ?>

												<div class="col-6 mt-3 ">
													<label for="first_name"><?php echo lang("Localize.first_name") ?></label>
													<input type="text" name="first_name" class="form-control" value="<?php echo old('first_name') ?? $user_detail->first_name ?>" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First Name" required>
												</div>

												<div class="col-6 mt-3 ">
													<label	label for="last_name"><?php echo lang("Localize.last_name") ?></label>
													<input type="text" name="last_name"  class="form-control" value="<?php echo old('last_name') ?? $user_detail->last_name  ?>" placeholder="<?php echo lang("Localize.last_name") ?>" aria-label="Last Name" required>
												</div>


												<div class="col-6 mt-3 ">
													<label for="id_type"><?php echo lang("Localize.id_type") ?></label>
													<input type="text" name="id_type"  class="form-control" value="<?php echo old('id_type') ?? $user_detail->id_type ?>" placeholder="<?php echo lang("Localize.nid_passport") ?>" aria-label="Passport/Nid">
												</div>

												<div class="col-6 mt-3 ">
													<label for="id_number"><?php echo lang("Localize.nid_passport_number") ?></label>
													<input type="text" name="id_number"  class="form-control" value="<?php echo old('id_number') ?? $user_detail->id_number ?>" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
												</div>

												<div class="col-6 mt-3 ">
													<label for="country_id"><?php echo lang("Localize.country_name") ?></label>
														<select class="form-select" name="country_id" id="country_id" required>
															<?php foreach ($country as $countryvalue): ?>	
																<?php if ($countryvalue->id == $user_detail->country_id) : ?>
																	<option value="<?php echo $countryvalue->id ?>" selected><?php echo $countryvalue->name ?></option>
																<?php else :?>
																	<option value="<?php echo $countryvalue->id ?>"><?php echo $countryvalue->name ?></option>
																<?php endif ?>
															<?php endforeach?>
														</select>
												</div>



												<div class="col-6 mt-3 ">
													<label for="city"><?php echo lang("Localize.city_name") ?></label>
													<input type="text" name="city"  class="form-control" value="<?php echo old('city') ?? $user_detail->city ?>" placeholder="<?php echo lang("Localize.city_name") ?>" aria-label="City Name">
												</div>

												<div class="col-6 mt-3 ">
													<label for="zip_code"><?php echo lang("Localize.zip_code") ?></label>
													<input type="text" name="zip_code"  class="form-control" value="<?php echo old('zip_code') ?? $user_detail->zip_code ?>" placeholder="<?php echo lang("Localize.zip_code") ?>" aria-label="Zip Code">
												</div>


												<div class="col-12 mt-3 ">
													<label for="address"><?php echo lang("Localize.address") ?></label>
													<textarea class="form-control" name="address"  id="address" rows="3" required><?php echo old('address') ?? $user_detail->address ?></textarea>
												</div>





												<div class="text-danger">
													<?php if (isset($validation)): ?>
														<?php  
														if ($validation->hasError('first_name')) {
															echo $validation->getError('first_name');
														}
														if ($validation->hasError('last_name')) {
															echo $validation->getError('last_name');
														}
														if ($validation->hasError('id_type')) {
															echo $validation->getError('id_type');
														}
														if ($validation->hasError('id_number')) {
															echo $validation->getError('id_number');
														}
														if ($validation->hasError('country_id')) {
															echo $validation->getError('country_id');
														}
														if ($validation->hasError('city')) {
															echo $validation->getError('city');
														}
														if ($validation->hasError('zip_code')) {
															echo $validation->getError('zip_code');
														}
														if ($validation->hasError('address')) {
															echo $validation->getError('address');
														}
														;?>
													<?php endif?>
												</div>



												<br>
												<div class="col-12 text-center">
													<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
												</div> 



							</form>


						</div>


						<div class="col-2"></div>

					</div>

				</div>

			</div>

		</div>

	</div>

	

<?php echo $this->endSection() ?>