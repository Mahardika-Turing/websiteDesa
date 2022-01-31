
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>asset/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url()?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url()?>asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url()?>asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>asset/js/main.js"></script>

  <!-- JS Diagram -->

  <?php
  $halamanSession = $this->session->userdata("halaman");
  if($halamanSession == "DataPekerjaan"){?>
  		<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Warga yang Bekerja", "Warga yang tidak bekerja"],
				datasets: [{
					label: '',
					data: [
					<?php
					foreach ($data as $d) {?>
						<?= $d->bekerja?>		
					<?php	
					}	
					?>
					,
					<?php
					foreach ($data as $d) {?>
						<?= $d->tidakBekerja?>		
					<?php	
					}	
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
  <?php
  }else if($halamanSession == "DataPendidikanKeluarga"){
  ?>
  <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Sekolah Dasar", "Sekolah Menengah Pertama","Sekolah Menengah Atas","Diploma","Strata 1","Strata 2","Strata 3"],
				datasets: [{
					label: '',
					data: [
					<?php
					foreach ($data as $d) {?>
						<?= $d->sd?>		
					<?php	
					}	
					?>
					,
					<?php
					foreach ($data as $d) {?>
						<?= $d->smp?>		
					<?php	
					}	
					?>
					,
					<?php
					foreach ($data as $d) {?>
						<?= $d->sma?>		
					<?php	
					}	
					?>
					,
					<?php
					foreach ($data as $d) {?>
						<?= $d->diploma?>		
					<?php	
					}	
					?>
					,
					<?php
					foreach ($data as $d) {?>
						<?= $d->strata1?>		
					<?php	
					}	
					?>
					,
					<?php
					foreach ($data as $d) {?>
						<?= $d->strata2?>		
					<?php	
					}	
					?>
					,
					<?php
					foreach ($data as $d) {?>
						<?= $d->strata3?>		
					<?php	
					}	
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
                    'rgba(254,154,1, 0.2)',
                    'rgba(26,255,83, 0.2)',
                    'rgba(26,255,83, 0.2)',
                    'rgba(26,255,83, 0.2)',
                    'rgba(26,255,83, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
                    'rgba(254,154,1, 1)',
                    'rgba(26,255,83, 1)',
                    'rgba(26,255,83, 1)',
                    'rgba(26,255,83, 1)',
                    'rgba(26,255,83, 1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	<?php
	}else if($halamanSession == "DataAgama"){ ?>
	  <script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["Agama Islam", "Agama Kristen","Agama Katolik","Agama Hindu","Agama Budha","Agama Konghucu"],
					datasets: [{
						label: '',
						data: [
						<?php
						foreach ($data as $d) {?>
							<?= $d->muslim?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->kristen?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->katolik?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->hindu?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->budha?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->konghucu?>		
						<?php	
						}	
						?>
						],
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
	                    'rgba(254,154,1, 0.2)',
	                    'rgba(26,255,83, 0.2)',
	                    'rgba(26,255,83, 0.2)',
	                    'rgba(26,255,83, 0.2)',
						],
						borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
	                    'rgba(254,154,1, 1)',
	                    'rgba(26,255,83, 1)',
	                    'rgba(26,255,83, 1)',
	                    'rgba(26,255,83, 1)',
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		</script>
	<?php
	}else if($halamanSession == "DataJenisKelamin"){ ?>
	  <script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["Jumlah Pria", "Jumlah Wanita"],
					datasets: [{
						label: '',
						data: [
						<?php
						foreach ($data as $d) {?>
							<?= $d->pria?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->wanita?>		
						<?php	
						}	
						?>
						],
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						],
						borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		</script>
	<?php
	}else if($halamanSession == "DataWargaNegara"){ ?>
	  <script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: [" < 5 Tahun","6 > 10 Tahun","10 > 20 Tahun","20 > 30 Tahun","30 > 50 Tahun","50 > 100 Tahun"],
					datasets: [{
						label: '',
						data: [
						<?php
						foreach ($data as $d) {?>
							<?= $d->umur1?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->umur2?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->umur3?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->umur4?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->umur5?>		
						<?php	
						}	
						?>,
						<?php
						foreach ($data as $d) {?>
							<?= $d->umur6?>		
						<?php	
						}	
						?>
						],
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						],
						borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(54, 162, 235, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		</script>
	<?php
	}
	?>
</body>

</html>