<template>
<div class="columns is-desktop my-5">
  <div class="column is-9">
    <b-table
      :data="data"
      checkable>
        <b-table-column field="image" label="" v-slot="props">
            <img :src="props.row.image" class="image__product">
        </b-table-column>

        <b-table-column field="name" label="" v-slot="props">
            {{ props.row.name }}
        </b-table-column>

        <b-table-column field="price" label="" v-slot="props">
            {{ props.row.price }}
        </b-table-column>

        <b-table-column field="qty" label="" v-slot="props">
            <b-numberinput size="is-small" :value="props.row.qty"></b-numberinput>
        </b-table-column>
    </b-table>
  </div>
  <div class="column is-3">
    <div class="card">
      <div class="card-content">
        <h6 class="title is-6">Total Summary</h6>
        <div class="level">
          <div class="level-left">
            Subtotal (5 items)
          </div>
          <div class="level-right">
            ₱999.00
          </div>
        </div>
        <div class="level">
          <div class="level-left">
            Shipping Fee
          </div>
          <div class="level-right">
            ₱76.00
          </div>
        </div>
        <div class="level">
          <div class="level-left">
            Total
          </div>
          <div class="level-right">
            ₱1,075.00
          </div>
        </div>
      </div>
      <footer class="card-footer">
        <NuxtLink to="/checkout" class="card-footer-item">Checkout</NuxtLink>
      </footer>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data() {
    const data = [
      {
        name: 'Crucial 4GB Single DDR3 DDR3L 1600 SODIMM CL11 1.35V Laptop Memory Ram',
        price: '₱999.00',
        image: 'https://buefy.org/static/img/placeholder-1280x960.png',
        qty: 1
      },
      {
        name: 'Crucial 4GB Single DDR3 DDR3L 1600 SODIMM CL11 1.35V Laptop Memory Ram',
        price: '₱999.00',
        image: 'https://buefy.org/static/img/placeholder-1280x960.png',
        qty: 1
      },
      {
        name: 'Crucial 4GB Single DDR3 DDR3L 1600 SODIMM CL11 1.35V Laptop Memory Ram',
        price: '₱999.00',
        image: 'https://buefy.org/static/img/placeholder-1280x960.png',
        qty: 1
      },
    ]

    return {
      data,
      columns: [
        {
            field: 'image',
            label: '',
        },
        {
            field: 'name',
            label: '',
        },
        {
            field: 'price',
            label: '',
        },
        {
            field: 'qty',
            label: '',
            centered: true
        }
      ]
    }
  }
}
</script>

<style scoped>
.image__product {
  width: 10rem;
  object-fit: cover;
}
</style>
