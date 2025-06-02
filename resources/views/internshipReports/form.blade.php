<div class="mb-4">
    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
    <input type="text" name="title" id="title" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" value="{{ old('title', $data->title ?? '') }}" required>
    @error('title')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="student_name" class="block text-gray-700 text-sm font-bold mb-2">Student Name</label>
    <input type="text" name="student_name" id="student_name" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" value="{{ old('student_name', $data->student_name ?? '') }}" required>
    @error('student_name')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="supervisor" class="block text-gray-700 text-sm font-bold mb-2">Supervisor</label>
    <input type="text" name="supervisor" id="supervisor" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" value="{{ old('supervisor', $data->supervisor ?? '') }}" required>
    @error('supervisor')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="report_file" class="block text-gray-700 text-sm font-bold mb-2">Upload Report File (PDF/DOC)</label>
    <input type="file" name="report_file" id="report_file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
    @if(isset($data) && $data->report_file)
        <small class="block text-gray-600 mt-2">Current: <a href="{{ asset('storage/'.$data->report_file) }}" target="_blank" class="text-blue-600 hover:underline">Download</a></small>
    @endif
    @error('report_file')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="flex items-center justify-end mt-6 gap-4">
    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 ease-in-out shrink-0"> {{-- Added shrink-0 --}}
        {{ $submit }}
    </button>
    <a href="{{ route('internshipReports.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 ease-in-out shrink-0"> {{-- Removed ml-4 and added shrink-0 --}}
        Cancel
    </a>
</div>
