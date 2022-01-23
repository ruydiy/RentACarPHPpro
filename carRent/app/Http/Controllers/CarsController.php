<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{

    public function index()
    {
        $cars = auth()->user()->cars();
        return view('dashboard', compact('cars'));
    }
    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'description' => 'required'
        ]);
        $car = new Car();
        $car->description = $request->description;
        $car->user_id = auth()->user()->id;
        $car->save();
        return redirect('/dashboard');
    }

    public function edit(Car $car)
    {

        if (auth()->user()->id == $car->user_id)
        {
            return view('edit', compact('car'));
        }
        else {
            return redirect('/dashboard');
        }
    }

    public function update(Request $request, Car $car)
    {
        if(isset($_POST['delete'])) {
            $car->delete();
            return redirect('/dashboard');
        }
        else
        {
            $this->validate($request, [
                'description' => 'required'
            ]);
            $car->description = $request->description;
            $car->save();
            return redirect('/dashboard');
        }
    }
}/*
