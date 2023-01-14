
<div class="container-fluid">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">
        <img src="./images/logo_mini.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
        Polcard
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Portfolio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="edit_galeria.php">Editar Portfolio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="cerrar.php">Cerrar Sesion <b><?php echo $_SESSION['usuario']; ?></b></a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
<hr>