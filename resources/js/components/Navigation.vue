<template>
    <div class="nav">
        <div class="nav__wrap">
            <div>
                <p class="nav__logo">SLOBODNO VRIJEME</p>
            </div>

            <div v-show="!mobile" class="nav__links">
                <a href="/">Home</a>
                <a :href="this.url ? this.url : '#'">Places</a>
                <p>Search</p>
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
