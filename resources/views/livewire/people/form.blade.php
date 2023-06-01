<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">افزودن مشتری</h1>
        <hr>
    </div>
    <div class="max-w-3xl px-4 py-2 mx-auto">
                <form wire:submit.prevent="create" class="py-2">
                    <div class="grid gap-4 mb-4 sm:grid-cols-3 sm:gap-6 sm:mb-5">
                        <div class="w-full">
                            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام <span class="text-red-600">*</span></label>
                            <input type="text" name="firstname" id="firstname" wire:model.defer="person.firstname" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="نام را وارد کنید ...">
                        </div>
                        <div class="w-full">
                            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام خانوادگی<span class="text-red-600">*</span></label>
                            <input type="text" name="lastname" id="lastname" wire:model.defer="person.lastname" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="نام خانوادگی را وارد کنید ...">
                        </div>
                        <div class="w-full">
                            <label for="fathername" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام پدر<span class="text-red-600">*</span></label>
                            <input type="text" name="fathername" id="fathername" wire:model.defer="person.fathername" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="نام پدر را وارد کنید ...">
                        </div>
                        <div class="w-full">
                            <label for="national_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">کدملی<span class="text-red-600">*</span></label>
                            <input type="number" name="national_code" id="national_code" wire:model.defer="person.national_code" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="کد ملی را وارد کنید ...">
                        </div>
                        <div class="w-full">
                            <label for="birth_certificate_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره شناسنامه<span class="text-red-600">*</span></label>
                            <input type="number" name="birth_certificate_number" id="birth_certificate_number" wire:model.defer="person.birth_certificate_number" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="0" placeholder="شماره شناسنامه را وارد کنید ...">
                        </div>
                        <div class="w-full">
                            <label for="place_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">محل تولد<span class="text-red-600">*</span></label>
                            <input type="text" name="place_of_birth" id="place_of_birth" wire:model.defer="person.place_of_birth" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="شهر تولد را وارد کنید ...">
                        </div>

                        <div class="w-full">
                            <label for="postal_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">کد پستی<span class="text-red-600">*</span></label>
                            <input type="text" name="postal_code" id="postal_code" wire:model.defer="person.postal_code" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="کدپستی را وارد کنید ...">
                        </div>
                        <div class="w-full">
                            <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">موبایل<span class="text-red-600">*</span></label>
                            <input type="text" name="mobile" id="mobile" wire:model.defer="person.mobile" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="موبایل را وارد کنید ...">
                        </div>
                        <div class="w-full">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تلفن</label>
                            <input type="text" name="phone" id="phone" wire:model.defer="person.phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="تلفن را وارد کنید ...">
                        </div>
                        <div class="sm:col-span-3">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">آدرس<span class="text-red-600">*</span></label>
                            <textarea id="address" name="address" rows="4" required wire:model.defer="person.address" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="آدرس را وارد کنید ..."></textarea>
                        </div>
                        <div class="w-full">
                            <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تاریخ تولد<span class="text-red-600">*</span></label>
                            <input type="text" name="date_of_birth" id="date_of_birth" wire:model.defer="person.date_of_birth" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="1990/02/02 10:10:10" placeholder="تاریخ تولد را وارد کنید ...">
                        </div>

                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="ml-4 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            افزودن مشتری
                        </button>
                        <a href="{{route("people")}}" class="text-yellow-600 inline-flex items-center hover:text-white border border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-600 dark:focus:ring-yellow-900">
                            بازگشت به مشتریان
                        </a>
                    </div>
                </form>
            </div>
</section>
