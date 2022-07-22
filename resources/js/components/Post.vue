<template>
    <a :href="this.url" class="post">
        <img src="/images/post-idea.jpeg">
        <div>
            <span>15.5.2022</span>
            <p>{{ this.title }}</p>
        </div>
    </a>
</template>

<script>
export default {
    name: "Post",
    props: {
        title: null,
        url: null,
    },
}
</script>

<style scoped>

</style>
