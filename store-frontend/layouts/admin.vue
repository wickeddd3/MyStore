<template>
<div>
  <navbar></navbar>
  <div class="container is-widescreen">
    <div class="columns my-1">
      <div class="column is-3">
        <admin-sidenav></admin-sidenav>
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
import AdminSidenav from '@/components/AdminSidenav'
import Footer from '@/components/Footer'

export default {
  components: {
    Navbar,
    AdminSidenav,
    Footer
  },
}
</script>
