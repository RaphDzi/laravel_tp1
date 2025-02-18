{{-- NAVBAR --> changer la couleur selon la page actuelle via un hover --}}

@props(['active' => false])

<a class="rounded-md px-3 py-2 text-sm font-medium aria-current='page' {{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}" {{ $attributes }}>
    {{ $slot }}
</a>
