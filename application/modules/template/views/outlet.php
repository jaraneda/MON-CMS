<!DOCTYPE html>
<html lang="es">
<?php echo $this->load->view ('_base/header'); ?>
<body>
  <div id="wrapper">
    <?php echo $this->load->view ('_base/nav'); ?>
    <div id="page-wrapper">
    	<div class="container-fluid">
      		<?php echo $outlet; ?>
        </div>
		<!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper --> 
  <?php echo $this->load->view ('_base/footer'); ?>
</body>
</html>