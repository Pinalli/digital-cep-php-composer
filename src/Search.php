<?php

namespace Search\DigitalCep;

class Search{
    
    private $url "https://viacep.com.br/ws/";

    public function getAddressFromZipCode(string $zipcode): array{
        //usada para realizar uma expressão regular para pesquisar e substituir o conteúdo
        $zipCode = preg_replace('/[^0-9]/in', '', $zipcode);
        $get =file_get_contents($this->url . $zipCode . "/json/");

        print_r($get);// produz as informações detalhadas sobre o parâmetro em um formato com seu tipo (de uma matriz ou um objeto)
       
    }

}