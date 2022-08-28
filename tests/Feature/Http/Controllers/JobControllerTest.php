<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\JobController
 */
class JobControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $jobs = Job::factory()->count(3)->create();

        $response = $this->get(route('job.index'));

        $response->assertOk();
        $response->assertViewIs('job.index');
        $response->assertViewHas('customer');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\JobController::class,
            'store',
            \App\Http\Requests\JobStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $type = $this->faker->word;
        $issue_described = $this->faker->word;
        $issue_found = $this->faker->word;

        $response = $this->post(route('job.store'), [
            'type' => $type,
            'issue_described' => $issue_described,
            'issue_found' => $issue_found,
        ]);

        $jobs = Job::query()
            ->where('type', $type)
            ->where('issue_described', $issue_described)
            ->where('issue_found', $issue_found)
            ->get();
        $this->assertCount(1, $jobs);
        $job = $jobs->first();

        $response->assertRedirect(route('job.index'));
    }
}
