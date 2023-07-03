<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

<form action="<?php echo base_url(route_to('datatickesell-report'))?>" id="ticketSoldReport" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

					
						<div class="col-12">
                          <div class="row">
                              <?php echo $this->include($filepath . '\filter/trip') ?>
                          

                         
                          <div class="col-4 mt-2 mb-2">
                          <label for="type" class="form-label"><?php echo lang("Localize.ticket") ?> <?php echo lang("Localize.type") ?></label>
                              <select id="type" name="type" class="form-select" required >
                                <option value="normal"><?php echo lang("Localize.sold") ?> <?php echo lang("Localize.ticket") ?> </option>
                                <option value="refund"><?php echo lang("Localize.refund") ?> <?php echo lang("Localize.ticket") ?> </option>
                                <option value="cancel"><?php echo lang("Localize.cancel") ?> <?php echo lang("Localize.ticket") ?> </option>
                              </select>
                              </div>
                          </div>

                          <div class="row">
                              <?php echo $this->include($filepath . '\filter/daterange') ?>
                          </div>
                              
            </div>


            

            <input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url() ?>"/>
			

</form>





<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="ticketsoldreport">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.date") ?></th>
      <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?> </th>
      <th scope="col"><?php echo lang("Localize.journey") ?> <?php echo lang("Localize.date") ?></th>
      <th scope="col"><?php echo lang("Localize.main") ?> <?php echo lang("Localize.trip") ?> </th>
      <th scope="col"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.trip") ?>  </th>
      <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?></th>
      <th scope="col"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?></th>
      <th scope="col"><?php echo lang("Localize.price") ?></th>
      <th scope="col"><?php echo lang("Localize.discount") ?></th>
      <th scope="col"><?php echo lang("Localize.tax") ?></th>
      <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.price") ?></th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($ticket as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->date; ?></td>
      <td><?php echo $value->booking_id ; ?></td>
      <td><?php echo date('Y-m-d',strtotime($value->journeydata)) ; ?></td>
      <td>
        <?php echo $value->pickup_location_name ; ?> - <?php echo $value->drop_location_name ; ?>
        (<?php echo $value->start_time  ; ?> - <?php echo $value->end_time ; ?>)
    </td>

    <td>
        <?php echo $value->sub_pickup_location_name ; ?> - <?php echo $value->sub_drop_location_name ; ?>
       
    </td>

    <td><?php echo $value->totalseat ; ?></td>
    <td><?php echo $value->seatnumber ; ?></td>

    <td><?php echo $value->price ; ?></td>

    <td><?php echo $value->discount ; ?></td>
    <td><?php echo $value->totaltax ; ?></td>

    <td><?php echo $value->paidamount ; ?></td>

     
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>

  <tfoot>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
          <th scope="row">Totals</th>
           <td> <?php echo array_sum(array_column($ticket, 'totalseat')); ;?></td>
           <td></td>
           <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'price')); ;?></td>
           <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'discount')); ;?></td>
           <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'totaltax')); ;?></td>
           <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($ticket, 'paidamount')); ;?></td>
          
        </tr>
    </tfoot>

</table>
</div>

</div>
</div>
<?php echo $this->endSection() ?>

