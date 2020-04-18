<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        return view('admin.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required',
            'logo' => 'required',
            'website' => 'required'
        ]);

        if ($request->hasFile('logo')){
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('public/images/logo', $fileNameToStore);
        } else {
            $fileNameToStore = 'nologo.jpg';
        }

        $company = new Company();
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->logo = $fileNameToStore;
        $company->website = $request->input('website');
        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company created success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return view('admin.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required',
            'website' => 'required'
        ]);

        if ($request->hasFile('logo')){
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('public/images/logo', $fileNameToStore);
        } else {
            $fileNameToStore = 'nologo.jpg';
        }

        $company = Company::find($id);
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->logo = $fileNameToStore;
        $company->website = $request->input('website');
        $company->update();
        return redirect()->route('companies.index')->with('success', 'Company update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        if($company->logo != 'noimage.jpg'){
            Storage::delete('public/images/logo/'.$company->logo);
        }
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted success');
    }
}
