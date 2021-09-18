<?php

namespace Tests\Unit;

use App\Models\Company;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class CompanyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function test_a_company_has_many_employee ()
    {
        $company = new Company();

        $this->assertInstanceOf(Collection::class, $company->employees);
    }
}
