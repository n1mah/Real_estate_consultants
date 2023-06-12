<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 2</span> <br> (موضوع قرارداد و مشخصات مورد اجاره)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 grid grid-cols-4 gap-4">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="entirety" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تملیک منافع : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="entirety" wire:model.defer="entirety" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="type_of_lease" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نوع مورد اجاره : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="type_of_lease" wire:model.defer="type_of_lease" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="دانگ">دانگ</option>
                                    <option value="دستگاه">دستگاه</option>
                                    <option value="یک باب">یک باب</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">عنوان یا موضوع اجاره <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="title" wire:model.defer="title" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <div class="w-full flex flex-col mb-4">
                                <label for="address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نشانی<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <textarea id="address" wire:model.defer="address" rows="1" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </textarea>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پلاک ثبتی<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="house_number" wire:model.defer="house_number" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="sub_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">فرعی</label>
                                <input autocomplete="off" id="sub_part_address" wire:model.defer="sub_part_address" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="main_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">اصلی قطعه</label>
                                <input autocomplete="off" id="main_part_address" wire:model.defer="main_part_address" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="part" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">واقع در بخش</label>
                                <input autocomplete="off" wire:model.defer="part" id="part" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مساحت (متر مربع)<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" step="0.01" wire:model="house_area" id="house_area" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره سند ثبتی<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="title_deeds_number" wire:model.defer="title_deeds_number" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="name" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">به نام : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="name" wire:model.defer="name" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="bedroom" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تعداد اتاق خواب : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="bedroom" wire:model.defer="bedroom" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="postal_code" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">کدپستی<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input  autocomplete="off" id="postal_code" wire:model.defer="postal_code" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="sm:col-span-2"></div>
                        <div class="sm:col-span-2"></div>
                        <div class="sm:col-span-3">
                            <div class="w-full flex flex-row mb-4 flex-wrap">
                                <label for="" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حق اشتراک<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <div class="w-full flex flex-row mt-2">
                                    <div class="flex items-center pl-3">
                                        <input id="water" wire:model="membership_right" type="checkbox" value="آب" class=" text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="water" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">آب</label>
                                    </div>
                                    <div class="flex items-center pl-3">
                                        <input id="elect"  wire:model="membership_right" type="checkbox" value="برق" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="elect" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">برق</label>
                                    </div>
                                    <div class="flex flex-col w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="gas_status1" wire:model="gas_status" type="radio" value="گاز اختصاصی" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="gas_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">گاز اختصاصی</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="gas_status2" wire:model="gas_status" type="radio" value="گاز اشتراکی" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="gas_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">گاز اشتراکی</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="gas_status3" wire:model="gas_status" type="radio" value="گاز ندارد" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="gas_status3" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">گاز ندارد</label>
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="shoo_status1"  wire:model="shoo_status" type="radio" value="شوفاژ روشن" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="shoo_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">شوفاژ روشن</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="shoo_status2"  wire:model="shoo_status" type="radio" value="شوفاژ غیر روشن" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="shoo_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">شوفاژ غیر روشن</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="shoo_status2"  wire:model="shoo_status" type="radio" value="شوفاژ ندارد" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="shoo_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">شوفاژ ندارد</label>
                                        </div>
                                    </div>
                                    <div class="flex items-center pl-3">
                                        <input id="cool" wire:model="membership_right" type="checkbox" value="کولر" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="cool" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">کولر</label>
                                    </div>
                                    <input type="hidden">
                                    <div class="flex flex-col w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="phone_status1"  type="radio" wire:model="phone_status" value="تلفن غیر دایر" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="phone_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">تلفن غیر دایر</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="phone_status2"  type="radio" wire:model="phone_status" value="تلفن دایر" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="phone_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">تلفن دایر</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="phone_status3"  type="radio" wire:model="phone_status" value="تلفن ندارد" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="phone_status3" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">تلفن ندارد</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 @if(!$phone_status) hidden @endif" >
                                <label for="telephone" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تلفن</label>
                                <input  autocomplete="off" wire:model.defer="telephone" id="telephone" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <div class="w-full flex flex-row mb-4 flex-wrap">
                                <div class="w-full flex flex-row mt-2">
                                    <div class="flex w-auto mx-1 items-center flex-col p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="warehouse_status1"  type="radio"  wire:model="warehouse_status" value="انباری دارد" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="warehouse_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">انباری دارد</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="warehouse_status2"  type="radio"  wire:model="warehouse_status" value="انباری ندارد" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="warehouse_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">انباری ندارد</label>
                                        </div>
                                    </div>
                                    <div class="flex w-auto mx-1 items-center flex-col p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="parking_status1"  type="radio"  wire:model="parking_status" value="پارکینگ دارد" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="parking_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">پارکینگ دارد</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="parking_status2"  type="radio"  wire:model="parking_status" value="پارکینگ ندارد" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="parking_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">پارکینگ ندارد</label>
                                        </div>
                                    </div>
                                    <div class="mx-2">
                                        <div class="w-full flex flex-col mb-4 @if(!$warehouse_status) hidden @endif" >
                                            <label for="warehouse" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">انباری به متراژ (متر مربع)</label>
                                            <input autocomplete="off" name="warehouse" wire:model.debounce:2000ms="warehouse" id="warehouse" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>
                                    </div>
                                    <div class="mx-2">
                                        <div class="w-full flex flex-col mb-4 @if(!$parking_status) hidden @endif" >
                                            <label for="parking" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پارکینگ به شماره</label>
                                            <input autocomplete="off" wire:model.defer="parking" id="parking" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        @if($errors)
                            @foreach ($errors->all() as $error)
                                <p class="text-red-700 text-right"> * {{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">ذخیره مشخصات و تایید نهایی</button>
                </form>
            </div>
        </div>
    </div>
</section>
