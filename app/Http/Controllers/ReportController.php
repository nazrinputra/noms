<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Customer;
use App\Models\Incident;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Asset;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!$search = request()->query('search')) {
            $reports = Report::all()->paginate(10);
        } else {
            $reports = Report::where('reference_no', 'LIKE', "%{$search}%")->paginate(10)->withQueryString();
        }

        return view('reports.index', [
            'reports' => $reports,
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
        $incidents = Incident::all();
        $customers = Customer::all();
        $assets = Asset::all();
        return view('reports.create', [
            'incidents' => $incidents,
            'customers' => $customers,
            'assets' => $assets,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        $report = Report::create($request->validated());
        return Redirect::route('reports.show', $report);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('reports.show', [
            'report' => $report
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $incidents = Incident::all();
        $customers = Customer::all();
        $assets = Asset::all();

        return view('reports.edit', [
            'report' => $report,
            'incidents' => $incidents,
            'customers' => $customers,
            'assets' => $assets,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportRequest  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        $report->update($request->validated());
        return Redirect::route('reports.show', $report);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return Redirect::route('reports.index');
    }
}
