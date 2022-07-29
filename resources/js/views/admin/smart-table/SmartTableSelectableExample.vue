<template>
  Selected: {{ JSON.stringify(selected) }}
  <CSmartTable
    :items="usersData"
    :columns="columns"
    column-filter
    table-filter
    cleaner
    :items-per-page="5"
    column-sorter
    pagination
  >
    <template #status="{ item }">
      <td>
        <CBadge :color="getBadge(item.status)">{{ item.status }}</CBadge>
      </td>
    </template>
    <template #select="{ item }">
      <td class="py-2">
        <CFormCheck
          :id="`checkbox${item.id}`"
          :checked="item._selected"
          @change="(e) => check(e, item.id)"
        />
        <CFormLabel variant="custom-checkbox" :for="`checkbox${item.id}`" />
      </td>
    </template>
  </CSmartTable>
</template>

<script>
import { computed, ref } from 'vue'
import data from './_data'
export default {
  name: 'SmartTableSelectableExample',
  setup() {
    const selected = ref([2, 3])

    const usersData = computed(() =>
      data.map((item, id) => {
        const _selected = selected.value.includes(id)
        return {
          ...item,
          id,
          _selected,
        }
      }),
    )

    const check = (e, id) => {
      if (e.target.checked) {
        selected.value = [...selected.value, id]
      } else {
        selected.value = selected.value.filter((itemId) => itemId !== id)
      }
    }

    const columns = [
      { key: 'select', label: '', filter: false, sorter: false },
      'name',
      'registered',
      'role',
      'status',
    ]

    const items = usersData.value

    const getBadge = (status) => {
      switch (status) {
        case 'Active':
          return 'success'
        case 'Inactive':
          return 'secondary'
        case 'Pending':
          return 'warning'
        case 'Banned':
          return 'danger'
        default:
          'primary'
      }
    }

    return {
      columns,
      items,
      check,
      getBadge,
      selected,
      usersData,
    }
  },
}
</script>
