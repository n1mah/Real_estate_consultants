<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white min-h-100-vh">
<div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 11</span> <br>(حق الزحمه مشاور املاک)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="city" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شهرستان </label>
                                <input readonly id="city" value="{{$city}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="wage" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حق الزحمه مشاور املاک :</label>
                                <input readonly type="number" min="0" value="{{$wage}}" id="wage" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="wage" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($wage) && !empty($wage)) <span>{{(new Number2Word)->numberToWords($wage)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($wage)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="wage" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($wage) && !empty($wage)) <span>{{(new Number2Word)->numberToWords($wage/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($wage/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="amount_received_each" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مبلغ دریافتی از هر طرف :</label>
                                <input readonly type="number" min="0" value="{{$amount_received_each}}" id="amount_received_each" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($amount_received_each) && !empty($amount_received_each)) <span>{{(new Number2Word)->numberToWords($amount_received_each)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($amount_received_each)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($amount_received_each) && !empty($amount_received_each)) <span>{{(new Number2Word)->numberToWords($amount_received_each/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($amount_received_each/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full-30 flex flex-col mb-4">
                                <label for="tax" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مالیات بر ارزش افزوده ٪ (درصد) </label>
                                <input autocomplete="off" type="number" id="tax" value="{{$tax}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <a href="{{route('rent.show',['leaseAgreement'=>$leaseAgreement])}}" class="p-4 bg-purple-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد اجاره نامه</a>
                </form>
            </div>
        </div>
    </div>
</section>
