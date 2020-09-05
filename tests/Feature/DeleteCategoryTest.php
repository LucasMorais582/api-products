<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Category;
use App\Http\Controllers\CategoryControllerFake;

class DeleteCategoryTest extends TestCase
{
    public function testDeleteCategory() {
        $category = new Category;
        $controller = new CategoryControllerFake();

        $category->name = 'Eletrônicos';

        $responseCreate = $controller->store($category);

        $this->assertTrue($controller->delete($responseCreate->id));
    }

    public function testDeleteNonExistentCategory() {
        $category = new Category;
        $controller = new CategoryControllerFake();

        $category->name = 'Eletrônicos';

        $responseCreate = $controller->store($category);

        $this->assertFalse($controller->delete(2));
    }
}
