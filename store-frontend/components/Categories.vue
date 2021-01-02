<template>
  <b-menu>
    <b-menu-list label="Categories">
      <b-menu-item label="Electronic Devices" tag="router-link" :to="{ path: '/products' }"></b-menu-item>
      <b-menu-item label="TV and Home Appliances" tag="router-link" :to="{ path: '/products' }"></b-menu-item>
      <b-menu-item label="Health and Beauty" tag="router-link" :to="{ path: '/products' }"></b-menu-item>
      <b-menu-item label="Fashion and Accessories">
        <b-menu-item label="Mens Fashion" tag="router-link" :to="{ path: '/products' }"></b-menu-item>
        <b-menu-item label="Womens Fashion" tag="router-link" :to="{ path: '/products' }"></b-menu-item>
      </b-menu-item>
      <b-menu-item label="Groceries and Pets" tag="router-link" :to="{ path: '/products' }"></b-menu-item>
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
