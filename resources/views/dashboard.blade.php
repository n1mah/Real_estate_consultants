<!doctype html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود - مدیریت قرارداد آژانس املاک</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body class="flex justify-center items-center">
<div class="drawer h-auto">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content flex flex-col {{ $zz ?? '' }}" >
        <x-layouts.navigation></x-layouts.navigation>
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-80-vh flex flex-col items-center justify-center">
            <div class="inline-flex rounded-md shadow-sm mb-4" role="group">
                <a href="{{route('people')}}" type="button" class="inline-flex items-center px-5 py-3 text-medium font-medium text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300  border border-gray-200 rounded-r-md   focus:z-10 focus:ring-2 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    مشاهده مشتریان
                </a>

                <a href="{{route('people.add')}}" type="button" class="inline-flex  items-center text-white px-5 py-3 text-medium font-medium bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300  border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700  dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    <svg class="h-3.5 w-3.5 ml-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    افزودن
                </a>
            </div>

            <div class="inline-flex rounded-md shadow-sm " role="group">
                <a href="{{route('sales')}}" type="button" class="inline-flex items-center px-5 py-3 text-medium font-medium text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300  border border-gray-200 rounded-r-md   focus:z-10 focus:ring-2 dark:text-white dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    مشاهده مبایعه نامه ها
                </a>

                <a href="{{route('sales.add')}}" type="button" class="inline-flex items-center text-white px-5 py-3 text-medium font-medium bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300  border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 ml-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    افزودن
                </a>
            </div>
            <div class="inline-flex rounded-md shadow-sm mt-4" role="group">
                <a href="{{route('rents')}}" type="button" class="inline-flex items-center px-5 py-3 text-medium font-medium text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300  border border-gray-200 rounded-r-md   focus:z-10 focus:ring-2 dark:text-white dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                    مشاهده اجاره نامه ها
                </a>

                <a href="{{route('rent.add')}}" type="button" class="inline-flex  items-center text-white px-5 py-3 text-medium font-medium bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300  border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700  dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                    <svg class="h-3.5 w-3.5 ml-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    افزودن
                </a>
            </div>


        </section>
        <x-layouts.footer></x-layouts.footer>
    </div>
    <x-layouts.navigation-responsive></x-layouts.navigation-responsive>
</div>

@livewire('livewire-ui-modal')
@livewireScripts
</body>
</html>
