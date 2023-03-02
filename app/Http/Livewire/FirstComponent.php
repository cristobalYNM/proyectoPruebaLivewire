<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;


use Livewire\Component;

class FirstComponent extends Component
{
    public $selectCountries = null, $selectCities = null;
    public $countries = null, $cities = null;
    public function render()
    {
        return view('livewire.first-component',[
            'country' => Country::all()
        ]);
    }

    public function updatedselectCountries($country_id)
    {
        $this->cities = City::Where('country_id',$country_id)->get();
    }

}
