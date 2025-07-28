<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // protected $name;

    // public function __construct()
    // {
    //     $this->name = '1';
    // }
    // public function index()
    // {
    //     return 'hello from controller';
    // }

    public function aboutUs($id, $name)
    {
        $name = $this->privateFunction();
        // return $this->name;
        return $name;

        // return 'Code with Eraufi ID No:' . $id . 'Name:' . $name;
        return view('aboutus', compact('id', 'name'));
    }

    private function privateFunction()
    {
        return 'hello world';
    }
    public function addData()
    {

        DB::table('students')->insert([
            // 'user_id' => 1,
            'name' => 'tester',
            'email' => 'tester@gmail.com',
            'age' => 15,
            'date_of_birth' => '2010-01-01',
            'gender' => 'm'

        ]);
        return 'added';
    }
    public function getData()
    {
        $item = DB::table('students')
            ->where('id', '>', 1)
            ->get();
        return $item;
    }

    public function updateData()
    {
        // 'user_id' => 2,
        DB::table('students')->where('id', 1)->update([
            'name' => 'updated Name',
            'email' => 'update@gmail.com',
            'age' => 20
        ]);
        return 'yeah';
    }

    public function deleteData()
    {
        Student::findOrFail(1)->delete();
        return 'Deleted';
    }
}
