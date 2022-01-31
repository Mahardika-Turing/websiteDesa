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
  <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Jumlah Laki-laki", "Jumlah Perempuan","Jumlah bekerja","Jumlah tidak bekerja"],
				datasets: [{
					label: '',
					data: [10,20,30,40],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
                    'rgba(254,154,1, 0.2)',
                    'rgba(26,255,83, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
                    'rgba(254,154,1, 1)',
                    'rgba(26,255,83, 1)'
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
</body>

</html>