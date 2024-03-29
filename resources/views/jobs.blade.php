<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
    @foreach ($jobs as $job)
    <a href="/job/{{$job['id']}}">
        <li><strong>{{$job['title']}} </strong>: Pays {{$job['salary']}}</li>
    </a>
    @endforeach
    </ul> 

</x-layout>