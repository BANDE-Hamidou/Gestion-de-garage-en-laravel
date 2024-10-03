<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Error;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

      
        $voitures = Vehicule::all();
        //dd($voitures);
        return view('vehicules.index', compact('voitures'));
       
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('vehicules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
            'annee' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Vehicule::create($input);
       
        return redirect()->route('vehicules.index')
                         ->with('success', 'Vehicule created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicule $vehicule):View
    {
        return view('vehicules.show', compact('vehicule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicule $vehicule):View
    {
        return view('vehicules.edit', compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicule $vehicule):RedirectResponse
    {
        $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
            'annee' => 'required',
            'prix' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
            
        $vehicule->update($input);
      
        return redirect()->route('vehicules.index')
                         ->with('success', 'Vehicule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicule $vehicule): RedirectResponse
    {
        $vehicule->delete();

        return redirect()->route('vehicules.index')
                         ->with('success', 'Vehicule deleted successfully');
    }
}
