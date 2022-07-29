<template>
  <CButtonToolbar class="mb-4">
    <CButtonGroup class="me-1">
      <CButton color="light">
        <CIcon icon="cil-envelope-closed" />
      </CButton>
      <CButton color="light">
        <CIcon icon="cil-Star" />
      </CButton>
      <CButton color="light">
        <CIcon icon="cil-bookmark" />
      </CButton>
    </CButtonGroup>
    <CButtonGroup class="m3-1">
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
      <CDropdownToggle caret color="light">
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
  <div class="message">
    <div class="message-message-details flex-wrap pb-3">
      <div class="message-message-headers d-flex flex-wrap">
        <div class="message-headers-subject w-100 fs-5 fw-semibold">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
        <div class="message-headers-from">
          Lukasz Holeczek<span class="text-medium-emphasis"
            >(email@email.com)</span
          >
        </div>
        <div class="message-headers-date ms-auto">
          <CIcon icon="cil-paperclip" /> Today, 3:47 PM
        </div>
      </div>

      <hr />
      <div class="message-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur.
      </div>
      <hr />

      <div class="message-attachment">
        <CBadge color="danger-gradient" class="me-2"> zip </CBadge>
        <b>bootstrap.zip</b> <i>(2,5MB)</i>
      </div>

      <div class="message-attachment">
        <CBadge color="info-gradient" class="me-2"> txt </CBadge>
        <b>readme.txt</b> <i>(7KB)</i>
      </div>

      <div class="message-attachment">
        <CBadge color="success-gradient" class="me-2"> xls </CBadge>
        <b>spreadsheet.xls</b> <i>(984KB)</i>
      </div>

      <CForm class="mt-3">
        <div class="mb-3">
          <CFormTextarea
            rows="12"
            placeholder="Click here to reply"
          ></CFormTextarea>
        </div>
        <div>
          <CButton color="success" tabindex="3-gradient" type="submit">
            Send message
          </CButton>
        </div>
      </CForm>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Message',
}
</script>
