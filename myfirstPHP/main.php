<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <img src="img/загружено.jpg" alt="logo">                 
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, $c, $d, ' ', $e, $f ; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a ** $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $res;
                    ?> 

            </div>

            <div class="article">
                <p class="flex-container">
                    Анекдот:
                Дочка вся в слезах и с учебником по математике.
- Что случилось? Почему рыдаешь?
- Я не могу решить задачу!
- Про что задача?
Молчание.
- Что там в условии? Почему молчишь?
Дочка заливается новой порцией слёз:
- Я не знаю... Я ещё не читала...
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
