<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white min-h-100-vh">
<div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 3</span> <br> (مدت اجاره)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="rental_period" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مدت زمان اجاره : </label>
                                <input disabled id="rental_period" value="{{$rental_period}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="">
                            <div class="w-full flex flex-col mb-4">
                                <label for="rental_period_type" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">ماه / سال</label>
                                <select disabled id="rental_period_type" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  text-gray-400">
                                    <option>{{$rental_period_type}}</option>
                                </select>
                            </div>
                        </div>
                        <label for="date_of_birth" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">اجاره از تاریخ</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input readonly value="{{\Morilog\Jalali\Jalalian::forge($from)->format('Y/m/d')}}" class="bg-gray-200 outline-none border border-gray-300 auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <br>
                        <label for="date_of_birth" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">اجاره تا تاریخ</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input readonly value="{{\Morilog\Jalali\Jalalian::forge($until)->format('Y/m/d')}}" class="bg-gray-200 outline-none border border-gray-300 auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('rent.show',['leaseAgreement'=>$leaseAgreement])}}" class="p-4 bg-purple-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد اجاره نامه</a>
                </form>
            </div>
        </div>
    </div>
</section>
