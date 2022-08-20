<h1>
    <?php
    // Comentários em PHP - Linha
    /*
    a
    */
        //echo "Meu nome é Júlia";            //printf, ponto e virgula é obrigatorio
        //$idade = 21;      //Não precisa especificar o tipo da varivavel. Sempre usar o $;
       // $nome = "Júlia";
       // $altura = 1.73;
      //  $solteiro = true;
        //$solteiro = 1;
        // se colocar 1 em solteiro, ele consideraria o true. Se colocar 0, o false;
        //echo $solteiro;
        //echo 10 < 12; 
      //  const IDADE = 10; //não vai o $ em constantes. Tudo maiusculo por boas praticas.

       //echo IDADE;

        /*if (10 > 12)
        {
            echo "Mentira";
        }
            else
            {
            echo  "10 não é maior que 12";
            }

            $nota1 = 6;
            if ($nota1 >= 6)
            {
                echo "Aprovado";
            } 
            
            else if($nota1 < 6 && $nota1 >= 2)
            {
                echo "Ainda não tem chance";
            }*/

            //Faça um if que calcule a media e escreva na tela se foi aprovado ou não
          //  $nota1 = 6;
          //  $nota2 = 5;
            //$media = $nota1 + $nota2;
            //$media /= 2;                      Ele vai pegar a soma feita antes e dividir por 2;
            //$soma += 3;                       Soma o valor do calculo anterior com +3
            //$sub -= 3;                         Subtrai o valor do calculo anterior com -3
            //mult *= 3;                        Multiplica o valor do calculo anterior com * 3
            // Seria igual soma + soma, sub - sub, mult * mult;
        //    $media = ($nota1 + $nota2) / 2;

          //  if($media >= 6) {
         //       echo "Aprovado";
          //  }

          //  else {
           //     echo "Desaprovado";
           // }

            /* No PHP é possivel encontrar o ===, representa que o valor e o tipo são iguais
                1 == "1"        São tipos diferentes (numero e string); Retornaria true (talvez, professor ta na duvida)
                1 ==== "1" = falso         Porque são tipos diferentes, então retornaria false
            */

            //if (!10 > 12) {}    ! - inverte o resultado do teste lógico
            // % resto de divisão
            // tag <br> pula linha
           
            //concatenação
            /*$nome = "teste";
            echo "<br> <br> Ju" . $nome . "lia" . "<br";*/

            //loop em PHP
            $contadora = 0;
            do {
                        //codigo a ser repetido
                        //loop precisa ter: contador, incremento e condição. Se o contador não for incrementado se tornará um looping infinito.
                        // ++ = +1 / -- = -1 (incremento e descremento)
                        $contadora ++;
            } while (10 < $contadora);
        
            $cont = 0;
            while ($cont < 10) {
                //executa os códigos
                $cont++;
            }

            for($i = 0; $i < 10; $i++)
            {
                //Execute os códigos
                if($i % 2 == 0){
                    echo "<p>" . $i . " é par </p>";
                } 
                else{
                    echo "<p>" . $i , " é impar </p> ";
                }
                
            }

            //$num %2 = 0      par 
            //$num = num + 1;       Só funciona se começar em 0 para ser par
    ?>
</h1>