<!doctype html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
{{--    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
</head>
<body>
<div class="drawer h-auto">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content flex flex-col {{ $zz ?? '' }}" >
        <x-layouts.navigation></x-layouts.navigation>
        {{$slot}}
        <x-layouts.footer></x-layouts.footer>
    </div>
    <x-layouts.navigation-responsive></x-layouts.navigation-responsive>
</div>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>--}}
@livewire('livewire-ui-modal')
@livewireScripts
{{--<script src="//unpkg.com/alpinejs" defer></script>--}}

</body>
</html>
