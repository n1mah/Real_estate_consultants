<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 6</span> <br>(شرایط و آثار قرارداد)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="others" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حق انتقال و واگذاری مورد اجاره به غیر : </label>
                                <input readonly id="others" value="{{$others}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <br>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="damages_for_non_fulfillment_of_obligations" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم انجام تعهدات مستاجر (تنفیذ مستاجر) (ریال) :</label>
                                <input readonly type="number" min="0" value="{{$damages_for_non_fulfillment_of_obligations}}" id="damages_for_non_fulfillment_of_obligations" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($damages_for_non_fulfillment_of_obligations) && !empty($damages_for_non_fulfillment_of_obligations)) <span>{{(new Number2Word)->numberToWords($damages_for_non_fulfillment_of_obligations)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($damages_for_non_fulfillment_of_obligations)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($damages_for_non_fulfillment_of_obligations) && !empty($damages_for_non_fulfillment_of_obligations)) <span>{{(new Number2Word)->numberToWords($damages_for_non_fulfillment_of_obligations/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($damages_for_non_fulfillment_of_obligations/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="penalty_for_non_evacuation" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">جریمه عدم تسلیم (مورداجاره) توسط مستاجر ( به صورت روزانه ) (ریال) :</label>
                                <input readonly type="number" min="0" value="{{$penalty_for_non_evacuation}}" id="penalty_for_non_evacuation" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_evacuation) && !empty($penalty_for_non_evacuation)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_evacuation)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($penalty_for_non_evacuation)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_evacuation) && !empty($penalty_for_non_evacuation)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_evacuation/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($penalty_for_non_evacuation/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                        <a href="{{route('rents')}}" class="p-4 bg-purple-600 text-white rounded-[10px]"> بازگشت به صفحه اجاره نامه ها</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
