<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Internship Vacancy
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('vacancies.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block">Title</label>
                <input type="text" name="title" class="border rounded w-full px-3 py-2" value="{{ old('title') }}">
                @error('title') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Company Name</label>
                <input type="text" name="company_name" class="border rounded w-full px-3 py-2" value="{{ old('company_name') }}">
                @error('company_name') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Location</label>
                <input type="text" name="location" class="border rounded w-full px-3 py-2" value="{{ old('location') }}">
                @error('location') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Duration</label>
                <input type="text" name="duration" class="border rounded w-full px-3 py-2" value="{{ old('duration') }}">
                @error('duration') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block">Start Date</label>
                    <input type="date" name="start_date" class="border rounded w-full px-3 py-2" value="{{ old('start_date') }}">
                    @error('start_date') <small class="text-red-500">{{ $message }}</small> @enderror
                </div>
                <div>
                    <label class="block">End Date</label>
                    <input type="date" name="end_date" class="border rounded w-full px-3 py-2" value="{{ old('end_date') }}">
                    @error('end_date') <small class="text-red-500">{{ $message }}</small> @enderror
                </div>
            </div>

            <div>
                <label class="block">Requirements</label>
                <textarea name="requirements" class="border rounded w-full px-3 py-2">{{ old('requirements') }}</textarea>
                @error('requirements') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Description</label>
                <textarea name="description" class="border rounded w-full px-3 py-2">{{ old('description') }}</textarea>
                @error('description') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block">Positions Available</label>
                <input type="number" name="positions_available" min="1" class="border rounded w-full px-3 py-2" value="{{ old('positions_available') }}">
                @error('positions_available') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                <a href="{{ route('vacancies.index') }}" class="ml-4 text-gray-600">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
