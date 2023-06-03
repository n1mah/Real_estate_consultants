<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5"  style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-gray-400">مشاهده مشتری</h1>
        <hr>
    </div>
    <div class="max-w-3xl px-4 py-2 mx-auto">
        <div class="py-2">
            <div class="grid gap-4 mb-4 sm:grid-cols-3 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-3">
                    <label for="national_code" class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">کدملی</label>
                    <input readonly type="number" name="national_code" id="national_code" wire:model.defer="national_code" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                </div>
                <hr class="sm:col-span-3">
                <div class="w-full">
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام </label>
                    <input readonly type="text" name="firstname" id="firstname" wire:model.defer="firstname" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="نام را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام خانوادگی</label>
                    <input readonly type="text" name="lastname" id="lastname" wire:model.defer="lastname" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="نام خانوادگی را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="fathername" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام پدر</label>
                    <input readonly type="text" name="fathername" id="fathername" wire:model.defer="fathername" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="نام پدر را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="birth_certificate_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره شناسنامه</label>
                    <input readonly type="number" name="birth_certificate_number" id="birth_certificate_number" wire:model.defer="birth_certificate_number" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="شماره شناسنامه را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="place_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">محل تولد</label>
                    <input readonly type="text" name="place_of_birth" id="place_of_birth" wire:model.defer="place_of_birth" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="شهر تولد را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="postal_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">کد پستی</label>
                    <input readonly type="text" name="postal_code" id="postal_code" wire:model.defer="postal_code" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="کدپستی را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">موبایل</label>
                    <input readonly type="text" name="mobile" id="mobile" wire:model.defer="mobile" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="موبایل را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تلفن</label>
                    <input readonly type="text" name="phone" id="phone" wire:model.defer="phone" class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="تلفن را وارد کنید ...">
                </div>
                <div class="w-full">
                    <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تاریخ تولد</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input readonly value="{{\Morilog\Jalali\Jalalian::forge($date_of_birth)->format('Y/m/d')}}" class="bg-gray-300 border border-gray-600 auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="sm:col-span-3">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">آدرس</label>
                    <textarea readonly id="address" name="address" rows="4" required wire:model.defer="address" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-300 rounded-lg border border-gray-600 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="آدرس را وارد کنید ..."></textarea>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button wire:click="$emit('closeModal')" class="text-yellow-600 inline-flex items-center hover:text-white border border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-600 dark:focus:ring-yellow-900">
                    بازگشت به مشتریان
                </button>
            </div>
        </div>
    </div>
</section>
