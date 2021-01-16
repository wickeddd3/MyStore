<b-navbar class="px-3">
    <template #brand>
        <b-navbar-item href="/admin">
            <h4 class="is-size-4 has-text-weight-bold">MyStore</h4>
        </b-navbar-item>
    </template>
    <template #end>
        <b-navbar-item href="#">
            <b-icon
                class="px-4"
                icon="alert-decagram">
            </b-icon>
        </b-navbar-item>
        <b-navbar-item href="#">
            <b-icon
                class="px-4"
                icon="bell">
            </b-icon>
        </b-navbar-item>
        <b-navbar-dropdown icon="account-circle">
            <template #label="props">
                <b-icon
                    class="px-5"
                    icon="account-circle">
                </b-icon>
                Profile
            </template>
            <b-navbar-item href="/admin/notifications">
                Notifications
            </b-navbar-item>
            <b-navbar-item href="/admin/profile">
                Profile
            </b-navbar-item>
            <b-navbar-item href="#">
                Log Out
            </b-navbar-item>
        </b-navbar-dropdown>
    </template>
</b-navbar>
