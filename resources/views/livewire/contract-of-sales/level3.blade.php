<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 3</span> <br> (ثمن معامله)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 grid grid-cols-2 gap-2 ">
                        <div class="sm:col-span-2 flex flex-wrap justify-center items-center">
                            <h3 class=" bg-gray-200 p-2 rounded-xl text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white font-extrabold">قیمت کل (براساس: متر مربع * قیمت هر متر مربع)</h3>
                            <div class="w-full flex flex-wrap justify-center items-center flex-col mb-4 bg-gray-200 p-2 rounded-xl">
                                <div class="w-full flex flex-wrap justify-center items-center flex-row">
                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white ">{{(new Number2Word)->numberToWords($total)}} ریال <span class="opacity-0"> - </span> </label>
                                    <span class="mx-6 p-2 text-gray-600"> - </span>
                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{number_format($total)}} ریال <span class="opacity-0"> - </span> </label>
                                </div>
                                <div class="w-full flex flex-wrap justify-center items-center flex-row">
                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{(new Number2Word)->numberToWords($total/10)}} تومان <span class="opacity-0"> - </span></label>
                                    <span class="mx-6 p-2 text-gray-600"> - </span>
                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{number_format($total/10)}} تومان <span class="opacity-0"> - </span> </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="price_per_meter" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">ثمن معامله (مقطوع)<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="purchase_price" id="price_per_meter" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($purchase_price) && !empty($purchase_price)) <span>{{(new Number2Word)->numberToWords($purchase_price)}} ریال </span><span> {{number_format($purchase_price)}}  ریال </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($purchase_price) && !empty($purchase_price)) <span>{{(new Number2Word)->numberToWords($purchase_price/10)}} تومان </span><span> {{number_format($purchase_price/10)}}  تومان </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="deposit" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بیعانه (پرداخت موعد قرارداد)<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="deposit" id="deposit" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-green-400 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($deposit) && !empty($deposit)) <span>{{(new Number2Word)->numberToWords($deposit)}} ریال </span><span> {{number_format($deposit)}}  ریال </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-green-400 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($deposit) && !empty($deposit)) <span>{{(new Number2Word)->numberToWords($deposit/10)}} تومان </span><span> {{number_format($deposit/10)}}  تومان </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نوع پرداخت<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="title_deeds" wire:model="payment_type" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="نقد">نقد</option>
                                    <option value="چک">چک</option>
                                </select>
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="opacity-0"> - </span></label>
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="opacity-0"> - </span></label>
                            </div>
                        </div>

                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="bank" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بانک</label>
                                <input name="parking" wire:model.defer="bank" id="bank" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="branch" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شعبه</label>
                                <input name="parking" wire:model.defer="branch" id="branch" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        {{--                        <div class="sm:col-span-2">--}}
{{--                            <div class="w-full flex flex-row flex-wrap items-start justify-around">--}}
{{--                                <div class="text-red-600 text-xl mx-2">مبلغ کل : </div>--}}
{{--                                <div>--}}
{{--                                    <div class="text-red-600 ">@if(is_numeric($total) && !empty($total)) {{number_format($total)}} ریال @else <span class="opacity-0"> - </span> @endif</div>--}}
{{--                                    <div class="text-red-600 ">@if(!empty($total)) {{(new Number2Word)->numberToWords($total)}} ریال @else <span class="opacity-0"> - </span> @endif</div>--}}
{{--                                    <div class="text-red-600 ">@if(!empty($total)) {{(new Number2Word)->numberToWords($total/10)}} تومان @else <span class="opacity-0"> - </span> @endif</div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}



                    </div>
{{--                    <div class="w-full-80 mx-auto items-center mb-4 ">--}}
{{--                        @if($errors)--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <p class="text-red-700 text-right"> * {{ $error }}</p>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        @if($this->title_deeds=='null')--}}
{{--                            <p class="text-red-700 text-right"> * وضعیت سند ثبتی را مشخص کنید </p>--}}
{{--                        @endif--}}
{{--                    </div>--}}
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                        ذخیره مشخصات و تایید نهایی
                    </button>
                </form>

            </div>
        </div>



    </div>
</section>
