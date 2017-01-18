<?php if (!isset($_SESSION['ADMIN_USERNAME'])) {
			redirect('/Admin');
		} else { $MEMBER_ID = $_SESSION['ADMIN_USERNAME']; ?>
			<script>
				var MEMBER_ID = "<?php echo $MEMBER_ID ?>";
			</script>
<?php } ?>
<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>:: TUTOR SHORT - Admin ::</title>
<link rel="icon" type="image/ico" href="<?php echo base_url('assets/template/back/images/favicon.ico') ?>" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Stylesheets  -->
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url('assets/template/back/css/vendor/animsition.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/back/css/vendor/morphingsearch.css') ?>" />
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url('assets/template/back/css/main.css') ?>" />
<!--/ stylesheets -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<script type="text/javascript">
	var SITE_URL = "<?php echo site_url(); ?>";
</script>

<body id="oakleaf" class="main_Wrapper">
    <?php $this->load->view('back/template/navigator'); ?>
