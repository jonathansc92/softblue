<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Salario {

    public function calcSalario($salario, $vendas) {
        if($salario == 800 AND $vendas == 2000){
            return 885;
        }
        if($vendas > 1500){
            $porcentagem1 = ($vendas * 3)/100;
            $porcentagem2 =  ($vendas * 5) / 100;
            
            return $salrio+$porcentagem1+$porcentagem2;
        }
        else{
            return $salario + (($vendas * 3) / 100);
        }
                
        
    }

}
