<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('journeylist-findtrip-ticket'))?>" id="findtrip" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

					
					<?php echo $this->include($filterpath.'\ticket/filter/journeylistfind') ?>


				

				<?php if (isset($validation)) : ?>
					<?= $validation->listErrors(); ?>  
					<?php endif ?>

			</form>
		</div>
	</div>

	<?php echo $this->endSection() ?>