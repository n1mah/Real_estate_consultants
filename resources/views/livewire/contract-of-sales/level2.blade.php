<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مبایعه نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 2</span> <br> (موضوع و مشخصات)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 grid grid-cols-4 gap-4">
                        <div class="">
                            <div class="w-full flex flex-col mb-4">
                                <label for="entirety" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">دانگ (تعداد دانگ مورد معامله) <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="entirety" wire:model.defer="entirety" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="شش">شش</option>
                                    <option value="پنج">پنج</option>
                                    <option value="چهار">چهار</option>
                                    <option value="سه">سه</option>
                                    <option value="دو">دو</option>
                                    <option value="یک">یک</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="arena_and_nobles" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">عرصه و ایان </label>
                                <input id="arena_and_nobles" wire:model.defer="title_deeds" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پلاک ثبتی</label>
                                    <input id="house_number" wire:model.defer="house_number" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="sub_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">فرعی</label>
                                    <input id="sub_part_address" wire:model.defer="sub_part_address" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="main_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">اصلی قطعه</label>
                                <input id="main_part_address" wire:model.defer="main_part_address" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="year_of_construction" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">سال ساخت<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select wire:model.defer="year_of_construction" id="year_of_construction" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @for($i=1300;$i<\Morilog\Jalali\Jalalian::now()->format('Y');$i++)
                                        <option selected value="{{$i}}">{{$i}}</option>
                                    @endfor

                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="part" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">واقع در بخش</label>
                                <input wire:model.defer="part" id="part" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="registration_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حوزه ثبتی</label>
                                <input wire:model.defer="registration_area" id="registration_area" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مساحت (متر مربع)<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input wire:model.defer="house_area" id="house_area" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="price_per_meter" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">قبمت (هر متر مربع)<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input wire:model.defer="price_per_meter" id="price_per_meter" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="parking" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پارکینگ</label>
                                <input  wire:model.defer="parking" id="parking" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="warehouse" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">انباری</label>
                                <input wire:model.debounce:2000ms="warehouse" id="warehouse" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">وضعیت سند ثبتی<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="title_deeds" wire:model="title_deeds" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="فاقد">فاقد سند ثبتی</option>
                                    <option value="دارا">دارای سند ثبتی</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 @if(!$title_deeds_check) hidden @endif ">
                                <label for="title_deeds_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره سند ثبتی</label>
                                <input id="gray" wire:model.defer="title_deeds_number" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                <label for="postal_code" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">کدپستی<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input id="postal_code" wire:model.defer="postal_code" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
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
                                    <div class="flex w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="gas_status1" wire:model="gas_status" type="radio" value="گاز اختصاصی" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="gas_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">گاز اختصاصی</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="gas_status2" wire:model="gas_status" type="radio" value="گاز اشتراکی" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="gas_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">گاز اشتراکی</label>
                                        </div>
                                    </div>
                                    <div class="flex w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="shoo_status1"  wire:model="shoo_status" type="radio" value="شوفاژ روشن" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="shoo_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">شوفاژ روشن</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="shoo_status2"  wire:model="shoo_status" type="radio" value="شوفاژ غیر روشن" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="shoo_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">شوفاژ غیر روشن</label>
                                        </div>
                                    </div>
                                    <div class="flex items-center pl-3">
                                        <input id="cool" wire:model="membership_right" type="checkbox" value="کولر" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="cool" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">کولر</label>
                                    </div>
                                    <input type="hidden">
                                    <div class="flex w-auto mx-1 items-center p-2 border border-gray-200 rounded dark:border-gray-700 flex-wrap">
                                        <div class="flex items-center pl-3">
                                            <input id="phone_status1"  type="radio" name="rr" wire:model="phone_status" value="تلفن غیر دایر" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="phone_status1" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">تلفن غیر دایر</label>
                                        </div>
                                        <div class="flex items-center pl-3">
                                            <input id="phone_status2"  type="radio" name="rr" wire:model="phone_status" value="تلفن دایر" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="phone_status2" class="w-full py-3 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">تلفن دایر</label>
                                        </div>
                                    </div>
                                    <p wire:click="$emit('aa')">click</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4 @if(!$phone_status) hidden @endif" >
                                <label for="phone" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تلفن</label>
                                <input wire:model.defer="phone" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <button class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                        ذخیره مشخصات و تایید نهایی
                    </button>
                </form>

            </div>
        </div>
        {{--    level 1  End Page --}}



    </div>
</section>
