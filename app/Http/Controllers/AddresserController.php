<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddresserController extends Controller
{
    public function showAddresserList()
    {
        return view('addresserList');
    }

    public function showAddresser($id)
    {
        return view('addresser',  ['addresser' => $id]);
    }
}
