<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h2 class="font-bold text-black-100">{{$job['title']}}</h2>
    <p>
        This job pays {{$job['salary']}} per year.
    </p>

</x-layout>