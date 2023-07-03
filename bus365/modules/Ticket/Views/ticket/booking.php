<?php echo $this->extend('template/admin/main') ?>

	<?php echo $this->section('content') ?>

    <div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('create-ticket')) ?>" id="createbooking" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

					<div class="row">

                        <div class="col-7">
                                <div class="row">

                                    <?php echo $this->include($filterpath . '\ticket/passanger') ?>

                                </div>
                        </div>


                        <div class="col-5">
                            <div class="row">
                                <?php for ($i = 1; $i <= $dynamicfield; $i++) {?>

                                    <label for="last_name" class="mt-1"><?php echo lang("Localize.passanger") ?> <?php echo $i + 1; ?> </label>
                                    <div class="col-6 ">
                                    <label for="first_name"><?php echo lang("Localize.first_name") ?> *</label>
                                        <input type="text" name="first_name_new[]" class="form-control" value="" placeholder="<?php echo lang("Localize.first_name") ?>" aria-label="First name" required>
                                    </div>
                                    <div class="col-6 ">
                                    <label for="last_name"><?php echo lang("Localize.last_name") ?> *</label>
                                        <input type="text" name="last_name_new[]"  class="form-control" value="" placeholder="<?php echo lang("Localize.last_name") ?>" aria-label="Last name" required>
                                    </div>


                                    <div class="col-6 mb-2">
                                    <label for="login_mobile"><?php echo lang("Localize.mobile") ?> *</label>
                                        <input type="number" name="login_mobile_new[]"  class="form-control" value="" placeholder="<?php echo lang("Localize.mobile") ?>" aria-label="Mobile" >
                                    </div>

                                    <div class="col-6 mb-2">
                                    <label for="id_number"><?php echo lang("Localize.nid_passport_number") ?>  *</label>
                                        <input type="text" name="id_number_new[]"  class="form-control" value="" placeholder="<?php echo lang("Localize.nid_passport_number") ?>" aria-label="Nid/Passport Number">
                                    </div>
                                    <br>


                                 <?php }?>
                            </div>
                        </div>

                    </div>

                 <div class="row ">

                    <div class="col-4 mt-2">
                        <label for="payment_status"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.status") ?> </label>
                            <select class="form-select" name="payment_status" id="payment_status" required>

                            <option value="paid"><?php echo lang("Localize.paid") ?></option>
                            <option value="partial"><?php echo lang("Localize.partial") ?></option>
                            <option value="unpaid"><?php echo lang("Localize.unpaid") ?></option>

                            </select>

                    </div>


                    <div class="col-4 mt-2" id="payment_method">
                        <label for="pay_method"><?php echo lang("Localize.pay") ?> <?php echo lang("Localize.type") ?></label>
                            <select class="form-select" name="pay_method" id="pay_method" required>

                            <?php foreach ($paymethod as $paymethodvalue): ?>

                                <option value="<?php echo $paymethodvalue->id ?>"><?php echo $paymethodvalue->name ?></option>

                            <?php endforeach?>

                            </select>

                    </div>

                        <div class="col-4 mt-2" id="grand">
                            <label for="grandtotal"><?php echo lang("Localize.amount") ?> <?php echo lang("Localize.to") ?> <?php echo lang("Localize.pay") ?> </label>
                              <input type="text" name="grandtotal" id="grandtotal" class="form-control" value="<?php echo $grandtotal; ?>" readonly>
                        </div>

                        <div class="col-4 mt-2" id="couponcode">
                            <label for="coupon"><?php echo lang("Localize.apply") ?> <?php echo lang("Localize.coupon") ?></label>
                              <input type="text" name="offerer" id="coupon" class="form-control" placeholder="<?php echo lang("Localize.coupon") ?>" >
                             
                              <small id="couponmessage"></small>
                        </div>

                        <div class="col-4 mt-2" id="less">
                            <label for="discount"><?php echo lang("Localize.discount") ?> </label>
                              <input type="text" name="discount" id="discount" class="form-control" value="0" >

                        </div>

                        <div class="col-4 mt-2" id="partial">
                            <label for="partialpay"><?php echo lang("Localize.partial") ?> <?php echo lang("Localize.payment") ?> <?php echo lang("Localize.amount") ?> </label>
                              <input type="text" name="partialpay" id="partialpay" class="form-control" value="" placeholder="<?php echo lang("Localize.partial") ?> <?php echo lang("Localize.payment") ?> <?php echo lang("Localize.amount") ?>" aria-label="Partial Payment Amount">
                        </div>

                        <div class="col-4 mt-2" id="detailpay">
                            <label for="paydetail"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?></label>
                              <input type="text" name="paydetail"  class="form-control" value="<?php echo old('paydetail') ?>" placeholder="<?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?>" aria-label="Payment Detail">
                        </div>

                    </div>


                    <input type="hidden" name="baseurl"  id="baseurl" value="<?php echo base_url(); ?>">

                    <input type="hidden" name="subtripId"  id="subtripId" value="<?php echo $subtripId; ?>">
                    <input type="hidden" name="seatnumbers"  id="seatnumbers" value="<?php echo $seatnumbers; ?>">
                    <input type="hidden" name="aseat"  id="aseat" value="<?php echo $aseat; ?>">
                    <input type="hidden" name="spseat"  id="spseat" value="<?php echo $spseat; ?>">
                    <input type="hidden" name="cseat"  id="cseat" value="<?php echo $cseat; ?>">
                    <input type="hidden" name="totalprice"  id="totalprice" value="<?php echo $totalprice; ?>">
                    <input type="hidden" name="tax"  id="tax" value="<?php echo $tax; ?>">
                    <input type="hidden" name="oldgrandtotal"  id="oldgrandtotal" value="<?php echo $grandtotal; ?>">
                    <input type="hidden" name="pickstand"  id="pickstand" value="<?php echo $pickstand; ?>">


                    <input type="hidden" name="dropstand"  id="dropstand" value="<?php echo $dropstand; ?>">

                    <input type="hidden" name="totalseat"  id="totalseat" value="<?php echo $totalseat; ?>">

                    <input type="hidden" name="journeydate"  id="journeydate" value="<?php echo $journeydate; ?>">

                    

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

<?php echo $this->section('js') ?>
<script src="<?php echo base_url('public/js/booking.js'); ?>"></script>
<script src="<?php echo base_url('public/js/ajax.js'); ?>"></script>

<?php echo $this->endSection() ?>