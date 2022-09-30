<?php

//used to disable CORS
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ArtisanLabs\LaravelGeoDatabase\Models\GeoCity;
use ArtisanLabs\LaravelGeoDatabase\Models\GeoState;
use ArtisanLabs\LaravelGeoDatabase\Models\GeoCountry;

/*header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');*/

/*
    Rotas do Cidades API
*/

// |||| Informações de endereço |||
Route::get('countries', function(){
    return GeoCountry::all();
})->name('countries');

Route::post('countries/select2', function(Request $request){

    $itens = GeoCountry::orderBy("nome");

    if($request->search){
        $itens = $itens->whereLike(['nome', 'nome_en', 'sigla', 'bacen'], $request->search)->limit(50);
    }else{
        $itens = $itens->limit(10);
    }

    $itens = $itens->get();

    $itens->transform(fn(GeoCountry $item, $key) => [
        'id' => $item->nome,
        'text' => $item->nome,
        'selected' => $item->id == $request->selected_value || empty($key),
    ]);

    return response()->json($itens);
})->name('countries.select2');

Route::get('countries/states', function(){
    return GeoCountry::with('states')->get();
})->name('countries.states');

Route::get('countries/{id}', function($id){
    return GeoCountry::findOrFail($id);
})->name('countries.view');

Route::get('states', function(){
    return GeoState::all();
})->name('states');

Route::post('states/select2/{country_id?}', function(Request $request, $country_id = null){

    $country_id = $request->country_id ?? $country_id;

    $itens = GeoState::orderBy("nome");

    if($country_id){
        $itens = $itens->where('country_id', $country_id);
    }

    if($request->search){
        $itens = $itens->whereLike(['nome', 'uf', 'ibge', 'ddd'], $request->search)->limit(50);
    }else{
        $itens = $itens->limit(10);
    }

    $itens = $itens->get();


    $itens->transform(fn(GeoState $item, $key) => [
        'id' => $item->uf,
        'text' => $item->nome,
        'selected' => ($item->id == $request->selected_value) || ($request->search && Str::lower($item->uf) === Str::lower($request->search)),
    ]);

    return response()->json($itens);
})->name('states.select2');

Route::get('states/{id}', function($id){
    return GeoState::findOrFail($id);
})->name('states.view');

Route::get('states/country/{id}', function($id){
    return GeoState::where('country_id', $id)->get();
})->name('states.country');

Route::get('cities', function(){
    return GeoCity::all();
})->name('cities');

Route::post('cities/select2/{state_id?}', function(Request $request, $state_id = null){

    $state_id = $request->state_id ?? $state_id;

    $itens = GeoCity::orderBy("nome")->with('state');

    if($state_id){
        $itens = $itens->where('state_id', $state_id);
    }

    if($request->state_uf){
        $itens = $itens->whereHas('state', function ($q) use($request){
            $q->where('uf', $request->state_uf);
        });
    }

    if($request->search){
        $itens = $itens->whereLike(['nome', 'ibge'], $request->search)->limit(50);
    }else{
        $itens = $itens->limit(10);
    }

    $itens = $itens->get();

    $itens->transform(fn(GeoCity $item, $key) => [
        'id' => $item->nome,
        'text' => $item->nome,
        'selected' => $item->id == $request->selected_value || ($request->search && Str::lower($item->nome) === Str::lower($request->search)),
    ]);

    return response()->json($itens);
})->name('cities.select2');

Route::get('cities/{id}', function($id){
    return GeoCity::findOrFail($id);
})->name('cities.view');

// alias to states/cities
Route::get( 'cities/state/{id}', function($id){
    return GeoCity::where('state_id', $id)->get();
})->name('cities.state');

