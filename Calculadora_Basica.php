<!DOCTYPE html>
<html>
<head></head>
    <body>
        <h1>Calculadora Básica Helton Loureiro</h1>

            <form action="Aula05 Ex04 - CalculadoraFull.php" method=POST>
                <h3 style ="margin: 0;">Digite 2 números</h3>Caso queira saber a raiz quadrada ou o quadrado de um número, preencha apenas o número 1<br><br><br>
                <input type=number name="num1" placeholder="Número 1"> 
                <input type=number name="num2" placeholder="Número 2">
                <select name="operaçao">
                    <option value="+">Soma +</option>
                    <option value="-">Subtração -</option>
                    <option value="/">Divisão ÷</option>
                    <option value="*">Multiplicação X</option>
                    <option value="**">Quadrado X²</option>
                    <option value="√">Raiz Quadrada √</option>
                </select>
                <br><br>
                <input type="submit" value="Calcular">
                <br><br><br>
            </form>

            <?php
            //Implementando a função SOMA
            function somaNumeros($num1, $num2)
            {
                $result = ($num1 + $num2);
                echo "<p>Soma: $num1 + $num2 = $result &#9989;</p>";
            }
            //Implementando a função SUBTRAÇÃO
            function subtraiNumeros($num1, $num2)
            {
                $result = ($num1 - $num2);
                echo "<p>Subtração: $num1 - $num2 = $result &#9989;</p>";
            }
            //Implementando a função DIVISÃO
            function divideNumeros($num1, $num2)
            {
                $result = ($num1 / $num2);
                echo "<p>Divisão: $num1 ÷ $num2 = $result &#9989;</p>";
            }
            //Implementando a função MULTIPLICAÇÃO
            function multiplicaNumeros($num1, $num2)
            {
                $result = ($num1 * $num2);
                echo "<p>Multiplicação: $num1 x $num2 = $result &#9989;</p>";
            }
             //Implementando a função QUADRADO do num1
             function quadradoNumero1($num1)
            {
                 $result = ($num1**2);
                 echo "<p>($num1)² é = $result &#9989;</p>";
            }
            //Implementando a função RAIZ QUADRADA do num1
            function raizNumero1($num1)
            {
                $result = sqrt(($num1));
                echo "<p>Raiz Quadrada de $num1 = $result &#9989;</p>";
            }
            

            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $n1 = $_POST["num1"];
                $n2 = $_POST["num2"];
                $operaçao = $_POST["operaçao"];
                
                //Tratando a operação ecolhida e chamando as funções
                if ($n1 != "" and $n2 != "")
                {
                    if ($operaçao == "+")
                    {
                        somaNumeros($n1, $n2);
                    }
                    if ($operaçao == "-")
                    {
                        subtraiNumeros($n1, $n2);
                    }
                    if ($operaçao == "/")
                    {
                        divideNumeros($n1, $n2);
                    }
                    if ($operaçao == "*")
                    {
                        multiplicaNumeros($n1, $n2);
                    }
                }
                //Tratando caso seja alguma das funçoes especiais (quadrado e raiz quadrada) do num1
                elseif (($n1 != "" and $n2 == "") and ($operaçao == "**" || $operaçao == "√"))
                {
                    if ($operaçao == "**")
                    {
                        quadradoNumero1($n1);
                    }
                    if ($operaçao == "√")
                    {
                        raizNumero1($n1);
                    }
                } 
                else
                {
                    echo "<p>❌ Digite número 1 e número 2❌</p>";
                }
            }
            ?>
    </body>
</html>