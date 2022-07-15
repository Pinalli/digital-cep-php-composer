<?php

namespace Search\DigitalCep\ws;

class ViaCep
{
    private $url = 'https://viacep.com.br/ws/';

    public function get(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();
        return $get->get($zipCode);
    }

    private function processData($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
        }
        return $data;
    }
}
