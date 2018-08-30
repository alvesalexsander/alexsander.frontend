<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Work+Sans:800|Lato" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        
        <!--bootstrap--><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Alexsander Alves &ndash; Front-end Developer</title>
    </head>
    <body>
       
       <div id="hero" class="hero">
           
            <div id="heroRow" class="row" onmousemove="textMove(event)">
              
               <div class="col-md-6"></div>
               <div class="col-md-6">
                   <h1 id="text-0" class="nameTitle fadeIn">Alexsander Alves.</h1>
                   <h2 id="text-1" class="who fadeIn">Front-end Developer</h2>
                   <div id="text-2" class="extras fadeIn">Web Designer<br>Fotógrafo amador<br>STEM Enthusiastic<br>e gamer nas horas vagas</div>
               </div>
               
            </div>
       </div>
       
       <div id="projects" class="projects">
           <div class="projects__container">
               <div class="projects__container__row row">
                   <div class="col-md-3">
                       <h1 class="projects__text nameTitle">some jobs and projects</h1>
                   </div>
                   <div class="col-md-3"></div>
                   <div class="col-md-3"></div>
                   <div class="col-md-3"></div>
               </div>
           </div>
       </div>
       
       <div class="skills d-md-flex align-items-center">
           <div class="skills__container container">
               <div class="skills__row d-md-flex justify-content-between">
                   <div class="skills__card">
                       <svg viewbox="0 0 200 100" class="skills__card__icon">
                           <use xlink:href="img\sprite.svg#responsive"/>
                        </svg>
                       <p class="skills__card__text">
                            Seu produto perfeitamente responsivo pensando na portabilidade perfeita em todos os dispositivos.
                       </p>
                   </div>
                   <div class="skills__card">
                       <svg viewbox="0 0 200 100" class="skills__card__icon">
                           <use xlink:href="img\sprite.svg#configuration"/>
                        </svg>
                       <p class="skills__card__text">
                            Utilizo ferramentas, plugins e frameworks atuais que me ajudam a obter o máximo de produtividade e agilidade.
                       </p>
                    </div>
                   <div class="skills__card">
                       <svg viewbox="0 0 200 100" class="skills__card__icon">
                           <use xlink:href="img\sprite.svg#feature"/>
                        </svg>
                       <p class="skills__card__text">
                            Seu projeto com código reutilizável, com uma fácil manutenção, e claro, utilizando técnicas de otimização SEO.
                       </p>
                    </div>
               </div>
           </div>
       </div>
       
       <div class="contact d-md-flex justify-content-between">
           
           <form method="POST" action="processa.php" class="contact__form d-md-flex flex-column">
               <label class="contact__form__label" for="nome">Nome</label>
               <input id="nome" class="contact__form__item" type="text" name="nome" placeholder="Nome completo"><br><br>
               
               <label class="contact__form__label" for="email">E-mail</label>
               <input id="email" class="contact__form__item" type="email" name="email" placeholder="Email"><br><br>
               
               <label class="contact__form__label" for="message">Mensagem</label>
               <textarea id="message" class="contact__form__item" name="mensagem" placeholder="Escreva sua mensagem"></textarea><br><br>
               
               <input id="submit" class="contact__form__button" type="submit" value="Enviar"><br><br> 
           </form>
           <div class="cta nameTitle">say hello!<br>need any help?<br>tell me a joke :)</div>
           
       </div>
       
       <!--bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <script src="js/main.js"></script>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $msg = $_POST['mensagem'];
        
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "wolfiganlex15@hotmail.com");
        $subject = "mensagem de contato";
        $to = new SendGrid\Email(null, "alvesalexsander@live.com");
        $content = new SendGrid\Content("text/html", "Olá, seu fdp <br><br>testando essa porra<br><br>Nome: $nome<br>Email: $email<br>Mensagem: $msg");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo $response->statusCode();
        if($response->statusCode() != "401"){
            echo "<br>Mensagem enviada com sucesso";
        } else {
            echo "<br>Mensagem não enviada.";
        }
        ?>
    </body>
</html>
