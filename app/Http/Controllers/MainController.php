<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        return "Index";
    }

    public function viewPage(): View
    {
        return view('welcome');
    }

    public function upperCase($value): string
    {
        return "Valor de caixa alta: " . $this->upperText($value);
    }
}
