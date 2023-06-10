<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 10</span> <br>(تایید مفاد قرارداد)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <p class="text-right">
                            موارد حقوقی مفاد این قرارداد مطابق با مقررات جاری است و تایید می شود .
                        </p>
                        <br><br>
                        <div class="">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">توضیحات</label>
                            <textarea id="address" name="address" rows="4" readonly class="block p-2.5 w-full text-sm text-gray-600 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600  dark:text-white  bg-gray-200">{{$comment}}</textarea>
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
