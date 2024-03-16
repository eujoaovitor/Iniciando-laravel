<?php

namespace App\Http\Controllers\Jv;
use App\Http\Controllers\Controller;

class JvController extends Controller
{
    public function clientes()
    {
        return view("clientes");
    }
}