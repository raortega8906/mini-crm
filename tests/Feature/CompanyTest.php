<?php

namespace Tests\Feature;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function test_if_not_logged_in_redirect_to_login()
    {
        $response = $this->get('admin/companies');

        $response->assertStatus(302);
        $response->assertRedirect('login');
    }

}
