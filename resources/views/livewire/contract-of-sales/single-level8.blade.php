<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مشاهده مبایعه نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 8</span> <br>(حق الزحمه مشاور املاک)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="city" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شهرستان </label>
                                <input readonly value="{{$city}}" id="city" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="wage" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حق الزحمه مشاور املاک :</label>
                                <input readonly value="{{$wage}}" type="number" id="wage" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($wage) && !empty($wage)) <span>{{(new Number2Word)->numberToWords($wage)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($wage)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($wage) && !empty($wage)) <span>{{(new Number2Word)->numberToWords($wage/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($wage/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="amount_received_each" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مبلغ دریافتی از هر طرف :</label>
                                <input readonly value="{{$amount_received_each}}" type="number" id="amount_received_each" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($amount_received_each) && !empty($amount_received_each)) <span>{{(new Number2Word)->numberToWords($amount_received_each)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($amount_received_each)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($amount_received_each) && !empty($amount_received_each)) <span>{{(new Number2Word)->numberToWords($amount_received_each/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($amount_received_each/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full-30 flex flex-col mb-4">
                                <label for="tax" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مالیات بر ارزش افزوده ٪ (درصد) </label>
                                <input readonly value="{{$tax}}" type="number" id="tax" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <hr class="my-3 p-2">
                        <div>
                            <div class="w-full flex flex-col mb-4 p-5 bg-gray-200 rounded-xl ">
                                <label for="total_received" class="text-right block mb-5 pb-3 text-sm font-medium text-gray-900 dark:text-white font-extrabold text-xl text-orange-800">جمع دریافتی <span class="text-sm text-primary mx-2">(مبلغ طرفین در 2  + حق الزحمه) </span>  :</label>
                                <br>
                                <input readonly value="{{$total_received}}" type="number" id="total_received" class="hidden bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-red-700 flex flex-wrap flex-row justify-between  text-right block mb-2 text-medium font-medium text-gray-900 dark:text-white">@if(is_numeric($total_received) && !empty($total_received)) <span>{{(new Number2Word)->numberToWords($total_received)}} <span class="font-extrabold text-black">ریال</span> </span><span> {{number_format($total_received)}}  <span class="font-extrabold text-black">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-red-700 flex flex-wrap flex-row justify-between  text-right block mb-2 text-medium font-medium text-gray-900 dark:text-white">@if(is_numeric($total_received) && !empty($total_received)) <span>{{(new Number2Word)->numberToWords($total_received/10)}} <span class="font-extrabold text-black">تومان</span> </span><span> {{number_format($total_received/10)}}  <span class="font-extrabold text-black">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('sale.show',['contractOfSale'=>$contractOfSale])}}" class="p-4 bg-primary-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد مبایعه نامه</a>
                </form>
            </div>
        </div>
    </div>
</section>
