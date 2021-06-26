<html>
<head>
  <meta charset="UTF-8">
  <title>Hello Good Morning -<?php echo $_REQUEST['name']; ?></title>
</head>
<body>
  <?php
  $month = date($_REQUEST['m']);
  $n = $_REQUEST['m'];
  echo "$n";
  $arr1 = str_split($n);
  print_r(array_count_values($arr1));

  ?>
</body>

</html>