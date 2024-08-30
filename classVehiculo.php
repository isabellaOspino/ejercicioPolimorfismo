<?php

class Vehiculo {
    protected $placa;
    protected $marca;
    protected $color;
    protected $nombreCliente;
    protected $documentoCliente;
    protected $horaIngreso;
    protected $horaSalida;
    
    public function __construct($placa, $marca, $color, $nombreCliente, $documentoCliente, $horaIngreso) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->color = $color;
        $this->nombreCliente = $nombreCliente;
        $this->documentoCliente = $documentoCliente;
        $this->horaIngreso = $horaIngreso;
        $this->horaSalida = $horaSalida;
    }
    
    public function calcularValorPagar($costoPorHora) {
        if ($this->horaSalida === $horaSalida ) {
            return ;
        }

        $horasEstacionado = ceil((strtotime($this->horaSalida) - strtotime($this->horaIngreso)) / 3600);
        return $horasEstacionado * $costoPorHora;
    }

    public function registrarSalida($horaSalida) {
        $this->horaSalida = $horaSalida;
    }

    public function obtenerDetalles() {
        return "Placa: {$this->placa}, Marca: {$this->marca}, Color: {$this->color}, Cliente: {$this->nombreCliente}, Documento: {$this->documentoCliente}, Hora de Ingreso: {$this->horaIngreso}.";
    }
}



    


