<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن توضیحات</span></h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <p class="text-right">موارد حقوقی مفاد این قرارداد مطابق با مقررات جاری است و تایید می شود .</p>
                        <br><br>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">توضیحات</label>
                            <textarea id="address" name="address" rows="4" wire:model.defer="comment" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="توضیحات قرارداد را وارد کنید ..."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">ثبت توضیحات و اتمام</button>
                </form>
            </div>
        </div>
    </div>
</section>
