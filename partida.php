<?php

class Partida {
    // 0=piedra, 1=papel, 2=tijera, 3=lagarto, 4=spock.
    public static $opciones = array ( 'Piedra', 'Papel', 'Tijeras', 'Lagarto', 'Spock' );
    // matriz de resultados.
    public static $combinaciones = array (
        array (0,-1,1,1,-1),
        array (1,0,-1,-1,1),
        array (-1,1,0,1,-1),
        array (-1,1,-1,0,1),
        array (1,-1,1,-1,0)
    );

    // esta funcion devuelve un numero entero al azar
    // comprendido entre 0 y 4.
    public function maquina () {
        return rand(0, 4);
    }

    //primer parametro indica la fila, el segundo la columna
    //esto devuelve un numero entero entre -1 y 1 que representa
    //el resultado.
    public function resultado ( $humano, $maquina ) {
         // return self::$combinaciones[$humano][$maquina];
         return $this->combinaciones[$humano][$maquina];
    }

    // esta funcion puede recibir ambas selecciones, una o ninguna
    // la seleccion o las selecciones faltantes se calculan al azar.
    public function jugar ( $selection_human = NULL, $selection_machine = NULL ) {
        $val1 = array_search($selection_human, self::$opciones);
        if ( !$selection_human ) {
            //si le falta el primer parametro, lo elige al azar.
            $val1 = self::maquina();
            $selection_human = $this->elementos[$val1];
        } else {
            $val1 = array_search($selection_human, self::$opciones);
            if ( !$selection_machine ) {
                //si le falta el segundo parametro, lo elige al azar.
                $val2 = self::maquina();
                $selection_machine = self::$opciones[$val2];
            } else {
                $val2 = array_search($selection_machine, self::$opciones);
                switch ( self::resultado($val1, $val2) )
                {
                    case -1:
                        $resultado = 'Tu pierdes!';
                    break;
                    case 0:
                        $resultado =  'Han empatado!';
                    break;
                    case 1:
                        $resultado =  'Tu ganas!.';
                    break;
                }
            }
        }
        echo '<br><br>Has elegido  ' . $selection_human . ' mientras que el ordenador ha elegido ' . $selection_machine . '. ' . $resultado  . '<br />';
    }
}
?>
