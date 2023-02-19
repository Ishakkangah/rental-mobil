<?php

namespace App\Http\Controllers;

use App\Models\Car;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->paginate(10);
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'plat' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required'
        ]);

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('cars');
        }
        Car::create($data);
        return redirect()->route('car.index')->with(['success' => 'data mobil berhasil di tambahkan']);
    }

    public function show($id)
    {
        return 'SHOW';
    }

    public function edit($id)
    {
        return 'EDIT';
    }

    public function update(Request $request, $id)
    {
        return 'UPDATE';
    }

    public function destroy(Car $car)
    {
        if($car->image){
            Storage::delete($car->image);
        }
        Car::destroy($car->id);
        return redirect()->route('car.index')->with(['success' => 'Data berhasil di hapus']);
    }
}
