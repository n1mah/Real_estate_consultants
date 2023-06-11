<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 2</span> <br>(موضوع قرارداد و مشخصات مورد اجاره)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 grid grid-cols-4 gap-4">
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="entirety" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تملیک منافع : </label>
                                <input readonly id="entirety" value="{{$entirety}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="">
                            <div class="w-full flex flex-col mb-4">
                                <label for="type_of_lease" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نوع مورد اجاره : </label>
                                <select disabled id="type_of_lease" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>{{$type_of_lease}}</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">عنوان یا موضوع اجاره </label>
                                <input readonly id="title" value="{{$title}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <div class="w-full flex flex-col mb-4">
                                <label for="address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نشانی</label>
                                <textarea id="address" readonly rows="1" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$address}}</textarea>
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پلاک ثبتی</label>
                                <input readonly id="house_number" value="{{$house_number}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="sub_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">فرعی</label>
                                <input readonly id="sub_part_address" value="{{$sub_part_address}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="main_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">اصلی قطعه</label>
                                <input readonly id="main_part_address" value="{{$main_part_address}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="part" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">واقع در بخش</label>
                                <input readonly value="{{$part}}" id="part" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مساحت (متر مربع)</label>
                                <input readonly type="number" min="0" step="0.01" value="{{$house_area}}" id="house_area" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره سند ثبتی</label>
                                <input readonly id="title_deeds_number" value="{{$title_deeds_number}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="name" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">به نام : </label>
                                <input readonly id="name" value="{{$name}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="bedroom" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تعداد اتاق خواب : </label>
                                <input readonly id="bedroom" value="{{$bedroom}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="postal_code" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">کدپستی</label>
                                <input readonly id="postal_code" value="{{$postal_code}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 @if(empty($warehouse)) hidden @endif"  >
                                <label for="warehouse" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">انباری به متراژ (متر مربع)</label>
                                <input readonly name="warehouse" value="warehouse" id="warehouse" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4 @if(empty($parking)) hidden @endif" >
                                <label for="parking" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پارکینگ به شماره</label>
                                <input readonly value="parking" id="parking" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4 @if(empty($telephone)) hidden @endif" >
                                <label for="telephone" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تلفن</label>
                                <input readonly wire:model.defer="telephone" id="telephone" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                        </div>


                        <div class="sm:col-span-3">
                            <div class="w-full flex flex-row mb-4 flex-wrap">
                                <label for="" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حق اشتراک</label>
                                <div class="w-full flex flex-row mt-2">
                                    @foreach($membership_right as $item)
                                        @if($item!=null) <div class="text-gray-600 ml-6 bg-gray-200 p-2 rounded-xl">{{$item}} </div> @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="{{route('rents')}}" class="p-4 bg-purple-600 text-white rounded-[10px]"> بازگشت به صفحه اجاره نامه ها</a>

                </form>

            </div>
        </div>
    </div>
</section>
