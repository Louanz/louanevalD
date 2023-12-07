<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Ordinateur;
use App\Http\Repositories\OrdinateurRepository;




class OrdinateurRepositoryTest extends TestCase
{

    public function test_construct_response(): void
    {
        $ordinateur = new Ordinateur;
        $repository = new OrdinateurRepository($ordinateur);

        $this->assertInstanceOf(OrdinateurRepository::class, $repository);

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_update_response(): void
    {


        $response = $this->get('/');

        $response->assertStatus(2000);



    }
 }


