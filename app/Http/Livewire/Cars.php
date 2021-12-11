<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class Cars extends Component
{
    public $make;
    public $model;

    function resetInputField() {
        $this->make = '';
        $this->model = '';
    }

    function store() {
        $validate = $this->validate([
            'make' => 'required',
            'model' => 'required',
        ]);

        Car::create($validate);
        session()->flash('msg', 'Successfully');
        $this->resetInputField();
        $this->emit('CarsAdded');
    }

    public function render()
    {
        $cars = Car::all();
        return view('livewire.cars', ['cars' => $cars]);
    }
}
