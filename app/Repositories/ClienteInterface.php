<?php

namespace App\Repositories;

use App\Models\Client;

interface ClientInterface
{
    public function NewCliente(): Client;
}
