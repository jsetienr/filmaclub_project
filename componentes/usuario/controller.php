<?php
require_once 'componentes/usuario/model.php';

if(isset($_POST['cierrasesionbtn'])){
    session_unset();
}

require_once 'componentes/usuario/view.php';