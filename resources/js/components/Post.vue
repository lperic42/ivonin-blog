<template>
    <a href="#" class="post">
        <img src="/images/post-idea.jpeg">
        <span>15.5.2022</span>
        <p>{{ this.title ? this.title : 'KLEK' }}</p>
        <div class="horizontal-line"></div>
    </a>
</template>

<script>
export default {
    name: "Post",
    props: {
        title: null,
    },
}
</script>

<style scoped>

</style>
