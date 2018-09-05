<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link href="css/skitter.css" type="text/css" media="all" rel="stylesheet" />
<link href="css/anasayfa.css" type="text/css" media="all" rel="stylesheet">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.skitter.min.js"></script>
</head>
<body>

<div class="skitter skitter-large with-dots" id="slayt">
  <ul>
    <li>
      <a href="index.php"><img src="img/slayt/s_1.jpg"/></a>
    </li>
    <li>
      <a href="index.php"><img src="img/slayt/s_2.jpg"/></a>
    </li>
    <li>
      <a href="index.php"><img src="img/slayt/s_3.jpg"/></a>
    </li>
	<li>
      <a href="index.php"><img src="img/slayt/s_4.jpg"/></a>
    </li>
	<li>
      <a href="index.php"><img src="img/slayt/s_5.jpg"/></a>
    </li>
  </ul>
</div>

<script>
$(function() {
  $('.skitter-large').skitter();
});
</script>
</body>
</html> 