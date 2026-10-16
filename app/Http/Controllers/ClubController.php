<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Http\Requests\ClubRequest;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(Request $request)
    {
        $query = Club::query();

        // Додаткове завдання: Фільтрація за містом
        if ($request->filled('city')) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        // Пагінація по 5 записів + збереження query-параметрів при переході по сторінках
        $clubs = $query->orderBy('name')->paginate(5)->withQueryString();

        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(ClubRequest $request)
    {
        Club::create($request->validated());

        return redirect()->route('clubs.index');
    }

    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    public function update(ClubRequest $request, Club $club)
    {
        $club->update($request->validated());

        return redirect()->route('clubs.index');
    }

    public function destroy(Club $club)
    {
        $club->delete();

        return redirect()->route('clubs.index');
    }
}
