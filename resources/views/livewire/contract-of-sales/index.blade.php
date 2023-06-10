<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-3">مبایعه نامه ها </h1>
        <h2 class="font-medium text-xl p-1 mb-2"> (قرارداد فروش) </h2>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden" style="min-height: 50vh">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">جستجو شماره پرونده</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            {{--Search Implement--}}
                            <input wire:model="search" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="جستجو شماره / کد پرونده ..." required="">

                        </div>
                    </form>
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end flex-shrink-0">
                    <button wire:click="refreshPage" title="پاکسازی جدول و فیلتر" type="button" class="flex ml-2 mr-2 items-center justify-center text-white bg-gray-800 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        بروز رسانی
                    </button>
                    <a href="{{route("sales.add")}}" type="button" class="flex ml-2 mr-2 items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 ml-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        افزودن قرارداد
                    </a>
                    <div class="flex items-center w-full md:w-auto">

                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                            </div>
                        </div>
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full ml-2 mr-2 md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 ml-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            فیلتر
                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div wire:ignore.self id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h6 wire:init="loadLevels" class="mb-3 text-center text-sm font-medium text-gray-900 dark:text-white border-b pb-2">فیلتر :
                                <br> مرحله مورد نظر را انتخاب کنید</h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                @foreach($levels as $level)
                                    <li class="flex items-center ">
                                        <input id="level{{isset($i) ? ++$i : $i=0 }}"  wire:model="levels_filter" checked type="checkbox" value="{{$level}}" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="level{{$i}}" class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-100">{{$statuslabel[$level]}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3" style="max-width: 5%">شماره/کد</th>
                        <th scope="col" class="px-4 py-3" style="max-width: 5%">وضیعیت</th>
                        <th scope="col" class="px-4 py-3" style="width: 30%">خریدار</th>
                        <th scope="col" class="px-4 py-3" style="width: 30%">فروشنده</th>
                        <th scope="col" class="px-4 py-3">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contracts as $contract)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$contract->file_number}}</th>
                            <td class="px-4 py-3 text-white @if($contract->level<10) bg-red-700 @else bg-green-900 @endif">{{$statuslabel[$contract->level]}}</td>
{{--                            <td class="px-4 py-3 " dir="ltr">{{\Morilog\Jalali\Jalalian::forge($person->date_of_birth)->format('Y/m/d') }}</td>--}}
                            <td class="px-4 py-3 ">
                                <div class="w-full flex justify-center flex-wrap">
                            @foreach($contract->peopleBuyer as $person)
                                    <span class="text-sm inline-flex items-center justify-center font-medium p-1 m-1 rounded-md bg-green-500 text-white">{{$person->firstname}} {{$person->lastname}}</span>
                            @endforeach
                                </div>
                            </td>

                            <td class="px-4 py-3">
                                <div class="w-full flex justify-center flex-wrap">
                                    @foreach($contract->peopleSeller as $person)
                                        <span class="text-sm inline-flex items-center justify-center font-medium p-1 m-1 rounded-md bg-red-500 text-white">{{$person->firstname}} {{$person->lastname}}</span>
                                    @endforeach
                                </div>
                            </td>

                            <td class="px-4 py-3 flex items-center justify-center flex-wrap">
                                <a href="{{route('sales.level1.single',$contract->id)}}" type="button" class="inline-flex px-2 py-2 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده ماده 1</a>
                                <a href="{{route('sales.level2.single',$contract->id)}}" type="button" class="inline-flex px-2 py-2 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده ماده 2</a>
                                <a href="{{route('sales.level3.single',$contract->id)}}" type="button" class="inline-flex px-2 py-2 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده ماده 3</a>
                                <a href="{{route('sales.level4.single',$contract->id)}}" type="button" class="inline-flex px-2 py-2 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده ماده 4</a>
                                <a href="{{route('sales.level5.single',$contract->id)}}" type="button" class="inline-flex px-2 py-2 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده ماده 5</a>
                                <a href="{{route('sales.level6.single',$contract->id)}}" type="button" class="inline-flex px-2 py-2 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده ماده 6</a>
                                <a href="{{route('sales.level7.single',$contract->id)}}" type="button" class="inline-flex px-2 py-2 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده ماده 7</a>
{{--                                <button type="button" class="px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده</button>--}}
{{--                                <button type="button" class="px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده</button>--}}
{{--                                <button type="button" class="px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده</button>--}}
{{--                                <button wire:click="$emit('openModal', 'people.edit', {{ json_encode(['person_get' => $person->id]) }})" type="button" class="px-2 py-1.5 mx-1.5 text-xs font-medium text-center focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 rounded-lg dark:focus:ring-yellow-900">ویرایش</button>--}}
{{--                                <button wire:click="$emit('openModal', 'people.delete', {{ json_encode(['person_get' => $person->id]) }})" type="button" class="px-2 py-1.5 text-xs font-medium text-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-lg dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">حذف</button>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            {{--            <livewire:components.pagination />--}}
            {{ $contracts->links() }}
        </div>
    </div>
</section>
