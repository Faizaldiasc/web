 <div class="col-md-8 col-sm-* col-xs-*" style="margin-left: 280px; padding: 0; margin-bottom: 100px;">

            <h3 class="">Account Setting</h3>
            <hr>
            <?php
                            foreach ($data->result_array() as $row) :
                            $id=$row['id_user'];
                            $username=$row['username_user'];
                            $pass=$row['password_user'];
                            $nama=$row['nama_user'];
                            $email=$row['email_user'];
                            $cp=$row['cp_user'];
                            $foto=$row['foto_user'];
            ?>
            <form action="<?php echo base_url()?>Controller_User/editProfileUser/" method="post" enctype="multipart/form-data">
            <div class="form-group row" style="margin-top: 40px;">
                <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_user" value="<?php echo $id?>">
                  <input type="text" class="form-control" id="inputEmail" id="" name="username_user" value="<?php echo $username;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail" id="" name="nama_user" value="<?php echo $nama;?>">
                </div>
              </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail" id="" name="email_user" value="<?php echo $email;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kontak</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputContact" id="" name="cp_user" value="<?php echo $cp;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword" id="" name="password_user" value="<?php echo $pass;?>">
                </div>
              </div>
                  <?php
                            $id_user=$this->session->userdata('id');
                            $temp = $this->db->query("SELECT * FROM tbl_user WHERE id_user='$id_user'");
                            $temps = $temp->row_array();
                 ?>

                <img src="<?php echo base_url().'assets/registerUser/images/'.$temps['foto_user'];?>" width = 200px; ><br>
                <div class="form-group row">
                <input type="file" name="foto_user" class="form-control-file" id="exampleFormControlFile1" style="margin-left: 15px;">  
              </div> 
              <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 30px;">Perbarui Profile       
              </button>
            </form>
        
      </div> 
        <?php endforeach; ?>
    </div> 
    <script src="<?php echo base_url()?>assets/halamanUtama/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/active.js"></script>
  </div>