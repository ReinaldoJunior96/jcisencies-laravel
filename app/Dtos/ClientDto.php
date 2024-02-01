<?php

namespace App\Dtos;

use Illuminate\Http\Client\Request;

class ClientDTO
{
    private String $nome;
    private String $identidade;
    private String $cpf;
    private String $orgaoExpedidor;
    private String $uf;
    private String $dataNascimento;
    private String $sexo;
    private String $dataInscricao;
    private String $observacao;

    // Construtor para criar uma instância do DTO com os dados do cliente
    public function __construct(
        Request $request

    ) {
        $this->name = $request->name;
        $this->email = $email;
        $this->email = $email;
        $this->email = $email;
        $this->email = $email;
        $this->email = $email;
        $this->email = $email;
        $this->email = $email;
        $this->email = $email;
    }

    // Métodos para obter dados do DTO
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

// Exemplo de uso do DTO
$clientData = new ClientDTO(1, 'John Doe', 'john@example.com');

// Transmitindo dados usando o DTO
$service->processClientData($clientData);
