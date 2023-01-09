

<?php if(Session::has('mensaje')): ?><?php echo e(Session::get('mensaje')); ?>

<?php endif; ?>

<a href="<?php echo e(url('empleados/create')); ?>">Agregar Empleado</a>

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
        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td>
                <img src="<?php echo e(asset('storage/uploads').'/'.$empleado->Foto); ?>" alt="" width="200"
            </td>
            <td><?php echo e($empleado->Nombre); ?></td>
            <td><?php echo e($empleado->ApellidoPaterno); ?></td>
            <td><?php echo e($empleado->ApellidoMaterno); ?></td>
            <td><?php echo e($empleado->Correo); ?></td>
            <td>

            <a href="<?php echo e(url('/empleados/'.$empleado->id.'/edit')); ?>">
                editar
            </a>

                |

                <form method="post" action="<?php echo e(url('/empleados/'.$empleado->id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button type="submit" onclick="return confirm('quieres Borrar?')" >Borrar</button>

                </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH /var/www/html/proyectoLaravel/Sistema-Prueba/resources/views/empleados/index.blade.php ENDPATH**/ ?>