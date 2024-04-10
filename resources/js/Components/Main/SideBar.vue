<template>
    <nav class="bg-white sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="mb-4 text-center sidenav-header">
                <Link class="navbar-brand text-primary" :href="route('dashboard')">
                <img src="/img/logo/iMake-Indigo.png" alt="iMake" class="home-logo mt-1" height="150">
                </Link>
            </div>
            <br>
            <div class="mt-5 navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse sidebar_menu" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="mb-3 navbar-nav">
                        <li class="nav-item">
                            <!-- <Link :class="{ 'active': route().current() == 'dashboard' }"
                                class="nav-link active-preloader" :href="route('dashboard')">
                            <font-awesome-icon icon="fa-solid fa-desktop" />
                            <span class="ml-2 nav-link-text font-weight-400">Dashboard</span>
                            </Link> -->
                        </li>

                        <li class="nav-item" v-if="can('read_materials')">
                            <a class="nav-link" href="#materialMenu" data-toggle="collapse" aria-expanded="true">
                                <font-awesome-icon icon="fa-solid fa-folder-open" /><span class="ml-2">Material</span>
                            </a>
                            <ul :class="{ 'collapse': $page.url.startsWith('/materialCategory') || $page.url.startsWith('/units') || $page.url.startsWith('/warehouses') || $page.url.startsWith('/currency') || $page.url.startsWith('/country') || $page.url.startsWith('/measurement') || $page.url.startsWith('/material-category') || $page.url.startsWith('/vehicle-type') || $page.url.startsWith('/vendors') || route().current() == 'dashboard' || $page.url.startsWith('/unit-conversion') || $page.url.startsWith('/tax') || $page.url.startsWith('/users') || $page.url.startsWith('/grn') }"
                                class=" list-unstyled" id="materialMenu">
                                <li class="nav-item">
                                    <!-- <Link :class="{ 'active': $page.url.startsWith('/materials') }"
                                        class="nav-link active-preloader" :href="route('material.index')">
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" />
                                    <span class="ml-2 hide-menu">All</span>
                                    </Link> -->
                                </li>
                                <li v-for="vehicleType in vehicleTypes" :key="vehicleType.id" class="nav-item">
                                    <!-- <Link :class="{ 'active': $page.url.startsWith('/materials') }"
                                        class="nav-link active-preloader"
                                        :href="route('material.slug.index', vehicleType.slug)">
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" />
                                    <span class="ml-2 hide-menu">{{ vehicleType.name }}</span>
                                    </Link> -->
                                </li>
                                <!-- <li v-for="vehicleType in vehicleTypes" :key="vehicleType.id" class="nav-item">
                                    <Link :class="{ 'active': $page.url.startsWith('/materials') }"
                                        class="nav-link active-preloader"
                                        :href="route('material.slug.index', vehicleType.slug)">
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" />
                                    <span class="ml-2 hide-menu">{{ vehicleType.name }}</span>
                                    </Link>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-item" v-if="can('read_vendor')"> -->
                            <!-- <Link :class="{ 'active': $page.url.startsWith('/vendors') }" class="nav-link active-preloader"
                                :href="route('vendors.index')">
                            <font-awesome-icon icon="fa-solid fa-building-user" />
                            <span class="ml-2 nav-link-text font-weight-400">Vendor</span>
                            </Link> -->
                        <!-- </li> -->
                        <!-- <li class="nav-item" v-if="can('read_grns')"> -->
                            <!-- <Link :class="{ 'active': $page.url.startsWith('/grn') }" class="nav-link active-preloader"
                                :href="route('grn.index')">
                            <font-awesome-icon icon="fa-solid fa-people-carry-box" />
                            <span class="ml-2 nav-link-text font-weight-400">GRN</span>
                            </Link> -->
                            <!-- </li> -->
                         <li class="nav-item">
                            <!-- <Link :class="{ 'active': $page.url.startsWith('/grn') }" class="nav-link active-preloader"
                                :href="route('customers.index')">
                              <font-awesome-icon icon="fa-solid fa-users" />
                            <span class="ml-2 nav-link-text font-weight-400">customer </span>
                            </Link> -->
                           </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settingsMenu" data-toggle="collapse" aria-expanded="true">
                                <font-awesome-icon icon="fa-solid fa-gear" /><span class="ml-2">Settings</span>
                            </a>
                            <!-- <ul :class="{ 'collapse': $page.url.startsWith('/materialRequestNote') || $page.url.startsWith('/report') ||  $page.url.startsWith('/vendors') || $page.url.startsWith('/gi') || $page.url.startsWith('/invoice') ||$page.url.startsWith('/custom-order')|| $page.url.startsWith('/gt') || $page.url.startsWith('/bom') || $page.url.startsWith('/materials') || $page.url.startsWith('/mr') || $page.url.startsWith('/grn') || $page.url.startsWith('/pr') || route().current() == 'dashboard' || $page.url.startsWith('/shipment-orders')||$page.url.startsWith('/customer') || $page.url.startsWith('/crm') || $page.url.startsWith('/barcode-print') || $page.url.startsWith('/po') || $page.url.startsWith('/audit') || $page.url.startsWith('/stock') }"
                                class=" list-unstyled" id="settingsMenu">
                                <li class="nav-item" v-if="can('read_types')">
                                    <Link :class="{ 'active': $page.url.startsWith('/vehicle-type') }"
                                        class="nav-link active-preloader" :href="route('vehicleType.index')">
                                    <font-awesome-icon icon="fa-solid fa-layer-group " class="ml-4" /><span
                                        class="ml-2 hide-menu">Material Types</span>
                                    </Link>
                                </li>
                                <li class="nav-item" v-if="can('read_categories')">
                                    <Link :class="{ 'active': $page.url.startsWith('/material-category') }"
                                        class="nav-link active-preloader" :href="route('materialCategory.index')">
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" /><span
                                        class="ml-2 hide-menu">Material Categories</span>
                                    </Link>
                                </li>
                                <li class="nav-item" v-if="can('read_unit_measurements')">
                                    <Link :class="{ 'active': $page.url.startsWith('/units') }"
                                        class="nav-link active-preloader" :href="route('units.index')">
                                    <font-awesome-icon icon="fa-solid fa-infinity" class="ml-4" /><span
                                        class="ml-2 hide-menu">Unit Of Measurements</span>
                                    </Link>
                                </li>
                                <li class="nav-item" v-if="can('read_countries')">
                                    <Link :class="{ 'active': $page.url.startsWith('/country') }"
                                        class="nav-link active-preloader" :href="route('country.index')">
                                    <font-awesome-icon icon="fa-solid fa-globe" class="ml-4" /><span class="ml-2 hide-menu">
                                        Country</span>
                                    </Link>
                                </li>
                                <li class="nav-item" v-if="can('read_currencies')">
                                    <Link :class="{ 'active': $page.url.startsWith('/currency') }"
                                        class="nav-link active-preloader" :href="route('currency.index')">
                                    <font-awesome-icon icon="fa-solid fa-money-bill-transfer" class="ml-4" /><span
                                        class="ml-2 hide-menu">
                                        Currency</span>
                                    </Link>
                                </li>
                                <li class="nav-item" v-if="can('read_unit_conversions')">
                                    <Link :class="{ 'active': $page.url.startsWith('/unit-conversion') }"
                                        class="nav-link active-preloader" :href="route('conversion.index')">
                                    <font-awesome-icon icon="fa-solid fa-dice" class="ml-4" /><span class="ml-2 hide-menu">
                                        Unit Conversion</span>
                                    </Link>
                                </li>
                                <li class="nav-item" v-if="can('read_tax')">
                                    <Link :class="{ 'active': $page.url.startsWith('/tax') }"
                                        class="nav-link active-preloader" :href="route('tax.index')">
                                    <font-awesome-icon icon="fa-solid fa-coins" class="ml-4" /><span class="ml-2 hide-menu">
                                        Tax</span>
                                    </Link>
                                </li>
                                <li class="nav-item" v-if="can('read_warehouses')">
                                    <Link :class="{ 'active': $page.url.startsWith('/warehouses') }"
                                        class="nav-link active-preloader" :href="route('users.index')">
                                    <font-awesome-icon icon="fa-solid fa-warehouse" class="ml-4" /><span
                                        class="ml-2 hide-menu">
                                        User Management</span>
                                    </Link>
                                </li>


                            </ul> -->
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>


<script>
import { Link } from '@inertiajs/vue3'
import isArray from 'lodash/isArray';

import { library } from '@fortawesome/fontawesome-svg-core'

import { faBook,faNoteSticky,faArrowUpRightFromSquare, faDice ,faGift, faMoneyBillTransfer, faFileInvoice, faBuildingUser, faBoxesStacked, faFilePen,faCartShopping, faUsers, faArrowRotateRight, faWarehouse, faCoins, faGlobe, faGear, faDesktop, faLayerGroup, faFolder, faInfinity, faFolderOpen, faTruckField, faChartSimple, faListCheck, faPenToSquare, faRightFromBracket, faPercent,faPeopleCarryBox } from '@fortawesome/free-solid-svg-icons'

export default {
    components: {
        Link,
        library,
    },
    data() {
        return {
            vehicleTypes: [],
        }
    },
    beforeMount() {
        library.add(faCartShopping)
        library.add(faDesktop)
        library.add(faCartShopping)
        library.add(faNoteSticky)
        library.add(faArrowUpRightFromSquare)
        library.add(faMoneyBillTransfer)
        library.add(faFileInvoice)
        library.add(faChartSimple)
        library.add(faLayerGroup)
        library.add(faBuildingUser)
        library.add(faDice)
        library.add(faFolder)
        library.add(faFilePen)
        library.add(faInfinity)
        library.add(faPenToSquare)
        library.add(faFolderOpen)
        library.add(faPercent)
        library.add(faGear)
        library.add(faGift)
        library.add(faGlobe)
        library.add(faCoins)
        library.add(faUsers)
        library.add(faBook)
        library.add(faWarehouse)
        library.add(faArrowRotateRight)
        library.add(faTruckField)
        library.add(faListCheck)
        library.add(faBoxesStacked)
        library.add(faRightFromBracket)
        library.add(faCoins)
        library.add(faPeopleCarryBox)

        this.getvehicleTypes();

        if(!window.Laravel){
            window.location.reload();
        }
    },
    methods: {
        isActive(route, path) {
            if (isArray(path)) {
                return path.includes(route);
            }
        },
        async getvehicleTypes() {
            const vehicleTypes = (await axios.get(route("vehicleType.all"))).data;
            this.vehicleTypes = vehicleTypes.data;
        },
    },
}

</script>

<style lang="css">
.navbar-vertical .navbar-brand-img,
.navbar-vertical .navbar-brand>img {
    max-width: 100%;
    max-height: none;
    margin-top: -60px;
    margin-left: -10px;
}

.navbar-vertical.navbar-expand-xs .navbar-collapse {
    margin-top: -50px;
}
</style>
