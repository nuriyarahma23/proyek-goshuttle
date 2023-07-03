<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<div class="row">

<div class="card mb-4">
      <div class="card-body">

<form action="<?php echo base_url(route_to('findtrip-ticket')) ?>" id="findtrip" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>


					<?php echo $this->include($filterpath . '\ticket/filter/find') ?>

				<?php if (isset($validation)): ?>
					<?=$validation->listErrors();?>
					<?php endif?>

			</form>

</div>
</div>
</div>

<input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url() ?>" >
<div class="mt-3 card">
<h4 class="m-1"><?php echo $filterjourneydate ?></h4>

<?php if (!empty($alltriplist)) : ?>
  <!-- TRUE -->
  <input type="hidden" id="tax_type" name="tax_type" value="<?php echo $taxtype; ?>">

<?php foreach ($alltriplist as $kye => $tripValue): ?>



  <div class="card-body Regular shadow mt-4">
    <div class="row">
      <div class="col">
          <h6 class=""><?php echo $tripValue->company_name; ?></h6>
          <small><?php echo $tripValue->company; ?></small>
      </div>

      <div class="col">
          <h6>
          <?php foreach ($location as $locationvalue): ?>
              <?php if ($locationvalue->id == $tripValue->pick_location_id): ?>
                <?php echo $locationvalue->name; ?>
                <?php endif?>
            <?php endforeach?>

        </h6>
          <small><?php echo $tripValue->start_time; ?></small>
      </div>
      <div class="col">
          <h6><?php echo lang("Localize.details") ?> ( <small class="text-center"><?php echo $tripValue->journey_hour; ?> hr</small>)</h6>

          <span class="text-center"><?php echo $tripValue->distance; ?> km</span>
      </div>
      <div class="col">
          <h6>
            <?php foreach ($location as $locationvalue): ?>
              <?php if ($locationvalue->id == $tripValue->drop_location_id): ?>
                <?php echo $locationvalue->name; ?>
                <?php endif?>
            <?php endforeach?>

          </h6>
          <small><?php echo $tripValue->end_time; ?></small>
      </div>
      <div class="col">
          <h6><?php echo lang("Localize.fair") ?></h6>
          <small><?php echo $tripValue->adult_fair; ?></small>
      </div>
      <div class="col">
          <h6><?php echo lang("Localize.seat") ?></h6>
          <small><?php echo (int) ((int) $tripValue->total_seat); ?></small>
      </div>

      <div class="col" data-bs-toggle="collapse" href="#expand_<?php echo $tripValue->id; ?>" role="button"  aria-expanded="false" aria-controls="expand_<?php echo $tripValue->id; ?>">
         <button class="btn btn-success" id="<?php echo $tripValue->id; ?>" type="button"><?php echo lang("Localize.details") ?></button>
      </div>

    </div>

    <div class="row">
        <div class="collapse" id="expand_<?php echo $tripValue->id; ?>">
          <div class="card card-body">
            <div id="dynamicbooking_<?php echo $tripValue->id; ?>">



                  <div class="row mt-3">

                    <div class="col-4" id="seat_<?php echo $tripValue->id; ?>">

                    </div>

                    <div class="col-8" id="form_<?php echo $tripValue->id; ?>">


                    </div>


                  </div>

                  <hr>

                  <br>
              <div class="col-12 text-center">
                <a href="#" onclick="formsubmit(this,<?php echo $tripValue->id; ?>)" class="btn btn-success btn-block"><?php echo lang("Localize.process_book") ?></a>
              </div>





            </div>
          </div>
        </div>

    </div>


  </div>

 <?php endforeach?>

<?php else : ?>
 <h3><?php echo lang("Localize.no_trip_found") ?></h3>
<?php endif ?>

        <div class="col-8" id="hidden">
              <form action="<?php echo base_url(route_to('booking-ticket')) ?>" id="booking" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                  <?php echo $this->include('common/security') ?>

                  <input type="hidden" id="subtripId" name="subtripId">
                  <input type="hidden" id="seatnumbers" name="seatnumbers">
                  <input type="hidden" id="aseat" name="aseat">
                  <input type="hidden" id="cseat" name="cseat">
                  <input type="hidden" id="spseat" name="spseat">
                  <input type="hidden" id="totalprice" name="totalprice">
                  <input type="hidden" id="tax" name="tax">
                  <input type="hidden" id="grandtotal" name="grandtotal">
                  <input type="hidden" id="pickstand" name="pickstand">
                  <input type="hidden" id="dropstand" name="dropstand">

                  <input type="hidden" id="journeydate" name="journeydate" value="<?php echo $filterjourneydate ?>">

                  <div class="text-danger">
                  <?php if (isset($validation)): ?>
                    <?=$validation->listErrors();?>
                  <?php endif?>
                  </div>   
              </form>

      </div>

</div>


<?php echo $this->endSection() ?>


<?php echo $this->section('js') ?>
<script src="<?php echo base_url('public/js/booking.js'); ?>"></script>

<?php echo $this->endSection() ?>