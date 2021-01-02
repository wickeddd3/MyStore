<template>
<b-carousel-list v-model="test" :data="items" :items-to-show="5">
  <template slot="item" slot-scope="list">
    <product-card :product="list" :sale="true"></product-card>
  </template>
</b-carousel-list>
</template>

<script>
import ProductCard from '@/components/ProductCard'

export default {
  components: {
    ProductCard
  },

  data() {
    return {
      test: 0,
      items: [
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 4.4
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 3.5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 4
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 2.7
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          }
      ]
    }
  },
}
</script>
