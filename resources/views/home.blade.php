{{-- navbar header --}}
<x-navbar>
    <x-slot:title>accueil</x-slot>

</x-navbar>

<h1>Accueil</h1>

<p>bienvenue à tous</p>


@foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a>
@endforeach
