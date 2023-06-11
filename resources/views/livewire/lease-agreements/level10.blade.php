<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 10</span></h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div class="flex w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                            <label class="mx-6 text-purple-500"> شرط داوری :</label>
                            <div class="flex items-center pl-3">
                                <input id="arbitration1"  wire:model="arbitration" type="radio" value="0" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="arbitration1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">مورد توافق قرار نگرفت</label>
                            </div>
                            <div class="flex items-center pl-3">
                                <input id="arbitration2"  wire:model="arbitration" type="radio" value="1" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="arbitration2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">مورد توافق قرار گرفت</label>
                            </div>
                        </div>
                        <span class="text-right font-extrabold text-red-700">{{$this->msg}}</span>
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-xl text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">
                        ثبت شرط داوری و تایید نهایی
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
