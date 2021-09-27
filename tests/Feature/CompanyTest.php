<?php

namespace Tests\Feature;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_if_not_logged_in_redirect_to_login()
    {
        $response = $this->get('admin/companies');

        $response->assertStatus(302);
        $response->assertRedirect('login');
    }

    /** @test */
    // public function test_can_get_a_video_from_a_listing()
    // {
    //     $this->withExceptionHandling();

    //     $user = $this->loginAsAdmin();

    //     Company::factory()->count(2)->create();

    //     $this->getJson('admin/companies')
    //         ->assertOk()
    //         ->assertJsonCount(2);
    // }

}
