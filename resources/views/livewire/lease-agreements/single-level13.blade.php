<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده توضیحات</span></h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <p class="text-right">موارد حقوقی مفاد این قرارداد مطابق با مقررات جاری است و تایید می شود .</p>
                        <br><br>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">توضیحات</label>
                            <textarea id="address" name="address" rows="4" readonly class="block p-2.5 w-full text-sm text-gray-600 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600  dark:text-white  bg-gray-200">{{$comment}}</textarea>
                        </div>
                    </div>
                    <a href="{{route('rent.show',['leaseAgreement'=>$leaseAgreement])}}" class="p-4 bg-purple-600 text-white rounded-[10px]">بازگشت به صفحه مشاهدات مواد اجاره نامه</a>
                </form>
            </div>
        </div>
    </div>
</section>
