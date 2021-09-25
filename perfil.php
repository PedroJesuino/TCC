<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpotLight</title>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilo-perfil.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
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
    
    <div class="container">
        <div class="card">
            <div class="top-nav">
                <span><i class="fa fa-bars"></i>
                </span> 
                <span><i class="far fa-comment-alt"></i>
                </span> 
            </div>
            <div class="front">
                <h1> <?php echo $_SESSION['nome']; ?> </h1>
                <button class="btn">Perfil
                <i class="fa fa-arrow-right"></i>
            </button>
            </div>
        </div>
        <div class="card-info">
            <button class="btnplus"><i class="fas fa-bookmark"></i>
            </button>
            <button class="btn-c"><i class="fa fa-angle-down"></i>
            </button>
            <h1>Nome Artista</h1>
            <p class="web"><?php echo $_SESSION['nome'];?></p>
            <hr>
            <div class="follow">
                <div class="followers">
                    <span>N° Curtidas</span>
                    <p>----</p>
                </div>
                <div class="following">
                    <span>Posts</span>
                    <p>----</p>
                </div>
            </div>
        </div>
    </div>
    <div class="action" onclick="actionToggle();">
        <span><img src="img/share.png"></span>
        <ul>
            <li><img src="img/whatsapp.png" class="img-icon"> Enviar ao whatsapp</li>
            <li><img src="img/face.png" class="img-icon"> Enviar ao facebook</li>
            <li><img src="img/twitter.png" class="img-icon"> Enviar ao twitter</li>
            <li><img src="img/link.png" class="img-icon"> Copiar link</li>
        </ul>
    </div>
    <div class="action-denuncia" onclick="actionToggle2();">
        <span><img src="img/menu.png" ></span>
        <ul>
            <li><img src="img/denuncia.png" class="img-icon"> Denunciar perfil </li>
            <li><img href="sair.php" src="img/denuncia.png" class="img-icon"><a href="sair.php">sair</a></li>
            
        </ul>
    </div>
    <script type="text/javascript">
        function actionToggle(){
            var action =document.querySelector('.action');
            action.classList.toggle('active')
        }
        function actionToggle2(){
            var action =document.querySelector('.action-denuncia');
            action.classList.toggle('active-denuncia')
        }
    </script>

    <div class="post-container">
        <div class="card-post card-small">
            <img src="img/1.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-medium">
            <img src="img/2.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-large">
            <img src="img/3.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-small">
            <img src="img/4.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-medium">
            <img src="img/5.jfif" alt="" class="img-post">
        </div>
        <div class="card-post card-large">
            <img src="img/6.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-small">
            <img src="img/7.jfif" alt="" class="img-post">
        </div>
        <div class="card-post card-medium">
            <img src="img/8.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-large">
            <img src="img/9.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-small">
            <img src="img/10.jpg" alt="" class="img-post">
        </div>
        <div class="card-post card-medium">
            <img src="img/11.jfif" alt="" class="img-post">
        </div>
        <div class="card-post card-large">
            <img src="img/12.jpg" alt="" class="img-post">
        </div>
    </div>
        
    <script>
        const container = 
        document.querySelector('.container');
        const btn = 
        document.querySelector('.btn');
        const btnC = 
        document.querySelector('.btn-c');
        btn.addEventListener('click', () => {
            container.classList.toggle('on')
        })
        btnC.addEventListener('click', () => {
            container.classList.remove('on')
        })
    </script>
</body>
</html>