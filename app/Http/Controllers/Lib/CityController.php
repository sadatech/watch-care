<?php

namespace App\Http\Controllers\Lib;

use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * get data province yang udah di query
     *
     * @param Request $request
     * @param CityFilter $cityFilter
     * @return
     */
    public function filter(Request $request)
    {
        // return Cache::remember('province' . $request->term, 60 * 24 * 5, function () use ($cityFilter, $request) {
            return City::select('province_name')
                ->where('province_name', 'like', '%'.$request->term.'%')
                ->distinct()
                ->get();
        // });
    }
    public function filterCity(Request $request)
    {
        return City::select('id','city_name')
            ->where('province_name', $request->city_id)
            ->where('city_name', 'like', '%'.$request->term.'%')
            ->get();
    }
}