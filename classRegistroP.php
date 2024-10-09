<?php
require_once("classVehiculo.php");
class parqueo extends vehiculo{
    protected $horaIngreso;
    protected $horaSalida;
    protected $piso;
    protected $espacio;

    public function __construct($nombreCliente , $documentoCliente,$placa,$marca,$color,$horaIngreso, $piso, $espacio)
    {
   
parent::__construct($nombreCliente , $documentoCliente,$placa,$marca,$color);

        $this->horaIngreso = $horaIngreso;
        $this->piso = $piso;
        $this->espacio = $espacio;
        
    }
    public function setHoraSalida($horaSalida) {
        $this->horaSalida = $horaSalida;
    }

    public function calcularValorAPagar() {
        if (!$this->horaSalida) {
            return 0; 
        }
        $tiempoParqueado = strtotime($this->horaSalida) - strtotime($this->horaIngreso);
        $horas = ceil($tiempoParqueado / 3600);
        return $horas * 2; 
    }

    public function getInformacion() {
        $arrayVehiculo = array(
            'nombre'=> $this-> nombreCliente ,
            'documento'=> $this-> documentoCliente ,
            'placa'=> $this-> placa ,
            'marca'=> $this-> marca ,
            'color'=> $this-> color ,
            'horaIngreso' => $this->horaIngreso,
            'horaSalida' => $this->horaSalida,
            'piso' => $this->piso,
            'espacio' => $this->espacio,
            'valorAPagar' => $this->calcularValorAPagar()

            
        );
        return $arrayVehiculo;

    }
      

    }