<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <!-- navigation -->
  <nav class="bg-black border-gray-200 dark:bg-gray-900 h-24">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/src/assets/logo.png" class="h-8" alt="Piccolino Logo" />
        <span class="self-center text-3xl whitespace-nowrap dark:text-white text-white ui-serif">Picccolino</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-black md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-black dark:bg-white-800 md:dark:bg-white-900">
          <li>
            <a href="/"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-400 dark:hover:text-white md:dark:hover:bg-transparent"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="/menu"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-400 dark:hover:text-white md:dark:hover:bg-transparent">Menu</a>
          </li>
          <li>
            <a href="/team"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-400 dark:hover:text-white md:dark:hover:bg-transparent">Team</a>
          </li>
          <li>
            <a href="/about"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-400 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="h-96">

  </div>

  <RouterView />

  <!-- footer -->
  <footer class="bg-white shadow-inner dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="/src/assets/logo.png" class="h-8" alt="Piccolino Logo" />
          <span class="self-center text-3xl whitespace-nowrap dark:text-black text-black ui-serif">Picccolino</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium black sm:mb-0 dark:text-gray-400">
          <li>
            <a href="#" class="text-black hover:text-orange-400 me-4 md:me-6">About</a>
          </li>
          <li>
            <a href="#" class="text-black hover:text-orange-400 me-4 md:me-6">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="text-black hover:text-orange-400 me-4 md:me-6">Licence</a>
          </li>
          <li>
            <a href="#" class="text-black hover:text-orange-400 me-4 md:me-6">Contact</a>
          </li>
        </ul>
      </div>
      <hr class="my-6 border-black-200 sm:mx-auto dark:border-black-700 lg:my-8" />
      <span class="block text-sm text-black sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
          class="text-black hover:underline">Piccolino</a>. All Rights Reserved.</span>
    </div>
  </footer>
</template>