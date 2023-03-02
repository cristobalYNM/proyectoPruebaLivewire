<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component; 

class FirstComponent extends Component
{
    public $selectCountries = null, $selectCities = null;
    public $countries = null, $cities = null;

    //Cargando todos los paises 
    public function render()
    {
        return view('livewire.first-component',[
            'country' => Country::all()
        ]);
    }
    //Cargando las ciudades a partir de los paises
    public function updatedselectCountries($country_id)
    {
        $this->cities = City::Where('country_id',$country_id)->get();
    }

}
