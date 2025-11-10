<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
   <h2>{{ $job['title'] }}</h2>
   
   <h2 class="text-lg font-bold mb-4">{{ $job['title'] }}</h2>
   <p>
    This Job pays {{ $job['salary'] }} per year.
   </p>
   
</x-layout>