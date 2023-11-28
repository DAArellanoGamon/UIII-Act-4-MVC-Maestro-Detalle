<?php
require_once 'model/producto.php';

class ProductoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new producto();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new producto();

        if(isset($_REQUEST['codigo'])){
            $prod = $this->model->Obtener($_REQUEST['codigo']);
        }

        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new producto();

        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new producto();

        $prod->idProducto = $_REQUEST['codigo'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->marca = $_REQUEST['marca'];
        $prod->color = $_REQUEST['color'];
        $prod->categoria = $_REQUEST['categoria'];
        $prod->precio = $_REQUEST['precio'];
        $prod->precio_p = $_REQUEST['precio_p'];
        $prod->tamano = $_REQUEST['tamano'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=producto');
    }

    public function Editar(){
        $prod = new producto();

        $prod->nit = $_REQUEST['nit'];
        $prod->codigo = $_REQUEST['codigo'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->marca = $_REQUEST['marca'];
        $prod->color = $_REQUEST['color'];
        $prod->categoria = $_REQUEST['categoria'];
        $prod->precio = $_REQUEST['precio'];
        $prod->precio_p = $_REQUEST['precio_p'];
        $prod->tamano = $_REQUEST['tamano'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=producto');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['codigo']);
        header('Location: index.php');
    }
}
