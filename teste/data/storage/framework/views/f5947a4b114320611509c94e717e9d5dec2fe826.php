<?php $__env->startSection( ' title ' , ' h1 ' ); ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page princi</title>
    <link href="css/base.css" type="text/css" rel="stylesheet"/>
</head>
<body>
</body>
<header>
    </br><h1>Site de Tanguy Colin</h1></br>
</header>

<div class="footer">
    <h5>Copyright &copy; Site de tanguy 2018</h5>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>