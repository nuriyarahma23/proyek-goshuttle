<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

      <?php if ($add_data == true) : ?> 
            <div class="text-end">
                <a class="btn btn-success" href="<?php echo base_url(route_to( 'new-location' )) ?>"><?php echo lang("Localize.add_location") ?></a>
            </div>
      <?php endif ?>


<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic" id="locationlist">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.name") ?> </th>
      <th scope="col"><?php echo lang("Localize.action") ?> </th>
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($location as $kye =>  $value) : ?>

    <tr>
      <th scope="row"><?php echo $kye+1 ;?></th>
      <td><?php echo $value->name; ?></php></td>
      <td>
          <form action="<?php echo base_url(route_to('delete-location',$value->id ))?>" id="locatindelete" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                            <?php echo $this->include('common/delete') ?>
              
              <?php if ($edit_data == true) : ?> 
                <a href="<?= base_url(route_to( 'edit-location',$value->id )) ?>" class="btn btn-sm btn-info text-white" title= "<?php echo lang("Localize.edit") ?>" ><i class="fas fa-edit"></i></a>
              <?php endif ?>
               
              <?php if ($delete_data == true) : ?> 
                <button type="submit" class="btn btn-sm btn-danger" title= "<?php echo lang("Localize.delete") ?>"  ><i class="far fa-trash-alt" ></i></button>
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