<template>
    <div class="nav">
        <div class="nav__wrap">
            <div>
                <p class="nav__logo">IVONIN BLOG</p>
            </div>

            <div v-show="!mobile" class="nav__links">
                <p>Home</p>
                <p>Postovi</p>
                <p>Search</p>
            </div>

            <div class="icon">
                <i @click="toggleMobileNav" v-show="mobile" class="fa-solid fa-bars" :class="{ 'icon__active' : mobileNav }"></i>
            </div>
            
            <div v-show="mobileNav" class="nav__mobiledrop">
                <p>Home</p>
                <p>Postovi</p>
                <p>Search</p>
            </div>
            
        </div>
    </div>
</template>

<script>
export default {
    name: "navigation",
    data() {
        return {
           mobile: null,
           mobileNav: null,
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
