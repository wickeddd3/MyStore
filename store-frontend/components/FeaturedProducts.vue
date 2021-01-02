<template>
<div class="columns is-flex is-flex-wrap-wrap">
  <template v-for="(item, index) in items">
    <div class="column is-2" :key="index">
      <product-card :product="item"></product-card>
    </div>
  </template>
</div>
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
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
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
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          },
          {
              title: 'Avision 43 Inch 4K Smart Digital LED TV w/ Built-in Netflix, Youtube & Screencast 43UL80C',
              price: '₱13,499.00',
              image: 'https://buefy.org/static/img/placeholder-1280x960.png',
              rating: 1.5
          },
      ]
    }
  },
}
</script>
