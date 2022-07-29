<template>
  <CRow>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Time Picker</strong>
        </CCardHeader>
        <CCardBody>
          <DocsExample href="forms/time-picker.html#example">
            <CRow>
              <CCol :lg="4">
                <CTimePicker locale="en-US" />
              </CCol>
              <CCol :lg="4">
                <CTimePicker locale="en-US" time="02:17:35 PM" />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Time Picker</strong>&nbsp;
          <small>Sizing</small>
        </CCardHeader>
        <CCardBody>
          <p class="text-medium-emphasis small">
            Add the <code>disabled</code> boolean attribute on an input to give
            it a grayed out appearance and remove pointer events.
          </p>

          <DocsExample href="time-picker.html#sizing">
            <CRow class="mb-4">
              <CCol :lg="4">
                <CTimePicker locale="en-US" size="lg" />
              </CCol>
            </CRow>
            <CRow>
              <CCol :lg="3">
                <CTimePicker locale="en-US" size="sm" />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Time Picker</strong>&nbsp;
          <small>Disabled</small>
        </CCardHeader>
        <CCardBody>
          <p class="text-medium-emphasis small">
            Add the <code>disabled</code> boolean attribute on an input to give
            it a grayed out appearance and remove pointer events.
          </p>
          <DocsExample href="time-picker.html#disabled">
            <CRow>
              <CCol :lg="4">
                <CTimePicker disabled locale="en-US" />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Time Picker</strong>&nbsp;
          <small>Readonly</small>
        </CCardHeader>
        <CCardBody>
          <p class="text-medium-emphasis small">
            Add the <code>inputReadOnly</code> boolean attribute to prevent
            modification of the input's value.
          </p>
          <DocsExample href="time-picker.html#readonly">
            <CRow>
              <CCol :lg="4">
                <CTimePicker inputReadOnly locale="en-US" />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
  </CRow>
</template>
