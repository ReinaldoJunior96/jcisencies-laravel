<?php

namespace Tests\Feature;

use App\Models\Client;

use App\Http\Requests\ClientRequest;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /* test */
    public function  testCreateANewClient()
    {

        $clientData = [
            'nome' => 'John Doe',
            'identidade' => '123456',
            'cpf' => '123.456.789-01',
            'orgao_expedidor' => 'SSP',
            'uf' => 'SP',
            'data_nascimento' => '1990-01-01',
            'sexo' => 'M',
            'data_inscricao' => '2024-02-01',
            'observacao' => 'Observações sobre o cliente',
        ];

        // Criação do cliente
        $client = Client::create($clientData);

        // Asserts para verificar se o cliente foi criado corretamente
        $this->assertDatabaseHas('tbl_cliente', $clientData);
        $this->assertEquals($clientData['nome'], $client->nome);
    }

    /* test */
    public function testIfIdentidadeCannotExceed15Characters()
    {
        //$this->withoutExceptionHandling();

        $clientData = [
            'nome' => 'John Doe',
            'identidade' => '1234567890987656',
            'cpf' => '123.456.789-01',
            'orgao_expedidor' => 'SSP',
            'uf' => 'SP',
            'data_nascimento' => '1990-01-01',
            'sexo' => 'M',
            'data_inscricao' => '2024-02-01',
            'observacao' => 'Observações sobre o cliente',
        ];

        // Faça a requisição e obtenha a resposta
        $response = $this->post(route('create-a-new-client'), $clientData);


        $response->assertStatus(302); // ou outra verificação adequada ao seu código
        $response->assertSessionHasErrors([
            'identidade' => 'O campo identidade não pode ter mais de 15 caracteres.'
        ]);
    }

    public function testUpdateClient()
    {
        $latestClientId = Client::max('id_cliente');
        // Suponha que você tenha um cliente existente no banco de dados
        $existingClient = Client::find($latestClientId);

        // Dados de exemplo para atualizar o cliente
        $updatedData = [
            'nome' => 'reinaldinho',
        ];
        // Atualização do cliente
        $existingClient->update($updatedData);


        // Asserts para verificar se o cliente foi atualizado corretamente
        $this->assertDatabaseHas('tbl_cliente', $updatedData);
        $this->assertEquals(
            $updatedData['nome'],
            $existingClient->nome
        );
    }

    public function testDeleteClient()
    {
        $latestClientId = Client::max('id_cliente');
        // Suponha que você tenha um cliente existente no banco de dados
        $existingClient = Client::find($latestClientId);

        // Exclusão do cliente
        $existingClient->delete();

        // Assert para verificar se o cliente foi excluído corretamente
        $this->assertDatabaseMissing('tbl_cliente', ['id_cliente' => $existingClient->id_cliente]);
    }
}
