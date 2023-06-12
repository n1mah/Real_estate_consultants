<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white  min-h-100-vh">
    <div class="w-full-65 px-4 py-2 mx-auto flex-col flex items-center justify-center">
        <h2 class="font-medium p-3 text-gray-400">مشاهده مواد قرارداد مبایعه نامه</h2>
        <hr class="p-2 w-full">
        <p class="text-center text-gray-600 bg-gray-200 p-5 rounded-xl">شماره پرونده <br><br><span class="text-primary-700"> {{$fileNumber}}</span></p>
        <br><hr class="w-full-45 p-2">
        <div class="w-full-80 mx-auto items-center mb-4 ">
            <p class="text-right">
                علت کنسلی را در توضیحات بنویسید
            </p>
            <br><br>
            <div class="">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">توضیحات</label>
                <textarea id="address" name="address" rows="4" wire:model.defer="comment" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="علت کنسلی را وارد کنید ..."></textarea>
            </div>
        </div>
        <br><hr class="w-full-80 p-2"><br>
        <button wire:click="$emit('delete')" class="block my-3 w-full p-2 bg-danger-600 text-white rounded-xl">کنسل کردن قرارداد مبایعه</button>
        <a href="{{route('sales')}}" class="p-4 bg-primary-600 text-white rounded-[10px]"> انصراف و بازگشت به صفحه مبایعه نامه ها</a>
    </div>
</section>
