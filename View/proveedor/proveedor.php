<h1 class="page-header">Proveedores</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">NIT</th>
            <th style="width:120px;">Nomre</th>
            <th style="width:120px;">Origen del Producto</th>
            <th style="width:120px;">Transporte</th>
            <th style="width:180px;">Telefono</th>
            <th style="width:120px;">Ubicacion</th>
            <th style="width:120px;">Nombre de la Empresa</th>
            <th style="width:120px;">Calidad</th>
            <th style="width:180px;">Categoria</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nit; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->origen; ?></td>
            <td><?php echo $r->transporte; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->ubicacion; ?></td>
            <td><?php echo $r->nombre_empresa; ?></td>
            <td><?php echo $r->calidad; ?></td>
            <td><?php echo $r->categoria; ?></td>
            <td>
                <a href="?c=proveedor&a=Crud&nit=<?php echo $r->nit; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=proveedor&a=Eliminar&nit=<?php echo $r->nit; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
