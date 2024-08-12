<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div style="display:flex; justify-content:between">
    <div><?= $email ?></div>
    <div><a href="<?= base_url('logout') ?>">Logout</a></div>
  </div>
  <div><?= $text ?></div>
  <div><?= explode('@', $email)[0] ?></div>
  <div id="time"></div>
  <script>
    document.querySelector('#time').innerHTML = new Date();
  </script>
</body>

</html>