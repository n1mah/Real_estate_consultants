<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مشاهده مبایعه نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 9</span> <br> (تنظیم - امضا)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <label for="delivery_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">تاریخ تعیین شده جهت حضور در دفتر خانه</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input disabled readonly id="delivery_time" value="{{\Morilog\Jalali\Jalalian::forge($signature_date)->format('Y/m/d')}}" class="bg-gray-200 border border border-gray-300 outline-none auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="w-full-20 flex flex-col mb-4">
                            <label for="signature_hour" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">ساعت امضا و مبادله قرارداد</label>
                            <select disabled id="signature_hour" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>{{$signature_hour}}</option>
                            </select>
                        </div>
                        <div class="w-full-20 flex flex-col mb-4">
                            <label for="signature_minutes" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">دقیقه امضا و مبادله قرارداد</label>
                            <select disabled id="signature_minutes" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>{{$signature_minutes}}</option>
                            </select>
                        </div>
                        <br>
                        <p class="text-right text-green-800">
                            این قرارداد در تاریخ  <span class="font-bold text-primary-700">{{\Morilog\Jalali\Jalalian::forge($signature_date)->format('Y/m/d')}}</span>
                            و ساعت <span class="font-bold text-primary-700">{{$signature_hour}}</span>
                            <br>
                            در دفتر مشاور املاک به شماره عضویت <span class="font-bold text-primary-700">{{$user_membership_number}}</span>
                            <br>
                            با مدیریت <span class="font-bold text-primary-700">{{$user_manager}}</span>
                            <br>
                            به نشانی <span class="font-bold text-primary-700"   >{{$user_address}}</span>
                            <br>
                            در سه نسخه بین طرفین تنظیم , قرايت , امضا و مبادله گردید . هرسه نسخه دارای اعتبار واحد است .
                        </p>
                        <br>
                    </div>
                    <a href="{{route('sale.show',['contractOfSale'=>$contractOfSale])}}" class="p-4 bg-primary-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد مبایعه نامه</a>
                </form>
            </div>
        </div>
    </div>
</section>
