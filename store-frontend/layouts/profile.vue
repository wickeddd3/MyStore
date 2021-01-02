<template>
<div>
  <navbar></navbar>
  <div class="container is-widescreen">
    <div class="columns my-1">
      <div class="column is-3">
        <b-menu>
          <b-menu-list label="Account">
            <b-menu-item label="My Profile" tag="router-link" :to="{ path: '/profile/myprofile' }"></b-menu-item>
            <b-menu-item label="Address Book" tag="router-link" :to="{ path: '/profile/addressbook' }"></b-menu-item>
          </b-menu-list>
          <b-menu-list label="Orders">
            <b-menu-item label="Orders" tag="router-link" :to="{ path: '/profile/orders' }"></b-menu-item>
            <b-menu-item label="Returns" tag="router-link" :to="{ path: '/profile/orders/returns' }"></b-menu-item>
            <b-menu-item label="Cancellations" tag="router-link" :to="{ path: '/profile/orders/cancellations' }"></b-menu-item>
            <b-menu-item label="Wishlists" tag="router-link" :to="{ path: '/profile/wishlists' }"></b-menu-item>
            <b-menu-item label="Reviews" tag="router-link" :to="{ path: '/profile/reviews' }"></b-menu-item>
          </b-menu-list>
        </b-menu>
      </div>
      <div class="column is-9">
        <nuxt />
      </div>
    </div>
  </div>
</div>
</template>

<script>
import Navbar from '@/components/Navbar'

export default {
  components: {
    Navbar
  },

  data() {
    return {
      isActive: true
    }
  }
}
</script>
