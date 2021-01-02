<template>
  <b-menu>
    <b-menu-list label="Menu">
      <b-menu-item icon="tablet-dashboard" label="Dashboard" tag="router-link" :to="{ path: '/admin' }"></b-menu-item>
      <b-menu-item icon="home" label="Categories" tag="router-link" :to="{ path: '/admin/categories' }"></b-menu-item>
      <b-menu-item icon="information-outline" label="Products" tag="router-link" :to="{ path: '/admin/products' }"></b-menu-item>
      <b-menu-item icon="account" label="Orders" tag="router-link" :to="{ path: '/admin/orders' }"></b-menu-item>
    </b-menu-list>
    <b-menu-list>
      <b-menu-item icon="link" label="Account" tag="router-link" :to="{ path: '/admin/accounts' }"></b-menu-item>
    </b-menu-list>
    <b-menu-list label="Actions">
      <b-menu-item icon="logout" label="Logout"></b-menu-item>
    </b-menu-list>
  </b-menu>
</template>

<script>
export default {
  data() {
    return {
      isActive: true
    }
  }
}
</script>
