<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 6</span> <br>(آثار قرارداد)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="damages_for_non_fulfillment_of_obligations" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم انجام تعهدات فروشنده به خریدار<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="damages_for_non_fulfillment_of_obligations" id="damages_for_non_fulfillment_of_obligations" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('damages_for_non_fulfillment_of_obligations'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('damages_for_non_fulfillment_of_obligations') }}</span>
                                @endif
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($damages_for_non_fulfillment_of_obligations) && !empty($damages_for_non_fulfillment_of_obligations)) <span>{{(new Number2Word)->numberToWords($damages_for_non_fulfillment_of_obligations)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($damages_for_non_fulfillment_of_obligations)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($damages_for_non_fulfillment_of_obligations) && !empty($damages_for_non_fulfillment_of_obligations)) <span>{{(new Number2Word)->numberToWords($damages_for_non_fulfillment_of_obligations/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($damages_for_non_fulfillment_of_obligations/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="entirety" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">هزینه حق الثبت و حق التحریر بر عهده : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="entirety" wire:model.defer="contract_costs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value=""></option>
                                    <option value="خریدار">خریدار</option>
                                    <option value="فروشنده">فروشنده</option>
                                    <option value="خریدار و فروشنده">خریدار و فروشنده</option>
                                    <option value="طبق روال قانونی">طبق روال قانونی</option>
                                </select>
                            </div>
                            @if($errors->has('contract_costs'))
                                <span class="text-red-500 text-xs">{{ $errors->first('contract_costs') }}</span>
                            @endif
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="seller_delayed_payment_fine" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم اجرای تعهد از جانب فروشنده به ازای هر روز تاخیر مبلغ :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="seller_delayed_payment_fine" id="seller_delayed_payment_fine" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('seller_delayed_payment_fine'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('seller_delayed_payment_fine') }}</span>
                                @endif
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($seller_delayed_payment_fine) && !empty($seller_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($seller_delayed_payment_fine)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($seller_delayed_payment_fine)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($seller_delayed_payment_fine) && !empty($seller_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($seller_delayed_payment_fine/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($seller_delayed_payment_fine/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="buyer_delayed_payment_fine" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم اجرای تعهد از جانب خریدار به ازای هر روز تاخیر مبلغ :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="buyer_delayed_payment_fine" id="buyer_delayed_payment_fine" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('buyer_delayed_payment_fine'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('buyer_delayed_payment_fine') }}</span>
                                @endif
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($buyer_delayed_payment_fine) && !empty($buyer_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($buyer_delayed_payment_fine)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($buyer_delayed_payment_fine)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($buyer_delayed_payment_fine) && !empty($buyer_delayed_payment_fine)) <span>{{(new Number2Word)->numberToWords($buyer_delayed_payment_fine/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($buyer_delayed_payment_fine/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">ثبت آثار قرارداد و تایید نهایی</button>
                </form>
            </div>
        </div>
    </div>
</section>
