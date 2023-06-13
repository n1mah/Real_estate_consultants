<!doctype html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود - مدیریت قرارداد آژانس املاک</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-100-vh flex justify-center items-center">
<section class=" w-full">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <h1 class="text-3xl font-extrabold text-white p-5 m-4">سیستم مدیریت قرارداد های آژانس املاک</h1>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
{{--                <h2 class="text-sm text-center my-2 leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">--}}
{{--                    برای ورود نام کاربری و رمز عبور خود را وارد کنید--}}
{{--                </h2>--}}
                <form class="space-y-4 md:space-y-6 p-5" action="{{ route('login_proc') }}" method="POST">
                    @csrf
                    @method('post')
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام کاربری</label>
                        <input type="text" name="username" autocomplete="off" id="username" class="bg-gray-50 focus:bg-gray-100  border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="نام کاربری را وارد کنید ..." required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">رمز عبور</label>
                        <input type="password" name="password" autocomplete="off" id="password" placeholder="••••••••" class="bg-gray-50  focus:bg-gray-100  border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                    </div>
                    @if(Session::has('login'))
                        <p class="text-red-500 text-center text-sm p-2">نام کاربری یا رمز عبور اشتباه است</p>
                    @endif
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">ورود</button>

                </form>
            </div>
        </div>
        <h3 class="text-center mt-4 text-gray-500">تولید و توسعه <br> مهندس نیما حیدری - دکتر فتحی نوید</h3>
    </div>
</section>
@livewire('livewire-ui-modal')
@livewireScripts
</body>
</html>
