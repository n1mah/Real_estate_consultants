<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 8</span> <br>(حق الزحمه مشاور املاک)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="city" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شهرستان <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="city" wire:model.defer="city" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('city'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="wage" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حق الزحمه مشاور املاک :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="wage" id="wage" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('wage'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('wage') }}</span>
                                @endif
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($wage) && !empty($wage)) <span>{{(new Number2Word)->numberToWords($wage)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($wage)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($wage) && !empty($wage)) <span>{{(new Number2Word)->numberToWords($wage/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($wage/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="amount_received_each" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مبلغ دریافتی از هر طرف :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="amount_received_each" id="amount_received_each" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('amount_received_each'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('amount_received_each') }}</span>
                                @endif
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($amount_received_each) && !empty($amount_received_each)) <span>{{(new Number2Word)->numberToWords($amount_received_each)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($amount_received_each)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($amount_received_each) && !empty($amount_received_each)) <span>{{(new Number2Word)->numberToWords($amount_received_each/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($amount_received_each/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full-30 flex flex-col mb-4">
                                <label for="tax" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مالیات بر ارزش افزوده ٪ (درصد) <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="tax" wire:model.defer="tax" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('tax'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('tax') }}</span>
                                @endif
                            </div>
                        </div>
                        <hr class="my-3 p-2">
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="total_received" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white font-extrabold text-xl text-orange-800">جمع دریافتی :</label>
                                <input readonly autocomplete="off" type="number" min="0" wire:model="total_received" id="total_received" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('total_received'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('total_received') }}</span>
                                @endif
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($total_received) && !empty($total_received)) <span>{{(new Number2Word)->numberToWords($total_received)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($total_received)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($total_received) && !empty($total_received)) <span>{{(new Number2Word)->numberToWords($total_received/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($total_received/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold ">
                        ثبت حق الزحمه مشاور املاک و تایید نهایی
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>
