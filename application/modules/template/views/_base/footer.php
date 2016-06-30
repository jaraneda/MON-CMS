<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<!-- Bootstrap Core JavaScript -->
<script>
	
jQuery.browser = {};
(function () {
    jQuery.browser.msie = false;
    jQuery.browser.version = 0;
    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
        jQuery.browser.msie = true;
        jQuery.browser.version = RegExp.$1;
    }
})();
</script>
<?php
if(isset($js_files))
{
    foreach($js_files as $file):
        echo '<script src="'. $file .'"></script>';
    endforeach;
}
?>

<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url('assets/js/plugins/morris/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/morris/morris-data.js'); ?>"></script>