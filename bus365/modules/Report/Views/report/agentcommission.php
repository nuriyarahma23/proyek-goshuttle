<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

			<form action="<?php echo base_url(route_to('commissiondata-report'))?>" id="agentCommissionform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>

						<div class="row">
                          <div class="col-3  mb-2">
                          <label for="agent_id" class="form-label"><?php echo lang("Localize.agent") ?></label>
                              <select id="agent_id" name="agent_id" class="form-select" required >
								  <?php if ($userType == 1) : ?>
									<option value="all">All </option>
									<?php foreach ($agentList as $agent) : ?>
										<option value="<?php echo $agent->id ?>"><?php echo $agent->first_name ?> <?php echo $agent->last_name ?> </option>
									<?php endforeach ?>

								  <?php elseif($userType == 2) : ?>
									<?php foreach ($agentList as $agent) : ?>
										<option value="<?php echo $agent->id ?>"><?php echo $agent->first_name ?> <?php echo $agent->last_name ?> </option>
									<?php endforeach ?>
								  <?php endif ?>
                             
                              </select>
                              </div>
                          
                         <br>
                              <?php echo $this->include($filepath . '\filter/daterange') ?>
                              
                              
                        </div>
			

			</form>



<div class="table-responsive mt-3">
 <table class="table display table-bordered table-striped table-hover basic" id="commissionlist">
 <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php echo lang("Localize.agent") ?> <?php echo lang("Localize.name") ?></th>
      <th scope="col"><?php echo lang("Localize.booking") ?> <?php echo lang("Localize.id") ?></th>
      <th scope="col"><?php echo lang("Localize.trip") ?></th>
      <th scope="col"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.amount") ?></th>
      <th scope="col"><?php echo lang("Localize.agent") ?> <?php echo lang("Localize.commission") ?></th>
      <th scope="col"><?php echo lang("Localize.commission") ?> <?php echo lang("Localize.rate") ?></th>
      <th scope="col"><?php echo lang("Localize.details") ?></th>
      <th scope="col"><?php echo lang("Localize.date") ?></th>
      
     
     
    </tr>
  </thead>
  <tbody>
      
  <?php foreach ($commission as $kye => $commissionvalue) : ?>

<tr>
  <th scope="row"><?php echo $kye +1; ?></th>
  <td>
	
	<?php echo $commissionvalue->first_name; ?> <?php echo $commissionvalue->last_name; ?>
   
  </td>
  <td><?php echo $commissionvalue->booking_id ; ?></td>
  <td><?php echo $commissionvalue->subtrip_id ; ?></td>
  <td><?php echo $commissionvalue->grandtotal ; ?></td>
  <td> <?php echo $commissionvalue->commissionamount; ?></td>
  <td> <?php echo $commissionvalue->rate; ?>%</td>
  <td> <?php echo $commissionvalue->detail; ?></td>
  <td> <?php echo $commissionvalue->date; ?></td>
  
</tr>
   

<?php endforeach ?>
   
   
  </tbody>

  <tfoot>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        
          <th scope="row"><?php echo lang("Localize.total") ?></th>
           <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($commission, 'grandtotal')); ;?></td>
          
           <td> <?php echo $currency_symbol; ?> <?php echo array_sum(array_column($commission, 'commissionamount')); ;?></td>
           
          
          
        </tr>
    </tfoot>

</table>
</div>			

</div>
	
</div>	
<?php echo $this->endSection() ?>