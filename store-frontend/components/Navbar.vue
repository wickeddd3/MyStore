<template>
<b-navbar>
    <template slot="brand">
        <b-navbar-item tag="router-link" :to="{ path: '/' }">
            <img
                src="https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png"
                alt="Lightweight UI components for Vue.js based on Bulma"
            >
        </b-navbar-item>
    </template>
    <template slot="start">
        <b-navbar-item tag="router-link" :to="{ path: '/cart' }">
            Cart
        </b-navbar-item>
        <b-navbar-dropdown label="Categories">
            <b-navbar-item tag="router-link" :to="{ path: '/products' }">
                Electronic Devices
            </b-navbar-item>
            <b-navbar-item tag="router-link" :to="{ path: '/products' }">
                TV & Home Appliances
            </b-navbar-item>
            <b-navbar-item tag="router-link" :to="{ path: '/products' }">
                Health & Beauty
            </b-navbar-item>
            <b-navbar-item tag="router-link" :to="{ path: '/products' }">
                Groceries & Pets
            </b-navbar-item>
            <b-navbar-item tag="router-link" :to="{ path: '/products' }">
                Fashion & Accessories
            </b-navbar-item>
        </b-navbar-dropdown>
        <b-navbar-item>
          <b-field>
              <b-input placeholder="Search..."
                  type="search"
                  icon="magnify"
                  icon-clickable
                  rounded>
              </b-input>
          </b-field>
        </b-navbar-item>
    </template>

    <template slot="end">
        <b-navbar-dropdown label="Profile">
            <b-navbar-item tag="router-link" :to="{ path: '/profile' }">
                Profile
            </b-navbar-item>
            <b-navbar-item tag="router-link" :to="{ path: '/profile/orders' }">
                My Orders
            </b-navbar-item>
            <b-navbar-item tag="router-link" :to="{ path: '/profile/wishlists' }">
                My Wishlists
            </b-navbar-item>
            <b-navbar-item>
                Sign Out
            </b-navbar-item>
        </b-navbar-dropdown>
        <b-navbar-item tag="div">
            <div class="buttons">
                <b-navbar-item class="button is-primary" tag="router-link" :to="{ path: '/register' }">
                    <strong>Sign up</strong>
                </b-navbar-item>
                <b-navbar-item class="button is-light" tag="router-link" :to="{ path: '/login' }">
                    Log in
                </b-navbar-item>
            </div>
        </b-navbar-item>
    </template>
</b-navbar>
</template>
