 <!-- Modal Tambah -->
 <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="tambahModalTitle">
           Tambah Jadwal
         </h5>
         <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
           <span aria-hidden="true">×</span>
         </button>
       </div>
       <?php $validation = \Config\Services::validation(); ?>
       <form action="<?= base_url('store-jadwal') ?>" method="post" enctype="multipart/form-data">
         <div class="modal-body">
           <div class="form-group">
             <label>Dari Tanggal</label>
             <input class="form-control" type="date" name="dari_tgl" required>
           </div>
           <div class="form-group">
             <label>Sampai Tanggal</label>
             <input class="form-control" type="date" name="sampai_tgl" required>
           </div>

           <div class="form-group">
             <label>Tujuan</label>
             <select class="form-control form-control-sm" name="tujuan">
               <option value="">Pilih Tujuan</option>
               <?php foreach ($grup_kota as $grup) : ?>
                 <optgroup label="<?php echo $grup ?>">
                   <?php foreach ($kota[$grup] as $ktd) : ?>
                     <option value="<?php echo $ktd['id_kota'] ?>"><?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?></option>
                   <?php endforeach; ?>
                 </optgroup>
               <?php endforeach; ?>
             </select>
           </div>

           <div class="form-group">
             <label>Jumlah Kursi</label>
             <input class="form-control" type="number" name="jml_kursi" required>
           </div>
           <div class="form-group">
             <label>Harga Tiket</label>
             <input class="form-control" type="number" name="harga_tiket" required>
           </div>

           <div class="form-group">
             <label>Point Keberangkatan</label>
             <select class="form-control form-control-sm" name="point_keberangkatan">
               <option value="">Pilih Keberangkatan</option>
               <?php foreach ($grup_kota as $grup) : ?>
                 <optgroup label="<?php echo $grup ?>">
                   <?php foreach ($kota[$grup] as $ktd) : ?>
                     <option value="<?php echo $ktd['id_kota'] ?>"><?php echo "[" . $ktd['kode_kota'] . "]" . $ktd['nama_kota'] ?></option>
                   <?php endforeach; ?>
                 </optgroup>
               <?php endforeach; ?>
             </select>
           </div>

           <div class="form-group">
             <label>Jam Keberangkatan</label>
             <input class="form-control" type="time" name="jam" required>
           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
             <span class="d-none d-sm-block">Close</span>
           </button>
           <button type="submit" class="btn btn-primary">
             <span class="d-none d-sm-block">Submit</span>
           </button>
         </div>
       </form>
     </div>
   </div>
 </div>
 <!-- End Modal Tambah -->