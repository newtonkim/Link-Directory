<?php

namespace Tests\Feature;

use App\User;
use Auth;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LinkRegistrationTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example
     * @test
     */
    public function test_that_validation_should_fail_if_title_is_not_string()
    {
    	// Auth::login(User::first());
        $response = $this->post('links', [
        	'title'=> 60,
        	'url' => 'https://google.com',
        	'description' => 'some shit'
        ]);

        // dd($response);

        $this->assertDatabaseHas('links', [
        	'title' => 60
        ]);

        $this->assertEquals($response->exception->status, 422);

        // $this->assertEquals($response->exception->messages->messages->title, 'title');
        // $response->assertSessionHasErrorsIn($response->exception->validator->messages, $keys = ['title']);


    }
}
