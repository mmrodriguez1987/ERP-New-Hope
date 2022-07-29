<template>
  <CButtonToolbar class="mb-4">
    <CButtonGroup class="me-1">
      <CButton color="light">
        <CIcon icon="cil-envelope-closed" />
      </CButton>
      <CButton color="light">
        <CIcon icon="cil-star" />
      </CButton>
      <CButton color="light">
        <CIcon icon="cil-bookmark" />
      </CButton>
    </CButtonGroup>
    <CButtonGroup class="me-1">
      <CButton color="light">
        <CIcon icon="cil-share" />
      </CButton>
      <CButton color="light">
        <CIcon icon="cil-share-all" />
      </CButton>
      <CButton color="light">
        <CIcon icon="cil-share-boxed" />
      </CButton>
    </CButtonGroup>
    <CButton color="light" class="me-1">
      <CIcon icon="cil-trash" />
    </CButton>
    <CDropdown>
      <CDropdownToggle color="light">
        <CIcon icon="cil-tags" />
      </CDropdownToggle>
      <CDropdownMenu>
        <CDropdownItem>
          add label <CBadge color="danger-gradient">Home</CBadge>
        </CDropdownItem>
        <CDropdownItem>
          add label <CBadge color="info-gradient">Job</CBadge>
        </CDropdownItem>
        <CDropdownItem>
          add label <CBadge color="success-gradient">Clients</CBadge>
        </CDropdownItem>
        <CDropdownItem>
          add label <CBadge color="warning-gradient">News</CBadge>
        </CDropdownItem>
      </CDropdownMenu>
    </CDropdown>
    <CButtonGroup class="ms-auto">
      <CButton color="light">
        <CIcon icon="cil-chevron-left" />
      </CButton>
      <CButton color="light">
        <CIcon icon="cil-chevron-right" />
      </CButton>
    </CButtonGroup>
  </CButtonToolbar>

  <div class="messages">
    <a
      class="message d-flex mb-3 text-high-emphasis text-decoration-none"
      href="./message"
    >
      <div class="message-actions me-3">
        <CIcon icon="cil-star" />
      </div>
      <div class="message-details flex-wrap pb-3 border-bottom">
        <div class="message-headers d-flex flex-wrap">
          <div class="message-headers-from">Lukasz Holeczek</div>
          <div class="message-headers-date ms-auto">
            <CIcon icon="cil-paperclip" /> Today, 3:47 PM
          </div>
          <div class="message-headers-subject w-100 fs-5 fw-semibold">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
        <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </div>
      </div>
    </a>
    <a
      class="message d-flex mb-3 text-medium-emphasis text-decoration-none"
      href="./message"
    >
      <div class="message-actions me-3">
        <CIcon icon="cil-star" />
      </div>
      <div class="message-details flex-wrap pb-3 border-bottom">
        <div class="message-headers d-flex flex-wrap">
          <div class="message-headers-from">Lukasz Holeczek</div>
          <div class="message-headers-date ms-auto">
            <CIcon icon="cil-paperclip" /> Today, 3:47 PM
          </div>
          <div class="message-headers-subject w-100 fs-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
        <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </div>
      </div>
    </a>
    <a
      class="message d-flex mb-3 text-high-emphasis text-decoration-none message-read"
      href="./message"
    >
      <div class="message-actions me-3">
        <CIcon icon="cil-star" />
      </div>
      <div class="message-details flex-wrap pb-3 border-bottom">
        <div class="message-headers d-flex flex-wrap">
          <div class="message-headers-from">Lukasz Holeczek</div>
          <div class="message-headers-date ms-auto">
            <CIcon icon="cil-paperclip" /> Today, 3:47 PM
          </div>
          <div class="message-headers-subject w-100 fs-5 fw-semibold">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
        <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </div>
      </div>
    </a>
    <a
      class="message d-flex mb-3 text-medium-emphasis text-decoration-none"
      href="./message"
    >
      <div class="message-actions me-3">
        <CIcon icon="cil-star" />
      </div>
      <div class="message-details flex-wrap pb-3 border-bottom">
        <div class="message-headers d-flex flex-wrap">
          <div class="message-headers-from">Lukasz Holeczek</div>
          <div class="message-headers-date ms-auto">
            <CIcon icon="cil-paperclip" /> Today, 3:47 PM
          </div>
          <div class="message-headers-subject w-100 fs-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
        <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </div>
      </div>
    </a>
    <a
      class="message d-flex mb-3 text-medium-emphasis text-decoration-none"
      href="./message"
    >
      <div class="message-actions me-3">
        <CIcon icon="cil-star" />
      </div>
      <div class="message-details flex-wrap pb-3 border-bottom">
        <div class="message-headers d-flex flex-wrap">
          <div class="message-headers-from">Lukasz Holeczek</div>
          <div class="message-headers-date ms-auto">
            <CIcon icon="cil-paperclip" /> Today, 3:47 PM
          </div>
          <div class="message-headers-subject w-100 fs-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
        <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </div>
      </div>
    </a>
    <a
      class="message d-flex mb-3 text-medium-emphasis text-decoration-none"
      href="./message"
    >
      <div class="message-actions me-3">
        <CIcon icon="cil-star" />
      </div>
      <div class="message-details flex-wrap pb-3 border-bottom">
        <div class="message-headers d-flex flex-wrap">
          <div class="message-headers-from">Lukasz Holeczek</div>
          <div class="message-headers-date ms-auto">
            <CIcon icon="cil-paperclip" /> Today, 3:47 PM
          </div>
          <div class="message-headers-subject w-100 fs-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
        <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: 'Inbox',
}
</script>
