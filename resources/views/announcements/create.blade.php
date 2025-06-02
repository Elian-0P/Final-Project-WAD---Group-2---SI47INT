<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Announcement</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('announcements.store') }}">
            @csrf
            <div>
                <label>Title</label>
                <input name="title" class="w-full border p-2" required>
            </div>
            <div class="mt-4">
                <label>Description</label>
                <textarea name="description" class="w-full border p-2" required></textarea>
            </div>
            <div class="mt-4">
                <label>Event Date</label>
                <input type="date" name="event_date" class="w-full border p-2" required>
            </div>
            <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2">Create</button>
        </form>
    </div>
</x-app-layout>
