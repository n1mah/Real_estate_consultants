{{--@extends('components.layouts.app',['zIndex' => ''])--}}
<x-slot:zz>z-50-imp</x-slot:zz>
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">افزودن مبایعه</h1>
        <hr>

        <div class=" px-4 py-2 mx-auto flex justify-around flex-row flex-wrap">
            <div  class="w-full-45">
                <form class="py-2">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">

                        <p class="sm:col-span-2 text-gray-600 text-right">
                            از لیست پایین خریداران خود را انتخاب کنید یا در بین مشتریان جستجو کنید
                        </p>
                        <div class="w-full">
                            <label for="selected" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خریدار <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                            <select  wire:model="selected" wire:change="$emit('selectedItem')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">خریدار را انتخاب کنید</option>
                                @foreach($people as $person)
                                    <option value="{{$person->id}}">{{$person->firstname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="selected" class="text-right block mb-2 inline-block text-sm font-medium text-gray-900 dark:text-white text-right opacity-0"> - </label>
                            <button data-modal-target="buyerModal" data-modal-toggle="buyerModal" class="block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                                جستجو
                            </button>
                        </div>

                    </div>
                </form>

                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    @if($people_selected)
                        <p class="sm:col-span-2 text-right">
                            @if(count($people_selected)>1) خریداران @else خریدار @endif
                        </p>

                        @foreach($people_selected as $person_selected)
                            <span  class="inline-flex items-center justify-between px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                        <div>
{{--                            <span class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-medium text-yellow-100 bg-yellow-500 rounded-full">وکیل</span>--}}
                            <button wire:click="$emit('removeItem',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                        </div>

                    </span>
                        @endforeach
                    @endif
                </div>
            </div><div class="w-full-45">
                <form class="py-2">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">

                        <p class="sm:col-span-2 text-gray-600 text-right">
                            از لیست پایین فروشندگان خود را انتخاب کنید یا در بین مشتریان جستجو کنید
                        </p>
                        <div class="w-full">
                            <label for="selected" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">فروشنده <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                            <select  wire:model="selected2" wire:change="$emit('selectedItem2')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">فروشنده را انتخاب کنید</option>
                                @foreach($people as $person)
                                    <option value="{{$person->id}}">{{$person->firstname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="selected" class="text-right block mb-2 inline-block text-sm font-medium text-gray-900 dark:text-white text-right opacity-0"> - </label>
                            <button data-modal-target="sellerModal" data-modal-toggle="sellerModal" class="block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                                جستجو
                            </button>
                        </div>

                    </div>
                </form>

                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    @if($people_selected2)
                        <p class="sm:col-span-2 text-right">
                            @if(count($people_selected2)>1) فروشندگان @else فروشنده @endif
                        </p>

                        @foreach($people_selected2 as $person_selected)
                            <span  class="inline-flex items-center justify-between px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                        <div>
{{--                            <span class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-medium text-yellow-100 bg-yellow-500 rounded-full">وکیل</span>--}}
                            <button wire:click="$emit('removeItem2',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                        </div>

                    </span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>



    <!-- Main modal -->
    <div id="buyerModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        جستجو
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 mr-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="buyerModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2 px-4 py-2">
                    <label for="search"  class="block  text-sm font-medium text-gray-900 dark:text-white p-2"> <span class="font-bold mx-2">نام</span>,<span class="font-bold mx-2">نام خانوادگی</span>یا<span class="font-bold mx-2">کد ملی</span>مورد نظر را جستجو کنید</label>
                    <input wire:model.debounce.200ms="search" autocomplete="off" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">

                 </div>


                </div>
                <div class="my-1 py-1 px-5">
                    @if($searchResult)

                        @foreach($searchResult as $item)
                            <div class="flex justify-between p-2 bg-gray-100 m-1 mb-2 rounded-[16px]">
                                <div class="pr-3">{{$item->firstname}} &nbsp; {{$item->lastname}} &nbsp;-&nbsp; {{$item->national_code}} </div>
                                <div><button wire:click="$emit('selectedItem',{{$item->id}})"  class="mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xs">افزودن</button></div>
                            </div>
                        @endforeach
                    @endif

                </div>

                {{--            @foreach($people as $person)--}}
                {{--                <p>--}}
                {{--                    {{$person->firstname}}--}}
                {{--                </p>--}}
                {{--            @endforeach--}}
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="buyerModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">بستن</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="sellerModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        جستجو
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 mr-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="sellerModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2 px-4 py-2">
                        <label for="search"  class="block  text-sm font-medium text-gray-900 dark:text-white p-2"> <span class="font-bold mx-2">نام</span>,<span class="font-bold mx-2">نام خانوادگی</span>یا<span class="font-bold mx-2">کد ملی</span>مورد نظر را جستجو کنید</label>
                        <input wire:model.debounce.200ms="search2" autocomplete="off" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">

                    </div>


                </div>
                <div class="my-1 py-1 px-5">
                    @if($searchResult2)

                        @foreach($searchResult2 as $item)
                            <div class="flex justify-between p-2 bg-gray-100 m-1 mb-2 rounded-[16px]">
                                <div class="pr-3">{{$item->firstname}} &nbsp; {{$item->lastname}} &nbsp;-&nbsp; {{$item->national_code}} </div>
                                <div><button wire:click="$emit('selectedItem2',{{$item->id}})"  class="mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xs">افزودن</button></div>
                            </div>
                        @endforeach
                    @endif

                </div>

                {{--            @foreach($people as $person)--}}
                {{--                <p>--}}
                {{--                    {{$person->firstname}}--}}
                {{--                </p>--}}
                {{--            @endforeach--}}
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="sellerModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">بستن</button>
                </div>
            </div>
        </div>
    </div>

</section>

