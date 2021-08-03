<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(Company $company)
    {
        return view('admin.employees.create', compact('company'));
    }

    public function store(StoreEmployeeRequest $request, Company $company)
    {
        $company->employees()->create($request->validated());

        return redirect()->route('admin.companies.employees.create', compact('company'))
            ->with('message', 'El empleado fue creado satisfactoriamente');
    }

    public function show(Company $company, Employee $employee)
    {
        return view('admin.employees.show', compact('company', 'employee'));
    }

    public function edit(Company $company, Employee $employee)
    {
        return view('admin.employees.edit', compact('company', 'employee'));
    }

    public function update(StoreEmployeeRequest $request, Company $company, Employee $employee)
    {
        $employee->update($request->validated());

        return redirect()->route('admin.companies.employees.edit', compact('company', 'employee'))
            ->with('message', 'El empleado fue actualizado satisfactoriamente');
    }

    public function destroy(Company $company, Employee $employee)
    {
        $employee->delete();

        return redirect()->route('admin.companies.show', compact('company', 'employee'))
            ->with('message', 'El empleado fue eliminado satisfactoriamente');
    }
}
