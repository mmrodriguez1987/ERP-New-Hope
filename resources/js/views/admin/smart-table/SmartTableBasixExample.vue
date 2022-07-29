<template>
  <CSmartTable
    :active-page="3"
    cleaner
    column-filter
    column-sorter
    :columns="columns"
    clickable-rows
    footer
    header
    :items-per-page="5"
    items-per-page-select
    :items="items"
    pagination
    table-filter
    :table-props="{
      striped: true,
      hover: true,
    }"
  >
    <template #status="{ item }">
      <td>
        <CBadge :color="getBadge(item.status)">{{ item.status }}</CBadge>
      </td>
    </template>
    <template #show_details="{ item, index }">
      <td class="py-2">
        <CButton
          color="primary"
          variant="outline"
          square
          size="sm"
          @click="toggleDetails(item, index)"
        >
          {{ Boolean(item._toggled) ? 'Hide' : 'Show' }}
        </CButton>
      </td>
    </template>
    <template #details="{ item }">
      <CCollapse :visible="Boolean(item._toggled)">
        <CCardBody>
          <h4>
            {{ item.username }}
          </h4>
          <p class="text-muted">User since: {{ item.registered }}</p>
          <CButton size="sm" color="info" class=""> User Settings </CButton>
          <CButton size="sm" color="danger" class="ml-1"> Delete </CButton>
        </CCardBody>
      </CCollapse>
    </template>
  </CSmartTable>
</template>

<script>
import { ref } from 'vue'
import data from './_data'
export default {
  name: 'SmartTableBasixExample',
  setup() {
    const columns = [
      {
        key: 'name',
        _style: { width: '40%' },
      },
      'registered',
      { key: 'role', _style: { width: '20%' } },
      { key: 'status', _style: { width: '20%' } },
      {
        key: 'show_details',
        label: '',
        _style: { width: '1%' },
        filter: false,
        sorter: false,
      },
    ]
    const items = ref(data)

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

    const toggleDetails = (item) => {
      items.value[item.id] = {
        ...item,
        _toggled: !item._toggled,
      }
    }

    return {
      columns,
      items,
      getBadge,
      toggleDetails,
    }
  },
}
</script>
