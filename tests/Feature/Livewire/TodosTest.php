<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Todos;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TodosTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Todos::class)
            ->assertStatus(200);
    }
}
