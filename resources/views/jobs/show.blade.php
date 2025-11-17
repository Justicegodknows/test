<x-layout>
    <x-slot:heading class="flex items-center justify-between">
        Job Details
        <x-button href="/jobs">Back to Jobs</x-button>    
        
    </x-slot:heading>

   
    
    <div class="text-2xl font-bold mb-2">{{ $job->title }}</div>  

   <div class="mb-4 text-gray-700 justify-between items-center">
         This Job pays {{ $job->salary }} per year.
   </div>

    <div class="flex items-center justify-between gap-6 mb-4">
        <x-button href="/jobs/{{ $job->id }}/edit" class="mr-2">Edit Job</x-button>
        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete Job</button>
        </form>
    </div>
       
</x-layout>