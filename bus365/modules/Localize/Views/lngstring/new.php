<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

	<?php echo $this->include('common/message') ?>

	<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-langstring'))?>" id="lagsrtform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

					
				<div class="col-6">
				<label for="name" class=""><?php echo lang("Localize.language") ?> <?php echo lang("Localize.string") ?> <?php echo lang("Localize.name") ?> </label>	
					<input type="text" id="name" name ="name" value="<?php echo esc(old('name'))  ?>" class="form-control text-capitalize"  placeholder="Language String Name">
				</div>

							<div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                            </div>

				<div class="col-12">
					<button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
				</div>
			

			</form>

			<br><br>
			<div class="table-responsive">
				<table class="table display table-bordered table-striped table-hover basic" id="languageString">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col"><?php echo lang("Localize.name") ?></th>
					
					
					</tr>
				</thead>
				<tbody>
					
				<?php foreach ($languagestr as $kye =>  $value) : ?>

					<tr>
						<th scope="row"><?php echo $kye+1 ;?></th>
						<td><?php echo $value->name; ?></td>
					
					
					</tr>
					

				<?php endforeach ?>
				
				
				</tbody>
				</table>
			</div>

	</div>
</div>
	<?php echo $this->endSection() ?>