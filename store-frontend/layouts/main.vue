<template>
<div>
  <navbar></navbar>
  <div class="container is-widescreen">
    <div class="columns my-1">
      <div class="column is-3">
          <categories></categories>
      </div>
      <div class="column is-9">
          <b-carousel
                  v-model="carousel"
                  :animated="animated"
                  :has-drag="drag"
                  :autoplay="autoPlay"
                  :pause-hover="pauseHover"
                  :pause-info="pauseInfo"
                  :pause-info-type="pauseType"
                  :interval="interval"
                  :repeat="repeat">
                  <b-carousel-item v-for="(carousel, i) in carousels" :key="i">
                      <section :class="`hero is-medium is-${carousel.color} is-bold`">
                          <div class="hero-body has-text-centered">
                              <h1 class="title">{{carousel.title}}</h1>
                          </div>
                      </section>
                  </b-carousel-item>
          </b-carousel>
      </div>
    </div>
    <div class="container">
        <nuxt />
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

  data() {
    return {
        carousel: 0,
        animated: 'fade',
        drag: false,
        autoPlay: true,
        pauseHover: true,
        pauseInfo: false,
        repeat: true,
        pauseType: 'is-primary',
        interval: 3000,
        carousels: [
            { title: 'Slide 1', color: 'dark' },
            { title: 'Slide 2', color: 'primary' },
            { title: 'Slide 3', color: 'info' },
            { title: 'Slide 4', color: 'success' },
            { title: 'Slide 5', color: 'warning' },
            { title: 'Slide 6', color: 'danger' }
        ]
    }
  },
}
</script>
