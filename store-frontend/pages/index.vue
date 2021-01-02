<template>
<div class="container">
  <div class="container my-4">
    <h4 class="title is-4">Sale Products</h4>
    <sale-products></sale-products>
  </div>
  <div class="container my-4">
    <h4 class="title is-4">Featured Categories</h4>
    <featured-categories></featured-categories>
  </div>
  <div class="container my-4">
    <h4 class="title is-4">Featured Products</h4>
    <featured-products></featured-products>
  </div>
</div>
</template>

<script>
import SaleProducts from '@/components/SaleProducts'
import FeaturedCategories from '@/components/FeaturedCategories'
import FeaturedProducts from '@/components/FeaturedProducts'

export default {
  layout: 'main',

  components: {
    SaleProducts,
    FeaturedCategories,
    FeaturedProducts
  }
}
</script>
