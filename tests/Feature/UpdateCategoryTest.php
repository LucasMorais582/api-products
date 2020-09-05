<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Category;
use App\Http\Controllers\CategoryControllerFake;

class UpdateCategoryTest extends TestCase
{
    public function testUpdateCategory() {
        $category = new Category();
        $controller = new CategoryControllerFake();

        $category->name = 'Eletrodomestico';

        $responseCreate = $controller->store($category);

        // Preechendo novos dados
        $responseCreate->name = 'Móveis';

        $responseUpdate = $controller->update($responseCreate);

        $this->assertJson(json_encode([
            $responseUpdate->id = 1,
            $responseUpdate->name => 'Móveis',
        ]));
    }

    public function testUpdateNonExistentCategory() {
        $category = new Category();
        $controller = new CategoryControllerFake();

        $category->name = 'Eletrodomestico';

        $responseCreate = $controller->store($category);

        // Preechendo novos dados
        $responseCreate->id = 2;
        $responseCreate->name = 'Móveis';

        $responseUpdate = $controller->update($responseCreate);

        $this->assertFalse($responseUpdate);

    }
}
