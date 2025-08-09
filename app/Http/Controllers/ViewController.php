<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Faker\Test\Provider\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showView(): View
    {

        $list = collect([
            'name' => 'John Doe',
            'email' => 'john@gmail.com.br'
        ])->toArray();

        return view('viewShow', compact('list'));
    }
}
