<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white min-h-100-vh">
<div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 5</span> <br>(تسلیم مورد اجاره)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <label for="date_of_birth" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تاریخ تحویل مورداجاره به مستاجر/مستاجرین :</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input readonly value="{{\Morilog\Jalali\Jalalian::forge($delivery_time)->format('Y/m/d')}}" class="bg-gray-200 outline-none border border-gray-300 auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="penalty_for_non_delivery" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم تحویل مورداجاره به مستاجر/مستاجرین :</label>
                                <input readonly type="number" min="0" value="{{$penalty_for_non_delivery}}" id="penalty_for_non_delivery" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_delivery) && !empty($penalty_for_non_delivery)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_delivery)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($penalty_for_non_delivery)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_delivery) && !empty($penalty_for_non_delivery)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_delivery/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($penalty_for_non_delivery/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <a href="{{route('rent.show',['leaseAgreement'=>$leaseAgreement])}}" class="p-4 bg-purple-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد اجاره نامه</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
