<template>
    <el-row class="tac">
        <el-col :span="24">
            <h5 class="mb-2 text-center">Creek Novel</h5>
            <el-menu
                default-active="2"
                class="el-menu-vertical-demo"
                @open="handleOpen"
                @close="handleClose"
            >
                <el-sub-menu index="1">
                    <template #title>
                        <el-icon>
                            <location/>
                        </el-icon>
                        <span>资源管理</span>
                    </template>
                    <el-sub-menu index="1-1">
                        <template #title>
                            <el-icon>
                                <location/>
                            </el-icon>
                            <span>书籍管理</span>
                        </template>
                        <el-menu-item index="1-1-1">书籍管理</el-menu-item>
                        <el-menu-item index="1-1-2">分类管理</el-menu-item>
                        <el-menu-item index="1-1-3">标签管理</el-menu-item>
                    </el-sub-menu>
                    <!--                    <el-sub-menu index="1-2">-->
                    <!--                        <template #title>漫画管理</template>-->
                    <!--                        <el-menu-item index="1-2-1">item one</el-menu-item>-->
                    <!--                    </el-sub-menu>-->
                    <!--                    <el-sub-menu index="1-3">-->
                    <!--                        <template #title>有声小说</template>-->
                    <!--                        <el-menu-item index="1-3-1">item one</el-menu-item>-->
                    <!--                    </el-sub-menu>-->
                    <!--                    <el-sub-menu index="1-4">-->
                    <!--                        <template #title>图册管理</template>-->
                    <!--                        <el-menu-item index="1-4-1">item one</el-menu-item>-->
                    <!--                    </el-sub-menu>-->
                </el-sub-menu>


                <el-sub-menu index="2">
                    <template #title>
                        <el-icon>
                            <location/>
                        </el-icon>
                        <span>配置管理</span>
                    </template>
                    <el-menu-item index="2-1">全局配置</el-menu-item>
                    <el-menu-item index="2-2">
                        <Link href="/system/dict_type" replace>数据字典</Link>
                    </el-menu-item>
                </el-sub-menu>

            </el-menu>
        </el-col>
    </el-row>
</template>

<script lang="ts" setup>
import {Link} from '@inertiajs/vue3'
import {
    Document,
    Menu as IconMenu,
    Location,
    Setting,
} from '@element-plus/icons-vue'

const handleOpen = (key: string, keyPath: string[]) => {
    console.log(key, keyPath)
}
const handleClose = (key: string, keyPath: string[]) => {
    console.log(key, keyPath)
}
</script>


<style lang="scss">


</style>
