<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body>
<div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content flex flex-col">
        <x-layouts.navigation></x-layouts.navigation>
        {{$slot}}
        <x-layouts.footer></x-layouts.footer>
    </div>
    <x-layouts.navigation-responsive></x-layouts.navigation-responsive>
</div>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>--}}
@livewireScripts
</body>
</html>
