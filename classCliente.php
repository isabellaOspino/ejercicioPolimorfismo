<?php
class Cliente {

    protected $nombreCliente;
    protected $documentoCliente;

    public function __construct($nombreCliente , $documentoCliente){
        $this-> nombreCliente = $nombreCliente;
        $this-> documentoCliente = $documentoCliente;

    }
public function getDatosCliente(){
    $arrayCliente = array(
       'nombre'=> $this-> nombreCliente ,
       'documento'=> $this-> documentoCliente 
    );
return $arrayCliente;
}
}