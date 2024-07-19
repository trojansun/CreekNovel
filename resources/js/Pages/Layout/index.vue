<template>
    <div class="common-layout">
        <el-container>
            <el-aside width="180px">
                <Sidebar></Sidebar>
            </el-aside>
            <el-container>
                <el-header></el-header>
                <el-main>
                    <slot/>
                </el-main>
            </el-container>
        </el-container>
    </div>
</template>
<script lang="ts" setup>
import Sidebar from './Sidebar.vue'
</script>
<style lang="scss">

</style>
