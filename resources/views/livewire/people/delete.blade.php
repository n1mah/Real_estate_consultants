<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5"  style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">حذف </h1>
        <hr>
    </div>
    <div class="max-w-3xl px-4 py-2 mx-auto">
        <form wire:submit.prevent="delete" class="py-2">
            <div class="grid gap-4 mb-4 sm:grid-cols-3 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-3">
                    <label for="national_code" class="block mb-2 text-sm font-medium text-gray-900  dark:text-white">کدملی</label>
                    <input readonly type="number" name="national_code" id="national_code" wire:model.defer="national_code" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    @if($errors->has('national_code'))
                        <span class="text-red-500 text-xs">{{ $errors->first('national_code') }}</span>
                    @endif
                </div>
                <div class="w-full">
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام </label>
                    <input readonly type="text" name="firstname" id="firstname" wire:model.defer="firstname" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="نام را وارد کنید ...">
                    @if($errors->has('firstname'))
                        <span class="text-red-500 text-xs">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>
                <div class="w-full">
                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام خانوادگی</label>
                    <input readonly type="text" name="lastname" id="lastname" wire:model.defer="lastname" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="نام خانوادگی را وارد کنید ...">
                    @if($errors->has('lastname'))
                        <span class="text-red-500 text-xs">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>
                <div class="w-full">
                    <label for="fathername" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام پدر</label>
                    <input readonly type="text" name="fathername" id="fathername" wire:model.defer="fathername" required class="bg-gray-300 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="نام پدر را وارد کنید ...">
                    @if($errors->has('fathername'))
                        <span class="text-red-500 text-xs">{{ $errors->first('fathername') }}</span>
                    @endif
                </div>
            </div>
            <hr class="sm:col-span-3">
            <div class="flex items-center sm:col-span-3">
                <button wire:click="$emit('deleteAction')" type="submit" class="w-full ml-4 text-white bg-danger-600 hover:bg-danger-600 focus:ring-4 focus:outline-none focus:ring-danger-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-danger-300 dark:hover:bg-danger-500 dark:focus:ring-danger-500">
                    حذف مشتری
                </button>
                <a wire:click="$emit('closeModal')" class="text-yellow-600 inline-flex items-center hover:text-white border border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-600 dark:focus:ring-yellow-900">
                    انصراف
                </a>
            </div>
        </form>
    </div>

</section>
