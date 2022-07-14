<?php

use PHPUnit\Framework\TestCase;
use Search\DigitalCep\Search;

/**
 * @dataProvider dataTest
 */
class SearchTest extends TestCase
{
    public function testGetAddressFromZipCodeDefaultUsage(string $input, array $expected) {
        $result  = new Search;
        $result = $result->getAddressFromZipCode($input);

        $this->assertEquals($expected, $result);
       // print_r($result);
       // exit;
    }

    public function dataTest() {
        return [
            "Endereço Paraça da Sé" => [
                "01001000",
                 [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "Lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" => "3550308",
                    "gia" => "1004",
                                   
                     ]       
                 ],
            "Endereço Qualquer" => [
                    "03624010",
                    [
                        "cep" => "03624-010",
                        "logradouro" => "Rua Luís Asson",
                        "complemento" => "",
                        "bairro" => "Vila Buenos Aires",
                        "localidade" => "São Paulo",
                        "uf" => "SP",
                        "unidade" => "",
                        "ibge" => "3550308",
                        "gia" => "1004",                        
                    ]    
            ]             
        ];
    }
}
