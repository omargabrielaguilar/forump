<template>
    <AppLayout>
        <Container>
            <ul class="divide-y">
                <li v-for="post in posts.data" :key="post.id" class="px-2 py-4">
                    <span class="text-lg font-bold">
                        {{ post.title }}
                    </span>
                </li>
            </ul>


            <Pagination :meta="posts.meta" />
        </Container>
    </AppLayout>
</template>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue"
import Container from "@/Components/Container.vue"
import Pagination from "@/Components/Pagination.vue";

defineProps(['posts']);
</script>