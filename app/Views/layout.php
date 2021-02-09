<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?= $this->e($title);?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<?=$this->section('css');?>
</head>
<body>
	<div class="container">
		<header>
			<h1>Framework W :: <?= $this->e($title);?></h1>
		</header>

		<section class="pb-3">
			<?= $this->section('main_content');?>
		</section>

		<footer>
		</footer>
	</div>
	
	<?= $this->section('js');?>
</body>
</html>