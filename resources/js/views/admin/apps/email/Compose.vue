<template>
  <CForm>
    <CRow class="mb-3">
      <CFormLabel class="col-1" for="to"> To: </CFormLabel>
      <CCol :sm="11">
        <CFormInput id="to" type="email" placeholder="Type email" />
      </CCol>
    </CRow>
    <CRow form class="mb-3">
      <CFormLabel class="col-1" for="cc"> CC: </CFormLabel>
      <CCol :sm="11">
        <CFormInput id="cc" type="email" placeholder="Type email" />
      </CCol>
    </CRow>
    <CRow form class="mb-3">
      <CFormLabel class="col-1" for="bcc"> BCC: </CFormLabel>
      <CCol :sm="11">
        <CFormInput id="bcc" type="email" placeholder="Type email" />
      </CCol>
    </CRow>
  </CForm>
  <CRow>
    <CCol class="ms-auto" :sm="11">
      <CButtonToolbar>
        <CButtonGroup class="me-1">
          <CButton color="light">
            <CIcon icon="cil-bold" />
          </CButton>
          <CButton color="light">
            <CIcon icon="cil-Italic" />
          </CButton>
          <CButton color="light">
            <CIcon icon="cil-underline" />
          </CButton>
        </CButtonGroup>
        <CButtonGroup class="me-1">
          <CButton color="light">
            <CIcon icon="cil-align-left" />
          </CButton>
          <CButton color="light">
            <CIcon icon="cil-align-right" />
          </CButton>
          <CButton color="light">
            <CIcon icon="cil-align-center" />
          </CButton>
          <CButton color="light">
            <CIcon icon="cil-justify-center" />
          </CButton>
        </CButtonGroup>
        <CButtonGroup class="me-1">
          <CButton color="light">
            <CIcon icon="cil-indent-increase" />
          </CButton>
          <CButton color="light">
            <CIcon icon="cil-indent-decrease" />
          </CButton>
        </CButtonGroup>
        <CButtonGroup class="me-1">
          <CButton color="light">
            <CIcon icon="cil-list" />
          </CButton>
          <CButton color="light">
            <CIcon icon="cil-list-numbered" />
          </CButton>
        </CButtonGroup>
        <CButton color="light" class="me-1">
          <CIcon icon="cil-trash" />
        </CButton>
        <CButton color="light" class="me-1">
          <CIcon icon="cil-paperclip" />
        </CButton>
        <CDropdown>
          <CDropdownToggle color="light">
            <CIcon icon="cilTags" />
          </CDropdownToggle>
          <CDropdownMenu>
            <CDropdownItem href="#">
              add label<CBadge color="danger-gradient"> Home</CBadge>
            </CDropdownItem>
            <CDropdownItem href="#">
              add label<CBadge color="info-gradient"> Job</CBadge>
            </CDropdownItem>
            <CDropdownItem href="#">
              add label<CBadge color="success-gradient"> Clients</CBadge>
            </CDropdownItem>
            <CDropdownItem href="#">
              add label<CBadge color="warning-gradient"> News</CBadge>
            </CDropdownItem>
          </CDropdownMenu>
        </CDropdown>
      </CButtonToolbar>
      <div class="mb-3 mt-4">
        <CFormTextarea rows="12" placeholder="Message content"></CFormTextarea>
      </div>
      <div>
        <CButton color="success" type="submit"> Send </CButton>
        <CButton class="ms-2" color="light" type="submit"> Draft </CButton>
        <CButton class="ms-2" color="danger" type="submit"> Discard </CButton>
      </div>
    </CCol>
  </CRow>
</template>

<script>
export default {
  name: 'Compose',
}
</script>
