<?php
include('header2.php');
?>
        <div class="col-lg-9">

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Welcome !
            </div>
            <div class="card-body">
              <?php if($admin==0){ ?>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <?php } ?>
              <?php if($admin==1){ ?>
              <p>SELAMAT DATANG DI HALAMAN ADMIN</p>
              <hr>
              <?php } ?>
              <?php if($admin==0){ ?>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <?php } ?>
              <a href="#" class="btn btn-success">Leave a Review</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>