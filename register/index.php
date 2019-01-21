<?php
include('../header.php'); // mengambil data css yang berada pada file header.php
?>
<div class="col-lg-9">

	<div class="card card-outline-secondary my-4">
		<div class="card-header">
			Halaman Daftar !
		</div>
		<div class="card-body">
			<center>
				<?php
				include'../lib/koneksi.php';
				session_start();
				if(!empty($_SESSION['email'])){
					header('location: /register/index.php');
				} 
				?>	
				<?php 
				if(isset($_GET['reg'])) {
					if($_GET['reg'] == "1") {
						echo 'REGISTER GAGAL';
					}else if($_GET['reg'] == "0") {
						echo 'REGISTER BERHASIL!';
					}
				}
				?>
				<form action="reg.php" method="post">
					<div class="form-group">
						<input type="text" name="email" placeholder="Enter your Email" required>
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Enter your Password" required>
					</div>
				</br>
				<button class="submit" id="">SUBMIT</button>
			</form>
		</center>
	</div>
</div>
</div>
</div>

</div>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
