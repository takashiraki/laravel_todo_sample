<?php

declare(strict_types=1);

namespace Tests\Feature\Todo;

use Tests\TestCase;

class CreateTodoTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->withoutVite();
    }

    public function testBasicHandle(): void
    {
        $response = $this->post(
            '/todo/store',
            [
                'title' => 'My first todo',
            ]
        );
        
        $response->assertStatus(200);
    }
}
