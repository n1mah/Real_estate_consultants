<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 5</span> <br>(تسلیم مورد اجاره)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <x-persian-datepicker
                            wirePropertyName="delivery_time"
                            label="..."
                            showFormat="jYYYY/jMM/jDD"
                            returnFormat="X"
                            :required="true"
                            :setNullInput="false"
                        >
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">تاریخ تحویل مورداجاره به مستاجر/مستاجرین :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                        </x-persian-datepicker>
                        @if($errors->has('delivery_time'))
                            <span class="text-red-500 text-xs">{{ $errors->first('delivery_time') }}</span>
                        @endif
                        <br>
                        <br>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="penalty_for_non_delivery" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم تحویل مورداجاره به مستاجر/مستاجرین :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="penalty_for_non_delivery" id="penalty_for_non_delivery" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('penalty_for_non_delivery'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('penalty_for_non_delivery') }}</span>
                                @endif
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_delivery) && !empty($penalty_for_non_delivery)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_delivery)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($penalty_for_non_delivery)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_delivery) && !empty($penalty_for_non_delivery)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_delivery/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($penalty_for_non_delivery/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">
                        ذخیره جزییات تسلیم مورد اجاره و تایید نهایی
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
