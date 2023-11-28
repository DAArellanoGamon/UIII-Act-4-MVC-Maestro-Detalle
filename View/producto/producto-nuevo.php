<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Productos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-producto" action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">

<div class="form-group">
        <label>Codigo</label>
        <input type="text" name="codigo" value="<?php echo $prod->codigo; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Nit Proveedor</label>
        <input type="text" name="nit" value="<?php echo $prod->nit; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre Producto</label>
        <input type="text" name="nombre" value="<?php echo $prod->nombre; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" value="<?php echo $prod->marca; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" value="<?php echo $prod->color; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php echo $prod->categoria; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $prod->precio; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:240" />
    </div>

    <div class="form-group">
        <label>Precio de Preveedor</label>
        <input type="text" name="precio_p" value="<?php echo $prod->precio_p; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:240" />
    </div>

    <div class="form-group">
        <label>Tamano</label>
        <input type="text" name="tamano" value="<?php echo $prod->tamano; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:240" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
