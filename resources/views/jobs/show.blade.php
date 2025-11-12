<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

   <p>
    <a href="/jobs" class="text-blue-500">Back to Jobs</a>
   </p>
   

   <p>
    This Job pays {{ $job->salary }} per year.
   </p>
   
</x-layout>