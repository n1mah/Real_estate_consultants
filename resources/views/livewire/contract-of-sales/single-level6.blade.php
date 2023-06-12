<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مشاهده مبایعه نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 6</span> <br>(آثار قرارداد)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="damages_for_non_fulfillment_of_obligations" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم انجام تعهدات فروشنده به خریدار</label>
                                <input readonly value="{{$damages_for_non_fulfillment_of_obligations}}" type="number" id="damages_for_non_fulfillment_of_obligations" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($damages_for_non_fulfillment_of_obligations) && !empty($damages_for_non_fulfillment_of_obligations)) <span>{{(new Number2Word)->numberToWords($damages_for_non_fulfillment_of_obligations)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($damages_for_non_fulfillment_of_obligations)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($damages_for_non_fulfillment_of_obligations) && !empty($damages_for_non_fulfillment_of_obligations)) <span>{{(new Number2Word)->numberToWords($damages_for_non_fulfillment_of_obligations/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($damages_for_non_fulfillment_of_obligations/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="contract_costs" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">هزینه حق الثبت و حق التحریر بر عهده : </label>
                                <select id="contract_costs" disabled class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="{{$contract_costs}}">{{$contract_costs}}</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="seller_delayed_payment_fine" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم اجرای تعهد از جانب فروشنده به ازای هر روز تاخیر مبلغ :</label>
                                <input readonly value="{{$seller_delayed_payment_fine}}" type="number" id="seller_delayed_payment_fine" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="seller_delayed_payment_fine" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($seller_delayed_payment_fine) && !empty($seller_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($seller_delayed_payment_fine)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($seller_delayed_payment_fine)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="seller_delayed_payment_fine" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($seller_delayed_payment_fine) && !empty($seller_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($seller_delayed_payment_fine/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($seller_delayed_payment_fine/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="buyer_delayed_payment_fine" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم اجرای تعهد از جانب خریدار به ازای هر روز تاخیر مبلغ :</label>
                                <input readonly value="{{$buyer_delayed_payment_fine}}" type="number" id="buyer_delayed_payment_fine" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="buyer_delayed_payment_fine" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($buyer_delayed_payment_fine) && !empty($buyer_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($buyer_delayed_payment_fine)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($buyer_delayed_payment_fine)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="buyer_delayed_payment_fine" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($buyer_delayed_payment_fine) && !empty($buyer_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($buyer_delayed_payment_fine/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($buyer_delayed_payment_fine/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('sale.show',['contractOfSale'=>$contractOfSale])}}" class="p-4 bg-primary-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد مبایعه نامه</a>
                </form>
            </div>
        </div>
    </div>
</section>
