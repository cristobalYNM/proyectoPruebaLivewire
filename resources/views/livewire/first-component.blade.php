<div>
   <div class="col-sm-3">
        <label>Paises</label>
        <select wire:model='selectCountries' id="country_id">
            <option value="">pais</option>
            @foreach($country as $Country)
            <option value="{{$Country->id}}">{{$Country->name}}</option>
            @endforeach
        </select>
   </div>
   @if(!is_null($cities))
        <div class="col-sm-3">
            <label>Ciudades</label>
            <select wire:model='selectselectCities'>
                <option value="">Ciudad</option>
                @foreach($cities as $City)
                <option value="{{$City->id}}">{{$City->name}}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
