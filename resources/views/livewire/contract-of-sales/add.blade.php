<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" style="min-height: 100vh">
    <div class="text-center text-primary">
        <h1 class="font-bold text-3xl p-5">افزودن مبایعه</h1>
        <hr>
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
        <select  wire:model="selected" wire:change="$emit('selectedItem')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>select</option>
            @foreach($people as $person)
            <option value="{{$person->id}}">{{$person->firstname}}</option>
            @endforeach
        </select>
    </div>
    @foreach($people_selected as $person_selected)
    <button type="button" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Messages
        <span class="inline-flex items-center justify-center w-4 h-4 ml-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
    {{$person_selected}}
  </span>
    </button>
    @endforeach

</section>
