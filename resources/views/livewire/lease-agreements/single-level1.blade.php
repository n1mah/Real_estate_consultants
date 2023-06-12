<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white min-h-100-vh">
<div class="w-full-65 px-4 py-2 mx-auto flex-col flex items-center justify-center">
        <h2 class="font-medium p-3 text-gray-400">مشاهده ماده 1 - طرفین قرارداد</h2>
        <hr class="p-2 w-full">
        <p class="text-center text-gray-600"> شماره پرونده <span class="text-warning-700"> {{$fileNumber}}</span></p>
        <div class="w-full flex justify-between items-start flex-wrap">
            <div class="w-full-45 flex flex-row flex-wrap justify-center">
                @if($people_selectedTenant)
                    <hr>
                    <p class="text-center text-success-700 my-2">
                        @if(count($people_selectedTenant)>1) مستاجران @else مستاجر @endif
                    </p>
                    <div class="w-full flex flex-col flex-wrap items-center justify-start">
                        @foreach($people_selectedTenant as $person_selected)
                            <div  class="w-full flex flex-col items-center justify-center m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-warning-500 rounded-lg focus:ring-4 focus:outline-none ">
                                {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                <div class="mt-4 w-full">
                                    @if($person_selected['lawyer']!=null)
                                        <div class="flex flex-col items-center justify-center w-full  text-xs font-medium text-black bg-gray-500 rounded-[16px] px-3 py-2">
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
                @if($people_selectedLessor)
                    <hr>
                    <p class=" text-center my-2 text-red-700">
                        @if(count($people_selectedLessor)>1) موجران @else موجر @endif
                    </p>
                    <div class="w-full flex flex-col flex-wrap items-center justify-start">
                        @foreach($people_selectedLessor as $person_selected)
                            <div  class="w-full flex flex-col items-center justify-center m-1 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-400 rounded-lg focus:ring-4 focus:outline-none ">
                                {{$person_selected['firstname']}} {{$person_selected['lastname']}}
                                <div class="mt-4 w-full">
                                    @if($person_selected['lawyer']!=null)
                                        <div class="flex flex-col items-center justify-center w-full  text-xs font-medium text-black bg-gray-500 rounded-[16px] px-3 py-2">
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
        <a href="{{route('rent.show',['leaseAgreement'=>$leaseAgreement])}}" class="p-4 bg-purple-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد اجاره نامه</a>
    </div>
</section>
