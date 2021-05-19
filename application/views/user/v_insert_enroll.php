<section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row"> 
                        <form action="<?php echo base_url() ?>Controller_User/insert_enroll/<?php echo $id?>" method="post" enctype="multipart/form-data">
                        <label for="uName">Enrollment</label>
                        <input id="uName" name="enrollment_key" type="text" class="form-control" required><br>
                    <button type="submit" class="button">
                      <span>Enrollment</span>
                      <i class="fa fa-check"></i>
                      </a>
                      </form>
               </div>
            </div>
        </section>