<script setup>
import {ref} from 'vue'

const props = defineProps({dictTypeList: Object})
const tableData = ref(props.dictTypeList);

</script>

<template>
    <div>
        <el-table :data="tableData" stripe style="width: 100%">
            <el-table-column prop="dict_id" label="字典类型ID" width="180" align="center"/>
            <el-table-column prop="dict_name" label="字典类型名称" width="280" show-overflow-tooltip align="center"/>
            <el-table-column prop="dict_type" label="字典类型别名" width="280" show-overflow-tooltip align="center"/>
            <el-table-column prop="status" label="状态" width="180" align="center">
                <template #default="{row}">
                    <el-switch v-model="row.status" active-value="1" inactive-value="0"/>
                </template>
            </el-table-column>
            <el-table-column prop="remark" label="备注" show-overflow-tooltip/>
        </el-table>

    </div>
</template>

<style scoped lang="scss">

</style>
