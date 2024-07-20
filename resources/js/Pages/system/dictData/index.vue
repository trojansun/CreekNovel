<script setup>
import {ref} from 'vue'

const props = defineProps({dictDataList: Object})
const tableData = ref(props.dictDataList);


const handleRowDBlClick = (row) => {
    window.location = row.dict_data_url
}

</script>

<template>
    <div>
        <el-table :data="tableData" stripe style="width: 100%"
                  @row-dblclick="handleRowDBlClick">
            <el-table-column prop="dict_code" label="字典编码" width="180" align="center"/>
            <el-table-column prop="dict_sort" label="字典排序" width="280" show-overflow-tooltip align="center"/>
            <el-table-column prop="dict_label" label="字典标签" width="280" show-overflow-tooltip align="center"/>
            <el-table-column prop="dict_value" label="字典键值" width="280" show-overflow-tooltip align="center"/>
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
