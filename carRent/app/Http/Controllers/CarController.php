<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function add(){
        return view('create');
    }

    public function create(Request $request){
        $this->validate($request, [
            'brand' => 'required',
            'model' => 'required',
            'description' => 'required'
        ]);

        $car = new Car();
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->description = $request->description;
        $car->productionDate = $request->productionDate;
        if ($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $file = $request->file('image')->move('images', $imageName);
            $car->image = $file;
            //$extension = $file->getClientOriginalExtension();
            //$fileName = $file . '.' . $extension;

            //$file->move('public/imgFiles/', $fileName);

            //var_dump($filePath);
            //die();
        }
        else {
            return dd($request->all());
        }

        $car->save();

        return redirect('/show');
    }

    public function edit($id){
        $car = Car::find($id);

        return view('edit', compact('car'));
    }

    public function update(Request $request, $id){
        $car = Car::find($id);

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->description = $request->description;
        $car->productionDate = $request->productionDate;

        if ($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $file = $request->file('image')->move('images', $imageName);
            $car->image = $file;
        }
        else {
            return $request;
        }
        $car->save();

        return redirect('/show');
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return redirect('/show');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $cars = Car::where('brand', 'like','%'.$search.'%')
            ->orWhere('model', 'like','%'.$search.'%')
            ->orWhere('productionDate', 'like','%'.$search.'%')->get();
        return view('search', compact('cars'));
    }
    public function index(){
        $cars = Car::all();
        return view('show', compact('cars'));
    }
}

