@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between">
        <h1 class="text-2xl font-bold">Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Task</a>
    </div>

    <div class="mb-4 flex gap-4">
        <form action="{{ route('tasks.index') }}" method="GET" class="flex-1">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search tasks..."
                class="border p-2 w-full">
        </form>
        <select onchange="window.location.href=this.value" class="border p-2">
            <option value="{{ route('tasks.index') }}">All Tasks</option>
            <option value="{{ route('tasks.index', ['filter' => 'completed']) }}"
                {{ request('filter') === 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="{{ route('tasks.index', ['filter' => 'starred']) }}"
                {{ request('filter') === 'starred' ? 'selected' : '' }}>Starred</option>
        </select>
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-4 text-left">Title</th>
                    <th class="p-4 text-left">Description</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Starred</th>
                    <th class="p-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="p-4">{{ $task->title }}</td>
                        <td class="p-4">{{ $task->description }}</td>
                        <td class="p-4">
                            <form action="{{ route('tasks.toggleCompletion', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="text-blue-500">
                                    {{ $task->is_completed ? 'Completed' : 'Pending' }}
                                </button>
                            </form>
                        </td>
                        <td class="p-4">
                            <form action="{{ route('tasks.toggleStarred', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="text-yellow-500">
                                    {{ $task->is_starred ? '★' : '☆' }}
                                </button>
                            </form>
                        </td>
                        <td class="p-4 flex gap-2">
                            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if ($tasks->isEmpty())
                    <tr>
                        <td colspan="5" class="p-4 text-center">No tasks found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
