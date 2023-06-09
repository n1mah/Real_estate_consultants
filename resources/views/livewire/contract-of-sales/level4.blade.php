<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 4</span> <br> (شرایط مربوط به تنظیم سند)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center  m-4">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="arena_and_nobles" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">دفتر اسناد رسمی <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="arena_and_nobles" wire:model.defer="notary_public" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <x-persian-datepicker
                            wirePropertyName="set_time"
                            label="تاریخ تعیین شده جهت حضور در دفتر خانه"
                            showFormat="jYYYY/jMM/jDD"
                            returnFormat="X"
                            :required="true"
                            :defaultDate="date('Y-m-d')"
                            :setNullInput="true"
                        >
                            <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">تاریخ حضور در دفترخانه<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>

                        </x-persian-datepicker>
                    </div>
                         <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                        شرایط مربوط به تنظیم سند و تایید نهایی
                    </button>
                </form>

            </div>
        </div>



    </div>
</section>
