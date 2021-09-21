<?php

namespace Tests\Unit;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_a_company_has_many_employee()
    {
        $company = new Company();

        $this->assertInstanceOf(Collection::class, $company->employees);
    }

//    /** @test */
//    public function user_can_create_company()
//    {
//        $user = $this->loginAsAdmin();
//        $company = new Company();
//
//        $this->assertTrue($user->can('create', $company));
//    }
//
//    /** @test */
//    public function user_can_view_company()
//    {
//        $user = $this->loginAsAdmin();
//        $company = Company::factory()->create([
//            'name' => 'Company 1 name',
//            'email' => 'email@emails.com',
//            'website' => 'http://example.com'
//        ]);
//
//        $this->assertTrue($user->can('view', $company));
//    }
//
//    /** @test */
//    public function user_can_update_company()
//    {
//        $user = $this->loginAsAdmin();
//        $company = Company::factory()->create([
//            'name' => 'Company 1 name',
//            'email' => 'email@emails.com',
//            'website' => 'http://example.com'
//        ]);
//
//        $this->assertTrue($user->can('update', $company));
//    }
//
//    /** @test */
//    public function user_can_delete_company()
//    {
//        $user = $this->loginAsAdmin();
//        $company = Company::factory()->create([
//            'name' => 'Company 1 name',
//            'email' => 'email@emails.com',
//            'website' => 'http://example.com'
//        ]);
//
//        $this->assertTrue($user->can('delete', $company));
//    }
}
