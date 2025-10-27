<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>
    @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year
                </a>
            </li>
    @endforeach
    

    
   
</x-layout>