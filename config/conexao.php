<?php 
// Classe para conectar ao
class Conexao
{
    private $nomeservidor = 'localhost';
    private $nomeusuario = 'root';
    private $senha = '12345';
    private $banco = 'bisa_teste';
    public function adicionarConexao()
    {
        $conn = new mysqli(
            $this->nomeservidor = 'localhost',
            $this->nomeusuario = 'root',
            $this->senha = '12345',
            $this->banco = 'bisa_teste'
        );
        if ($conn->connect_error) {
            die('Conexão com problemas.');
        }
        return $conn;
    }
}
