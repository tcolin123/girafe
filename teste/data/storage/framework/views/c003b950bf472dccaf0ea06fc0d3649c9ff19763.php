<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/base.css')); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header>
      <nav>
        <div class="topnav">
            <li><a href="<?php echo e(url('/acceuil')); ?>">acceuil</a></li>
            <li><a href="<?php echo e(url('/liste')); ?>">liste</a></li>
            <li><a href="<?php echo e(url('/ajouter')); ?>">ajouter</a></li>
        </div>
      </nav>
  </header>

<main>
      <?php echo $__env->yieldContent('content'); ?>
  </main>

</body>
</html>