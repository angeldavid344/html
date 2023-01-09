Seccion para crear empleados
<form action="<?php echo e(url('/empleados')); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>


    <label for="Nombre"><?php echo e('Nombre'); ?></label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br/>

    <label for="ApellidoPaterno"><?php echo e('Apellido Paterno'); ?></label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="">
    <br/>

    <label for="ApellidoMaterno"><?php echo e('Apellido Materno'); ?></label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="">
    <br/>

    <label for="Correo"><?php echo e('Correo'); ?></label>
    <input type="email" name="Correo" id="Correo" value="">
    <br/>

    <label for="Foto"><?php echo e('Foto'); ?></label>
    <input type="file" name="Foto" id="Foto" value="">
    <br/>

    <input type="submit" value="Agregar">

    <a href="<?php echo e(url('empleados')); ?>">Regresar</a>

</form>
<?php /**PATH /var/www/html/proyectoLaravel/Sistema-Prueba/resources/views/empleados/create.blade.php ENDPATH**/ ?>