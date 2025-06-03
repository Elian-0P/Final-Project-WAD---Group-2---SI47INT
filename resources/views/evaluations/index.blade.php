<x-app-layout> <x-slot name="header"> <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Evaluation Records </h2> </x-slot>
<div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if(session('success'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('evaluations.create') }}" class="bg-blue-500 text-white px-3 py-2 rounded mb-4 inline-block">+ Add Evaluation</a>

    <table class="w-full table-auto border-collapse border">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">No</th>
                <th class="border px-4 py-2">Student</th>
                <th class="border px-4 py-2">Company</th>
                <th class="border px-4 py-2">Date</th>
                <th class="border px-4 py-2">Content</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($evaluations as $i => $evaluation)
                <tr>
                    <td class="border px-4 py-2">{{ $i + 1 }}</td>
                    <td class="border px-4 py-2">{{ $evaluation->student_name }}</td>
                    <td class="border px-4 py-2">{{ $evaluation->company_name }}</td>
                    <td class="border px-4 py-2">{{ $evaluation->date }}</td>
                    <td class="border px-4 py-2">{{ $evaluation->content }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('evaluations.edit', $evaluation->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('evaluations.destroy', $evaluation->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this?')" class="text-red-500 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center border px-4 py-2">No data</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
</x-app-layout>