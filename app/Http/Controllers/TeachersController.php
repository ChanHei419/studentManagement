<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teachers;

class TeachersController extends Controller
{
    //
    public function index()
    {

        return Teachers::all();
    }

    public function add1()
    {
        $item = new Teachers();
        $item->name = 'Test Name';
        $item->save();
        return 'Added Successfully';
    }

    public function show($id)
    {
        $item = Teachers::findOrFail($id);
        return $item;
    }

    public function update($id)
    {
        $item = Teachers::findOrFail($id);
        $item->name = 'Updated Teacher';
        $item->update();
        return 'updated sucessfully';
    }

    public function delete($id)
    {
        $item = Teachers::findOrFail($id);
        $item->delete();
        return 'deleted successfully';
    }
}
