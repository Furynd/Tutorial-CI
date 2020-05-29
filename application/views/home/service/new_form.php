<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("home/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("home/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php ///$this->load->view("home/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php ///$this->load->view("home/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php elseif ($this->session->flashdata('error')): ?>
					<div class="alert alert-warning" role="alert">
					<?php echo $this->session->flashdata('error'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('home/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('home/service/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="namaPendaftar">Nama</label>
								<input class="form-control <?php echo form_error('namaPendaftar') ? 'is-invalid':'' ?>"
								 type="text" name="namaPendaftar" placeholder="masukkan nama anda disini" />
								<div class="invalid-feedback">
									<?php echo form_error('namaPendaftar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="asalPendaftar">Asal</label>
								<input class="form-control <?php echo form_error('asalPendaftar') ? 'is-invalid':'' ?>"
								 type="text" name="asalPendaftar" placeholder="asal" />
								<div class="invalid-feedback">
									<?php echo form_error('asalPendaftar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nomorPendaftar">Nomor</label>
								<input class="form-control <?php echo form_error('nomorPendaftar') ? 'is-invalid':'' ?>"
								 type="number" name="nomorPendaftar" min="0" placeholder="nomor telepon" />
								<div class="invalid-feedback">
									<?php echo form_error('nomorPendaftar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jadwal">Jadwal</label>
								<select class="custom-select d-block w-100 <?php echo form_error('jadwal') ? 'is-invalid':'' ?> " name="jadwal">
									<option value="">Pilih Jadwal</option>
									<?php foreach ($jam as $jdwl): ?>
									<option value=" <?php echo $jdwl ?> "> <?php echo $jdwl ?> </option>
									<?php endforeach; ?>
									<div class="invalid-feedback">
										<?php echo form_error('jadwal') ?>
									</div>
								</select>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("home/_partials/js.php") ?>

</body>

</html>