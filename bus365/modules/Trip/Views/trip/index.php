 <?php echo $this->extend('template/admin/main') ?>

  <?php echo $this->section('css') ?>
    <link rel="stylesheet" href="<?php echo base_url('public/css/customestyle.css'); ?>" type="text/css">
  <?php echo $this->endSection() ?>

    <?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
      <div class="card-body">

      <?php if ($add_data == true) : ?>  
            <div class="text-end">
                <a class="btn btn-success" href="<?php echo base_url(route_to( 'new-trip' )) ?>"><?php echo lang("Localize.add_trip") ?></a>
            </div>
      <?php endif ?>

  <div class="table-responsive">
  <table class="table display table-bordered table-striped table-hover basic" id="triplist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.pick_up") ?> </th>
      <th scope="col"><?php echo lang("Localize.drop") ?> </th>
      <th scope="col"><?php echo lang("Localize.schedule") ?> </th>
      <th scope="col"><?php echo lang("Localize.distance") ?> </th>
      <th scope="col"><?php echo lang("Localize.hour") ?> </th>
      <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.seat") ?></th>
      <th scope="col"><?php echo lang("Localize.vehicle") ?> </th>
      
      <th scope="col"><?php echo lang("Localize.action") ?></th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($trip as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ; ?></th>
      <td>
          <?php 
            $this->db      = \Config\Database::connect();
            $builder = $this->db->table('locations');
            $query   = $builder->where('id',$value->pick_location_id)->get(); 
            $locationName =  $query->getRow();
          ?>
        <?php echo  $locationName->name; ?>
    </td>
      <td>
        <?php 
          
          $dropquery   = $builder->where('id',$value->drop_location_id)->get(); 
          $droplocationName =  $dropquery->getRow();
        ?>
        <?php echo $droplocationName->name; ?>
      
      </td>
      <td><?php echo $value->start_time; ?> <?php echo $value->end_time; ?></td>
      <td><?php echo $value->distance; ?>km</td>
      <td><?php echo $value->journey_hour; ?></td>
      <td><?php echo $value->total_seat; ?></td> 
      <td><?php echo $value->reg_no; ?></td> 
    
      <td>
          <form action="<?php echo base_url(route_to('delete-trip',$value->tripid ))?>" id="locatindelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                                <?php echo $this->include('common/delete') ?>
            
          <?php if ($edit_data == true) : ?> 
            <a href="<?= base_url(route_to( 'edit-trip',$value->tripid )) ?>" class="btn btn-sm btn-info text-white" title= "<?php echo lang("Localize.edit") ?>" ><i class="fas fa-edit"></i></a>
          <?php endif ?>

            <a href="<?= base_url(route_to( 'index-Subtrip',$value->tripid )) ?>" class="btn btn-sm btn-success"><?php echo lang("Localize.sub") ?> <?php echo lang("Localize.trip") ?></a>
            
            <?php if ($delete_data == true) : ?>  
              <button type="submit" class="btn btn-sm btn-danger" title= "<?php echo lang("Localize.delete") ?>" ><i class="far fa-trash-alt"></i></button>
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


<?php echo $this->section('css') ?>
  <script src="<?php echo base_url('public/js/ajax.js'); ?>"></script>
<?php echo $this->endSection() ?>