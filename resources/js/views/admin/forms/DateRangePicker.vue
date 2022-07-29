<template>
  <CRow>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Date Range Picker</strong>
        </CCardHeader>
        <CCardBody>
          <DocsExample href="forms/date-range-picker.html#example">
            <CRow>
              <CCol :lg="5">
                <CDateRangePicker locale="en-US" />
              </CCol>
              <CCol :lg="5">
                <CDateRangePicker
                  startDate="2022/08/03"
                  endDate="2022/08/17"
                  locale="en-US"
                />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Date Range Picker</strong>&nbsp;
          <small>With footer</small>
        </CCardHeader>
        <CCardBody>
          <DocsExample href="forms/date-range-picker.html#with-footer">
            <CRow>
              <CCol :lg="5">
                <CDateRangePicker footer locale="en-US" />
              </CCol>
              <CCol :lg="5">
                <CDateRangePicker
                  startDate="2022/08/03"
                  endDate="2022/08/17"
                  footer
                  locale="en-US"
                />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Date Range Picker</strong>&nbsp;
          <small>With timepicker</small>
        </CCardHeader>
        <CCardBody>
          <DocsExample href="date-range-picker.html#with-timepicker">
            <CRow>
              <CCol :lg="5">
                <CDateRangePicker locale="en-US" timepicker />
              </CCol>
              <CCol :lg="5">
                <CDateRangePicker
                  startDate="2022/08/03 02:34:17 AM"
                  endDate="2022/09/17 11:29:41 PM"
                  locale="en-US"
                  timepicker
                />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Date Range Picker</strong>&nbsp;
          <small>Sizing</small>
        </CCardHeader>
        <CCardBody>
          <p class="text-medium-emphasis small">
            Add the <code>disabled</code> boolean attribute on an input to give
            it a grayed out appearance and remove pointer events.
          </p>

          <DocsExample href="date-range-picker.html#sizing">
            <CRow class="mb-4">
              <CCol :lg="6">
                <CDateRangePicker locale="en-US" size="lg" />
              </CCol>
            </CRow>
            <CRow>
              <CCol :lg="5">
                <CDateRangePicker locale="en-US" size="sm" />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Date Range Picker</strong>&nbsp;
          <small>Disabled</small>
        </CCardHeader>
        <CCardBody>
          <p class="text-medium-emphasis small">
            Add the <code>disabled</code> boolean attribute on an input to give
            it a grayed out appearance and remove pointer events.
          </p>
          <DocsExample href="date-range-picker.html#disabled">
            <CRow>
              <CCol :lg="5">
                <CDateRangePicker disabled locale="en-US" />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Date Range Picker</strong>&nbsp;
          <small>Readonly</small>
        </CCardHeader>
        <CCardBody>
          <p class="text-medium-emphasis small">
            Add the <code>inputReadOnly</code> boolean attribute to prevent
            modification of the input's value.
          </p>
          <DocsExample href="date-range-picker.html#readonly">
            <CRow>
              <CCol :lg="5">
                <CDateRangePicker inputReadOnly locale="en-US" />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>CoreUI Vue Date Range Picker</strong>&nbsp;
          <small>Disabled dates</small>
        </CCardHeader>
        <CCardBody>
          <DocsExample href="date-range-picker.html#disabled-dates">
            <CRow>
              <CCol :lg="5">
                <CDateRangePicker
                  :calendarDate="calendarDate"
                  :disabledDates="disabledDates"
                  locale="en-US"
                  :maxDate="maxDate"
                  :minDate="minDate"
                />
              </CCol>
            </CRow>
          </DocsExample>
        </CCardBody>
      </CCard>
    </CCol>
  </CRow>
</template>
<script>
export default {
  setup() {
    const calendarDate = new Date(2022, 2, 1)
    const disabledDates = [
      [new Date(2022, 2, 4), new Date(2022, 2, 7)],
      new Date(2022, 2, 16),
      new Date(2022, 3, 16),
      [new Date(2022, 4, 2), new Date(2022, 4, 8)],
    ]
    const maxDate = new Date(2022, 5, 0)
    const minDate = new Date(2022, 1, 1)
    return {
      calendarDate,
      disabledDates,
      maxDate,
      minDate,
    }
  },
}
</script>
