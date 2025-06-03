<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 leading-tight">
            Add New Internship Report
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="bg-blue-500 text-black px-4 py-2 rounded">Create New Report</h1>
                <form action="{{ route('internshipReports.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('internshipReports.form', ['submit' => 'Save'])
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
