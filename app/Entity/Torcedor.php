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
    public $bairro;
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
                                        'bairro'    => $this->bairro,
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
                                                                        'bairro'    => $this->bairro,
                                                                        'cidade'    => $this->cidade,
                                                                        'uf'        => $this->uf,
                                                                        'ativo'     => $this->ativo,
                                                                    ]);
    }

    public function excluir(){
        return (new Database('torcedores'))->delete('id = '.$this->id);
    }

    public static function getTorcedores($where = null, $order = null, $limit = null){
        return (new Database('torcedores'))->select($where, $order, $limit)
                                            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getTorcedor($id){
        return (new Database('torcedores'))->select('id = '.$id)
                                            ->fetchObject(self::class);
    }

     public static function getEmailAtivo(){
        //echo "<pre>"; echo "Estou na consulta"; print_r($fields);echo "</pre>";exit;
        return (new Database('torcedores'))->selectEmail()
                                            ->fetchAll(PDO::FETCH_ASSOC);
    } 
}