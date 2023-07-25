<div class="col-lg-12">
    <?php foreach ($reservasi as $reser) :
        # code...
    ?>
        <div class="card">
            <div class="card-body">
             
                <h5 class="card-title mb-2"><?php echo $kota[$reser['point_keberangkatan']][0]['grup_kota'] . ' ' . $kota[$reser['point_keberangkatan']][0]['nama_kota']; ?> | <?php echo  $kota[$reser['tujuan']][0]['grup_kota'] . ' ' . $kota[$reser['tujuan']][0]['nama_kota'];  ?> | <?php echo  date('l, d M Y', strtotime($reser['tanggal_reservasi']));  ?></h5>
                <form action="<?php echo base_url('update_multijadwal/') . $reser['id_reservasi']; ?>" method="POST">
                    <!-- <input type="hidden" name="id_reservasi" value="<?php echo $reser['id_reservasi']; ?>"> -->
                    <!-- Input fields and other form elements -->


                    <div class="row">
                        <div class="form-group col-12">
                            <label for="">Jam Keberangkatan (Format 24 jam)</label>
                            <?php
                            $jam = $reser['jam'];
                            $jamArr = explode(":", $jam);
                            $jamValue = isset($jamArr[0]) ? $jamArr[0] : "";
                            $jamValue1 = isset($jamArr[1]) ? $jamArr[1] : "";

                            ?>

                            <div class="row">
                                <div class="col-6">
                                    <input class="form-control" id="" type="text" name="jam_hours" value="<?php echo $jamValue; ?>">
                                </div>

                                <div class="col-6">
                                    <input class="form-control" id="" type="text" name="jam_minutes" value="<?php echo $jamValue1; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 mb-3">
                            <label for="">Harga Tiket</label>
                            <input class="form-control" id="harga" type="text" name="harga" value="<?php echo $reser['harga_tiket'] ?>">
                        </div>

                        <div class="form-group col-12 mb-3">
                            
                            <label for="">Status Jadwal  <?php echo $reser['status']; ?></label>
                            <select class="form-control" id="status" name="status">
                                <option value="available" <?php if ($reser['status'] == 'available') echo 'selected'; ?>>Available</option>
                                <option value="departed" disabled <?php if ($reser['status'] == 'departed') echo 'selected'; ?>>Departed</option>
                                <option value="arrived" disabled <?php if ($reser['status'] == 'arrived') echo 'selected'; ?>>Arrived</option>
                                <option value="delay" <?php if ($reser['status'] == 'delay') echo 'selected'; ?>>Delay</option>
                                <option value="closed" <?php if ($reser['status'] == 'closed') echo 'selected'; ?>>Closed</option>

                            </select>
                            <p>*Departed and Arrived tidak dapat dipilih dari menu ini</p>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>