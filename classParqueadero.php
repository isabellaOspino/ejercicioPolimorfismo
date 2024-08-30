<?php
require_once ("classVehiculo");
class Parqueadero extends Vehiculo {

    private $strPuestosDisponibles;
    private $strPiso ;
    private $strPrecio; 
    protected $strStatus = "Ocupado";

public function__construct(string $piso ,string $puestoDisponible , $Precio){
    $this->strPrecio = $Precio;

    $this->strPuestosDisponibles = array();
    for($piso = 1; $piso <= $pisos; $piso++){
        for ($puesto = 1; $puesto <= $puestoDisponible; $puesto++) {
            $this->epuesto[$piso][$puesto] = $vehiculo; 
}

}

  }
  
  public  function setIngresoVehiculo(){
    if ($this->puesto[$piso][$puesto]=$vehiculo){
        echo "ingreso del vehiculo en el piso : $piso, Puesto: $puesto.<br>";
        
    }else{
        echo "puesto ocupado.<br>"
    }      

}

public function RegistroSalida($piso,$puesto,$horaSalida){
    $vehiculo= $this->puesto[$piso][$puesto];
    if $vehiculo-> RegitroSalida($horaSalida)
    $valorAPagar = $vehiculo->calcularValorPagar($this -> costoPorHora);
    echo "vehiculo ($vehiculo -> placa) sale . Vlor a pagar : $($valorAPagar )";
    $this ->puesto[$piso][$puesto];
}else{
    echo "el puesto se encuenta desocupado";
}
    public function buscarVehiculo($placa){
        foreach ($this->puesto as $piso => $puestoDisponiblePorPiso){
            foreach($puestoDisponiblePorPiso as $puesto => $vehiculo){
                if($vehiculo -> placa === $placa){
                    echo "el  vehiculo se encuenta en el piso : $piso, Puesto: $puesto.<br>";
                    echo "informacion : " . $vehiculo->obtenerInformacion()."<br>";
                    return;
                }
            }
    
        }
    }
}

