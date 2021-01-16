<b-menu>
    <b-menu-list label="Menu">
        <b-menu-item label="Dashboard" href="/admin"></b-menu-item>
        <b-menu-item label="On Sale"></b-menu-item>
        <b-menu-item>
            <template #label="props">
                Orders
                <b-icon class="is-pulled-right" :icon="props.expanded ? 'chevron-down' : 'chevron-up'"></b-icon>
            </template>
            <b-menu-item label="New Orders" href="/admin/orders"></b-menu-item>
            <b-menu-item label="On Queue"></b-menu-item>
            <b-menu-item label="On Shipped"></b-menu-item>
            <b-menu-item label="Received"></b-menu-item>
        </b-menu-item>
    </b-menu-list>
    <b-menu-list label="General">
        <b-menu-item label="Categories" href="/admin/categories"></b-menu-item>
        <b-menu-item label="Brands" href="/admin/brands"></b-menu-item>
        <b-menu-item>
            <template #label="props">
                Products
                <b-icon class="is-pulled-right" :icon="props.expanded ? 'chevron-down' : 'chevron-up'"></b-icon>
            </template>
            <b-menu-item label="All" href="/admin/products"></b-menu-item>
            <b-menu-item label="Best Sellers"></b-menu-item>
            <b-menu-item label="Most Viewed"></b-menu-item>
            <b-menu-item label="Most Wished"></b-menu-item>
            <b-menu-item label="Inactive"></b-menu-item>
        </b-menu-item>
        <b-menu-item>
            <template #label="props">
                Drafts
                <b-icon class="is-pulled-right" :icon="props.expanded ? 'chevron-down' : 'chevron-up'"></b-icon>
            </template>
            <b-menu-item label="Products"></b-menu-item>
            <b-menu-item label="Categories"></b-menu-item>
            <b-menu-item label="Brands"></b-menu-item>
        </b-menu-item>
        <b-menu-item>
            <template #label="props">
                Featured
                <b-icon class="is-pulled-right" :icon="props.expanded ? 'chevron-down' : 'chevron-up'"></b-icon>
            </template>
            <b-menu-item label="Products"></b-menu-item>
            <b-menu-item label="Categories"></b-menu-item>
            <b-menu-item label="Brands"></b-menu-item>
        </b-menu-item>
    </b-menu-list>
    <b-menu-list label="Accounts">
        <b-menu-item>
            <template #label="props">
                Users
                <b-icon class="is-pulled-right" :icon="props.expanded ? 'chevron-down' : 'chevron-up'"></b-icon>
            </template>
            <b-menu-item label="Admins"></b-menu-item>
            <b-menu-item label="Customers" href="/admin/users"></b-menu-item>
            <b-menu-item label="Top Buyers"></b-menu-item>
            <b-menu-item label="Unverified"></b-menu-item>
        </b-menu-item>
    </b-menu-list>
    <b-menu-list label="My Profile">
        <b-menu-item label="Profile" href="/admin/profile"></b-menu-item>
        <b-menu-item label="Log Out"></b-menu-item>
    </b-menu-list>
  </b-menu>
