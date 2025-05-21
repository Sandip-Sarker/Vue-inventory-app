<template>
    <SideLayout>
        <NavLayout>
            <div>
                <h1 class="text-danger mt-5">Hello</h1>
                <Link href="/about">About</Link>
            </div>
        </NavLayout>
    </SideLayout>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import SideLayout from "../Layout/SideLayout.vue"
    import NavLayout from "../Layout/NavLayout.vue"
</script>

<style scoped>
</style>
