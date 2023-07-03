<div class="table-responsive">
 <table class="table display table-bordered table-striped table-hover basic " id="">
  <thead>
    <tr>
     
    <th scope="col" class="text-center"><?php echo lang("Localize.menu") ?> <?php echo lang("Localize.title") ?> </th>
      <th scope="col" class="text-center"><?php echo lang("Localize.create") ?></th>
      <th scope="col" class="text-center"><?php echo lang("Localize.read") ?></th>
      <th scope="col" class="text-center"><?php echo lang("Localize.edit") ?></th>
      <th scope="col" class="text-center"><?php echo lang("Localize.delete") ?></th>
     
    </tr>
  </thead>
  <tbody>


    <?php $mt = 0;?>
   
  <?php foreach ($menudetail as $kye =>  $value) : ?>
   

    <?php if ( ($mt == 0) && !empty($mainmenudetail) ) : ?>
        <tr>
            
            <td class="text-center" ><?php echo $mainmenudetail->menu_title; ?></td>

            <?php foreach ($editData as $editDataValue) : ?>
               
            <?php if ($mainmenudetail->id == $editDataValue->menu_id ) : ?>

                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="1" name="<?php echo $mainmenudetail->menu_title; ?>[]" <?php echo ($editDataValue->create == 1) ? "checked" : ''?>>
                </td>


                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="2" name="<?php echo $mainmenudetail->menu_title; ?>[]" <?php echo ($editDataValue->read == 1) ? "checked" : ''?>>
                </td>
               
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="3" name="<?php echo $mainmenudetail->menu_title; ?>[]" <?php echo ($editDataValue->edit == 1) ? "checked" : ''?> >
                </td>
                
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="4" name="<?php echo $mainmenudetail->menu_title; ?>[]" <?php echo ($editDataValue->delete == 1) ? "checked" : ''?> >
                </td>
              
               
            <?php endif ?>
           
          
            <?php endforeach ?>
        </tr>
        <?php $mt = $mt+1;?>
    <?php endif ?>

    <tr>
        <?php if ($value->have_chield == 1) : ?>
            <?php echo view_cell('\App\Libraries\Permission::editcallBackPermission','menuid='.$value->id.',roleid='.$roleid.'') ?>

        <?php else : ?>

            <td class="text-center" ><?php echo $value->menu_title; ?></td>

            <?php foreach ($editData as $editDataValue) : ?>

                <?php if ($value->id == $editDataValue->menu_id ) : ?>

                     
                        <td class="text-center">
                            <input class="form-check-input" type="checkbox" value="1" name="<?php echo $value->menu_title; ?>[]" <?php echo ($editDataValue->create == 1) ? "checked" : ''?> >
                        </td>
                        
                        <td class="text-center">
                            <input class="form-check-input" type="checkbox" value="2" name="<?php echo $value->menu_title; ?>[]" <?php echo ($editDataValue->read == 1) ? "checked" : ''?> >
                        </td>
                        
                        <td class="text-center">
                            <input class="form-check-input" type="checkbox" value="3" name="<?php echo $value->menu_title; ?>[]" <?php echo ($editDataValue->edit == 1) ? "checked" : ''?> >
                        </td>
                        
                        <td class="text-center">
                            <input class="form-check-input" type="checkbox" value="4" name="<?php echo $value->menu_title; ?>[]" <?php echo ($editDataValue->delete == 1) ? "checked" : ''?> >
                        </td>
                        



                <?php endif ?>
               
            <?php endforeach ?>



        <?php endif ?>
       
      
    </tr>
       

  <?php endforeach ?>
   
   
  </tbody>
</table>
</div>
<br>