<template>
  <CCard>
    <CCardHeader>
      Invoice <strong>#90-98792</strong>
      <CButton
        class="me-1 float-end"
        color="secondary"
        size="sm"
        @click.prevent="print"
      >
        <CIcon icon="cil-print" /> Print
      </CButton>
      <CButton class="me-1 float-end" color="info" size="sm">
        <CIcon icon="cil-save" /> Save
      </CButton>
    </CCardHeader>
    <CCardBody>
      <CRow class="mb-4">
        <CCol :sm="4">
          <h6 class="mb-3">From:</h6>
          <div>
            <strong>Your Great Company Inc.</strong>
          </div>
          <div>724 John Ave.</div>
          <div>Cupertino, CA 95014</div>
          <div>Email: email@your-great-company.com</div>
          <div>Phone: +1 123-456-7890</div>
        </CCol>
        <CCol :sm="4">
          <h6 class="mb-3">To:</h6>
          <div>
            <strong>Acme Inc.</strong>
          </div>
          <div>159 Manor Station Road</div>
          <div>San Diego, CA 92154</div>
          <div>Email: email@acme.com</div>
          <div>Phone: +1 123-456-7890</div>
        </CCol>
        <CCol :sm="4">
          <h6 class="mb-3">Details:</h6>
          <div>Invoice<strong>#90-98792</strong></div>
          <div>March 30, 2020</div>
          <div>VAT: EU9877281777</div>
          <div>Account Name: ACME</div>
          <div>
            <strong>SWIFT code: 99 8888 7777 6666 5555</strong>
          </div>
        </CCol>
      </CRow>
      <CTable striped>
        <CTableHead>
          <CTableRow>
            <CTableHeaderCell class="text-center">#</CTableHeaderCell>
            <CTableHeaderCell>Item</CTableHeaderCell>
            <CTableHeaderCell>Description</CTableHeaderCell>
            <CTableHeaderCell class="text-center">Quantity</CTableHeaderCell>
            <CTableHeaderCell class="text-end">Unit Cost</CTableHeaderCell>
            <CTableHeaderCell class="text-end">Total</CTableHeaderCell>
          </CTableRow>
        </CTableHead>
        <CTableBody>
          <CTableRow>
            <CTableDataCell class="text-center">1</CTableDataCell>
            <CTableDataCell class="text-start">Origin License</CTableDataCell>
            <CTableDataCell class="text-start">Extended License</CTableDataCell>
            <CTableDataCell class="text-center">1</CTableDataCell>
            <CTableDataCell class="text-end">$999,00</CTableDataCell>
            <CTableDataCell class="text-end">$999,00</CTableDataCell>
          </CTableRow>
          <CTableRow>
            <CTableDataCell class="text-center">2</CTableDataCell>
            <CTableDataCell class="text-start">Custom Services</CTableDataCell>
            <CTableDataCell class="text-start">
              Instalation and Customization (cost per hour)
            </CTableDataCell>
            <CTableDataCell class="text-center">20</CTableDataCell>
            <CTableDataCell class="text-end">$150,00</CTableDataCell>
            <CTableDataCell class="text-end">$3.000,00</CTableDataCell>
          </CTableRow>
          <CTableRow>
            <CTableDataCell class="text-center">3</CTableDataCell>
            <CTableDataCell class="text-start">Hosting</CTableDataCell>
            <CTableDataCell class="text-start"
              >1 year subcription</CTableDataCell
            >
            <CTableDataCell class="text-center">1</CTableDataCell>
            <CTableDataCell class="text-end">$499,00</CTableDataCell>
            <CTableDataCell class="text-end">$499,00</CTableDataCell>
          </CTableRow>
          <CTableRow>
            <CTableDataCell class="text-center">4</CTableDataCell>
            <CTableDataCell class="text-start">Platinum Support</CTableDataCell>
            <CTableDataCell class="text-start"
              >1 year subcription 24/7</CTableDataCell
            >
            <CTableDataCell class="text-center">1</CTableDataCell>
            <CTableDataCell class="text-end">$3.999,00</CTableDataCell>
            <CTableDataCell class="text-end">$3.999,00</CTableDataCell>
          </CTableRow>
        </CTableBody>
      </CTable>
      <CRow>
        <CCol lg="{4}" sm="{5}">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </CCol>
        <CCol lg="{4}" sm="{5}" class="ms-auto">
          <CTable>
            <CTableBody>
              <CTableRow>
                <CTableDataCell class="text-start">
                  <strong>Subtotal</strong>
                </CTableDataCell>
                <CTableDataCell class="text-end">$8.497,00</CTableDataCell>
              </CTableRow>
              <CTableRow>
                <CTableDataCell class="text-start">
                  <strong>Discount (20%)</strong>
                </CTableDataCell>
                <CTableDataCell class="text-end">$1,699,40</CTableDataCell>
              </CTableRow>
              <CTableRow>
                <CTableDataCell class="text-start">
                  <strong>VAT (10%)</strong>
                </CTableDataCell>
                <CTableDataCell class="text-end">$679,76</CTableDataCell>
              </CTableRow>
              <CTableRow>
                <CTableDataCell class="text-start">
                  <strong>Total</strong>
                </CTableDataCell>
                <CTableDataCell class="text-end">
                  <strong>$7.477,36</strong>
                </CTableDataCell>
              </CTableRow>
            </CTableBody>
          </CTable>
          <CButton color="success">
            <CIcon icon="cil-dollar" /> Proceed to Payment
          </CButton>
        </CCol>
      </CRow>
    </CCardBody>
  </CCard>
</template>
<script>
export default {
  name: 'Invoice',
  setup() {
    const print = () => {
      window.print()
    }

    return {
      print,
    }
  },
}
</script>
