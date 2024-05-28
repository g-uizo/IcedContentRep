<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{

    

    private string $name;
    private string $email;
    private string $assunto;
    private string $mensagem;

    public function getName():string {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function getEmail():string {
    return $this->email;
    }
    public function setEmail(string $email) {
    $this->email = $email;
    }
    public function getAssunto():string { 
    return $this->assunto;
    }
    public function setAssunto(string $assunto) {
    $this->assunto = $assunto;
    }
    public function getMensagem():string {
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem) {
    $this->mensagem = $mensagem;
    }
    }