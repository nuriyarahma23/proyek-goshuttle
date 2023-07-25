 <!-- Modal Tambah -->
 <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="tambahModalTitle">
           Tambah Data Mobil
         </h5>
         <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
           <span aria-hidden="true">×</span>
         </button>
       </div>
       <?php $validation = \Config\Services::validation(); ?>
       <form action="<?= base_url('prosestambah-mobil') ?>" method="post" enctype="multipart/form-data">
         <div class="modal-body">
           <div class="form-group">
             <label>Kode Unit</label>
             <input class="form-control" type="text" name="identitas" placeholder="Kode Unit" required>
           </div>
           <div class="form-group">
             <label>Nomor Polisi</label>
             <input class="form-control" type="text" name="nopol" placeholder="Nomor Polisi" required>
           </div>
           <div class="form-group">
             <label>Kilometer Terakhir</label>
             <input class="form-control" type="number" name="km_terakhir" placeholder="Kilometer Terakhir" required>
           </div>
           <div class="form-group">
             <label>Status</label>
             <select class="form-control form-control-sm" name="status">
               <option value="">Pilihan</option>
               <option value="Aktif">Aktif</option>
               <option value="Tidak Aktif">Tidak Aktif</option>
             </select>
           </div>
         </div>
         <div class="modal-footer">
           <!-- <div class="form-group">
                     <button type="submit" class="btn btn-primary">Simpan</button>
                   </div> -->
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