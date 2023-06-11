<x-slot:zz>z-50-imp</x-slot:zz>
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-purple">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        {{--    level 0  --}}
        <div class="@if($level!=0) hidden @endif px-4 py-2">
            <h2 class="font-medium p-3 text-gray-400">ایجاد یک قرارداد اجاره جدید</h2>
            <hr class="p-2 w-full">

            <input wire:model.lazy="fileNumber" autocomplete="off" type="text" id="fileNumber" class="mt-2 w50 w-full mx-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" value="" placeholder="شماره پرونده را وارد کنید ...">
            @if($errorFileNumber)
                <div class="w50 mx-auto">
                    <p class="text-red-100 bg-red-400 rounded-[10px] p-1 mx-1 my-3">{{$errorFileNumber}}</p>
                </div>
            @endif
            <button wire:click="$emit('level1Action')" class="mt-2 w50 w-full mx-auto block text-white bg-purple-600 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-900 dark:focus:ring-gray-800 font-bold" type="button">
                افزودن قرارداد جدید
            </button>

        </div>

        {{--    level 1  Start page  --}}
        <div class="@if($level!=1) hidden @endif px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400">تعریف مستاجر / مستاجران</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-45 flex flex-col items-center mb-4 sm:mb-5">

                        <p class="sm:col-span-2 text-gray-600 text-right">
                            از لیست پایین مستاجران خود را انتخاب کنید یا در بین مشتریان جستجو کنید
                        </p>
                        <div class="w-full flex flex-col">
                            <label for="selected" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مستاجر <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                            <select  wire:model="selectedTenant" wire:change="$emit('selectedItemTenant')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                <option selected value="">مستاجر را انتخاب کنید</option>
                                @foreach($people as $person)
                                    <option value="{{$person->id}}">{{$person->firstname}} {{$person->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="selected" class="text-right mb-2 block inline-block text-sm font-medium text-gray-900 dark:text-white text-right opacity-0"> - </label>
                            <button data-modal-target="tenantModal" data-modal-toggle="tenantModal" class="w-full block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                                جستجو
                            </button>
                        </div>
                    </div>
                </form>

                <div class="w-full-65 mb-4 mt-2 w-full sm:mb-5">
                    @if($people_selectedTenant)
                        @php($c=0)
                        <hr>

                        <p class="sm:col-span-2 text-center my-2">
                            @if(count($people_selectedTenant)>1) مستاجران @else مستاجر @endif
                        </p>

                        <div class="w-full flex flex-row flex-wrap justify-center">
                            @foreach($people_selectedTenant as $person_selected)
                                <div  class="w-full-45 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-purple-400 rounded-lg hover:bg-purple-600 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-400 dark:hover:bg-purple-600 dark:focus:ring-purple-600">

                                    {{$person_selected['firstname']}} {{$person_selected['lastname']}}

                                    <div>
                                        @if($person_selected['lawyer']==null)
                                            <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Tenant')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-purple-100 bg-purple-900 rounded-full px-4">افزودن وکیل</button>
                                        @else
                                            <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                        @endif
                                        <button wire:click="$emit('removeItemTenant',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                    </div>

                                </div>
                                @php($c++)

                            @endforeach
                        </div>
                        <button wire:click="$emit('level2Action')" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                            تایید  @if(count($people_selectedTenant)>1) مستاجران @else مستاجر @endif
                        </button>
                    @endif
                </div>
            </div>
        </div>
        {{--    level 1  End Page --}}

        {{--    level 2  Start page  --}}
        <div class="@if($level!=2) hidden @endif px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400">تعریف موجر / موجران</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-45 flex flex-col items-center mb-4 sm:mb-5">
                        <p class="sm:col-span-2 text-gray-600 text-right">
                            از لیست پایین موجران خود را انتخاب کنید یا در بین مشتریان جستجو کنید
                        </p>
                        <div class="w-full flex flex-col">
                            <label for="selected" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">موجر <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                            <select  wire:model="selectedLessor" wire:change="$emit('selectedItemLessor')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                <option selected value="">موجر را انتخاب کنید</option>
                                @foreach($people as $person)
                                    <option value="{{$person->id}}">{{$person->firstname}} {{$person->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="selected" class="text-right block inline-block text-sm font-medium text-gray-900 dark:text-white text-right opacity-0"> - </label>
                            <button data-modal-target="lessorModal" data-modal-toggle="lessorModal" class="w-full block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                                جستجو
                            </button>
                        </div>
                    </div>
                </form>
                <div class="w-full-65 mb-4  w-full sm:mb-5">
                    @if($people_selectedLessor)
                        <hr>
                        <p class="sm:col-span-2 text-center my-2">
                            @if(count($people_selectedLessor)>1) موجران @else موجر @endif
                        </p>
                        <div class="w-full flex flex-row flex-wrap justify-center">
                            @foreach($people_selectedLessor as $person_selected)
                                <div  class="w-full-45 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-purple-400 rounded-lg hover:bg-purple-600 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-400 dark:hover:bg-purple-600 dark:focus:ring-purple-600">
                                    {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                    <div>
                                        @if($person_selected['lawyer']==null)
                                            <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Lessor')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-purple-100 bg-purple-900 rounded-full px-4">افزودن وکیل</button>
                                        @else
                                            <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                        @endif
                                        <button wire:click="$emit('removeItemLessor',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button wire:click="$emit('level3Action')" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                            تایید  @if(count($people_selectedLessor)>1) موجران @else موجر @endif
                        </button>
                    @endif
                </div>
            </div>
        </div>
        {{--    level 2  End Page  --}}


        {{--    level 3  Start page --}}
        <div class="@if($level!=3) hidden @endif px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400">تایید نهایی طرفین قرارداد</h2>
            <hr class="p-2 w-full">
            <p class="text-center text-gray-600"> شماره پرونده <span class="text-warning-700"> {{$fileNumber}}</span></p>
            <div class="w-full-45 flex justify-center">
                <button wire:click="level1" class="my-1 mx-1 text-purple-200 bg-purple-600 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-500 font-medium rounded-lg text-sm px-3 py-1 text-center">بازگشت به مستاجران</button>
                <button wire:click="level2" class="my-1 mx-1 text-purple-200 bg-purple-600 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-500 font-medium rounded-lg text-sm px-3 py-1 text-center">بازگشت به موجران</button>
            </div>
            <div class="w-full flex flex-row flex-wrap justify-center">
                @if($people_selectedTenant)
                    <hr>
                    <p class="sm:col-span-2 text-center text-warning-700 my-2">
                        @if(count($people_selectedTenant)>1) مستاجران @else مستاجر @endif
                    </p>
                    <div class="w-full flex flex-row flex-wrap justify-center">
                        @foreach($people_selectedTenant as $person_selected)
                            <div  class="w-full-30 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-warning-400 rounded-lg hover:bg-warning-900 focus:ring-4 focus:outline-none focus:ring-warning-800">
                                {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                <div>
                                    @if($person_selected['lawyer']==null)
                                        <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Tenant')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-purple-100 bg-purple-900 rounded-full px-4">افزودن وکیل</button>
                                    @else
                                        <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                    @endif
                                    <button wire:click="$emit('removeItemTenant',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <br>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-row flex-wrap justify-center">
                @if($people_selectedLessor)
                    @php($c=0)
                    <hr>
                    <p class="sm:col-span-2 text-center my-2 text-pink-700">
                        @if(count($people_selectedLessor)>1) موجران @else موجر @endif
                    </p>
                    <div class="w-full flex flex-row flex-wrap justify-center">
                        @foreach($people_selectedLessor as $person_selected)
                            <div  class="w-full-30 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-400 rounded-lg hover:bg-pink-900 focus:ring-4 focus:outline-none focus:ring-pink-800">
                                {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                <div>
                                    @if($person_selected['lawyer']==null)
                                        <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Lessor')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-purple-100 bg-purple-900 rounded-full px-4">افزودن وکیل</button>
                                    @else
                                        <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                    @endif
                                    <button wire:click="$emit('removeItemLessor',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                </div>
                            </div>
                            @php($c++)
                        @endforeach
                    </div>
                @endif
            </div>
            <br>
            <hr class="w-full-45 p-2">
            <br>
            <button wire:click="$emit('finalAction')" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                ذخیره و تایید نهایی  @if(count($people_selectedTenant)>1) مستاجران @else مستاجر @endif و  @if(count($people_selectedLessor)>1) موجران @else موجر @endif
            </button>
        </div>
        {{--    level 3  End Page  --}}




    </div>
    {{--                <!-- tenant modal - level 1 - search  -->--}}
    <div id="tenantModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        جستجو
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 mr-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tenantModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2 px-4 py-2">
                        <label for="search"  class="block  text-sm font-medium text-gray-900 dark:text-white p-2"> <span class="font-bold mx-2">نام</span>,<span class="font-bold mx-2">نام خانوادگی</span>یا<span class="font-bold mx-2">کد ملی</span>مورد نظر را جستجو کنید</label>
                        <input wire:model.debounce.200ms="searchTenant" autocomplete="off" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">

                    </div>


                </div>
                <div class="my-1 py-1 px-5">
                    @if($searchResultTenant)

                        @foreach($searchResultTenant as $item)
                            <div class="flex justify-between p-2 bg-gray-100 m-1 mb-2 rounded-[16px]">
                                <div class="pr-3">{{$item->firstname}} &nbsp; {{$item->lastname}} &nbsp;-&nbsp; {{$item->national_code}} </div>
                                <div><button wire:click="$emit('selectedItemTenant',{{$item->id}})"  class="mx-2 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 text-xs">افزودن</button></div>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="tenantModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">بستن</button>
                    <a href="{{route("people.add")}}" target="_blank" data-modal-hide="lessorModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">افزودن مشتری جدید در صفحه دیگر</a>
                </div>
            </div>
        </div>
    </div>

    {{--                <!-- lessor modal - level 2 -->--}}
    <div id="lessorModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        جستجو
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 mr-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="lessorModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2 px-4 py-2">
                        <label for="searchLessor"  class="block text-sm font-medium text-gray-900 dark:text-white p-2"> <span class="font-bold mx-2">نام</span>,<span class="font-bold mx-2">نام خانوادگی</span>یا<span class="font-bold mx-2">کد ملی</span>مورد نظر را جستجو کنید</label>
                        <input wire:model.debounce.200ms="searchLessor" autocomplete="off" type="text" id="searchLessor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">

                    </div>


                </div>
                <div class="my-1 py-1 px-5">
                    @if($searchResultLessor)

                        @foreach($searchResultLessor as $item)
                            <div class="flex justify-between p-2 bg-gray-100 m-1 mb-2 rounded-[16px]">
                                <div class="pr-3">{{$item->firstname}} &nbsp; {{$item->lastname}} &nbsp;-&nbsp; {{$item->national_code}} </div>
                                <div><button wire:click="$emit('selectedItemLessor',{{$item->id}})"  class="mx-2 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 text-xs">افزودن</button></div>
                            </div>
                        @endforeach
                    @endif

                </div>

                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="lessorModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">بستن</button>
                    <a href="{{route("people.add")}}" target="_blank" data-modal-hide="lessorModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-purple-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">افزودن مشتری جدید در صفحه دیگر</a>
                </div>
            </div>
        </div>
    </div>

    {{--    Lawyer   Box    --}}
    <div id="addLawyer" class="@if(!$addLawyer) hidden @endif mx-auto flex-col flex items-center justify-center w-full fixed bg-gray-100 top-0 left-0 bg-opacity-80" onclick="if(event.target === event.currentTarget){Livewire.emit('hideLawyerBox')}" style="height: 100vh;z-index: 9999">
        <div class="box w50 mx-auto my-auto p-5 bg-white" style="min-height: 50vh">
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    جستجو
                </h3>
                <button onclick="Livewire.emit('hideLawyerBox')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 mr-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tenantModalLawyer">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-4   my-5 mx-1">
                <p><span class="text-red-600 font-bold">توجه : </span> اطلاعات وکیل باید در بین مشتریان باشد </p>
                <div class="sm:col-span-2 px-4 py-2">
                    <label for="search"  class="block  text-sm font-medium text-gray-900 dark:text-white p-2"> <span class="font-bold mx-2">نام</span>,<span class="font-bold mx-2">نام خانوادگی</span>یا<span class="font-bold mx-2">کد ملی</span>مورد نظر را جستجو کنید</label>
                    <input wire:model.debounce.200ms="searchLawyer" autocomplete="off" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">
                </div>

                <div class="my-1 py-1 px-5 sm:col-span-2">
                    @if($searchResultLawyer)

                        @foreach($searchResultLawyer as $item)
                            <div class="flex justify-between p-2 bg-gray-100 m-1 mb-2 rounded-[16px]">
                                <div class="pr-3">{{$item->firstname}} &nbsp; {{$item->lastname}} &nbsp;-&nbsp; {{$item->national_code}} </div>
                                <div><button wire:click="$emit('selectedItemLawyer',{{$item->id}})"  class="mx-2 text-white bg-warning-700 hover:bg-warning-800 focus:ring-4 focus:outline-none focus:ring-warning-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-warning-600 dark:hover:bg-warning-700 dark:focus:ring-warning-800 text-xs">انتخاب به عنوان وکیل</button></div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>

</section>
