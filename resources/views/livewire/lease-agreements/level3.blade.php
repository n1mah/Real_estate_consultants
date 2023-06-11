<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 3</span> <br> (مدت اجاره)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="rental_period" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مدت زمان اجاره : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="rental_period" wire:model.defer="rental_period" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="">
                            <div class="w-full flex flex-col mb-4">
                                <label for="rental_period_type" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">ماه / سال<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="rental_period_type" wire:model.defer="rental_period_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="ماه">ماه</option>
                                    <option value="سال">سال</option>
                                </select>
                            </div>
                        </div>
                        <x-persian-datepicker
                            wirePropertyName="from"
                            label="اجاره از تاریخ "
                            showFormat="jYYYY/jMM/jDD"
                            returnFormat="X"
                            :required="true"
                            :setNullInput="true"
                        >
                            <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">اجاره از تاریخ<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>

                        </x-persian-datepicker>
                        <br>
                        <x-persian-datepicker
                            wirePropertyName="until"
                            label="اجاره تا تاریخ"
                            showFormat="jYYYY/jMM/jDD"
                            returnFormat="X"
                            :required="true"
                            :setNullInput="true"
                        >
                            <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">اجاره تا تاریخ<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>

                        </x-persian-datepicker>


                    </div>
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        @if($errors)
                            @foreach ($errors->all() as $error)
                                <p class="text-red-700 text-right"> * {{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                        ذخیره مدت اجاره و تایید نهایی
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>
