<template>
<div class="card">
  <div class="card-image">
      <figure class="image is-5by4">
          <img :src="product.image">
      </figure>
      <b-tag type="is-danger" v-if="sale" rounded style="position: absolute; top: 0;"><b>Sale</b></b-tag>
  </div>
  <div class="card-content">
      <p class="title is-6">
        <NuxtLink to="/products/1">{{ product.title }}</NuxtLink>
      </p>
      <p class="subtitle is-6">{{ product.price }}</p>
      <div class="field is-grouped" >
          <p class="control" v-if="product.rating">
              <b-rate :value="product.rating" show-score disabled/>
          </p>
      </div>
  </div>
</div>
</template>

<script>
export default {
  props:['product', 'sale']
}
</script>
