<?php $__env->startSection( ' title ' , ' h1 ' ); ?>
<?php $__env->startSection('content'); ?>
<h1>Mise a jour</h1>
<div id="form">
    <?php echo Form::open(['url' => '/majObjet']); ?>

    <?php echo e(Form::hidden('id', $objet['id'])); ?>


    <div class="create">
    	<?php echo e(Form::label('Name', 'genre')); ?>

    	<?php echo e(Form::text('Name', $objet['Name'])); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::label('Valeur1', 'artiste')); ?>

    	<?php echo e(Form::text('Valeur1', $objet['Valeur1'])); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::label('Valeur2', 'Nom de la musique')); ?>

    	<?php echo e(Form::text('Valeur2', $objet['Valeur2'])); ?>

    </div>


    <div class="create">
    	<?php echo e(Form::submit('Mettre a jour')); ?>

    </div>
   <?php echo Form::close(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>