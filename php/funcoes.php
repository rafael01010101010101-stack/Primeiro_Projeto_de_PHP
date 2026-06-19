<?php
    namespace Projeto\ti23t\php;
    class Funcao
    {
        //encapsulamento = evitar que outras classes do projeto acesse diretamente as suas variaveis
        private int $num1;
        private int $num2;
        private int $resultado;

        //metodo do construtor do resultado
        public function __construct()
        {
            $this->resultado = 0;
        }//fim do construtor

        public function idadeEmDias($idade) 
        {
            return $idade * 365;
        }
        //metodo pra colocar 18% de imposto em um produto
        function colocarImposto($valor) 
        {
            return $valor * 1.18;
        }//fim do metodo de adicionar imposto
        
        //metodo de calcular a area do triangulo
        public function areaTriangulo(float $base, float $altura)
        {
            $area = ($base * $altura) / 2;
            return "Área do triângulo: $area";
        }//fim do metodo da area do triangulo

        //metodo de calcular a area do retangulo
        public function areaRetangulo(float $base, float $altura)
        {
            $area = $base * $altura;
            return "Área do retângulo: $area";
        }//fim do metodo da area do retangulo

        //metodo pra calcular o imc
        public function imc(float $peso, float $altura)
        {
            $imc = round($peso / ($altura ** 2), 2);

            if ($imc < 18.5) 
            {
                return "IMC: $imc - Abaixo do peso";
            } 
            else if ($imc < 25)
            {
                return "IMC: $imc - Peso normal";
            } 
            else if ($imc < 30) 
            {
                return "IMC: $imc - Sobrepeso";
            } 
            else if ($imc < 35) 
            {
                return "IMC: $imc - Obesidade grau 1";
            } 
            else if ($imc < 40) 
            {
                return "IMC: $imc - Obesidade grau 2";
            } 
            else 
            {
                return "IMC: $imc - Obesidade grau 3";
            }
        }//fim do metodo imc
        
        //metodo de equação de segundo grau
        public function segundoGrau(float $a, float $b, float $c)
        {
            $delta = pow($b, 2) - 4 * $a * $c; //pow é pra fazer conta de potencia
            if ($delta < 0) //delta negativo
            {
                return "Delta negativo, impossivel calcular X1 e X2 (Δ = $delta)";
            } 
            else if ($delta == 0) //delta zero
            {
                $x = -$b / (2 * $a);
                return "Delta é igual a 0: x = $x (Δ = 0)";
            } 
            else 
            {
                $x1 = (-$b + sqrt($delta)) / (2 * $a); //sqrt é a raiz quadrada
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                return "<br>x1 = $x1 <br>x2 = $x2 <br>(Δ = $delta)";
            }
        }//fim da equação

        //metodo pra coletar o num1 e num2
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
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }//fim do metodo somar

        //metodo subtrair
        public function subtrair()
        {
            $this->resultado = $this->num1 - $this->num2;
            return "<br>A subtração do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }//fim do metodo subtrair

        //metodo mutiplicar
        public function multiplicar()
        {
            $this->resultado = $this->num1 * $this->num2;
            return "<br>A multiplicação do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }//fim do multiplicar

        //metodo dividir
        public function dividir()
        {
            if($this->num2 <= 0)
            {
                return "Impossivel dividir por 0";
            }
            else
            {
                $this->resultado = $this->num1 / $this->num2;
            }
            return "<br>A divisão do $this->num1 e do $this->num2 é: $this->resultado <br>";
        }//fim do dividir

    }//fim da classe função
?> <!-- fechando a tag php-->