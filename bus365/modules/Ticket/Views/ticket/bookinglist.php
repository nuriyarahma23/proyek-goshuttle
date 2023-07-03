 <?php echo $this->extend('template/admin/main') ?>

  <?php echo $this->section('css') ?>
    <link rel="stylesheet" href="<?php echo base_url('public/css/customestyle.css'); ?>" type="text/css">
  <?php echo $this->endSection() ?>

    <?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>
<div class="card mb-4">
  <div class="card-body">

  <div class="table-responsive">
  <table class="table display table-bordered table-striped table-hover basic" id="ticketbookinglist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?></th>
      <th scope="col"><?php echo lang("Localize.pick_up") ?> </th>
      <th scope="col"><?php echo lang("Localize.drop") ?> </th>
      <th scope="col"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?> </th>
      <th scope="col"><?php echo lang("Localize.pick_up") ?> <?php echo lang("Localize.stand") ?> </th>
      <th scope="col"><?php echo lang("Localize.drop") ?> <?php echo lang("Localize.stand") ?></th>
      <th scope="col"><?php echo lang("Localize.payment") ?> <?php echo lang("Localize.status") ?></th>
      <th scope="col"><?php echo lang("Localize.journey") ?> <?php echo lang("Localize.date") ?> </th>
      
      <th scope="col"><?php echo lang("Localize.action") ?></th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($ticket as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ; ?></th>

      <td><?php echo $value->booking_id ; ?></td>
      <td>
        <?php foreach ($location as $locationvalue) : ?>

          <?php if ( $locationvalue->id == $value->pick_location_id ) : ?>
            <?php echo  $locationvalue->name; ?>
          <?php endif ?>
          
        <?php endforeach ?>
        
      </td>

    
      <td>

      <?php foreach ($location as $locationvalue) : ?>
          <?php if ( $locationvalue->id == $value->drop_location_id ) : ?>
            <?php echo  $locationvalue->name; ?>
          <?php endif ?>
          
        <?php endforeach ?>

       </td>

      <td><?php echo $value->seatnumber ?></td>

      <td>

      <?php foreach ($pickdropstand as $pickdropvalue) : ?>
          <?php if ( $pickdropvalue->id == $value->pick_stand_id) : ?>
            <?php echo  $pickdropvalue->name; ?><br>
            <small>(<?php echo  $pickdropvalue->time; ?>)</small>
          <?php endif ?>
          
        <?php endforeach ?>

      </td>

      <td>

        <?php foreach ($pickdropstand as $pickdropvalue) : ?>
          <?php if ( $pickdropvalue->id == $value->drop_stand_id) : ?>
            <?php echo  $pickdropvalue->name; ?><br>
            <small>(<?php echo  $pickdropvalue->time; ?>)</small>
          <?php endif ?>
          
        <?php endforeach ?>
      
      </td>
      <td><?php echo $value->payment_status; ?></td> 

      <td><?php echo date("Y-m-d", strtotime($value->journeydata)) ; ?></td> 
     
    
      <td>

            

         
          <?php if ($cancel_create == true) : ?>
            <?php $ctype = "ticket" ;?>  
            <a href="<?php echo  base_url(route_to( 'new-cancel',$value->id,$ctype)) ?>" class="btn btn-sm btn-info text-white"><i class="far fa-times-circle"></i> <?php echo lang("Localize.cancel") ?></a>
          <?php endif ?>
            
            <?php if (($value->payment_status == "unpaid") ||($value->payment_status == "partial")) : ?>
              <a href="<?php echo base_url(route_to( 'new-partialpaid',$value->id )) ?>" class="btn btn-sm btn-primary text-white"><i class="far fa-money-bill-alt"></i> <?php echo lang("Localize.make") ?> <?php echo lang("Localize.payment") ?> </a>
            <?php endif ?>

            <?php if ($value->payment_status == "paid") : ?>
              <a href="<?php echo  base_url(route_to( 'detail-partialpaid',$value->booking_id )) ?>" class="btn btn-sm btn-primary "><i class="fas fa-th-list"></i> <?php echo lang("Localize.payment") ?> <?php echo lang("Localize.details") ?> </a>
            <?php endif ?>

             <a href="<?php echo  base_url(route_to( 'show-ticketinvoice',$value->booking_id )) ?>" class="btn btn-sm btn-success text-white"><i class="fas fa-file-invoice-dollar"></i> <?php echo lang("Localize.invoice") ?> </a>
             
            <?php if ($refund_create == true) : ?>
             <?php $type = "ticket" ;?>
             <a href="<?php echo  base_url(route_to( 'new-refund',$value->id,$type )) ?>" class="btn btn-sm btn-warning text-white"><i class="fas fa-money-bill-wave"></i> <?php echo lang("Localize.refund") ?> </a>
            <?php endif ?>
      </td>
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>
</table>
</div>

</div>
</div>

<?php echo $this->endSection() ?>


<?php echo $this->section('css') ?>
  <script src="<?php echo base_url('public/js/ajax.js'); ?>"></script>
<?php echo $this->endSection() ?>