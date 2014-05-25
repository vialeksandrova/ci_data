<html>
<head>
 <title>New Document</title>
</head>
<body>
<p>My view has been loaded</p>
	<?php foreach ($rows as $r) :?>
    <h1><?php echo $r->title; ?></h1>
    <div><?php echo $r->contents; ?></div>
    <?php endforeach; ?>
</body>
</html>
