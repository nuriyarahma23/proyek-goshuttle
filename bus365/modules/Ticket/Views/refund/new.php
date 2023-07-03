<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

    <div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-refund'))?>" id="refundfrom" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    
                                    <div class="col-8">

                                        <div class="row">

                                            <div class="col-12 mt-2">
                                                <label for="booking_id"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?></label>
                                                <input type="text" name="booking_id" id="booking_id" class="form-control" value="<?php echo $track_table->booking_id ; ?>" readonly>
                                            </div>

                                            <div class="col-12 mt-2">
                                                <label for="refund_fee"><?php echo lang("Localize.refund") ?> <?php echo lang("Localize.fee") ?> </label>
                                                <input type="text" name="refund_fee" id="refund_fee" class="form-control" value="<?php echo old('refund_fee') ?>" placeholder="<?php echo lang("Localize.refund") ?> <?php echo lang("Localize.fee") ?>">
                                            </div>

                                            <div class="col-12 mt-2" id="payment_method">
                                                <label for="pay_method"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.type") ?></label>
                                                    <select class="form-select" name="pay_method" id="pay_method" required>

                                                        <?php foreach ($paymethod as $paymethodvalue): ?>

                                                            <option value="<?php echo $paymethodvalue->id ?>"><?php echo $paymethodvalue->name ?></option>

                                                        <?php endforeach?>

                                                    </select>
                                            </div>

                                            <div class="col-12 mt-2" id="detailpay">
                                                <label for="detail"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?></label>
                                                <input type="text" name="detail"  class="form-control" value="<?php echo old('detail') ?>" placeholder="<?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?>" aria-label="Payment Detail">
                                            </div>  
                                            
                                                                  

                                        </div>

                                        <br>
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

                                    <input type="hidden" name="track_table_id"  id="track_table_id" value="<?php echo  $track_table->id; ?>">
                                        <input type="hidden" name="type"  id="type" value="<?php echo $type; ?>">

                                    </div>

                                </div>


			</form>
        </div>
    </div>

	<?php echo $this->endSection() ?>