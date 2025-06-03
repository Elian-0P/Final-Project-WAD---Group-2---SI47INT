<x-app-layout> <x-slot name="header"> <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Create Evaluation </h2> </x-slot>
<div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
    <form action="{{ route('evaluations.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Student Name</label>
            <input type="text" name="student_name" value="{{ old('student_name') }}" class="w-full mt-1 border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Company Name</label>
            <input type="text" name="company_name" value="{{ old('company_name') }}" class="w-full mt-1 border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Evaluation Content</label>
            <textarea name="content" class="w-full mt-1 border rounded px-3 py-2">{{ old('content') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Date</label>
            <input type="date" name="date" value="{{ old('date') }}" class="w-full mt-1 border rounded px-3 py-2">
        </div>

        <div class="flex justify-end">
            <a href="{{ route('evaluations.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded mr-2">Cancel</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        </div>
    </form>
</div>
</x-app-layout>
