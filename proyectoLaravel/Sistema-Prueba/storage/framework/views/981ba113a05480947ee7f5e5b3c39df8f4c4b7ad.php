<form action="<?php echo e(url('/empleados/'. $empleado->id)); ?>" method="put" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>


    <label for="Nombre"><?php echo e('Nombre'); ?></label>
    <input type="text" name="Nombre" id="Nombre" value="<?php echo e($empleado->Nombre); ?>">
    <br/>

    <label for="ApellidoPaterno"><?php echo e('Apellido Paterno'); ?></label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="<?php echo e($empleado->ApellidoPaterno); ?>">
    <br/>

    <label for="ApellidoMaterno"><?php echo e('Apellido Materno'); ?></label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="<?php echo e($empleado->ApellidoMaterno); ?>">
    <br/>

    <label for="Correo"><?php echo e('Correo'); ?></label>
    <input type="email" name="Correo" id="Correo" value="<?php echo e($empleado->Correo); ?>">
    <br/>

    <label for="Foto"><?php echo e('Foto'); ?></label>
    <br/>
    <?php echo e('uploads'.'/'.$empleado->Foto); ?>

    <br/>
    <input type="file" name="Foto" id="Foto" value="">
    <br/>
    <input type="submit" value="Modificar">
    <a href="<?php echo e(url('empleados')); ?>">Regresar</a>

</form>
<?php /**PATH /var/www/html/proyectoLaravel/Sistema-Prueba/resources/views/empleados/edit.blade.php ENDPATH**/ ?>