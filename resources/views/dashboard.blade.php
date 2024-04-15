<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('To-Do-List') }}
        </h2>
    </x-slot>

<main class="p-8">

  <div class="bg-white rounded-lg p-8 shadow-lg">

    <div class="grid grid-cols-4 gap-4">

      <div class="bg-blue-900 text-white p-4 rounded-lg">
          <h1 class="text-2xl mb-2 folt-extrabold">To-do Heading</h1>
          <p class="py-4 mb-2 font-bold">To-Do Date and Time</p>
          <p class="py-4 mb-2 font-bold">Description</p>
      </div>

    </div>

  </div>

</main>
</x-app-layout>
