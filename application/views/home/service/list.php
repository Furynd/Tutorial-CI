<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("home/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("home/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php // $this->load->view("home/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php // $this->load->view("home/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3 mx-5">
					<div class="card-header">
						<a href="<?php echo site_url('home/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
						<a href="<?php echo site_url('home/service/add') ?>"><i class="fas fa-plus"></i> Daftar</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama</th>
										<th>Asal</th>
										<th>Nomor</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1?>
									<?php foreach ($Service as $servc): ?>
									<tr>
										<td>
											<?php echo $no;
												$no = $no + 1;
											?>
										</td>

										<td width="150">
											<?php echo $servc->namaPendaftar ?>
										</td>
										<td>
											<?php echo $servc->asalPendaftar ?>
										</td>
										<td>
											<?php echo $servc->nomorPendaftar ?>
										</td>
										<td width="250">
											<!-- <a href="<?php //echo site_url('home/service/edit/'.$servc->servc_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php // echo site_url('home/service/delete/'.$servc->servc_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a> -->
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("home/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("home/_partials/scrolltop.php") ?>
	<?php $this->load->view("home/_partials/modal.php") ?>

	<?php $this->load->view("home/_partials/js.php") ?>

</body>

</html>