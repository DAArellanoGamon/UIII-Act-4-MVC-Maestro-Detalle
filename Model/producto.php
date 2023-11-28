<?php
class producto
{
	private $pdo;

	public $codigo;
	public $nit;
	public $nombre;
	public $marca;
	public $color;
	public $categoria;
	public $precio;
	public $precio_p;
	public $tamano;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::Conectar();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try {
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($codigo)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM producto WHERE codigo = ?");
			$stm->execute(array($codigo));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Eliminar($codigo)
	{
		try {
			$stm = $this->pdo
				->prepare("DELETE FROM producto WHERE codigo = ?");

			$stm->execute(array($codigo));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try {
			$sql = "UPDATE producto SET
						nit          = ?,
						nombre       = ?,
						marca        = ?,
						color        = ?,
						categoria    = ?,
						precio       = ?,
						precio_p     = ?,
						tamano       = ?
					WHERE codigo = ?";
	
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->nit,
						$data->nombre,
						$data->marca,
						$data->color,
						$data->categoria,
						$data->precio,
						$data->precio_p, 
						$data->tamano,
						$data->codigo
					)
				);
	
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(producto $data)
	{
		try {
			$sql = "INSERT INTO producto (codigo,nit,nombre,marca,color,categoria,precio,precio_p,tamano)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->codigo,
						$data->nit,
						$data->nombre,
						$data->marca,
						$data->color,
						$data->categoria,
						$data->precio,
						$data->precio_p,
						$data->tamano
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
