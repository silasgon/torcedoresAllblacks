<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

class Torcedor{

    public $id;
    public $nome; 
    public $documento;
    public $email;
    public $telefone;
    public $cep;
    public $endereco;
    public $cidade;
    public $uf;
    public $ativo;

    public function cadastrar(){

        $database = new Database('torcedores');
        $this->id = $database->insert([
                                        'nome'      => $this->nome,
                                        'documento' => $this->documento,
                                        'email'     => $this->email,
                                        'telefone'  => $this->telefone,
                                        'cep'       => $this->cep,
                                        'endereco'  => $this->endereco,
                                        'cidade'    => $this->cidade,
                                        'uf'        => $this->uf,
                                        'ativo'     => $this->ativo,

                                    ]);

    }

    public function atualizar(){
        return (new Database('torcedores'))->update('id = '.$this->id,[
                                                                        'nome'      => $this->nome,
                                                                        'documento' => $this->documento,
                                                                        'email'     => $this->email,
                                                                        'telefone'  => $this->telefone,
                                                                        'cep'       => $this->cep,
                                                                        'endereco'  => $this->endereco,
                                                                        'cidade'    => $this->cidade,
                                                                        'uf'        => $this->uf,
                                                                        'ativo'     => $this->ativo,
                                                                    ]);
    }

    public static function getTorcedores($where = null, $order = null, $limit = null){
        return (new Database('torcedores'))->select($where, $order, $limit)
                                            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getTorcedor($id){
        return (new Database('torcedores'))->select('id = '.$id)
                                            ->fetchObject(self::class);
    }

}