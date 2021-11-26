<?php
  
    require ('connect.php');

    if(!(session_status() == PHP_SESSION_ACTIVE)){
        session_start();
    }
    
    
    function getProfiles(){

        if(!isset($_SESSION['usuario_id'])){
            return false;
        }
        $connection = new DbConnection();
    
        $con = $connection->connect();
    
        $profiles = $con->query("
            select id_perfil, empresa.nome_empresa from perfil 
            inner join empresa
            on perfil.id_empresa = empresa.id_empresa and perfil.data_exclusao_perfil is null
            where usuario_id={$_SESSION['usuario_id']};
        ");
    
        $profiles = $profiles->fetchAll(PDO::FETCH_ASSOC);
        
        return $profiles;
    }

?>