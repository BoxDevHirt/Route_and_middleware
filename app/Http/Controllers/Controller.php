<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function upperText($str): string {
        return strtoupper(trim($str));
    }
}
