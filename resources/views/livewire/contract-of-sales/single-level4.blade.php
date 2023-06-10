<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مشاهده مبایعه نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 4</span> <br> (شرایط مربوط به تنظیم سند)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="notary_public" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">دفتر اسناد رسمی </label>
                                <input readonly value="{{$notary_public}}" id="notary_public" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تاریخ تعیین شده جهت حضور در دفتر خانه</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input readonly value="{{\Morilog\Jalali\Jalalian::forge($set_time)->format('Y/m/d')}}" class="bg-gray-200 border border-gray-600 auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('sales')}}" class="mt-2 w-full block text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">
                        بازگشت به لیست مبایعه نامه ها
                    </a>
                </form>

            </div>
        </div>



    </div>
</section>
