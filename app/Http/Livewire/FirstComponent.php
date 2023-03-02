<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component; //Esto solo se puede agregar cuando es un coponente especificamentede Livewire (php artisan make:livewire FirstComponent)
                        //Al ejecutarlo tambien se crea la vista donde coloque los selects (first-component.blade.php)

class FirstComponent extends Component
{
    public $selectCountries = null, $selectCities = null; //Nombre de los selects que estan en(first-component.blade.php)
    public $cities = null;

    //Cargando todos los paises en el select 
    public function render()
    {
        return view('livewire.first-component',[ //Vista que se crea junto con el componente
            'country' => Country::all() 
        ]);
    }
    //Cargando las ciudades a partir de los paises
    public function updatedselectCountries($country_id) 
    {
        $this->cities = City::Where('country_id',$country_id)->get();
    }

}
