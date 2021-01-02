<template>
<div class="card mt-5">
  <header class="card-header">
    <p class="card-header-title">
      Sign In
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
    <b-field label="Email">
        <b-input
          type="email"
          value="">
        </b-input>
    </b-field>
    <b-field label="Password">
        <b-input
          type="password"
          value="">
        </b-input>
    </b-field>
  </div>
  <footer class="card-footer">
    <a href="#" class="card-footer-item">Cancel</a>
    <a href="#" class="card-footer-item">Login</a>
  </footer>
</div>
</template>

<script>
export default {
  layout: 'auth'
}
</script>
