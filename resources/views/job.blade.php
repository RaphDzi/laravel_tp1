{{-- navbar header --}}
<x-navbar>
    <x-slot:title>jobs</x-slot>

</x-navbar>

<h2>{{ $job['title'] }}</h2>

<p>
    Salaire par année {{ $job['salary'] }}
</p>
