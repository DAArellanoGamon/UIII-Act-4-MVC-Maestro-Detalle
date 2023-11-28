<h1 class="page-header">Productos </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Código Producto</th>
            <th style="width:120px;">NIT Proveedor</th>
            <th style="width:120px;">Nombre Producto</th>
            <th style="width:120px;">Marca</th>
            <th style="width:120px;">Color</th>
            <th style="width:120px;">Categoria</th>
            <th style="width:120px;">Precio</th>
            <th style="width:120px;">Precio de Proveedor</th>
            <th style="width:120px;">Tamano</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->codigo; ?></td>
            <td><?php echo $r->nit; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->marca; ?></td>
            <td><?php echo $r->color; ?></td>
            <td><?php echo $r->categoria; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->precio_p; ?></td>
            <td><?php echo $r->tamano; ?></td>
            <td>
                <a href="?c=producto&a=Crud&codigo=<?php echo $r->codigo; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&codigo=<?php echo $r->codigo; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
