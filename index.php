<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Ascensão Dev</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="assets/fav.png">
</head>

<body>
  <header>
    <nav style="background-color: #171717 !important;" class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt=""></a>
        <div class="navPerfil">

          <img id="iconPessoa" src="assets/iconPessoa-removebg-preview.png" alt="">
          <h2 id="nomePessoa">Admin</h2>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="container-fluid">
      <div class="selecaoElementos container-fluid">
        <div style="display: flex; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="copy-outline"></ion-icon>
          <h2>Blog</h2>
        </div>
        <div style="display: flex; margin-top: 15px; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="construct-outline"></ion-icon>
          <h2 style="font-size: 15pt;">Serviços</h2>
        </div>
        <div style="display: flex; margin-top: 20px; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="albums-outline"></ion-icon>
          <h2 style="font-size: 15pt;">Portfólio</h2>
        </div>
        <div style="display: flex; margin-top: 20px; cursor: pointer;" class="container-fluid">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="star-outline"></ion-icon>
          <h2 style="font-size: 15pt;">Avaliações</h2>
        </div>
      </div>
    </section>
  </main>

  <script src="js/bootstrap.min.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>