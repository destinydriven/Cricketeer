<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->fetch('title') ?></title>
	<?= $this->Html->meta('icon') ?>

	<?= $this->Html->css([
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', 
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css',
		'admin'
	]) ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
</head>
<body>
	<div class="container-fluid">
		<header class="row">
			<div class="col-md-12">
				<h1>Cricketeer: <?= $this->fetch('title') ?></h1>
			</div>
		</header>
		
		<?php echo $this->element('Admin/navigation');?>
		
		<div id="content" class="row">
			<div class="col-md-12">
				<?= $this->Flash->render() ?>
				<div class="row">
					<?= $this->fetch('content') ?>
				</div>
			</div>
		</div>
		
		<footer class="row">
			<div class="col-md-12">
				Cricketeer <?= date('Y');?>
			</div>
		</footer>
	</div>

	<div id="loading" style="display:none">
		<?php echo $this->Html->image('loading.gif', ['alt' => 'Loading..']);?><br>
		Loading...
	</div>
<?php
echo $this->Html->script([
	'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 
	'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js',
	'jquery-scrolltofixed-min',
	'mustache.js-0.8.2/mustache.js',
	'common',
	'admin'
]);
echo $this->fetch('script');
?>
</body>
</html>
