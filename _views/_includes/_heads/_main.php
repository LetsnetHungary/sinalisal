<!DOCTYPE html>
<html>
	<head>
		<meta charset = "<?php echo $this->charset; ?>">
		<title><?php echo $this->title; ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
		<link rel="stylesheet" type = "text/css" href="/_asstes/css/n.css">
		<link rel='shortcut icon' type='image/x-icon' href='../../_assets/img/favicon.ico' />

<?php
if($this->seo != null)
{
foreach($this->seo->meta as $meta => $data)
{
?>
		<meta name="<?php echo $meta; ?>" content = "<?php echo $data; ?>">
<?php
}

foreach($this->seo->og as $og => $data)
{
?>
		<meta property="og:<?php echo $og; ?>" content = "<?php echo $data; ?>"/>
<?php
}
}
?>

<?php
if($this->cssdata != null)
{
foreach($this->cssdata as $cssdata)
{
?>
		<link type="text/css" rel="stylesheet" href = "<?php echo $cssdata ?>">
<?php
}
}
?>
<?php
if($this->jsdata != null)
{
foreach($this->jsdata as $jsdata)
{
?>
      <script type="text/javascript" src = "<?php echo $jsdata ?>"></script>
<?php
}
}
?>
	</head>
	<body>
