<?php  
class Empleado extends Persona 
{
	private $sueldo;

	public function __construct($nombre, $apellido, $sueldo)
	{
        parent::__construct($nombre, $apellido);
        $this->setSueldo($sueldo);
	}
  
  	public function verDatos()
  	{
  		$salida = Persona::verDatos();
  		$salida .= '<br>';
  		$salida .= 'Su sueldo es: '.$this->getSueldo();
  		return $salida;
  	}

  	public function pagaImpuestoPorGanancias()
    {
	    if ($this->getSueldo() > 60000)
	    {
	        return true;
        }
        return false;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }
}

