@props([
    'route' => 'books.index',
])

<a href=" {{ route($route)}}" class="@if (request()->routeIs($route) == $route) border-b @endif">
    {{$slot}}
</a>
