<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
    <div class="card-body">

        <?php if ($add_data == true) : ?>  
            <div class="text-end">
                <a class="btn btn-success" href="<?php echo base_url(route_to( 'new-vehicle' )) ?>"><?php echo lang("Localize.add_vehicle") ?></a>
            </div>
          <?php endif ?>
<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="listvehical">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.fleet") ?> <?php echo lang("Localize.type") ?> </th>
      <th scope="col"><?php echo lang("Localize.reg") ?> </th>
      <th scope="col"><?php echo lang("Localize.eng") ?> <?php echo lang("Localize.no") ?> </th>
      <th scope="col"><?php echo lang("Localize.model") ?> <?php echo lang("Localize.no") ?></th>
      <th scope="col"><?php echo lang("Localize.chassis") ?> <?php echo lang("Localize.no") ?> </th>
      <th scope="col"><?php echo lang("Localize.woner") ?></th>
      <th scope="col"><?php echo lang("Localize.woner") ?> <?php echo lang("Localize.mobile") ?></th>
      <th scope="col"><?php echo lang("Localize.company") ?></th>
      <th scope="col"><?php echo lang("Localize.status") ?></th>
      <th scope="col"><?php echo lang("Localize.assign") ?></th>
    <th scope="col"><?php echo lang("Localize.action") ?></th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($vehical as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1; ?></th>
      <td><?php echo $value->type; ?></php></td>
      <td><?php echo $value->reg_no; ?></php></td>
      <td><?php echo $value->engine_no; ?></php></td>
      <td><?php echo $value->model_no; ?></php></td>
      <td><?php echo $value->chasis_no; ?></php></td>
      <td><?php echo $value->woner; ?></php></td>
      <td><?php echo $value->woner_mobile; ?></php></td>
      <td><?php echo $value->company; ?></php></td>
      <td><?php echo $value->status; ?></php></td>
      <td><?php echo $value->assign; ?></php></td>
      <td>
      <form action="<?php echo base_url(route_to('delete-vehicle',$value->vehicleid  ))?>" id="fleetdelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/delete') ?>
         
        <?php if ($edit_data == true) : ?> 
          <a href="<?php echo base_url(route_to( 'edit-vehicle',$value->vehicleid  )) ?>" class="btn btn-sm btn-info text-white" title= "<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
        <?php endif ?>

        <?php if ($delete_data == true) : ?>
          <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt" title= "<?php echo lang("Localize.delete") ?>"></i></button>
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

