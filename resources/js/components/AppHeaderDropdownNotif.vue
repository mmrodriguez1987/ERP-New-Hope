<template>
  <CDropdown variant="nav-item">
    <CDropdownToggle placement="bottom-end" :caret="false">
      <CIcon class="my-1 mx-2" icon="cil-bell" size="lg" />
      <CBadge
        class="position-absolute top-0 end-0"
        color="danger-gradient"
        shape="rounded-pill"
        >{{ itemsCount }}</CBadge
      >
    </CDropdownToggle>
    <CDropdownMenu class="pt-0">
      <CDropdownHeader class="bg-light">
        <strong>You have {{ itemsCount }} notifications</strong>
      </CDropdownHeader>
      <CDropdownItem>
        <CIcon icon="cil-user-follow" class="text-success" /> New user
        registered
      </CDropdownItem>
      <CDropdownItem>
        <CIcon icon="cil-user-unfollow" class="text-danger" /> User deleted
      </CDropdownItem>
      <CDropdownItem>
        <CIcon icon="cil-chart-pie" class="text-info" /> Sales report is ready
      </CDropdownItem>
      <CDropdownItem>
        <CIcon icon="cil-basket" class="text-primary" /> New client
      </CDropdownItem>
      <CDropdownItem>
        <CIcon icon="cil-speedometer" class="text-warning" /> Server overloaded
      </CDropdownItem>
      <CDropdownHeader class="bg-light">
        <strong>Server</strong>
      </CDropdownHeader>
      <CDropdownItem class="d-block">
        <div class="text-uppercase mb-1">
          <small><b>CPU Usage</b></small>
        </div>
        <CProgress thin color="info-gradient" :value="25" />
        <small class="text-muted">348 Processes. 1/4 Cores.</small>
      </CDropdownItem>
      <CDropdownItem class="d-block">
        <div class="text-uppercase mb-1">
          <small><b>Memory Usage</b></small>
        </div>
        <CProgress thin color="warning-gradient" :value="70" />
        <small class="text-muted">11444GB/16384MB</small>
      </CDropdownItem>
      <CDropdownItem class="d-block">
        <div class="text-uppercase mb-1">
          <small><b>SSD 1 Usage</b></small>
        </div>
        <CProgress thin color="danger-gradient" :value="90" />
        <small class="text-muted">243GB/256GB</small>
      </CDropdownItem>
    </CDropdownMenu>
  </CDropdown>
</template>
<script>
export default {
  name: 'TheHeaderDropdownNotif',
  data() {
    return { itemsCount: 5 }
  },
}
</script>
