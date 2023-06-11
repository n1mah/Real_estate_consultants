<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">اجاره نامه جدید</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">افزودن ماده 4</span> <br>(اجاره بها و نحوه پرداخت)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center" wire:submit.prevent="create">
                    <div class="w-full-80 mx-auto items-center mb-4">

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="lease" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">میزان اجاره بها جمعا (ریال) :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="lease" id="lease" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('lease'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('lease') }}</span>
                                @endif
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($lease) && !empty($lease)) <span>{{(new Number2Word)->numberToWords($lease)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($lease)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($lease) && !empty($lease)) <span>{{(new Number2Word)->numberToWords($lease/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($lease/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="monthly_rental_amount" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">از قرار ماهیانه (ریال) :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="monthly_rental_amount" id="monthly_rental_amount" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('monthly_rental_amount'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('monthly_rental_amount') }}</span>
                                @endif
                                <label for="monthly_rental_amount" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($monthly_rental_amount) && !empty($monthly_rental_amount)) <span>{{(new Number2Word)->numberToWords($monthly_rental_amount)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($monthly_rental_amount)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="monthly_rental_amount" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($monthly_rental_amount) && !empty($monthly_rental_amount)) <span>{{(new Number2Word)->numberToWords($monthly_rental_amount/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($monthly_rental_amount/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                        <div class="">
                            <div class="w-full flex flex-col mb-4">
                                <label for="type_of_lease" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">در : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="type_of_lease" wire:model.defer="at_first" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="true">اول هر ماه</option>
                                    <option value="false">آخر هر ماه</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <hr>
                        <br>

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="mortgage" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مبلغ قرض الحسنه توافقی (رهن) (ریال) :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="mortgage" id="mortgage" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('mortgage'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('mortgage') }}</span>
                                @endif
                                <label for="mortgage" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($mortgage) && !empty($mortgage)) <span>{{(new Number2Word)->numberToWords($mortgage)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($mortgage)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="mortgage" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($mortgage) && !empty($mortgage)) <span>{{(new Number2Word)->numberToWords($mortgage/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($mortgage/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                        <br>
                        <hr>
                        <br>

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="rent" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بیعانه مبلغ قرض الحسنه توافقی (رهن) (ریال) :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="rent" id="rent" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('rent'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('rent') }}</span>
                                @endif
                                <label for="rent" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium">@if(is_numeric($rent) && !empty($rent)) <span>{{(new Number2Word)->numberToWords($rent)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($rent)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="rent" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium">@if(is_numeric($rent) && !empty($rent)) <span>{{(new Number2Word)->numberToWords($rent/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($rent/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>


                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نوع پرداخت<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <select id="title_deeds" wire:model="payment_type" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="نقد">نقد</option>
                                    <option value="چک">چک</option>
                                </select>
                            </div>
                        </div>

                        <div class="@if($payment_type=='نقد') hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="cheque" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">چک : <span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" id="cheque" wire:model.defer="cheque" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="bank" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بانک<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" wire:model.defer="bank" id="bank" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="branch" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شعبه<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span>   </label>
                                <input autocomplete="off" wire:model.defer="branch" id="branch" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div class="sm:col-span-2 bg-gray-200 p-5 rounded-xl">
                            <div class="w-full flex flex-col mb-4">
                                <h4 class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white font-extrabold text-xl"> باقیمانده : </h4>
                                <span class="text-orange-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($deposit) && !empty($deposit)) <span>{{(new Number2Word)->numberToWords($deposit)}} <span class="font-extrabold text-orange-800 mx-1">ریال</span>  </span><span> {{number_format($deposit)}} <span class="font-extrabold text-orange-800 mx-1">ریال</span></span> @else <span class="opacity-0"> - </span> @endif</span>
                                <span class="text-orange-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($deposit) && !empty($deposit)) <span>{{(new Number2Word)->numberToWords($deposit/10)}} <span class="font-extrabold text-orange-800 mx-1">تومان</span> </span><span> {{number_format($deposit/10)}}<span class="font-extrabold text-orange-800 mx-1">تومان</span></span> @else <span class="opacity-0"> - </span> @endif</span>
                            </div>
                        </div>
                        <br>
                        <x-persian-datepicker
                            wirePropertyName="deposit_return_date"
                            label="..."
                            showFormat="jYYYY/jMM/jDD"
                            returnFormat="X"
                            :required="true"
                            :setNullInput="false"
                        >
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-right">تاریخ پرداخت باقیمانده مبلغ قرض الحسنه (رهن)<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>

                        </x-persian-datepicker>
                        <br>
                        <br>

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="penalty_for_non_payment" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم پرداخت/وصول قرض الحسنه (رهن) (ریال) :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="penalty_for_non_payment" id="penalty_for_non_payment" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('penalty_for_non_payment'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('penalty_for_non_payment') }}</span>
                                @endif
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_payment) && !empty($penalty_for_non_payment)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_payment)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($penalty_for_non_payment)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_payment) && !empty($penalty_for_non_payment)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_payment/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($penalty_for_non_payment/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="penalty_for_non_return" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت استنکاف موجر در استرداد رهن به طور روزانه (ریال) :<span class="text-red-600 text-xl relative top-1.5 leading-none">*</span></label>
                                <input autocomplete="off" type="number" min="0" wire:model="penalty_for_non_return" id="penalty_for_non_return" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('penalty_for_non_return'))
                                    <span class="text-red-500 text-xs">{{ $errors->first('penalty_for_non_return') }}</span>
                                @endif
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_return) && !empty($penalty_for_non_return)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_return)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($penalty_for_non_return)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_return) && !empty($penalty_for_non_return)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_return/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($penalty_for_non_return/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
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
                    <button type="submit" class="mt-2 w-full block text-green-400 bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-900 dark:focus:ring-gray-800 font-bold" type="button">
                        ذخیره مدت اجاره و تایید نهایی
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>
