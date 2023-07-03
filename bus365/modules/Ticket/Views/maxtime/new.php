<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>
	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-maxtime'))?>" id="MaxtimeForm" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

					<div class="col-4"></div>
				<div class="col-4">
				<label for="maxtime" class=""> <?php echo lang("Localize.max_time_cancel") ?> </label>	
					<input type="text" id="maxtime" name ="maxtime" value="<?php echo esc(old('maxtime'))  ?>" class="form-control text-capitalize"  placeholder="<?php echo lang("Localize.max_time_cancel") ?>">
				</div>
		
				
							  <div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>

					<div class="col-12 text-center">
                         <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                     </div>
			
				<div class="col-4"></div>
			</form>
		</div>
		</div>


	<?php echo $this->endSection() ?>