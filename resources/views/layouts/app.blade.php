<x-base-layout>
    @include('layouts.partials.header')

    {{ $slot }}

    <footer>
        @section('footerLinks')
            <a href="#">link 1</a>
            <a href="#">link 2</a>
        @show
    </footer>
</x-base-layout>
