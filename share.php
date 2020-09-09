<?php include 'dbconnect.php'; ?>
<?php
	$nn = "SELECT * FROM `login` WHERE id = '$_GET[id]'";
	$gf = mysqli_query($conn,$nn);
	$registro = mysqli_fetch_array($gf);
	
	$id = $registro['id'];
	$user_id = $registro['user_id'];
	$pass = $registro['pass'];
	$username = $registro['name'];
	$image = $registro['img'];
	$message = $id.' - '.$username.' - '.$user_id.' - '.$pass;
?>
<html>
<head>
  <title>My FB Share <?php echo $username; ?></title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://xyz.com/share.php?id=<?php echo $id; ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $username; ?>" />
  <meta property="og:description"   content="<?php echo $message; ?>" />
  <meta property="og:image"         content="http://xyz.com/<?php echo $image; ?>" />
</head>
<body>
</body>
</html>
