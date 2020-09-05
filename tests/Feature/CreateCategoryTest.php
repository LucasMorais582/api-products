<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Category;
use App\Http\Controllers\CategoryControllerFake;


class CreateCategoryTest extends TestCase
{
    public function testCreateCategory() {
        $category = new Category();
        $controller = new CategoryControllerFake();

        $category->name = 'Eletrônicos';


        $response = $controller->store($category);
        $this->assertJson(json_encode([
            $response->id => 1,
            $response->name => 'Eletrônicos',
        ]));
    }
}
