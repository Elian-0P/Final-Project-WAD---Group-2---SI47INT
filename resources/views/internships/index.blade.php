<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Internship Applications
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('vacancies.create') }}" class="bg-blue-500 text-black px-3 py-2 rounded mb-4 inline-block">+ Add Internship</a>

        <table class="w-full table-auto border-collapse border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Student</th>
                    <th class="border px-4 py-2">Company</th>
                    <th class="border px-4 py-2">Position</th>
                    <th class="border px-4 py-2">Date</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($internships as $i => $internship)
                    <tr>
                        <td class="border px-4 py-2">{{ $i + 1 }}</td>
                        <td class="border px-4 py-2">{{ $internship->student_name }}</td>
                        <td class="border px-4 py-2">{{ $internship->company }}</td>
                        <td class="border px-4 py-2">{{ $internship->position }}</td>
                        <td class="border px-4 py-2">{{ $internship->application_date }}</td>
                        <td class="border px-4 py-2">{{ ucfirst($internship->status) }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('internships.edit', $internship->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('internships.destroy', $internship->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Delete?')" class="text-red-500 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center border px-4 py-2">No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
