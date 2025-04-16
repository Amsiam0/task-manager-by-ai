<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    public function test_can_create_task()
    {
        $response = $this->actingAs($this->user)->post(route('tasks.store'), [
            'title' => 'Test Task',
            'description' => 'Test Description',
        ]);

        $response->assertRedirect(route('tasks.index'));
        $this->assertDatabaseHas('tasks', [
            'title' => 'Test Task',
            'user_id' => $this->user->id,
        ]);
    }

    public function test_can_update_task()
    {
        $task = Task::factory()->create(['user_id' => $this->user->id]);

        $response = $this->actingAs($this->user)->put(route('tasks.update', $task), [
            'title' => 'Updated Task',
            'description' => 'Updated Description',
        ]);

        $response->assertRedirect(route('tasks.index'));
        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'title' => 'Updated Task',
        ]);
    }

    public function test_can_delete_task()
    {
        $task = Task::factory()->create(['user_id' => $this->user->id]);

        $response = $this->actingAs($this->user)->delete(route('tasks.destroy', $task));

        $response->assertRedirect(route('tasks.index'));
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }

    public function test_can_toggle_task_completion()
    {
        $task = Task::factory()->create(['user_id' => $this->user->id, 'is_completed' => false]);

        $response = $this->actingAs($this->user)->patch(route('tasks.toggleCompletion', $task));

        $response->assertRedirect(route('tasks.index'));
        $this->assertDatabaseHas('tasks', ['id' => $task->id, 'is_completed' => true]);
    }

    public function test_can_toggle_task_starred()
    {
        $task = Task::factory()->create(['user_id' => $this->user->id, 'is_starred' => false]);

        $response = $this->actingAs($this->user)->patch(route('tasks.toggleStarred', $task));

        $response->assertRedirect(route('tasks.index'));
        $this->assertDatabaseHas('tasks', ['id' => $task->id, 'is_starred' => true]);
    }
}