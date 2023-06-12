<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 min-h-100-vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 12</span></h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4 ">
                        <x-persian-datepicker
                            wirePropertyName="signature_date"
                            label="تاریخ امضا و مبادله قرارداد"
                            showFormat="jYYYY/jMM/jDD"
                            returnFormat="X"
                            :defaultDate="date('Y-m-d')"
                            :required="true"
                            :setNullInput="false">
                            <label for="signature_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">تاریخ امضا و مبادله قرارداد<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                        </x-persian-datepicker>
                        @if($errors->has('signature_date'))
                            <span class="text-red-500 text-xs">{{ $errors->first('signature_date') }}</span>
                        @endif
                        <div class="w-full-20 flex flex-col mb-4">
                            <label for="signature_hour" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">ساعت امضا و مبادله قرارداد<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                            <select id="signature_hour" wire:model="signature_hour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @for($i=0;$i<24;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @if($errors->has('signature_hour'))
                                <span class="text-red-500 text-xs">{{ $errors->first('signature_hour') }}</span>
                            @endif
                        </div>
                        <div class="w-full-20 flex flex-col mb-4">
                            <label for="signature_minutes" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">دقیقه امضا و مبادله قرارداد</label>
                            <select id="signature_minutes" wire:model="signature_minutes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @for($i=0;$i<60;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @if($errors->has('signature_minutes'))
                                <span class="text-red-500 text-xs">{{ $errors->first('signature_minutes') }}</span>
                            @endif
                        </div>
                        <br>
                        <p class="text-right text-green-800">
                            این قرارداد در تاریخ  <span class="font-bold text-primary-700">{{\Morilog\Jalali\Jalalian::forge(($signature_date+(60*60*4)))->format('Y/m/d')}}</span>
                            و ساعت <span class="font-bold text-primary-700">{{$signature_hour}}</span>
                            <br>
                            در دفتر مشاور املاک به شماره عضویت <span class="font-bold text-primary-700">{{$user_membership_number}}</span>
                            <br>
                            با مدیریت <span class="font-bold text-primary-700">{{$user_manager}}</span>
                            <br>
                            به نشانی <span class="font-bold text-primary-700"   >{{$user_address}}</span>
                            <br>
                            در سه نسخه بین طرفین تنظیم , قرايت , امضا و مبادله گردید . هرسه نسخه دارای اعتبار واحد است .
                        </p>
                        <br>
                    </div>
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold">ثبت و تایید نهایی</button>
                </form>
            </div>
        </div>
    </div>
</section>
