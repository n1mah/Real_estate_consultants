<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">مشاهده مبایعه نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 2</span> <br> (موضوع و مشخصات)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4 grid grid-cols-4 gap-4">
                        <div class="">
                            <div class="w-full flex flex-col mb-4">
                                <label for="entirety" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">دانگ (تعداد دانگ مورد معامله) </label>
                                <select id="entirety" disabled class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>{{$entirety}}</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="arena_and_nobles" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">عرصه و ایان </label>
                                <input value="{{$arena_and_nobles}}" readonly id="arena_and_nobles" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پلاک ثبتی</label>
                                <input value="{{$house_number}}" readonly id="house_number" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="sub_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">فرعی</label>
                                <input value="{{$sub_part_address}}" readonly id="sub_part_address" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="main_part_address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">اصلی قطعه</label>
                                <input value="{{$main_part_address}}" readonly id="main_part_address" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="year_of_construction" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">سال ساخت</label>
                                <select id="year_of_construction" disabled class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>{{$year_of_construction}}</option>

                                </select>
                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="part" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">واقع در بخش</label>
                                <input value="{{$part}}" readonly id="part" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="registration_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">حوزه ثبتی</label>
                                <input value="{{$registration_area}}" readonly id="registration_area" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مساحت (متر مربع)</label>
                                <input value="{{$house_area}}" type="number" readonly step="0.01" wire:model="" id="house_area" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="opacity-0"> - </span></label>
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="opacity-0"> - </span></label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="price_per_meter" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">قیمت (هر متر مربع - ریال )</label>
                                <input value="{{$price_per_meter}}" readonly type="number" id="price_per_meter" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($price_per_meter)) {{number_format($price_per_meter)}} ریال @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($price_per_meter)) {{(new Number2Word)->numberToWords($price_per_meter/10)}} تومان @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="w-full  flex flex-row flex-wrap items-start justify-around">
                                <div class="text-gray-600 text-xl mx-2">مبلغ کل : </div>
                                <div>
                                    <div class="text-gray-600 ">@if(is_numeric($total) && !empty($total)) {{number_format($total)}} ریال @else <span class="opacity-0"> - </span> @endif</div>
                                    <div class="text-gray-600 ">@if(!empty($total)) {{(new Number2Word)->numberToWords($total)}} ریال @else <span class="opacity-0"> - </span> @endif</div>
                                    <div class="text-gray-600 ">@if(!empty($total)) {{(new Number2Word)->numberToWords($total/10)}} تومان @else <span class="opacity-0"> - </span> @endif</div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="parking" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">پارکینگ</label>
                                <input value="{{$parking}}" id="parking" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="warehouse" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">انباری</label>
                                <input name="parking" value="{{$warehouse}}" id="warehouse" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">وضعیت سند ثبتی</label>
                                <select id="title_deeds" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="{{$title_deeds}}">{{$title_deeds}}:</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds_number" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره سند ثبتی</label>
                                <input value="{{$title_deeds_number}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <div class="w-full flex flex-col mb-4">
                                <label for="address" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نشانی</label>
                                <textarea id="address" rows="1" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                {{$address}}
                                </textarea>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="postal_code" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">کدپستی</label>
                                <input readonly id="postal_code" value="{{$postal_code}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
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

                        <div>
                            <div class="w-full flex flex-col mb-4" >
                                <label for="telephone" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">تلفن</label>
                                <input readonly value="{{$telephone}}" id="telephone" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <a href="{{route('sales')}}" class="mt-2 w-full block text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">
                        بازگشت به لیست مبایعه نامه ها
                    </a>
                </form>

            </div>
        </div>
    </div>
</section>
