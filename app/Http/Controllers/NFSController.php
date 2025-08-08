<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NFSController extends Controller
{
    public function index(): View
    {
        return View('NFS');
    }

    public function infoNFS(Request $request): View
    {

        $validate = $request->validate([
            'id' => 'required|integer|min:1'
        ]);

        $data = json_decode(json_encode($validate, true));

        return View(
            'NFSID',
            [
                'data' => $data
            ]
        );
    }
}
