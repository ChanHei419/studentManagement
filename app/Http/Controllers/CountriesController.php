<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\Student;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $countries = Countries::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                ->orWhere('code', 'like', "%{$search}%");
        })
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('countries.index', compact('countries', 'search'));
    }

    public function add()
    {
        return view('countries.add'); // Render the add.blade.php form
    }

    public function create(Request $request)
    {
        // Validate and save the country
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
        ]);

        $country = new Countries($validated);
        $country->save();
        // Assuming you have a Country model
        // Country::create($validated);

        return redirect()->route('countries.index')->with('success', 'Country added successfully');
    }

     public function edit($id)
    {
        $country=Countries::findOrFail($id);
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $country=Countries::findOrFail($id);
      $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
        ]);

        
        $country->name = $validated['name'];
        $country->code = $validated['code'];
        // $country = new Countries($validated);
        $country->save();
        // Assuming you have a Country model
        // Country::create($validated);

        return redirect()->route('countries.index')->with('success', 'Country edited successfully');


    } 
public function destroy($id)
    {
        $country = Countries::findOrFail($id)->delete();

        return redirect()->route('countries.index')->with('success', 'Country deleted successfully');
    }

}

