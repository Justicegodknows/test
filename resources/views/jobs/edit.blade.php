<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
   

    <form method="POST" action="/jobs/{{ $job->id }}" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf
        @method('PATCH')

        <p class="mb-6 text-gray-600">Fill out the form below to create a new job listing.</p>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Job Title:</label>
            <input type="text" name="title" id="title" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter job title" required value="{{ $job->title }}">
        </div>

        <div class="mb-4">
            <label for="salary" class="block text-gray-700 font-bold mb-2">Salary:</label>
                        
            <input type="text" name="salary" id="salary" class="w-full border border-gray-300 p-2 rounded" placeholder="Annual Salary in USD" required value="{{ $job->salary }}">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Job Description:</label>
            <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter job description" rows="5" required>{{ $job->description }}</textarea>
       

        <div class="flex items-center gap-x-6">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Job</button>
            
            <button type="button" onclick="window.location.href='/jobs/{{ $job->id }}'" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 ml-2">Cancel</button>
        </div>
    </form>
</x-layout>