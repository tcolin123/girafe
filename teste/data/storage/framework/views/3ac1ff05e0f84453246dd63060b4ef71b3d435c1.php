<?php $__env->startSection( ' title ' , ' h1 ' ); ?>
<?php $__env->startSection('content'); ?>
<h1>Offre</h1>
<div id="form">
    <?php echo Form::open(['url' => '/added']); ?>

   
    <div class="create">
    	<?php echo e(Form::label('Name', 'Genre')); ?>

    	<?php echo e(Form::text('Name', '...')); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::label('Valeur1', 'Artiste')); ?>

    	<?php echo e(Form::text('Valeur1', '...')); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::label('Valeur2', 'Description')); ?>

    	<?php echo e(Form::text('Valeur2', '...')); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::submit('Ajouter')); ?>

    </div>
   <?php echo Form::close(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>