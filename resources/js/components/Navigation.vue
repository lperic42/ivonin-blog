<template>
    <div class="nav">
        <div class="nav__wrap">
            <div>
                <a href="/" class="nav__logo">SLOBODNO VRIJEME</a>
            </div>

            <div v-show="!mobile" class="nav__links">
                <a href="/" :class="this.state == true ? 'hidden' : 'active'">Home</a>
                <a :href="this.url ? this.url : '#'" :class="this.state == true ? 'hidden' : 'active'">Places</a>
<!--                <p>Search</p>-->

                <form class="d-flex" :action="this.searchResultsPage" style="margin-left: 10px;"  @click="setNavState(true)"  @focusout="setNavState(false)">
                    <div class="search-box">
                        <button class="btn-search" ><i class="fas fa-search"></i></button>
                        <input  v-model="searchTerm" name="query" type="text" class="input-search" placeholder="Type to Search...">
                    </div>
                </form>
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
        searchResultsPage: null,
    },
    data() {
        return {
           mobile: null,
           mobileNav: true,
           windowWidth: null,
           searchTerm: null,
           state: false,
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

        setNavState(newState) {
            this.state = newState;
            console.log(this.state);
        }
    },
};
</script>
