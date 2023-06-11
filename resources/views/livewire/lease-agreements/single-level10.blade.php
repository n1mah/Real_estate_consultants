<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 10</span></h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div class="flex w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                            <label class="mx-6 opacity-50 text-purple-700"> شرط داوری :</label>
                            <div class="flex items-center pl-3">
                                <input id="arbitration1" disabled @if(!$arbitration) checked @endif type="radio" value="0" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="arbitration1" class="w-full py-3 mr-2 cursor-not-allowed text-sm font-medium text-gray-900 dark:text-gray-50 opacity-50">مورد توافق قرار نگرفت</label>
                            </div>
                            <div class="flex items-center pl-3">
                                <input id="arbitration2" disabled  @if($arbitration) checked @endif type="radio" value="1" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="arbitration2" class="w-full py-3  cursor-not-allowed mr-2 text-sm font-medium text-gray-900 dark:text-gray-50">مورد توافق قرار گرفت</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <a href="{{route('rents')}}" class="p-4 bg-purple-600 text-white rounded-[10px]"> بازگشت به صفحه اجاره نامه ها</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
