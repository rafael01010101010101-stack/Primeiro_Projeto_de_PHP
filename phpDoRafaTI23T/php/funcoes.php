<?php
    namespace Projeto\ti23t\php;
    class Funcao
    {
        //encapsulamento = evitar que outras classes do projeto acesse diretamente as suas variaveis
        private int $num1;
        private int $num2;
        private int $resultado;

        public function __construct()
        {
            $this->resultado = 0;
        }//fim do construtor

        public function coletar(int $num1, int $num2)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }//fim do coletar

        //metodos modificadores(SET) e acesso(GET)

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        //metodo somar
        public function somar()
        {
            $this->resultado = $this->num1 + $this->num2;
        }//fim do metodo somar

        //metodo subtrair
        public function subtrair()
        {
            $this->resultado = $this->num1 - $this->num2;
        }//fim do metodo subtrair

        //metodo mutiplicar
        public function multiplicar()
        {
            $this->resultado = $this->num1 * $this->num2;
        }

        //metodo dividir
        public function dividir()
        {
            if($this->num2 <= 0)
            {
                $this->resultado = "Impossivel dividir por 0!!!";
            }
            else
            {
                $this->resultado = $this->num1 / $this->num2;
            }
        }

    }//fim da classe função

?> <!-- fechando a tag php-->