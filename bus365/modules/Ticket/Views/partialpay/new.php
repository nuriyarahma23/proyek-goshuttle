<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

    
  <div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-partialpaid'))?>" id="MaxtimeForm" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

					
						<div class="col-2" id="payment_method">
                        <label for="pay_method"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.type") ?></label>
                            <select class="form-select" name="pay_method" id="pay_method" required>

                            <?php foreach ($paymethod as $paymethodvalue): ?>

                                <option value="<?php echo $paymethodvalue->id ?>"><?php echo $paymethodvalue->name ?></option>

                            <?php endforeach?>

                            </select>
                        </div>
                        

                        <div class="col-2" id="grand">
                            <label for="grandtotal"><?php echo lang("Localize.amount") ?> <?php echo lang("Localize.to") ?> <?php echo lang("Localize.pay") ?> </label>
                              <input type="text" name="grandtotal" id="grandtotal" class="form-control" value="<?php echo (int) $ticket->paidamount - (int)$paid[0]->paidamount ; ?>" readonly>
                        </div>

                        <div class="col-3" id="partial">
                            <label for="paidamount"><?php echo lang("Localize.partial") ?> <?php echo lang("Localize.payment") ?> <?php echo lang("Localize.amount") ?></label>
                              <input type="text" name="paidamount" id="paidamount" class="form-control" value="" placeholder="Partial Payment Amount" aria-label="Partial Payment Amount">
                        </div>

                        <div class="col-3" id="detailpay">
                            <label for="paydetail"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?></label>
                              <input type="text" name="paydetail"  class="form-control" value="<?php echo old('paydetail') ?>" placeholder="Payment Detail" aria-label="Payment Detail">
                        </div>

                   
                    <div class="col-2">
                        <br>
                        <button type="submit" class=" btn btn-success"><?php echo lang("Localize.submit") ?></button>
				    </div>

					<input type="hidden" name="booking_id"  id="booking_id" value="<?php echo  $ticket->booking_id; ?>">
                    <input type="hidden" name="trip_id"  id="trip_id" value="<?php echo $ticket->trip_id; ?>">
                    <input type="hidden" name="subtrip_id"  id="subtrip_id" value="<?php echo $ticket->subtrip_id; ?>">
                    <input type="hidden" name="passanger_id"  id="passanger_id" value="<?php echo $ticket->passanger_id; ?>">
                    <input type="hidden" name="ticket_id"  id="passanger_id" value="<?php echo $ticket->id; ?>">
                   
		
				
                            <div class="text-danger">
                                <?php if (isset($validation)): ?>
                                  <?=$validation->listErrors();?>
                                <?php endif?>
                              </div>

				
					

			</form>
    </div>
</div>

	<?php echo $this->endSection() ?>