<template>
    <div class="nav">
        <div class="nav__wrap">
            <div>
                <a href="/" class="nav__logo">SLOBODNO VRIJEME</a>
            </div>

            <div v-show="!mobile" class="nav__links">
                <a href="/">Home</a>
                <a :href="this.url ? this.url : '#'">Places</a>
                <p>Search</p>
                <a
                    class="nav-link dropdown-toggle hidden-arrow btn btn-primary"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                    dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <div class="input-group mt-2 mx-2">
                            <div class="form-outline">
                                <input type="search" id="form1" class="form-control-dropdown" />
                                <label class="form-label" for="form1">Search</label>
                            </div>
                        </div>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

            <div class="icon">
                <i @click="toggleMobileNav" v-show="mobile" class="fa-solid fa-bars" :class="{ 'icon__active' : mobileNav }"></i>
            </div>

            <div :class="mobileNav ? 'nav__mobiledrop--active' : 'nav__mobiledrop'" class="">
                <a href="/">Home</a>
                <a :href="this.url ? this.url : '#'">Places</a>
                <a href="#">Search</a>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "navigation",
    props: {
        url: null,
    },
    data() {
        return {
           mobile: null,
           mobileNav: false,
           windowWidth: null,
        };
    },
    created() {
        window.addEventListener('resize', this.checkScreen);
        this.checkScreen()
    },
    methods: {
        toggleMobileNav() {
            this.mobileNav = !this.mobileNav;
        },

        checkScreen() {
            this.windowWidth = window.innerWidth;
            if (this.windowWidth < 768) {
                this.mobile = true;
                return;
            }
            this.mobile = false;
            this.mobileNav = false;
            return;
        },
    },
};
</script>
