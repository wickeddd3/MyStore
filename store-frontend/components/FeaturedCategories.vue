<template>
<div class="columns is-flex is-flex-wrap-wrap">
  <template v-for="(category, index) in categories">
    <div class="column is-2" :key="index">
      <div class="card">
        <div class="card-content">
          <figure class="image is-5by4">
              <img src="https://buefy.org/static/img/placeholder-1280x960.png">
          </figure>
        </div>
        <footer class="card-footer">
          <p class="card-footer-item">
            {{ category.name }}
          </p>
        </footer>
      </div>
    </div>
  </template>
</div>
</template>

<script>
export default {
  data() {
    return {
      categories:[
        {
          name: 'Mens Fashion',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Womens Fashion',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Health',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Appliances',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Computers',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Mens Fashion',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Mens Fashion',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Womens Fashion',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Health',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Appliances',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Computers',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
        {
          name: 'Mens Fashion',
          image: 'https://buefy.org/static/img/placeholder-1280x960.png'
        },
      ]
    }
  }
}
</script>
