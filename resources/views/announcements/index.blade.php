<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Announcements</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('announcements.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ New</a>

        @if (session('success'))
            <div class="mt-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="mt-4">
            @foreach ($announcements as $announcement)
                <div class="border p-4 mb-2">
                    <h3 class="text-xl font-bold">{{ $announcement->title }}</h3>
                    <p>{{ $announcement->description }}</p>
                    <p class="text-sm text-gray-500">Event Date: {{ $announcement->event_date }}</p>
                    <div class="mt-2">
                        <a href="{{ route('announcements.edit', $announcement->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('announcements.destroy', $announcement->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
