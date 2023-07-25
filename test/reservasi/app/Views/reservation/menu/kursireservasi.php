<div id="tiketreservasi">
  <table class="table table-borderless">
    <tbody>
      <tr>
        <td class="" width="33.333333333333%">
          <div>
            <?php if ($Nomorkursi[1]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>">
                    <div>
                      <h4>1</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">
                      <?php if ($Nomorkursi[1]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[1]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>

                      <?php elseif ($Nomorkursi[1]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/')   ?><?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>


                        </form>



                      <?php else : ?>

                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[1]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>



                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>)">


                    <div class="<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">
                      <small class="clearfix"><?= $Nomorkursi[1]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[1]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[1]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[1]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[1]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[1]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[1]['id_kursi_parent'] : $Nomorkursi[1]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>



                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>1</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[1]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[1]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </td>

        <td class="" width="33.333333333333%">
          <h4></h4>
        </td>
        <td class="" width="33.333333333333%" style="vertical-align: middle; text-align: center">
          <img src="https://sys.goshuttle.co.id/images/icons/steer.svg" alt="driver" style="width: 3rem">
          <br>
          <strong><?= $reservasi['nama_sopir'] === null ? 'Sopir' : $reservasi['nama_sopir']; ?></strong>
        </td>
      </tr>

      <tr>
        <td>
          <div>
            <?php if ($Nomorkursi[2]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>">
                    <div>
                      <h4>2</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">
                      <?php if ($Nomorkursi[2]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[2]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>



                      <?php elseif ($Nomorkursi[2]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/') ?><?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>


                        </form>
                      <?php else : ?>
                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[2]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>


                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>)">
                    <div class="<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">

                      <small class="clearfix"><?= $Nomorkursi[2]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[2]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[2]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[2]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[2]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[2]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[2]['id_kursi_parent'] : $Nomorkursi[2]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>


                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>2</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[2]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[2]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </td>
        <td></td>

        <td>
          <div>
            <?php if ($Nomorkursi[3]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>">
                    <div>
                      <h4>3</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">
                      <?php if ($Nomorkursi[3]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[3]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>



                      <?php elseif ($Nomorkursi[3]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/')  ?><?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>


                        </form>
                      <?php else : ?>
                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[3]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>


                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>)">
                    <div class="<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">
                      <small class="clearfix"><?= $Nomorkursi[3]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[3]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[3]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[3]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[3]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[3]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[3]['id_kursi_parent'] : $Nomorkursi[3]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>


                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>3</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[3]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[3]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div>
            <?php if ($Nomorkursi[4]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>">
                    <div>
                      <h4>4</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">
                      <?php if ($Nomorkursi[4]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[4]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>



                      <?php elseif ($Nomorkursi[4]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/') ?><?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>


                        </form>
                      <?php else : ?>
                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[4]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>


                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>)">
                    <div class="<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">

                      <small class="clearfix"><?= $Nomorkursi[4]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[4]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[4]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[4]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[4]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[4]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[4]['id_kursi_parent'] : $Nomorkursi[4]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>


                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>4</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[4]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[4]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </td>
        <td></td>

        <td>
          <div>
            <?php if ($Nomorkursi[5]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>">
                    <div>
                      <h4>5</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">
                      <?php if ($Nomorkursi[5]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[5]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>
                      <?php elseif ($Nomorkursi[5]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/') ?><?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>


                        </form>

                      <?php else : ?>




                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[5]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>
                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>)">
                    <div class="<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">

                      <small class="clearfix"><?= $Nomorkursi[5]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[5]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[5]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[5]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[5]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[5]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[5]['id_kursi_parent'] : $Nomorkursi[5]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>


                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>5</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[5]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[5]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div>
            <?php if ($Nomorkursi[6]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>">
                    <div>
                      <h4>6</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">
                      <?php if ($Nomorkursi[6]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[6]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>
                      <?php elseif ($Nomorkursi[6]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/') ?><?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>

                        </form>

                      <?php else : ?>

                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[6]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>


                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>)">
                    <div class="<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">

                      <small class="clearfix"><?= $Nomorkursi[6]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[6]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[6]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[6]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[6]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[6]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[6]['id_kursi_parent'] : $Nomorkursi[6]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>


                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>6</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[6]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[6]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </td>

        <td>
          <div>
            <?php if ($Nomorkursi[7]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>">
                    <div>
                      <h4>7</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">
                      <?php if ($Nomorkursi[7]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[7]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>
                      <?php elseif ($Nomorkursi[7]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/') ?><?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>
                        </form>

                      <?php else : ?>
                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[7]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>


                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>)">
                    <div class="<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">

                      <small class="clearfix"><?= $Nomorkursi[7]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[7]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[7]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[7]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[7]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[7]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[7]['id_kursi_parent'] : $Nomorkursi[7]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>


                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>7</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[7]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[7]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </td>

        <td>
          <div>

            <?php if ($Nomorkursi[8]['nomor_telepon'] != null) : ?>
              <div class="border p-2 rounded shadow-sm con" style="background-color: #D4FFEB">
                <div class="seat-card">
                  <div class="d-flex" id="informasitiketheader_<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>">
                    <div>
                      <h4>8</h4>
                    </div>
                    <div>
                      <img width="24" height="24" class="rounded ml-2" src="https://ui-avatars.com/api/?size=32&amp;background=0D8ABC&amp;color=FFF&amp;name=UMUM" alt="UMUM">
                    </div>
                    <div style="margin-left:auto" class="d-flex justify-content-between">


                      <?php if ($Nomorkursi[8]['status_pembayaran'] == 'Sudah membayar') : ?>
                        <button class="btn btn-outline-dark btn-sm" wire:click="$refresh" onclick="window.open('<?php echo base_url('pdfslipreservasi/'); ?><?php echo  $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi']; ?>', '', 'width=500,height=500')"><i class="fa fa-print"></i></button>
                        <?php if ($Nomorkursi[8]['checkin'] == "Belum Datang") : ?>
                          <a href="<?= route_to('checkinreservasi', $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi']) ?>" class="btn btn-outline-success btn-sm" onclick="checkInConfirmation(event, <?php echo $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi']; ?>)"><i class="fa fa-check"></i></a>
                        <?php endif; ?>

                      <?php elseif ($Nomorkursi[8]['status_pembayaran'] == 'Konfirmasi pembayaran') : ?>

                        <form action="<?= base_url('pembayaran/konfirmasi/')  ?><?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>" onsubmit="return konfirmasiPembayaran(event)">
                          <button type="submit" class="btn btn-outline-info btn-sm"><i class="fas fa-check"></i></button>


                        </form>

                      <?php else : ?>



                        <button class="btn btn-outline-info btn-sm" onclick="edit_form_tiket('<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>')"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="confirmCancellation(event, <?php echo $Nomorkursi[8]['id_kursi'] ?>)" wire:click="cancelTicket"><i class="fa fa-times"></i></button>
                      <?php endif; ?>


                    </div>
                  </div>
                  <a href="#ResevationDetail" id="informasitiketbody_<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>" data-toggle="modal" data-target="#ResevationDetail" data-backdrop="static" onclick="openModal(<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>)">
                    <div class="<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ?  'text-center  bg-light text-dark  rounded' : 'text-center bg-primary text-white rounded'; ?>">

                      <small class="clearfix"><?= $Nomorkursi[8]['nomor_telepon']; ?></small>
                      <span class="clearfix"><?= $Nomorkursi[8]['nama']; ?></span>
                    </div>
                  </a>

                  <!-- Form untuk Edit -->
                  <div class="edit-form" style="display: none;" id="formedit_<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>">
                    <form id="formdiskon_<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>" action="<?= base_url('kursi_penumpang/diskonreservasi/') ?><?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="<?= $Nomorkursi[8]['nomor_telepon']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $Nomorkursi[8]['nama']; ?>">
                      </div>

                      <div class="form-group">

                        <select name="diskon" id="" class="form-control">
                          <option value="" disabled selected>Data Diskon</option>
                          <?php foreach ($diskon as $d) : ?>
                            <option value="<?= $d['id_diskon'] ?>" <?= ($d['id_diskon'] == $Nomorkursi[8]['id_diskon']) ? 'selected' : '' ?>>
                              <?= $d['nama_diskon']; ?>
                            </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm" id="<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>" onclick="Formuntukdiskon1(this)">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="remove_form_tiket('<?= $Nomorkursi[8]['tipe_reservasi'] == 'Putih' ? $Nomorkursi[8]['id_kursi_parent'] : $Nomorkursi[8]['id_kursi'] ?>')">Batal</button>
                      </div>


                    </form>
                  </div>


                </div>





              </div>
            <?php else : ?>
              <div class="border p-2 rounded ">
                <div class="empty-seat-card">
                  <div class="d-flex justify-content-between">
                    <h4>8</h4>
                  </div>

                  <button class="btn btn-sm btn-primary" onclick="buatReservasi(<?php echo $Nomorkursi[8]['id_kursi']; ?>)" id="pickSeats_<?= $Nomorkursi[8]['id_kursi']; ?>"><i class="fas fa-user-plus"></i> Pilih</button>
                </div>
              </div>
            <?php endif; ?>

          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="modal" id="kursiReservasi">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Konten modal -->
      <?php
      $tanggal_reservasi = $reservasi['tanggal_reservasi'];
      $jam_reservasi = $reservasi['jam'];
      $waktuReservasi = strtotime("$tanggal_reservasi $jam_reservasi");
      $waktuSaatIni = time();
      if ($waktuReservasi < $waktuSaatIni) { ?>
        <div class="modal-body">
          <div class="alert alert-danger">
            <span class="fw-bold">Reservasi telah usai.</span>
          </div>
          <!-- Tombol close modal -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>

      <?php
      } else {
      ?>
        <form id="formReservasi" action="<?= route_to('simpanReservasi') ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="nomor_telepon">Nomor Telepon</label>

              <div>
                <select name="nomor_telepon" id="nomorTelepon" class="form-control">
                  <option value="">Pilih Nomor Telepon</option>

                </select>

              </div>


            </div>

            <div class="form-group">
              <label for="nama">Nama</label>

              <div>
                <select name="nama" id="nama" class="form-control">


                </select>

              </div>
              <!-- <input type="text" name="nama" id="nama" class="form-control"> -->


            </div>

            <input type="hidden" name="kursi_reservasi" id="kursiReservasiInput">

            <script>
              $(document).ready(function() {
                // Fetch data using Ajax from the controller endpoint
                $.ajax({
                  url: '/pelanggan/getAllPelanggan', // Replace this with your server endpoint URL
                  method: 'GET',
                  dataType: 'json',
                  success: function(data) {
                    // Add new options based on the fetched data
                    var nomortelepon = [{
                      id: '',
                      text: 'Pilih Salah Satu Nomor Telepon'
                    }];
                    var nama = [{
                      id: '',
                      text: 'Pilih Salah Satu Nama'
                    }];

                    $.each(data, function(index, pelanggan) {
                      nomortelepon.push({
                        id: pelanggan.no_telepon,
                        text: pelanggan.no_telepon
                      });
                      nama.push({
                        id: pelanggan.nama,
                        text: pelanggan.nama
                      });
                    });

                    // Initialize Select2 for 'nomorTelepon'
                    $('#nomorTelepon').select2({
                      placeholder: "Pilih Nomor Telepon",
                      allowClear: true, // Enable the clear button
                      tags: true,
                      data: nomortelepon
                    });

                    // Initialize Select2 for 'nama'
                    $('#nama').select2({
                      placeholder: "Pilih Nama",
                      allowClear: true, // Enable the clear button
                      tags: true,
                      data: nama
                    });
                    var dataoutput = data;
                    // Filter the elements with nomor_telepon equal to '098010'
                    


                    // Synchronize the selected options in both inputs
                    $('#nomorTelepon').on('select2:select', function(event) {
                      $.each(data, function(index, pelanggan) {
                        var filteredData = dataoutput.filter(function(pelanggan) {
                          return pelanggan.no_telepon === event.params.data.id;
                        });
                 
                        const selectedValue = filteredData[0].nama;
                        $('#nama').val(selectedValue).trigger('change');
                        // console.log(filteredData);
                      });



                    });

                    $('#nama').on('select2:select', function(event) {
                 

                      $.each(data, function(index, pelanggan) {
                        var filteredData = dataoutput.filter(function(pelanggan) {
                          return pelanggan.nama === event.params.data.id;
                        });
                 
                        const selectedValue = filteredData[0].no_telepon;
                        $('#nomorTelepon').val(selectedValue).trigger('change');
                        // console.log(filteredData);
                      });
                     
                    });
                  },

                  error: function() {
                    // Handle error if necessary
                  }
                });

              });
            </script>
          </div>

          <!-- Add the following CSS to style the Select2 dropdown -->



          <!-- Tombol close modal -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary" id="tmblsimpanreservasi">Simpan</button>
           

      

          </div>
        </form>
      <?php
      }
      ?>
    </div>
  </div>
</div>


<!-- Modal Reservation Detail-->
<div class="modal fade" id="ReservationDetail" tabindex="-1" role="dialog" aria-labelledby="ReservationDetail1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ResevationDetailLabel">Reservasi #1231313131 </h5>
        <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body pt-0">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="reservatin-info-tab" data-toggle="tab" href="#reservatin-info" role="tab" aria-controls="reservatin-info" aria-selected="true">Reservasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="reservation-log-tab" data-toggle="tab" href="#reservation-log" role="tab" aria-controls="reservation-log" aria-selected="false">Log</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-2" id="reservatin-info-body" role="tabpanel" aria-labelledby="reservatin-info-tab">

          </div>

          <div class="tab-pane fade" id="reservation-log" role="tabpanel" aria-labelledby="reservation-log-tab">
            <strong class="m-4">Logs</strong>
            <ul class="list-group">
              <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                new reservation by <span class="text-primary">Laelia Hasanah</span> <span class="float-right">1 hari yang lalu</span>
              </li>
              <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                payment by <span class="text-primary">Laelia Hasanah</span> <span class="float-right">1 hari yang lalu</span>
              </li>
              <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                Whatasapp by <span class="text-primary">Laelia Hasanah</span> <span class="float-right">1 hari yang lalu</span>
              </li>
              <li class="list-group-item border-right-0 border-left-0 bg-transparent">
                customer checkin 4 by <span class="text-primary">Mohammad Azhar Pratama</span> <span class="float-right">22 jam yang lalu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <div class="footer" id="reservatin-info-footer">

        </div>


        <button type="button" data-toggle="modal" data-target="#Reschedule" data-backdrop="static" class="btn btn-warning mr-2" onclick="openRescheduleModal()">
          <span class="d-none d-sm-block">Reschedule</span>
        </button>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
         <button type="button" class="btn btn-primary">Simpan</button> -->
      </div>
    </div>
  </div>
</div>


<!-- Modal Reschedule -->
<div class="modal fade" id="rescheduleModal" tabindex="-1" role="dialog" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ResevationDetailLabel">Reschedule #53281</h5>
        <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="bodyReschedule">
      </div>
    </div>
  </div>
</div>


<script>
  function checkInConfirmation(event, id) {
    event.preventDefault(); // Mencegah tindakan default tautan

    if (confirm('Penumpang sudah datang?')) {
      var url = event.target.href;
      var url = "/checkinreservasi/" + id;
      console.log(url);
      // Buat permintaan Ajax
      var xhr = new XMLHttpRequest();
      xhr.open('GET', url, true);
      xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
          // Tanggapan dari server berhasil diterima
          sessionStorage.setItem('statusperubahanreservasi', true);
          // Tambahkan kode untuk memperbarui tampilan atau melakukan tindakan lain setelah check-in berhasil
        } else {
          // Terjadi kesalahan saat memproses permintaan
          console.error('Terjadi kesalahan saat melakukan check-in.');
        }
      };
      xhr.onerror = function() {
        // Terjadi kesalahan saat mengirim permintaan
        console.error('Terjadi kesalahan saat mengirim permintaan.');
      };
      xhr.send();
    }

  }
</script>
<script>
  function konfirmasiPembayaran(event) {
    event.preventDefault(); // Mencegah tindakan default formulir

    if (confirm('Apakah Anda yakin tiket sudah terbayar?')) {
      var url = event.target.action;

      // Buat permintaan Ajax
      var xhr = new XMLHttpRequest();
      xhr.open('GET', url, true);
      xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
          // Tanggapan dari server berhasil diterima
          sessionStorage.setItem('statusperubahanreservasi', true);
        } else {
          // Terjadi kesalahan saat memproses permintaan
          console.error('Terjadi kesalahan saat melakukan konfirmasi pembayaran.');
        }
      };
      xhr.onerror = function() {
        // Terjadi kesalahan saat mengirim permintaan
        console.error('Terjadi kesalahan saat mengirim permintaan.');
      };
      xhr.send();
    }

    return false; // Mencegah submit formulir
  }
</script>
<script>
  function buatReservasi(id) {
    $('#kursiReservasi').modal('show');
    $('#kursiReservasiInput').val(id);
    // Mengirim data ke server menggunakan AJAX

  }
</script>

<script>
  $(document).ready(function() {

    // Event saat formulir dikirim (submit)
    $(document).on('click', '#tmblsimpanreservasi', function(e) {
      e.preventDefault(); // Mencegah perilaku default tombol submit

      // Mengambil data formulir


      var formData = $('#formReservasi').serialize();
      console.log(formData);

      // // Mendapatkan data dari formulir
      // var kursiReservasi = $("#kursiReservasiInput").val();

      // var nomorTelepon = $("#nomorTelepon").val();
      // var nama = $("#nama").val();

      // Mengirim data ke server menggunakan AJAX
      $.ajax({
        url: $('#formReservasi').attr('action'),
        method: "POST",
        // data: {
        //   kursi_reservasi: kursiReservasi,
        //   nomor_telepon: nomorTelepon,
        //   nama: nama
        // },
        data: formData,
        success: function(response) {

          // Menghandle respons dari server, misalnya menampilkan pesan sukses    
          $('#kursiReservasi').modal('hide');
          sessionStorage.setItem('statusperubahanreservasi', true);

          // $.ajax({
          //   url: "<?php echo base_url('reservation/getReservasi/') . $idReservasi; ?>", // URL ke controller untuk memuat HTML
          //   type: "GET",
          //   success: function(response) {
          //     $('#kursiReservasi').modal('hide');
          //     $('#kursi_pelanggan').html(response); // Mengisi div dengan HTML yang diterima dari controller
          //   },
          //   error: function(xhr, status, error) {
          //     console.error(xhr.responseText); // Menampilkan pesan error jika terjadi kesalahan
          //   }
          // });
        },
        error: function() {
          // Menghandle error, misalnya menampilkan pesan error
          alert("Terjadi kesalahan saat menyimpan data");
        }
      });

      // Menutup modal
      $("#myModal").modal("hide");
    });
  });
</script>

<script>
  function openRescheduleModal(id) {
    $('#exampleModal').modal('hide'); // Menutup modal pertama
    $('#rescheduleModal').modal('show'); // Menampilkan modal reschedule
  }

  function openModal(id) {
    $('#reservasiId').val(id); // Mengisi value field dengan ID yang ditangkap
    $('#ReservationDetail').modal('show'); // Menampilkan modal

    $.ajax({
      url: 'kursipenumpang/getList/' + id, // Ganti dengan URL yang sesuai
      method: 'GET', // Ganti dengan metode HTTP yang sesuai
      dataType: 'json',
      success: function(response) {

        // Mengisi elemen dengan ID inforeservasi dengan HTML yang diterima dari AJAX
        $('#reservatin-info-body').html(response.html);
        // Mengisi elemen lain dengan ID tertentu dengan HTML yang diterima dari AJAX
        $('#reservatin-info-footer').html(response.html2);
      },
      error: function() {
        // Callback fungsi ini akan dijalankan jika terjadi kesalahan saat permintaan Ajax
        console.log('Error: Gagal mengambil data dari server');
      }
    });

    $.ajax({
      url: "kursipenumpang/reschedule/" + id,
      method: "GET",
      success: function(response) {

        $('#bodyReschedule').html(response); // Mengisi div dengan HTML yang diterima dari controller
      },
      error: function() {
        // Menghandle error, misalnya menampilkan pesan error
        alert("Terjadi kesalahan saat memuat data");
      }
    });
  }
</script>

<script>
  function edit_form_tiket(id) {

    $('#informasitiketheader_' + id).addClass('d-none');
    $('#informasitiketbody_' + id).addClass('d-none');
    // Tampilkan form edit
    $('#formedit_' + id).show();
  }

  function remove_form_tiket(id) {

    $('#informasitiketheader_' + id).removeClass('d-none');
    $('#informasitiketbody_' + id).removeClass('d-none');
    // Tampilkan form edit
    $('#formedit_' + id).hide();
  }
</script>


<script>
  function confirmCancellation(event, id) {
    event.stopPropagation();

    if (confirm('Yakin batalkan tiket ini?')) {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/reservasi/batalkan/' + id, true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          // Tindakan yang ingin dilakukan setelah permintaan berhasil

          // var kursireservasi = document.getElementById('tiketreservasi').innerHTML = xhr.responseText
          sessionStorage.setItem('statusperubahanreservasi', true);

        } else {
          // Tindakan yang ingin dilakukan jika terjadi kesalahan
          var response = JSON.parse(xhr.responseText);
          console.log('Pesan Kesalahan:', response.message);
        }
      };
      xhr.onerror = function() {
        console.log('Terjadi kesalahan pada permintaan');
      };
      xhr.send()
    }
  }
</script>
<script>
  function Formuntukdiskon1(element) {
    console.log(element.id);
    var idkursi = element.id;
    var form = document.getElementById('formdiskon_' + idkursi);
    console.log(form);
    if (form instanceof HTMLFormElement) {
      var formData = new FormData(form);

      var formUrl = form.action;
      var xhr = new XMLHttpRequest();
      xhr.open('POST', formUrl, true);
      xhr.onload = function() {
        if (xhr.status === 200) {

          // var kursireservasi = document.getElementById('tiketreservasi').innerHTML = xhr.responseText
          sessionStorage.setItem('statusperubahanreservasi', true);

          // Handle respons sukses di sini
        } else {
          console.log('Error:', xhr.status);
          // Handle respons error di sini
        }
      }
      xhr.onerror = function() {
        console.log('Request Error');
        // Handle respons error di sini
      };
      xhr.send(formData);
    } else {
      console.log("Form element not found or invalid.");
    }

  }
</script>