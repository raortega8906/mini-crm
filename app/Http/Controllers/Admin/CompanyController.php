<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\User;
use App\Notifications\CompanyNotification;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->paginate(10);
        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        $dataValidated = $request->validated();

        if ($request->hasFile('logo')) {
            $dataValidated['logo'] = $request->logo->getClientOriginalName();
            $request->logo->move('images', $dataValidated['logo']);
        }

        $company = Company::create($dataValidated);
        $users = User::all();

        foreach ($users as $user) {
            if ($user->is_admin) {
                $user->notify(new CompanyNotification($company->id));
            }
        }

        return redirect()->route('admin.companies.create')->with('message', 'La empresa fue creada satisfactoriamente');
    }

    public function show(Company $company)
    {
        $employees = $company->employees()->paginate(10);

        return view('admin.companies.show', compact('company', 'employees'));
    }

    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $dataValidated = $request->validated();

        if ($request->hasFile('logo')) {
            $dataValidated['logo'] = $request->logo->getClientOriginalName();
            $request->logo->move('images', $dataValidated['logo']);
        }

        $company->update($dataValidated);

        return redirect()->route('admin.companies.edit', compact('company'))->with('message', 'La empresa fue actualizada satisfactoriamente');
    }

    public function destroy(Company $company)
    {
        $company->employees()->delete();
        $company->delete();

        return redirect()->route('admin.companies.index')->with('message', 'La empresa fue eliminada satisfactoriamente');
    }
}
