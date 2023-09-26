<template>
  <CDropdown variant="nav-item" alignment="end">
    <CDropdownToggle class="c-header-nav-link" :caret="false">
      <CIcon icon="cil-envelope-open" size="lg" class="my-1 mx-2" />
      <CBadge
        shape="rounded-pill"
        color="info-gradient"
        class="position-absolute top-0 end-0"
      >
        {{ itemsCount }}
      </CBadge>
    </CDropdownToggle>
    <CDropdownMenu class="pt-0">
      <CDropdownHeader class="bg-light">
        <strong>You have {{ itemsCount }} messages</strong>
      </CDropdownHeader>
      <CDropdownItem href="#">
        <div class="message">
          <div class="pt-3 me-3 float-start">
            <CAvatar :src="avatar7" status="success" />
          </div>
          <div>
            <small class="text-medium-emphasis">John Doe</small>
            <small class="text-medium-emphasis float-end mt-1">Just now</small>
          </div>
          <div class="text-truncate font-weight-bold">
            <span class="fa fa-exclamation text-danger"></span> Important
            message
          </div>
          <div class="small text-medium-emphasis text-truncate">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt...
          </div>
        </div>
      </CDropdownItem>
      <CDropdownItem href="#">
        <div class="message">
          <div class="pt-3 me-3 float-start">
            <CAvatar :src="avatar6" status="warning" />
          </div>
          <div>
            <small class="text-medium-emphasis">Jane Dovve</small>
            <small class="text-medium-emphasis float-end mt-1"
              >5 minutes ago</small
            >
          </div>
          <div class="text-truncate font-weight-bold">
            Lorem ipsum dolor sit amet
          </div>
          <div class="small text-medium-emphasis text-truncate">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt...
          </div>
        </div>
      </CDropdownItem>
      <CDropdownItem href="#">
        <div class="message">
          <div class="pt-3 me-3 float-start">
            <CAvatar :src="avatar5" status="danger" />
          </div>
          <div>
            <small class="text-medium-emphasis">Janet Doe</small>
            <small class="text-medium-emphasis float-end mt-1">1:52 PM</small>
          </div>
          <div class="text-truncate font-weight-bold">
            Lorem ipsum dolor sit amet
          </div>
          <div class="small text-medium-emphasis text-truncate">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt...
          </div>
        </div>
      </CDropdownItem>
      <CDropdownItem href="#">
        <div class="message">
          <div class="pt-3 me-3 float-start">
            <CAvatar :src="avatar4" status="info" />
          </div>
          <div>
            <small class="text-medium-emphasis">Joe Doe</small>
            <small class="text-medium-emphasis float-end mt-1">4:03 AM</small>
          </div>
          <div class="text-truncate font-weight-bold">
            Lorem ipsum dolor sit amet
          </div>
          <div class="small text-medium-emphasis text-truncate">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt...
          </div>
        </div>
      </CDropdownItem>
      <CDropdownItem href="#" class="text-center border-top">
        <strong>View all messages</strong>
      </CDropdownItem>
    </CDropdownMenu>
  </CDropdown>
</template>
<script>
import avatar4 from '../../img/avatars/4.jpg'
import avatar5 from '../../img/avatars/5.jpg'
import avatar6 from '../../img/avatars/6.jpg'
import avatar7 from '../../img/avatars/7.jpg'
export default {
  name: 'TheHeaderDropdownMssgs',
  setup() {
    const itemsCount = 7
    return {
      avatar4,
      avatar5,
      avatar6,
      avatar7,
      itemsCount,
    }
  },
}
</script>
