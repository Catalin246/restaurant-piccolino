<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>

  <ul class="flex">
    <li class="mr-6">
      <a class="text-red-500 hover:text-blue-800" href="/">Active</a>
    </li>
    <li class="mr-6">
      <a class="text-blue-500 hover:text-blue-800" href="/about">Link</a>
    </li>
  </ul>
  
  <RouterView />
</template>