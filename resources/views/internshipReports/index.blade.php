<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Internship Reports
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('internshipReports.create') }}" class="bg-blue-500 text-black px-3 py-2 rounded mb-4 inline-block">+ Add Report</a>

        <table class="w-full table-auto border-collapse border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Student</th>
                    <th class="border px-4 py-2">Supervisor</th>
                    <th class="border px-4 py-2">Report File</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reports as $i => $report)
                    <tr>
                        <td class="border px-4 py-2">{{ $i + 1 }}</td>
                        <td class="border px-4 py-2">{{ $report->title }}</td>
                        <td class="border px-4 py-2">{{ $report->student_name }}</td>
                        <td class="border px-4 py-2">{{ $report->supervisor }}</td>
                        <td class="border px-4 py-2">
                            @if($report->report_file)
                                <a href="{{ asset('storage/' . $report->report_file) }}" class="text-blue-500">Download</a>
                            @else
                                -
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('internshipReports.edit', $report->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('internshipReports.destroy', $report->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Delete?')" class="text-red-500 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center border px-4 py-2">No reports found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>