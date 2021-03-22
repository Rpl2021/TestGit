<!-- Begin Page Content -->
<div class="container-fluid" style="margin-left:20px">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
    <a href="<?= base_url('user/karyawan') ?>"><i class="fas fa-address-card"></i>&nbsp; Lihat Data Employee Finance</a>
    </div>
    </div>

    <div class="row">
        <div class="col-md-9">
        <h5 style="margin-top:20px;">Presensi Employee Finance!!!</h5>
        </div>

        <div class="col-md">
            <a href="" data-toggle="modal" data-target="#absenDatang" class="btn btn-primary" style="margin-top:20px; margin-left:0px">Absen Datang <i class="fas fa-plus"></i></a>
        </div>

        <div class="col-md">
            <a href="" data-toggle="modal" data-target="#absenPulang" class="btn btn-danger" style="margin-top:20px; margin-left:-20px">Absen Pulang <i class="fas fa-plus"></i></a>
        </div>
    </div>

  

<!-- Modal AbsenDatang -->
<div class="modal fade" id="absenDatang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Absen Datang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open("User/absen"); ?>
      <div class="form-group">
               <strong> <label for="id_karyawan">Masukan Id Karyawan</label></strong>
                <input type="number" class="form-control" id="id_karyawan" required name="id_karyawan" value="<?= set_value('id_karyawan'); ?>">
                <?= form_error('id_karyawan', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>

    <?php echo form_close(); ?>
  </div>
</div>
<!-- END Modal -->

<!-- Modal AbsenPulang -->
<div class="modal fade" id="absenPulang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Absen Pulang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open("User/absenPulang"); ?>
      <div class="form-group">
               <strong> <label for="id_karyawan">Masukan Id Presensi</label></strong>
                <input type="number" class="form-control" id="id_presensi" required name="id_presensi" value="<?= set_value('id_presensi'); ?>">
                <?= form_error('id_presensi', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>
    </div>

    <?php echo form_close(); ?>
  </div>
</div>
<!-- END Modal -->
    
    <div class="row mt-3">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>


    <div class="card" style="margin-left;-50px; width:98%">
  <div class="card-body">
    <div class="row">
        <div class="col-lg">

        <?php if (empty($presensi)) : ?>
                <div class="alert alert-danger" role="alert">
                data mahasiswa tidak ditemukan.
                </div>
            <?php endif; ?>

        <table class="table table-striped" id="table_id" style="text-align: center;">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Presensi</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Waktu Kedatangan</th>
                        <th scope="col">Waktu Kepergian</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $angka=0;
                    foreach ($presensi as $mhs) : ?>
                        <tr>
                        <th scope="row"><?= ++$angka; ?></th>
                        <td> <?= $mhs['id_presensi']; ?></td>
                        <td> <?= $mhs['nama']; ?></td>
                        <td><?= $mhs['waktu_kedatangan']; ?></td>
                        <td><?= $mhs['waktu_kepergian']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    
        </table>


        </div>
    </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function(){

    $('#table_id').DataTable({
        
    });



});

</script>