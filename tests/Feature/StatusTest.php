<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StatusTest extends TestCase
{
    /**
     * Test Status
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_about_tab_returns_successful_response(): void
    {
        $response = $this->get('/#about');

        $response->assertStatus(200);
    }

    public function test_projects_tab_returns_successful_response(): void
    {
        $response = $this->get('/#projects');

        $response->assertStatus(200);
    }

    public function test_contact_tab_returns_succesful_response(): void
    {
        $response = $this->get('/#contact');

        $response->assertStatus(200);
    }
}
