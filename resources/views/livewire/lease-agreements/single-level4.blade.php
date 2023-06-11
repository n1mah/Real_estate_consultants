<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5 text-purple-700">مشاهده اجاره نامه</h1>
        <div class="px-4 py-2 mx-auto flex-col flex items-center justify-center">
            <h2 class="font-medium p-3 text-gray-400"> <span class="font-bold">مشاهده ماده 4</span> <br> (اجاره بها و نحوه پرداخت)</h2>
            <hr class="p-2 w-full">
            <div class="w-full flex flex-col items-center">
                <form class="py-2 w-full flex flex-col items-center">
                    <div class="w-full-80 mx-auto items-center mb-4">
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="lease" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">میزان اجاره بها جمعا (ریال) :</label>
                                <input readonly type="number" value="{{$lease}}" id="lease" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($lease) && !empty($lease)) <span>{{(new Number2Word)->numberToWords($lease)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($lease)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="lease" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($lease) && !empty($lease)) <span>{{(new Number2Word)->numberToWords($lease/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($lease/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="monthly_rental_amount" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">از قرار ماهیانه (ریال) :</label>
                                <input readonly type="number" value="{{$monthly_rental_amount}}" id="monthly_rental_amount" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="monthly_rental_amount" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($monthly_rental_amount) && !empty($monthly_rental_amount)) <span>{{(new Number2Word)->numberToWords($monthly_rental_amount)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($monthly_rental_amount)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="monthly_rental_amount" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($monthly_rental_amount) && !empty($monthly_rental_amount)) <span>{{(new Number2Word)->numberToWords($monthly_rental_amount/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($monthly_rental_amount/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                        <div class="">
                            <div class="w-full flex flex-col mb-4">
                                <label for="type_of_lease" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">در : </label>
                                <select disabled id="type_of_lease" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>{{$at_first_string}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="mortgage" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">مبلغ قرض الحسنه توافقی (رهن) (ریال) :</label>
                                <input readonly type="number" value="{{$mortgage}}" id="mortgage" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="mortgage" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($mortgage) && !empty($mortgage)) <span>{{(new Number2Word)->numberToWords($mortgage)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($mortgage)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="mortgage" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($mortgage) && !empty($mortgage)) <span>{{(new Number2Word)->numberToWords($mortgage/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($mortgage/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                        <br>
                        <hr>
                        <br>

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="rent" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بیعانه مبلغ قرض الحسنه توافقی (رهن) (ریال) :</label>
                                <input readonly type="number" value="{{$rent}}" id="rent" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="rent" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium">@if(is_numeric($rent) && !empty($rent)) <span>{{(new Number2Word)->numberToWords($rent)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($rent)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="rent" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium">@if(is_numeric($rent) && !empty($rent)) <span>{{(new Number2Word)->numberToWords($rent/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($rent/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>


                        <div>
                            <div class="w-full flex flex-col mb-4">
                                <label for="title_deeds" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">نوع پرداخت</label>
                                <select disabled id="title_deeds" value="" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>{{$payment_type}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="@if($payment_type=='نقد') hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="cheque" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">چک : </label>
                                <input readonly id="cheque" value="{{$cheque}}" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="bank" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">بانک</label>
                                <input readonly value="{{$bank}}" id="bank" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="@if($payment_type=='نقد')hidden @endif">
                            <div class="w-full flex flex-col mb-4">
                                <label for="branch" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">شعبه   </label>
                                <input readonly value="{{$branch}}" id="branch" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <label for="deposit_return_date" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">اجاره از تاریخ</label>
                        <div class="relative pdp-input-area">
                            <div class="w-full relative flex items-center mt-1">
                                <input id="deposit_return_date" readonly value="{{\Morilog\Jalali\Jalalian::forge($deposit_return_date)->format('Y/m/d')}}" class="bg-gray-200 outline-none border border-gray-300 auto-go-to-next pdp-input block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                <div class="absolute left-0 pl-3" @click="showDatepicker = !showDatepicker">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="penalty_for_non_payment" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت عدم پرداخت/وصول قرض الحسنه (رهن) (ریال) :</label>
                                <input readonly type="number" value="{{$penalty_for_non_payment}}" id="penalty_for_non_payment" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_payment) && !empty($penalty_for_non_payment)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_payment)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($penalty_for_non_payment)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_payment) && !empty($penalty_for_non_payment)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_payment/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($penalty_for_non_payment/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>
                        <div>
                            <div class="w-full flex flex-col mb-4 p-2">
                                <label for="penalty_for_non_return" class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">خسارت استنکاف موجر در استرداد رهن به طور روزانه (ریال) :</label>
                                <input readonly type="number" value="{{$penalty_for_non_return}}" id="penalty_for_non_return" class="bg-gray-200 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_return) && !empty($penalty_for_non_return)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_return)}} <span class="font-extrabold text-gray-500">ریال</span> </span><span> {{number_format($penalty_for_non_return)}}  <span class="font-extrabold text-gray-500">ریال</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                                <label for="house_area" class="text-purple-500 flex flex-wrap flex-row justify-between  text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">@if(is_numeric($penalty_for_non_return) && !empty($penalty_for_non_return)) <span>{{(new Number2Word)->numberToWords($penalty_for_non_return/10)}} <span class="font-extrabold text-gray-500">تومان</span> </span><span> {{number_format($penalty_for_non_return/10)}}  <span class="font-extrabold text-gray-500">تومان</span> </span> @else <span class="opacity-0"> - </span> @endif</label>
                            </div>
                        </div>

                        <a href="{{route('rents')}}" class="p-4 bg-purple-600 text-white rounded-[10px]"> بازگشت به صفحه اجاره نامه ها</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
