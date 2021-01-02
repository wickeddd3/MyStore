<template>
<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Watchlist
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
    <template v-for="(n, index) in 4">
      <media-object :key="index"></media-object>
    </template>
  </div>
</div>
</template>

<script>
import MediaObject from '@/components/MediaObject'

export default {
  layout: 'profile',

  components: {
    MediaObject
  }
}
</script>
