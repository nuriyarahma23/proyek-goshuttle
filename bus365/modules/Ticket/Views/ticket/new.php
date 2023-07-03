<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>
	<?php echo $this->include('common/message') ?>

	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('findtrip-ticket'))?>" id="findtrip" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

					
					<?php echo $this->include($filterpath.'\ticket/filter/find') ?>


				

					<div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                    </div>

			</form>
	  </div>
	</div>

	<?php echo $this->endSection() ?>