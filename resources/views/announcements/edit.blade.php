<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Announcement</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('announcements.update', $announcement->id) }}">
            @csrf
            @method('PUT')
            <div>
                <label>Title</label>
                <input name="title" value="{{ $announcement->title }}" class="w-full border p-2" required>
            </div>
            <div class="mt-4">
                <label>Description</label>
                <textarea name="description" class="w-full border p-2" required>{{ $announcement->description }}</textarea>
            </div>
            <div class="mt-4">
                <label>Event Date</label>
                <input type="date" name="event_date" value="{{ $announcement->event_date }}" class="w-full border p-2" required>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2">Update</button>
        </form>
    </div>
</x-app-layout>
