<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>
<div class="card mb-4">
    <div class="card-body">

        <?php if ($add_data == true) : ?>  
          <div class="text-end">
                <a class="btn btn-success" href="<?php echo base_url(route_to( 'new-fleet' )) ?>"><?php echo lang("Localize.add_fleet") ?></a>
          </div>
        <?php endif ?>
<div class="table-responsive">
<table class="table display table-bordered table-striped table-hover basic" id="fleetlist">
  <thead>
 
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.type") ?></th>
      <th scope="col"><?php echo lang("Localize.layout") ?></th>
      <th scope="col"><?php echo lang("Localize.last_seat_check") ?> </th>
      <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?></th>
      <th scope="col"><?php echo lang("Localize.seat") ?> <?php echo lang("Localize.number") ?> </th>
      <th scope="col"><?php echo lang("Localize.status") ?> </th>
      <th scope="col"><?php echo lang("Localize.luggage") ?> <?php echo lang("Localize.service") ?> </th>
      <th scope="col"><?php echo lang("Localize.action") ?> </th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($fleet as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->type; ?></php></td>
      <td><?php echo $value->layout; ?></php></td>
      <td><?php echo $value->last_seat; ?></php></td>
      <td><?php echo $value->total_seat; ?></php></td>
      <td><?php echo $value->seat_number; ?></php></td>
      <td><?php echo $value->status; ?></php></td>
      <td><?php echo $value->luggage_service; ?></php></td>
      <td>
         
         <form action="<?php echo base_url(route_to('delete-fleet',$value->id ))?>" id="fleetdelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/delete') ?>
               
                <?php if ($edit_data == true) : ?> 
                 <a href="<?= base_url(route_to( 'edit-fleet',$value->id )) ?>" class="btn btn-sm btn-info text-white" title= "<?php echo lang("Localize.edit") ?>" ><i class="fas fa-edit"></i></a>
                <?php endif ?>
                
                <?php if ($delete_data == true) : ?>
                  <button type="submit" class="btn btn-sm btn-danger" title= "<?php echo lang("Localize.delete") ?>"><i class="far fa-trash-alt"></i></button>
                <?php endif ?>
            </form>

        </td>
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>
</table>
</div>
  </div>
  </div>
<?php echo $this->endSection() ?>


