<?php echo $this->extend('template/admin/main') ?>



<?php echo $this->section('content') ?>

<?php echo $this->include('common/message') ?>

<div class="card mb-4">
      <div class="card-body">

        <?php if ($add_agent == true) : ?>
            <div class="text-end">
                <a class="btn btn-success" href="<?php echo base_url(route_to( 'new-agent' )) ?>"><?php echo lang("Localize.add_agent") ?></a>
            </div>
        <?php endif ?>
        <div class="table-responsive">
            <table class="table display table-bordered table-striped table-hover basic" id="agentlist">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><?php echo lang("Localize.name") ?></th>
                  <th scope="col"><?php echo lang("Localize.email") ?></th>
                  <th scope="col"><?php echo lang("Localize.mobile") ?></th>
                  <th scope="col"><?php echo lang("Localize.commission") ?></th>
                  <th scope="col"><?php echo lang("Localize.status") ?></th>
                  <?php if ($role_id == 1) : ?>
                    <th scope="col"><?php echo lang("Localize.action") ?></th>
                  <?php endif ?>
                
                
                </tr>
              </thead>
              <tbody>
                  
              <?php foreach ($agentdetail as $kye => $agentvalue) : ?>

                <tr>
                  <th scope="row"><?php echo $kye +1; ?></th>
                  <td>
                    <a href="<?php echo base_url(route_to( 'transaction-agent',$agentvalue->id )) ?>">
                    <?php echo $agentvalue->first_name.' '.$agentvalue->last_name; ?>
                    </a>
                  </td>
                  <td><?php echo $agentvalue->login_email ; ?></td>
                  <td><?php echo $agentvalue->login_mobile ; ?></td>
                  <td> <?php echo $agentvalue->commission; ?></td>
                  <td>
                    <?php if ($agentvalue->status == 1) : ?>
                      <span class="badge bg-success"><?php echo lang("Localize.active") ?></span>
                     <?php endif ?>
                    <?php if ($agentvalue->status == 0) : ?>
                      <span class="badge bg-secondary"><?php echo lang("Localize.disable") ?></span>
                     <?php endif ?>
                  </td>
                  <?php if ($role_id == 1) : ?>
                  <td>
                      <form action="<?php echo base_url(route_to('delete-agent',$agentvalue->id ))?>" id="employee" method="post" class="" accept-charset="utf-8" enctype="multipart/form-data">
                                        <?php echo $this->include('common/delete') ?>

                      <?php if ($edit_agent == true) : ?>
                        <a href="<?php echo base_url(route_to( 'edit-agent',$agentvalue->id )) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>" ><i class="fas fa-edit"></i></a>
                      <?php endif ?>

                      <?php if ($edit_agent == true) : ?>
                          <a href="<?php echo base_url(route_to( 'status-agent',$agentvalue->user_id )) ?>" class="btn btn-sm btn-success text-white" title="<?php echo lang("Localize.status") ?>" >
                          <i class="fas fa-eye"></i>
                        </a>
                      <?php endif ?>


                    </form>
                    </td>
                    <?php endif ?>
                </tr>
                  

              <?php endforeach ?>
              
              
              </tbody>
            </table>
            </div>

      </div>
</div>
<?php echo $this->endSection() ?>
