<label for="filterjourneydate" class="form-label"><?php echo lang("Localize.journey") ?> <?php echo lang("Localize.date") ?></label>
<div class="input-append date" id="filterjourneydate"  data-date-format="yyyy-mm-dd">
    <input size="16" type="text" name="filterjourneydate" class="form-control" value="<?php echo date('Y-m-d');?>"  required readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div>