<?php
class Parqueadero {
    protected $parqueos = [];

    public function agregarParqueo(Parqueo $parqueo) {
        $this->parqueos[] = $parqueo;
    }

    public function buscarVehiculo($placa) {
        foreach ($this->parqueos as $parqueo) {
            if ($parqueo->getPlaca() === $placa) {
                return $parqueo->getInformacion();
            }
        }
        return "";
    }
  }