<x-slot:zz>z-50-imp</x-slot:zz>
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
                 <div class="text-center text-primary">
                     <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
                     <div class="@if($level!=0) hidden @endif px-4 py-2">
                         <h2 class="font-medium p-3 text-gray-400">ایجاد یک قرارداد مبایعه جدید</h2>
                         <hr class="p-2 w-full">
                         <input wire:model.lazy="fileNumber" autocomplete="off" type="text" id="fileNumber" class="mt-2 w50 w-full mx-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="شماره پرونده را وارد کنید ...">
                         @if($errorFileNumber)
                             <div class="w50 mx-auto">
                                 <p class="text-red-100 bg-red-400 rounded-[10px] p-1 mx-1 my-3">{{$errorFileNumber}}</p>
                             </div>
                         @endif
                         <button wire:click="$emit('level1Action')" class="mt-2 w50 w-full mx-auto block text-white bg-primary-600 hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-primary-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-900 dark:focus:ring-gray-800 font-bold" type="button">
                             افزودن قرارداد جدید
                         </button>
                     </div>
                     {{--    level 1  Start page  --}}
                     <div class="@if($level!=1) hidden @endif px-4 py-2 mx-auto flex-col flex items-center justify-center">
                             <h2 class="font-medium p-3 text-gray-400">تعریف خریدار / خریداران</h2>
                             <hr class="p-2 w-full">
                             <div class="w-full flex flex-col items-center">
                                 <form class="py-2 w-full flex flex-col items-center">
                                     <div class="w-full-45 flex flex-col items-center mb-4 sm:mb-5">
                                         <p class="sm:col-span-2 text-gray-600 text-right">
                                             از لیست پایین خریداران خود را انتخاب کنید یا در بین مشتریان جستجو کنید
                                         </p>
                                         <div class="w-full flex flex-col">
                                             <label for="selected" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خریدار <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                             <select  wire:model="selectedBuyer" wire:change="$emit('selectedItemBuyer')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                 <option selected value="">خریدار را انتخاب کنید</option>
                                                 @foreach($people as $person)
                                                     <option value="{{$person->id}}">{{$person->firstname}} {{$person->lastname}}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                         <div class="w-full">
                                             <label for="selected" class="text-right mb-2 block inline-block text-sm font-medium text-gray-900 dark:text-white text-right opacity-0"> - </label>
                                             <button data-modal-target="buyerModal" data-modal-toggle="buyerModal" class="w-full block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                                                 جستجو
                                             </button>
                                         </div>
                                     </div>
                                 </form>
                                 <div class="w-full-65 mb-4 mt-2 w-full sm:mb-5">
                                     @if($people_selectedBuyer)
                                         @php($c=0)
                                         <hr>
                                         <p class="sm:col-span-2 text-center my-2">
                                             @if(count($people_selectedBuyer)>1) خریداران @else خریدار @endif
                                         </p>
                                         <div class="w-full flex flex-row flex-wrap justify-center">
                                             @foreach($people_selectedBuyer as $person_selected)
                                                 <div  class="w-full-45 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-400 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-400 dark:hover:bg-blue-600 dark:focus:ring-blue-600">
                                                     {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                                     <div>
                                                         @if($person_selected['lawyer']==null)
                                                             <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Buyer')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-blue-100 bg-blue-900 rounded-full px-4">افزودن وکیل</button>
                                                         @else
                                                             <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                                         @endif
                                                         <button wire:click="$emit('removeItemBuyer',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                                     </div>
                                                 </div>
                                                 @php($c++)
                                             @endforeach
                                         </div>
                                         <button wire:click="$emit('level2Action')" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                                             تایید  @if(count($people_selectedBuyer)>1) خریداران @else خریدار @endif
                                         </button>
                                     @endif
                                 </div>
                             </div>
                         </div>
                     {{--    level 1  End Page --}}
                     {{--    level 2  Start page  --}}
                     <div class="@if($level!=2) hidden @endif px-4 py-2 mx-auto flex-col flex items-center justify-center">
                         <h2 class="font-medium p-3 text-gray-400">تعریف فروشنده / فروشندگان</h2>
                         <hr class="p-2 w-full">
                         <div class="w-full flex flex-col items-center">
                             <form class="py-2 w-full flex flex-col items-center">
                                 <div class="w-full-45 flex flex-col items-center mb-4 sm:mb-5">
                                     <p class="sm:col-span-2 text-gray-600 text-right">
                                         از لیست پایین فروشندگان خود را انتخاب کنید یا در بین مشتریان جستجو کنید
                                     </p>
                                     <div class="w-full flex flex-col">
                                         <label for="selected" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">فروشنده <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                         <select  wire:model="selectedSeller" wire:change="$emit('selectedItemSeller')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                             <option selected value="">فروشنده را انتخاب کنید</option>
                                             @foreach($people as $person)
                                                 <option value="{{$person->id}}">{{$person->firstname}} {{$person->lastname}}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                     <div class="w-full">
                                         <label for="selected" class="text-right block inline-block text-sm font-medium text-gray-900 dark:text-white text-right opacity-0"> - </label>
                                         <button data-modal-target="sellerModal" data-modal-toggle="sellerModal" class="w-full block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                                             جستجو
                                         </button>
                                     </div>
                                 </div>
                             </form>
                             <div class="w-full-65 mb-4  w-full sm:mb-5">
                                 @if($people_selectedSeller)
                                     <hr>
                                     <p class="sm:col-span-2 text-center my-2">
                                         @if(count($people_selectedSeller)>1) فروشندگان @else فروشنده @endif
                                     </p>
                                     <div class="w-full flex flex-row flex-wrap justify-center">
                                         @foreach($people_selectedSeller as $person_selected)
                                             <div  class="w-full-45 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-400 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-400 dark:hover:bg-blue-600 dark:focus:ring-blue-600">
                                                 {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                                 <div>
                                                     @if($person_selected['lawyer']==null)
                                                         <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Seller')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-blue-100 bg-blue-900 rounded-full px-4">افزودن وکیل</button>
                                                     @else
                                                         <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                                     @endif
                                                     <button wire:click="$emit('removeItemSeller',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>
                                     <button wire:click="$emit('level3Action')" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                                         تایید  @if(count($people_selectedSeller)>1) فروشندگان @else فروشنده @endif
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
                             <button wire:click="level1" class="my-1 mx-1 text-primary-200 bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-500 font-medium rounded-lg text-sm px-3 py-1 text-center">بازگشت به خریداران</button>
                             <button wire:click="level2" class="my-1 mx-1 text-primary-200 bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-500 font-medium rounded-lg text-sm px-3 py-1 text-center">بازگشت به فروشندگان</button>
                         </div>
                         <div class="w-full flex flex-row flex-wrap justify-center">
                             @if($people_selectedBuyer)
                                 <hr>
                                 <p class="sm:col-span-2 text-center text-success-700 my-2">
                                     @if(count($people_selectedBuyer)>1) خریداران @else خریدار @endif
                                 </p>
                                 <div class="w-full flex flex-row flex-wrap justify-center">
                                     @foreach($people_selectedBuyer as $person_selected)
                                         <div  class="w-full-30 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-800">
                                             {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                             <div>
                                                 @if($person_selected['lawyer']==null)
                                                     <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Buyer')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-blue-100 bg-blue-900 rounded-full px-4">افزودن وکیل</button>
                                                 @else
                                                     <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                                 @endif
                                                 <button wire:click="$emit('removeItemBuyer',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             @endif
                         </div>
                         <br>
                         <hr class="p-2 w-full">
                         <div class="w-full flex flex-row flex-wrap justify-center">
                         @if($people_selectedSeller)
                             @php($c=0)
                             <hr>
                             <p class="sm:col-span-2 text-center my-2 text-red-700">
                                 @if(count($people_selectedSeller)>1) فروشندگان @else فروشنده @endif
                             </p>
                             <div class="w-full flex flex-row flex-wrap justify-center">
                                 @foreach($people_selectedSeller as $person_selected)
                                     <div  class="w-full-30 flex items-center justify-between m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-800">
                                         {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                         <div>
                                             @if($person_selected['lawyer']==null)
                                                 <button wire:click="$emit('showLawyerBox',{{$person_selected['id']}},'Seller')" class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-blue-100 bg-blue-900 rounded-full px-4">افزودن وکیل</button>
                                             @else
                                                 <button class="inline-flex items-center justify-center h-5 cursor-pointer text-xs font-medium text-yellow-400 bg-yellow-900 rounded-full px-4">وکالت:{{$person_selected['lawyer']['lastname']}}</button>
                                             @endif
                                             <button wire:click="$emit('removeItemSeller',{{$person_selected['id']}})" class="inline-flex items-center justify-center w-9 h-5 cursor-pointer text-xs font-semibold text-red-100 bg-red-500 rounded-full">x</button>
                                         </div>
                                     </div>
                                     @php($c++)
                                 @endforeach
                             </div>
                         @endif
                         </div>
                         <br><hr class="w-full-45 p-2"><br>
                         <button wire:click="$emit('finalAction')" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                             ذخیره و تایید نهایی  @if(count($people_selectedBuyer)>1) خریداران @else خریدار @endif و  @if(count($people_selectedSeller)>1) فروشندگان @else فروشنده @endif
                         </button>
                     </div>
                     {{--    level 3  End Page  --}}
    </div>
{{--                <!-- buyer modal - level 1 - search  -->--}}
                <div id="buyerModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <input wire:model.debounce.200ms="searchBuyer" autocomplete="off" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">
                                </div>
                            </div>
                            <div class="my-1 py-1 px-5">
                                @if($searchResultBuyer)
                                    @foreach($searchResultBuyer as $item)
                                        <div class="flex justify-between p-2 bg-gray-100 m-1 mb-2 rounded-[16px]">
                                            <div class="pr-3">{{$item->firstname}} &nbsp; {{$item->lastname}} &nbsp;-&nbsp; {{$item->national_code}} </div>
                                            <div><button wire:click="$emit('selectedItemBuyer',{{$item->id}})"  class="mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xs">افزودن</button></div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="buyerModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">بستن</button>
                                <a href="{{route("people.add")}}" target="_blank" data-modal-hide="sellerModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">افزودن مشتری جدید در صفحه دیگر</a>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <!-- seller modal - level 2 -->--}}
                <div id="sellerModal" wire:ignore.self tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <label for="searchSeller"  class="block text-sm font-medium text-gray-900 dark:text-white p-2"> <span class="font-bold mx-2">نام</span>,<span class="font-bold mx-2">نام خانوادگی</span>یا<span class="font-bold mx-2">کد ملی</span>مورد نظر را جستجو کنید</label>
                                    <input wire:model.debounce.200ms="searchSeller" autocomplete="off" type="text" id="searchSeller" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">
                                </div>
                            </div>
                            <div class="my-1 py-1 px-5">
                                @if($searchResultSeller)
                                    @foreach($searchResultSeller as $item)
                                        <div class="flex justify-between p-2 bg-gray-100 m-1 mb-2 rounded-[16px]">
                                            <div class="pr-3">{{$item->firstname}} &nbsp; {{$item->lastname}} &nbsp;-&nbsp; {{$item->national_code}} </div>
                                            <div><button wire:click="$emit('selectedItemSeller',{{$item->id}})"  class="mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xs">افزودن</button></div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="sellerModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">بستن</button>
                                <a href="{{route("people.add")}}" target="_blank" data-modal-hide="sellerModal" type="button" class="mx-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">افزودن مشتری جدید در صفحه دیگر</a>
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
                            <button onclick="Livewire.emit('hideLawyerBox')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 mr-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="buyerModalLawyer">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-4   my-5 mx-1">
                            <p><span class="text-red-600 font-bold">توجه : </span> اطلاعات وکیل باید در بین مشتریان باشد </p>
                            <div class="sm:col-span-2 px-4 py-2">
                                <label for="search"  class="block  text-sm font-medium text-gray-900 dark:text-white p-2"> <span class="font-bold mx-2">نام</span>,<span class="font-bold mx-2">نام خانوادگی</span>یا<span class="font-bold mx-2">کد ملی</span>مورد نظر را جستجو کنید</label>
                                <input wire:model.debounce.200ms="searchLawyer" autocomplete="off" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="دربین موارد بالا جستجو کنید ...">
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
