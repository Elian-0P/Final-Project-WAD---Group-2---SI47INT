<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Internship Application
        </h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('internships.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block">Student Name</label>
                <input type="text" name="student_name" class="border rounded w-full px-3 py-2" value="{{ old('student_name') }}">
                @error('student_name') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Company</label>
                <input type="text" name="company" class="border rounded w-full px-3 py-2" value="{{ old('company') }}">
                @error('company') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Position</label>
                <input type="text" name="position" class="border rounded w-full px-3 py-2" value="{{ old('position') }}">
                @error('position') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Application Date</label>
                <input type="date" name="application_date" class="border rounded w-full px-3 py-2" value="{{ old('application_date') }}">
                @error('application_date') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Status</label>
                <select name="status" class="border rounded w-full px-3 py-2">
                    <option value="pending">Pending</option>
                    <option value="accepted">Accepted</option>
                    <option value="rejected">Rejected</option>
                </select>
                @error('status') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded">Save</button>
                <a href="{{ route('internships.index') }}" class="ml-4 text-black-600">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
