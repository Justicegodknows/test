<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    
    <x-form-error/>
    

    <form method="POST" action="/jobs" class="max-w-md mx-auto bg-white p-6 rounded shadow">
        @csrf

        <p class="mb-6 text-gray-600">Fill out the form below to create a new job listing.</p>

        <div class="mb-4">
            <x-form-label for="title">Job Title:</x-form-label>
            <x-form-input type="text" name="title" id="title" placeholder="Enter job title" required />
        </div>

        <div class="mb-4">
            <x-form-label for="salary">Salary:</x-form-label>       
            <x-form-input type="text" name="salary" id="salary" placeholder="Annual Salary in USD" required />
        </div>

        <div class="mb-4">
            <x-form-label for="description">Job Description:</x-form-label>
            <x-form-input as="textarea" name="description" id="description" placeholder="Enter job description" rows="5" required />
        </div>

        <div>
              <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>