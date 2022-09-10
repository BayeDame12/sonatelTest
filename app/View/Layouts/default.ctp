<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title_for_layout; ?></title>

	<?php echo $this->Html->charset();?>
	<?=  $this->Html->css('bootstrap.min');?>
	<?=  $this->Html->script('bootstrap');?>

</head>
<body>
<div class="wrapper ">
	<?php echo $this->fetch('content');?>
</div>
</body>
<?php echo $this->fetch('script');?>
</html>
