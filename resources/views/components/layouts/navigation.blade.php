<div class="w-full navbar bg-base-300">
    <div class="flex-none lg:hidden">
        <label for="my-drawer-3" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
    </div>
    <div class="w-full ">
        <div class="flex-1  hidden lg:block">
            <ul class="menu menu-horizontal">
                <!-- Navbar menu content here -->
                <li><a href="{{route("dashboard")}}">داشبورد</a></li>
                <li><a href="{{route("people")}}">مشتریان</a></li>
                <li><a href="{{route("sales")}}">مبایعه نامه</a></li>
                <li><a href="{{route("rents")}}">اجاره نامه</a></li>
            </ul>
        </div>
        <a href="{{route("dashboard")}}" class="flex-none px-2 mx-2">نرم افزار مدیریت آژانس املاک</a>

    </div>
</div>
