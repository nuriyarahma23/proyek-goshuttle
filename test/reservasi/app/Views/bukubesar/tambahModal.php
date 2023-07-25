 <!-- Modal Tambah -->
 <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="tambahModalTitle">
           Tambah Data Buku Besar
         </h5>
         <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
           <span aria-hidden="true">×</span>
         </button>
       </div>
       <?php $validation = \Config\Services::validation(); ?>
       <form action="<?= base_url('prosestambah-bukubesar') ?>" method="post" enctype="multipart/form-data">
         <div class="modal-body">
           <div class="form-group">
             <label>Tanggal</label>
             <input class="form-control" type="date" name="tanggal" required>
           </div>
           <div class="form-group">
             <label>Kategori</label>
             <input class="form-control" type="text" name="kategori" placeholder="Kategori" required>
           </div>
           <div class="form-group">
             <label>Keterangan</label>
             <input class="form-control" type="text" name="keterangan" placeholder="Keterangan" required>
           </div>
           <div class="form-group">
             <label>Tipe</label>
             <select class="form-control form-control-sm" name="tipe">
               <option value="">Pilihan</option>
               <option value="Masuk">Masuk</option>
               <option value="Keluar">Keluar</option>
             </select>
           </div>
           <div class="form-group">
             <label>Jumlah</label>
             <input class="form-control" type="text" name="nominal" placeholder="Jumlah" required>
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