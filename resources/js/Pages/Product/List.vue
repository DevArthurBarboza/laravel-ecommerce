
<script setup>
import Layout from '../../Layouts/AppLayout.vue'
import Card from './List/Card.vue'
import { Head, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

defineProps({ 
    user: Object,
    products: Array
})

defineOptions({
    name: 'Product/List',
})

</script>

<template>
  <Layout>
    <template #main>
    <ul class="product-list">
        <Card v-for="(product, index) in products" 
            :product="product" 
            :key="index" />
    </ul>
    </template>
  </Layout>
</template>