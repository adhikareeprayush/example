<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->company_name }}</div>
                <div>
                    <strong>{{ $job['title'] }} </strong>: Pays ${{ $job['salary'] }} USD.
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-2">
        {{ $jobs->links() }}
    </div>



</x-layout>
