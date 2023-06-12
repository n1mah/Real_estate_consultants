<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مشاهده مبایعه نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 3</span> <br> (ثمن معامله)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 grid grid-cols-2 gap-2 ">
{{--                        <div class="sm:col-span-2 flex flex-wrap justify-center items-center">--}}
{{--                            <h3 class=" bg-gray-200 p-2 rounded-xl text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white font-extrabold">قیمت کل (براساس: متر مربع * قیمت هر متر مربع)</h3>--}}
{{--                            <div class="w-full flex flex-wrap justify-center items-center flex-col mb-4 bg-gray-200 p-2 rounded-xl">--}}
{{--                                <div class="w-full flex flex-wrap justify-center items-center flex-row">--}}
{{--                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white ">{{(new Number2Word)->numberToWords($total)}} ریال <span class="opacity-0"> - </span> </label>--}}
{{--                                    <span class="mx-6 p-2 text-gray-600"> - </span>--}}
{{--                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{number_format($total)}} ریال <span class="opacity-0"> - </span> </label>--}}
{{--                                </div>--}}
{{--                                <div class="w-full flex flex-wrap justify-center items-center flex-row">--}}
{{--                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{(new Number2Word)->numberToWords($total/10)}} تومان <span class="opacity-0"> - </span></label>--}}
{{--                                    <span class="mx-6 p-2 text-gray-600"> - </span>--}}
{{--                                    <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{number_format($total/10)}} تومان <span class="opacity-0"> - </span> </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="price_per_meter" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">ثمن معامله (مقطوع)</label>
                                <input readonly type="number" min="0" value="{{$purchase_price}}" id="price_per_meter" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($purchase_price) && !empty($purchase_price)) <span>{{(new Number2Word)->numberToWords($purchase_price)}} <span class="font-extrabold text-primary-700">ریال</span> </span><span> {{number_format($purchase_price)}}  <span class="font-extrabold text-primary-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-primary flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($purchase_price) && !empty($purchase_price)) <span>{{(new Number2Word)->numberToWords($purchase_price/10)}} <span class="font-extrabold text-primary-700">تومان</span> </span><span> {{number_format($purchase_price/10)}}  <span class="font-extrabold text-primary-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="deposit" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بیعانه (پرداخت موعد قرارداد)</label>
                                <input readonly type="number"  value="{{$deposit}}" id="deposit" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                                <label for="house_area" class="text-green-400 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($deposit) && !empty($deposit)) <span>{{(new Number2Word)->numberToWords($deposit)}} <span class="font-extrabold text-green-700">ریال</span> </span><span> {{number_format($deposit)}}  <span class="font-extrabold text-green-700">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-green-400 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($deposit) && !empty($deposit)) <span>{{(new Number2Word)->numberToWords($deposit/10)}} <span class="font-extrabold text-green-700">تومان</span> </span><span> {{number_format($deposit/10)}}  <span class="font-extrabold text-green-700">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نوع پرداخت</label>
                                <select disabled id="title_deeds"  class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                                    <option>{{$payment_type}}</option>
                                </select>
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="opacity-0"> - </span></label>
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="opacity-0"> - </span></label>
                            </div>
                        </div>
                        <div class=" sm:col-span-2 @if($payment_type=='نقد') hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="cheque" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white"> چک : </label>
                                <input readonly id="cheque" value="{{$cheque}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="bank" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بانک</label>
                                <input readonly name="parking" value="{{$bank}}" id="bank" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                            </div>
                        </div>
                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="branch" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شعبه   </label>
                                <input readonly name="parking" value="{{$branch}}" id="branch" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                            </div>
                        </div>
                        <div class="sm:col-span-2 bg-gray-200 p-5 rounded-xl">
                            <div class="w-full flex flex-col mb-4">
                                <h4 class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white font-extrabold text-xl"> باقیمانده : </h4>
                                <span class="text-orange-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($debt_balance) && !empty($debt_balance)) <span>{{(new Number2Word)->numberToWords($debt_balance)}} <span class="font-extrabold text-orange-800 mx-1">ریال</span>  </span><span> {{number_format($debt_balance)}} <span class="font-extrabold text-orange-800 mx-1">ریال</span></span> @else <span class="opacity-0"> - </span> @endif</span>
                                <span class="text-orange-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($debt_balance) && !empty($debt_balance)) <span>{{(new Number2Word)->numberToWords($debt_balance/10)}} <span class="font-extrabold text-orange-800 mx-1">تومان</span> </span><span> {{number_format($debt_balance/10)}}<span class="font-extrabold text-orange-800 mx-1">تومان</span></span> @else <span class="opacity-0"> - </span> @endif</span>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('sale.show',['contractOfSale'=>$contractOfSale])}}" class="p-4 bg-primary-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد مبایعه نامه</a>
                </form>
            </div>
        </div>
    </div>
</section>
