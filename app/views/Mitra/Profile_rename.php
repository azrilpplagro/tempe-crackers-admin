
<?php $this->view("Navbar",[]); ?>


<div class="main">
  <form action="" method="POST" style="padding-left: 30px;">
    <table class="table table-striped table-hover">
        <input type="hidden" name="email" value="<?= $data['mitra_data']['email'] ?>">
        <tr>
          <td><h1>Profile</h1></td>
          <td><img src="<?= BASE_URL ?>/icon/null_photo.png" style="width: 50px;cursor:pointer" alt=""></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?= $data['mitra_data']['email'] ?></td>
        </tr>
        <tr>
          <td>No Telepon</td>
          <td><?= $data['mitra_data']['no_telepon'] ?></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><?= $data['mitra_data']['username'] ?></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td><?= $data['mitra_data']['nama_lengkap'] ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><?= $data['mitra_data']['alamat'] ?>, <?= 
            $this->model("Mitra_model")->get_spesifik_alamat(
              $data['mitra_data']['desa_id'],$data['mitra_data']['kecamatan_id'], $data['mitra_data']['kabupaten_id'],$data['mitra_data']['provinsi_id'],$data['mitra_data']['negara_id']); 
          ?></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><?= $data['mitra_data']['tanggal_lahir'] ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
              <?php 
                if($data['mitra_data']['jenis_kelamin_id'] == 1){
                  echo  'Laki-laki';
                }else{
                  echo  'Perempuan';
                }  
              ?>
          </td>
        </tr>
        <tr>
          <td>Status Akun</td>
          <td>
            <?php 
                if($data['mitra_data']['status_akun_id'] == 1){
                  echo  'Aktif';
                }else{
                  echo  'Tidak Aktif';
                }  
              ?>
          </td>
        </tr>
      </table>
    <br>
    <a href="<?= BASE_URL ?>/Mitra/edit/<?= $data['mitra_data']['username'] ?>"  class="btn btn-dark" style="width: 300px;">Edit</a>
  </form>
</div>