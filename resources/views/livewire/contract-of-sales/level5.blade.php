<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 5</span> <br> (شرایط تسلیم مورد معامله)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 ">

                        <x-persian-datepicker
                            wirePropertyName="delivery_time"
                            label="تاریخ تعیین شده جهت تحویل"
                            showFormat="jYYYY/jMM/jDD"
                            returnFormat="X"
                            :required="true"
                            :setNullInput="false"
                        >
                            <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">تاریخ تعیین شده جهت تحویل فروشنده به خریدار<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>

                        </x-persian-datepicker>
                        @if($errors->has('delivery_time'))
                            <span class="text-red-500 text-xs">{{ $errors->first('delivery_time') }}</span>
                        @endif

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="price_per_meter" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مبلغ خسارت فروشنده به خریدار ( درصورت غیرقابل فروش بودن علاوه بر استرداد ثمن معامله )<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="loss_of_no_sale" id="price_per_meter" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('loss_of_no_sale'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('loss_of_no_sale') }}</span>
                                @endif
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($loss_of_no_sale) && !empty($loss_of_no_sale)) <span>{{(new Number2Word)->numberToWords($loss_of_no_sale)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($loss_of_no_sale)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($loss_of_no_sale) && !empty($loss_of_no_sale)) <span>{{(new Number2Word)->numberToWords($loss_of_no_sale/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($loss_of_no_sale/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                        شرایط مربوط به تنظیم سند و تایید نهایی
                    </button>
                </form>

            </div>
        </div>



    </div>
</section>
