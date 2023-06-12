<section class="bg-gray-200 dark:bg-gray-900 p-3 sm:p-5 bg-white  min-h-100-vh">
    <div class="w-full-65 px-4 py-2 mx-auto flex-col flex items-center justify-center">
        <h2 class="font-medium p-3 text-gray-400">مشاهده مواد قرارداد مبایعه نامه</h2>
        <hr class="p-2 w-full">
        <p class="text-center text-gray-600 bg-gray-200 p-5 rounded-xl">شماره پرونده <br><br><span class="text-primary-700"> {{$fileNumber}}</span></p>
        <br><hr class="w-full-45 p-2">
        <div class="w-full flex flex-col justify-between items-start flex-wrap p-5">
            @for($j=1;$j<$contractOfSale->level && $j<11;$j++)
                @php $name="sales.level".$j.".single"; @endphp
                <a href="{{route($name,$contractOfSale->id)}}" type="button" class="w-full block px-2 my-2 py-2 text-xs font-medium text-center text-gray-900 bg-primary-200 border border-gray-300 focus:outline-none hover:bg-primary-700 hover:text-white focus:ring-4 focus:ring-gray-200  rounded-lg dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">مشاهده
                    @if($j==10)  توضیحات @else ماده {{$j}} @endif</a>
            @endfor
        </div>
        <br><hr class="w-full-45 p-2"><br>
        <a href="{{route('sales')}}" class="p-4 bg-primary-600 text-white rounded-[10px]"> بازگشت به صفحه مبایعه نامه ها</a>
    </div>
</section>
