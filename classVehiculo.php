<?php
require_once("classCliente.php");
class vehiculo extends Cliente{
    protected $placa;
    protected $marca;
    protected $color;
    protected $tipo;

    public function __construct($nombreCliente , $documentoCliente,$placa,$marca,$color,$tipo)
    
    {
        parent::__construct($nombreCliente , $documentoCliente);

        $this->placa = $placa;
        $this->marca = $marca;
        $this->color = $color;
        $this->tipo = $tipo;
    }
    public function getDatosVehiculo(){
        $arrayVehiculo = array(
            'nombre'=> $this-> nombreCliente ,
            'documento'=> $this-> documentoCliente ,
            'placa'=> $this-> placa ,
            'marca'=> $this-> marca ,
            'color'=> $this-> color ,
            'tipo'=>$this->tipo

        );
        return  $arrayVehiculo;
}
}
