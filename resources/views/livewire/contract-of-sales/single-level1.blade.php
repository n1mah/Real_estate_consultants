<section class="w-full mx-auto bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="w-full-65 px-4 py-2 mx-auto flex-col flex items-center justify-center">
    <h2 class="font-medium p-3 text-gray-400">مشاهده ماده 1 - طرفین قرارداد</h2>
    <hr class="p-2 w-full">
    <p class="text-center text-gray-600"> شماره پرونده <span class="text-warning-700"> {{$fileNumber}}</span></p>
        <div class="w-full flex justify-between items-start flex-wrap">
            <div class="w-full-45 flex flex-row flex-wrap justify-center">
                @if($people_selectedBuyer)
                    <hr>
                    <p class="text-center text-success-700 my-2">
                        @if(count($people_selectedBuyer)>1) خریداران @else خریدار @endif
                    </p>
                    <div class="w-full flex flex-col flex-wrap items-center justify-start">
                        @foreach($people_selectedBuyer as $person_selected)
                            <div  class="w-full flex flex-col items-center justify-center m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-green-600 rounded-lg focus:ring-4 focus:outline-none ">
                                {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                <div class="mt-4 w-full">
                                    @if($person_selected['lawyer']!=null)
                                        <div class="flex flex-col items-center justify-center w-full  text-xs font-medium text-yellow-400 bg-yellow-900 rounded-[16px] px-3 py-2">
                                            وکیل دارد:
                                            <div class="py-1"></div>
                                            <div>{{$person_selected['lawyer']['firstname']}} {{$person_selected['lawyer']['lastname']}}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="w-full-45 flex flex-row flex-wrap justify-center">
                @if($people_selectedSeller)
                    <hr>
                    <p class=" text-center my-2 text-red-700">
                        @if(count($people_selectedSeller)>1) فروشندگان @else فروشنده @endif
                    </p>
                    <div class="w-full flex flex-col flex-wrap items-center justify-start">
                        @foreach($people_selectedSeller as $person_selected)
                            <div  class="w-full flex flex-col items-center justify-center m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-red-600 rounded-lg focus:ring-4 focus:outline-none ">
                                {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                <div class="mt-4 w-full">
                                    @if($person_selected['lawyer']!=null)
                                        <div class="flex flex-col items-center justify-center w-full  text-xs font-medium text-yellow-400 bg-yellow-900 rounded-[16px] px-3 py-2">
                                            وکیل دارد:
                                            <div class="py-1"></div>
                                            <div>{{$person_selected['lawyer']['firstname']}} {{$person_selected['lawyer']['lastname']}}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    <br><hr class="w-full-45 p-2"><br>
        <a href="{{route('sale.show',['contractOfSale'=>$contractOfSale])}}" class="p-4 bg-primary-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد مبایعه نامه</a>
</div>
</section>
