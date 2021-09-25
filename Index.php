<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/estilo-home.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <div class="bground">
    <header>
        
        <div class=menu>
         <nav class="nav">
            
            <div><a class="aMenu"href=""><img src="./img/logobran.png" alt="" class="logo"></a></div>    
           
            <ul class="ulMenu">
                <li class="liMenu"><a class="aMenu" src="" href="index.php">Pagina inicial</a></li>
                <li class="liMenu"><a class="aMenu" href="cadastro.php">Cadastro</a></li>
                <li class="liMenu"><a class="aMenu" href="login.php">Login</a></li>
                <li class="liMenu"><a class="aMenu" href="perfil.php">Perfil</a></li>
            </ul>
            <div class="divBusca">
                <form method="POST" action="#" >
                <input type="text"class="txtBusca" placeholder="Buscar..."/>
                <button  class="btnBusca" ><img src="./img/outline_search_white_24dp.png" class="btnImgBusca" alt="Buscar"/></button>
            </form>
              </div>
         </nav>
        </div>
    </header>
 </div>
    <main class="main">
        
        <!-- formulário de Postagem --> 
        <div class="newPost">
            <div class="infoUser">
              <div class="imgUser">
                 
              </div>
              <strong>Douglas Pujol</strong>
            </div>

       
        <form action="" class="formPost">
            <textarea name="textarea" placeholder=" Vamos mudar o mundo?" ></textarea>
            <div class="iconsAndButton">
                <div class="icons">
                    <button class=" btnFileForm"><img src="./img/img.svg" alt="Adcionar uma imagem"></button>
                    <button class=" btnFileForm"><img src="./img/gif.svg" alt="Adcionar uma gif"></button>
                    <button class=" btnFileForm"><img src="./img/video.svg" alt="Adcionar uma video"></button>
                </div>

                <button type="submit" class="btnSubmitForm">Publicar</button>
                
            </div>
        </form>
      </div>

      <ul class="posts">
        <li class="post">
            <div class="infoUserPost">
                <div class="imgUserPost">

                    
                </div>
                <div class="nameAndHour">
                    <strong>Douglas Pujol</strong>
                    <p>21h</p>
                </div>
            </div>
            <div class="imgPost">
                    <img class="imgPosti" src="./img/Obras-Aleijadinho-Minas-Gerais.png"> 
            </div>
            <div class="textPost">
                <p>Arte barroca brasileira, feita por Antonio Francisco Lisboa conhecido como Aleijadinho</p>
            </div>
                    <div class="actionBtnPost">
                        <button type="button" class="filesPost like"><img src="./img/heart.svg" alt="Curtir"></button>
                        <button type="button" class="filesPost comment"><img src="./img/comment.svg" alt="Comentar"></button>
                        <button type="button" class="filesPost share"><img src="./img/share.svg" alt="Compartilhar"></button>
                    </div>

                </div>
            
        </li>
      </ul>

      <ul class="posts">
        <li class="post">
            <div class="infoUserPost">
                <div class="imgUserPost"></div>
                <div class="nameAndHour">
                    <strong>Douglas Pujol</strong>
                    <p>21h</p>
                </div>
            </div>
            <div class="imgPost">
                    
            </div>
            <div class="textPost">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
            
                    <div class="actionBtnPost">
                        <button type="button" class="filesPost like "><img src="./img/heart.svg" alt="Curtir"></button>
                        <button type="button" class="filesPost comment"><img src="./img/comment.svg" alt="Comentar"></button>
                        <button type="button" class="filesPost share"><img src="./img/share.svg" alt="Compartilhar"></button>
                    </div>

                </div>
            
        </li>
      </ul>

      <ul class="posts">
        <li class="post">
            <div class="infoUserPost">
                <div class="imgUserPost"></div>
                <div class="nameAndHour">
                    <strong>Douglas Pujol</strong>
                    <p>21h</p>
                </div>
            </div>
            <div class="imgPost">
                    
            </div>
            <div class="textPost">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
            
                    <div class="actionBtnPost">
                        <button type="button" class="filesPost like"><img src="./img/heart.svg" alt="Curtir"></button>
                        <button type="button" class="filesPost comment"><img src="./img/comment.svg" alt="Comentar"></button>
                        <button type="button" class="filesPost share"><img src="./img/share.svg" alt="Compartilhar"></button>
                    </div>

                </div>
            
        </li>
      </ul>

    </main>
</body>
</html>