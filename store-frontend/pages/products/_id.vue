<template>
<div class="container">
  <div class="columns my-5">
    <div class="column is-9">
      <div class="columns">
        <div class="column is-5">
          <b-carousel :indicator-inside="false">
              <b-carousel-item v-for="(item, i) in 6" :key="i">
                  <span class="image">
                    <img :src="getImgUrl(i)">
                  </span>
              </b-carousel-item>
              <template slot="indicators" slot-scope="props">
                  <span class="al image">
                      <img :src="getImgUrl(props.i)" :title="props.i">
                  </span>
              </template>
          </b-carousel>
        </div>
        <div class="column is-7">
          <h4 class="title is-4">
            Durable Keyboard Mouse Combos K680 Rechargeable Wireless Keyboard Mouse Set Backlit Multimedia Mouse
          </h4>
          <div class="is-flex is-justify-content-space-between">
            <span><b-rate :value="4.5" :size="'is-small'" show-score disabled/></span>
            <span><b-icon icon="heart" size="is-small"></b-icon></span>
          </div>
          <h6 class="subtitle is-6">
            <span>Brand: Vktech</span> | <span>Mice & Keyboard Combos</span>
          </h6>
          <h3 class="title is-3 my-5">₱2,252.00</h3>
          <b-numberinput size="is-small" controls-position="compact"></b-numberinput>
          <section class="my-4">
            <b-button type="is-success" icon-right="cart">Add to Cart</b-button>
          </section>
        </div>
      </div>
    </div>
    <div class="column is-3 has-background-white-bis">
      <h6 class="title is-6">Delivery Options</h6>
      <content>
        <p>- Ships from Overseas</p>
        <p>- Standard Delivery 6 - 16 day(s)</p>
        <p>- Cash on Delivery</p>
      </content>
      <h6 class="title is-6 mt-5">Return & Warranty</h6>
      <content>
        <p>- 15 Days Return</p>
        <p>- Warranty not available</p>
      </content>
    </div>
  </div>
</div>
</template>

<script>
export default {
  methods: {
    getImgUrl(value) {
        return `https://picsum.photos/id/43${value}/1230/500`
    }
  }
}
</script>
