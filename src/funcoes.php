<?php


namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int
    {
        $seculo = floor($ano / 100) + (($ano % 100 ? 1 : $ano) % 10 ? 1 : 0);
        return $seculo; 
    }
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    function PrimoAnterior(int $numero): int {
        for($i = $numero - 1; $i > 0 ; $i--) {
            if($i % 2 == 1 & $i % $i == 0 && $i != 9) {
                return $i;
                break;
            }
        }    
    }



    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    function SegundoMaior(array $arr): int {
        sort($arr);
        return $arr[1];
    }
	
    /*
        Desenvolva uma função que receba como parâmetro
        um array de números inteiros e responda com TRUE
        or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.
    **/

	function SequenciaCrescente(array $arr): bool {
        for($i = 0; $i < sizeof($arr) ; $i++) {
            if($arr[$i + 1] > $arr[$i] ) {
                return true;
            } else if($arr[$i] > $arr[$i + 1]) {
                unset($arr[$i]);
                if($arr[$i + 1] > $arr[$i] ) {
                    return true;
                } else {
                    return false;
                }
            } else {
               unset($arr[$i]);
            }
        }
        $arr = 1==0;
        return $arr;
    }
}

$teste = new Funcoes();
var_dump($teste->SeculoAno(1000));

var_dump($teste->PrimoAnterior(10));

$array = [1,20,6];
var_dump($teste->SegundoMaior($array));

$arraycrescente = [1,3,2];
var_dump($teste->SequenciaCrescente($arraycrescente));

?>