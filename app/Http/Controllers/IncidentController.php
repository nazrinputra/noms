<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreIncidentRequest;
use App\Http\Requests\UpdateIncidentRequest;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');

        if ($search) {
            $incidents = Incident::where('subject', 'LIKE', "%{$search}%")->paginate(10)->withQueryString();
        } else {
            $incidents = Incident::all()->paginate(10);
        }
        return view('incidents.index', [
            'incidents' => $incidents,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incidents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIncidentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncidentRequest $request)
    {
        $incident = Incident::create($request->validated());
        return Redirect::route('incidents.show', $incident);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function show(Incident $incident)
    {
        return view('incidents.show', ['incident' => $incident]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function edit(Incident $incident)
    {
        return view('incidents.edit', ['incident' => $incident]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncidentRequest  $request
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncidentRequest $request, Incident $incident)
    {
        $incident->update($request->validated());
        return Redirect::route('incidents.show', $incident);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incident $incident)
    {
        //
    }
}
