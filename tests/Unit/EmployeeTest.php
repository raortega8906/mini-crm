<?php

namespace Tests\Unit;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

//    /** @test */
//    public function test_an_employee_belongs_to_company()
//    {
//        $employee = new Employee();
//
//        $this->assertInstanceOf(Collection::class, $employee->company);
//    }
}
