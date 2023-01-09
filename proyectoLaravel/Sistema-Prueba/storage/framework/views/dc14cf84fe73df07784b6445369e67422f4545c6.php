Inicio(Despliegue de datos)

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Accion</th>

        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $Usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td>
                <img src="<?php echo e(asset('storage/uploads').'/'.$Usuario->Foto); ?>" alt="" width="200"
            </td>
            <td><?php echo e($Usuario->Nombre); ?></td>
            <td><?php echo e($Usuario->ApellidoPaterno); ?></td>
            <td><?php echo e($Usuario->ApellidoMaterno); ?></td>
            <td><?php echo e($Usuario->Correo); ?></td>
            <td>

            <a href="<?php echo e(url('/empleados/'.$Usuario->id.'/edit')); ?>">
                editar
            </a>

                |

                <form method="get" action="<?php echo e(url('/empleados/destroy/'.$Usuario->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button type="submit" onclick="return confirm('quieres Borrar?')" >Borrar</button>

                </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH /var/www/html/proyectoLaravel/Sistema-Prueba/resources/views/Usuarios/index.blade.php ENDPATH**/ ?>