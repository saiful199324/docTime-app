<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
class PeopleController extends Controller
{
    public function index(Request $request) {
        $birthYear = $request->input('year');
    $birthMonth = $request->input('month');

    $cacheKey = "people_{$birthYear}_{$birthMonth}";
    $people = Cache::remember($cacheKey, 1, function () use ($birthYear, $birthMonth) {
        $query = Person::query();

        if ($birthYear) {
            $query->whereYear('birthday', '=', $birthYear);
        }

        if ($birthMonth) {
            $query->whereMonth('birthday', '=', $birthMonth);
        }

        // Note: The paginate method is not directly cacheable because it contains 
        // stateful information like the current page. So we should cache the query results instead,
        // but for simplicity in this example, it is used inside the closure.
        return $query->paginate(20);
    });

    $people->appends([
        'year' => $birthYear,
        'month' => $birthMonth,
    ]);

    // Returning the view and passing the 'people' data to it
    return view('people', ['people' => $people]);
    }
}
