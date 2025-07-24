<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <header>
      <Link href="/">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/contact">Contact</Link>
      <Link href="/api/products"> Catálogo </Link>
    </header>
    <main>
        <slot name="main"/>
    </main>
    <footer>
        Arthur Barboza - {{new Date().getFullYear()}} 
    </footer>
</template>

