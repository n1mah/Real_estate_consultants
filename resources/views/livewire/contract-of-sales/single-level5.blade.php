<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مشاهده مبایعه نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 5</span> <br> (شرایط تسلیم مورد معامله)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <label for="delivery_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تاریخ تعیین شده جهت حضور در دفتر خانه</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input readonly id="delivery_time" value="{{\Morilog\Jalali\Jalalian::forge($delivery_time)->format('Y/m/d')}}" class="bg-gray-200 border border border-gray-300 outline-none auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="price_per_meter" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مبلغ خسارت فروشنده به خریدار ( درصورت غیرقابل فروش بودن علاوه بر استرداد ثمن معامله )</label>
                                <input readonly value="{{$loss_of_no_sale}}" type="number" id="price_per_meter" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($loss_of_no_sale) && !empty($loss_of_no_sale)) <span>{{(new Number2Word)->numberToWords($loss_of_no_sale)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($loss_of_no_sale)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($loss_of_no_sale) && !empty($loss_of_no_sale)) <span>{{(new Number2Word)->numberToWords($loss_of_no_sale/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($loss_of_no_sale/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                    </div>
                    <a href="{{route('sales')}}" class="mt-2 w-full block text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">
                        بازگشت به لیست مبایعه نامه ها
                    </a>
                </form>

            </div>
        </div>



    </div>
</section>
