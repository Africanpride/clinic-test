<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClinicsFormRequest;
use App\Models\Clinic;
use Exception;

class ClinicController extends Controller
{

    /**
     * Display a listing of the clinics.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $clinics = Clinic::paginate(25);

        return view('clinics.index', compact('clinics'));
    }

    /**
     * Show the form for creating a new clinic.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('clinics.create');
    }

    /**
     * Store a new clinic in the storage.
     *
     * @param App\Http\Requests\ClinicsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(ClinicsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Clinic::create($data);

            return redirect()->route('clinics.clinic.index')
                ->with('success_message', 'Clinic was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified clinic.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $clinic = Clinic::findOrFail($id);

        return view('clinics.show', compact('clinic'));
    }

    /**
     * Show the form for editing the specified clinic.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $clinic = Clinic::findOrFail($id);
        

        return view('clinics.edit', compact('clinic'));
    }

    /**
     * Update the specified clinic in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\ClinicsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, ClinicsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $clinic = Clinic::findOrFail($id);
            $clinic->update($data);

            return redirect()->route('clinics.clinic.index')
                ->with('success_message', 'Clinic was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified clinic from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $clinic = Clinic::findOrFail($id);
            $clinic->delete();

            return redirect()->route('clinics.clinic.index')
                ->with('success_message', 'Clinic was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
