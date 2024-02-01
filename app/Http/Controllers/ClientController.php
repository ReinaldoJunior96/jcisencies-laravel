<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
    }
    public function store(ClientRequest $request)
    {
        $data = $request->validate();

        $client = Client::create($request);
    }
}
