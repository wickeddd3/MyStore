<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function storeNewCategory()
    {
        $response = $this->post('/categories', [
            'name' => 'Mens Fashion',
            'slug' => 'mens-fashion',
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseCount('categories', 1);
    }
}
