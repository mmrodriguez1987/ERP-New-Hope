<template>
  <CRow>
    <CCol :xs="12">
      <CCard class="mb-4">
        <CCardHeader>
          <strong>Fullcalendar</strong>
        </CCardHeader>
        <CCardBody>
          <FullCalendar :options="calendarOptions" />
        </CCardBody>
      </CCard>
    </CCol>
  </CRow>
</template>

<script>
import '@fullcalendar/core/vdom' // solves problem with Vite
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
export default {
  name: 'Calendar',
  components: {
    FullCalendar,
  },
  setup() {
    return {
      calendarOptions: {
        plugins: [dayGridPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
      },
    }
  },
}
</script>
