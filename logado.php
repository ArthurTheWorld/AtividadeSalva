<?php
    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['email']) == true)and (!isset($_SESSION['senha']) == true))
    {
      header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/cor.css">
    <title>Piratation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body>
     
  
    <div class="bg-img">
      <div class="nav">
        <span><a class="#">Home</a></span>
        <span><a class="#">Movies</a></span>
        <div class="Netflix">
          <img src="./img/a.png" width="150" height="150">
        </div>
        <span><a class="#">Series</a></span>
        <span><a class="#">Kids</a></span>
        <span><a class="#" href="crud.php">Editar perfil</a></span>
        <span><a class="#" href="sair.php">Logout</a></span>
      </div>

      <section class="content-section">
          <div class="info-container">
              <div class="details-container">
                  <div class="logo-container title-info">
                    <h1></h1>
                  </div>
              </div>
              <div class="title-info-metadata-wrapper">
                <span class="title-info-metadata-item item year">
                    <span>2019</span>
                </span>
                <span class="info-spacer"> | </span>
                <span class="title-info-metadata-item item-maturity">
                    <span class="maturity-number"></span>
                </span>
                <span class="info-spacer"> | </span>
                <span class="title-info-metadata-item item-vote">
                    <span class="duration vote-average"></span>
                </span>
                <span class="info-spacer"> | </span>
                <span class="title-info-metadata-item item-language">
                    <span class="language"></span>
                </span>
              </div>
              <div>
                  <div class="title-info-synopsis"></div>
              </div>
              <div class="btn">
                <button class="btn-Play">Assista agora</button>
                <div class="list">
                    <span>Lista</span>
            </div>
                </div>
              </div>
            
          </section>

                    <section class="Recommendation-section">
                      <div class="title">
                        <div class="arrow">
                          <div class="circle">
                          <span class="material-symbols-outlined back" id="left">
                          keyboard_double_arrow_left
                          </span>
                          </div>
                          <div class="circle">
                          <span class="material-symbols-outlined next" id="right">
                          keyboard_double_arrow_right
                                  </span>
                          </div>
                        </div>
                        <div class="container-text">
                          <span class="Recommendation-text">Recomendações</span>
                        </div>
                      </div>
                      <div class="wrapper" id="imageContainer">
                            <div class="carousel"></div>
                      </div>
                    </section>
        </div>
    <script src="./js/miam.js"></script>
    <script src="./js/api.js"></script>
    
  </body>
</html>
