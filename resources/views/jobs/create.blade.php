<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf

        <p class="mb-6 text-gray-600">Fill out the form below to create a new job listing.</p>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Job Title:</label>
            <input type="text" name="title" id="title" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter job title" required>
        </div>

        <div class="mb-4">
            <label for="salary" class="block text-gray-700 font-bold mb-2">Salary:</label>
                        
            <input type="text" name="salary" id="salary" class="w-full border border-gray-300 p-2 rounded" placeholder="Annual Salary in USD" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Job Description:</label>
            <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded" placeholder="Enter job description" rows="5" required></textarea>

       

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Job</button>
        </div>
    </form>
</x-layout>