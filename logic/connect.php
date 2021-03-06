<?php
class DbConnection {
    private $host = 'localhost';
    private $dbname = 'cronos';
    private $user = 'root';
    private $password = '';

    public function connect(){
        //Iniciando conexão com o bd com PDO
        try{
            //remoto
            $connect = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname;",
                "$this->user",
                "$this->password"
            );
            $connect->exec('SET CHARACTER SET utf8mb4');

            return $connect;

        } catch (PDOException $e){
            echo 'Não foi possivel se conectar com o servidor <br>';
            echo 'Código do erro: ' . $e->getCode() . '<br> Mensagem de erro: ' . $e->getMessage();
        }
    }
}
?>