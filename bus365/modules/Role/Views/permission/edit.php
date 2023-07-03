<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('update-permission', $getrole))?>" id="updatepermissionform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php echo $this->include('common/securityupdate') ?>


				<div class="col-12">
                        <label for="role_id"><?php echo lang("Localize.role") ?> <?php echo lang("Localize.type") ?> </label>

                            <select class="form-select" name="role_id" id="role_id" required>

							<option value="">None</option>
							<?php if (!empty($role)) : ?>
								<?php foreach ($role as $rolevalue): ?>

                                    <?php if ($rolevalue->id == $getrole) : ?>
                                        <option value="<?php echo $rolevalue->id ?>" selected><?php echo $rolevalue->name ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $rolevalue->id ?>"><?php echo $rolevalue->name  ?></option>
                                    <?php endif ?>

									

								<?php endforeach?>
							<?php endif ?>
                        
                            </select>

                </div>

			
                <div class="col-12">
					<?php foreach ($permissionmodule as $value) : ?>
						<h6><?= $value->module_name ?></h6> <br>
						
						<?php echo view_cell('\App\Libraries\Permission::editMenuPermissionTable','menuid='.$value->id.',roleid='.$getrole.'') ?>
					<?php endforeach ?>
			    </div>                          
				
		
				
							<div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>

							  <br>
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>
			

			</form>
		</div>
	</div>

	<?php echo $this->endSection() ?>