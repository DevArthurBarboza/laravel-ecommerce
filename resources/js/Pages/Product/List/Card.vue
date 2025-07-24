<template>
  <li class="product-card">
    <div class="product-card-header">
      <span class="product-name">
        {{ product.name }}
      </span>
    </div>

    <div class="product-card-body">
      <div class="product-details">
        <span class="price">
          {{ product.price }}
        </span>
      </div>

      <div class="add-to-cart" v-if="product.active">
        <button class="add-to-cart" @click="addProductToCart(product.product_id)" >
          <span class="material-icons" title="add_shopping_cart"></span>
          Adicionar ao carrinho
        </button>
      </div>
    </div>
  </li>
</template>

<script setup>

import { router } from '@inertiajs/vue3'

defineProps({
  product: Object,
});

defineOptions({
  name: "Product/List/Card",
});

function addProductToCart(product_id) {
  router.post("/api/cart", { product_id: product_id })
    .then((response) => {
      console.log("Produto adicionado ao carrinho:", response);
    })
    .catch((error) => {
      console.error("Erro ao adicionar produto ao carrinho:", error);
    });
}
</script>