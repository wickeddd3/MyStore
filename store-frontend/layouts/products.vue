<template>
<div>
  <navbar></navbar>
  <div class="container is-widescreen">
    <div class="columns my-1">
      <div class="column is-3">
          <categories></categories>
      </div>
      <div class="column is-9">
          <nuxt />
      </div>
    </div>
  </div>
  <footer></footer>
</div>
</template>

<script>
import Navbar from '@/components/Navbar'
import Categories from '@/components/Categories'
import Footer from '@/components/Footer'

export default {
  components: {
    Navbar,
    Categories,
    Footer
  },
}
</script>
