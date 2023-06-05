<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400">ایجاد یک قرارداد مبایعه جدید</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-45 flex flex-col items-center mb-4 sm:mb-5">

                        <p class="sm:col-span-2 text-gray-600 text-right">
                            از لیست پایین خریداران خود را انتخاب کنید یا در بین مشتریان جستجو کنید
                        </p>
                        <div class="w-full flex flex-col">
                            <label for="selected" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خریدار <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                            <select  wire:model="selectedBuyer" wire:change="$emit('selectedItemBuyer')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">خریدار را انتخاب کنید</option>

                            </select>
                        </div>
                        <div class="w-full">
                            <label for="selected" class="text-right mb-2 block inline-block text-sm font-medium text-gray-900 dark:text-white text-right opacity-0"> - </label>
                            <button data-modal-target="buyerModal" data-modal-toggle="buyerModal" class="w-full block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
                                جستجو
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        {{--    level 1  End Page --}}



    </div>
</section>
