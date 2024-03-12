<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function index(){
        return view('crud_instructions.index');
    }

    public function create(){
        return view('crud_instructions.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Name' => 'required',
            'Qty' => 'required|numeric',
            // 'price' => 'required|decimal',
            'Description' => 'nullable'
        ]);

        $newCrud = Crud::create($data);

        return redirect(route('crud.index'));
    }
}
