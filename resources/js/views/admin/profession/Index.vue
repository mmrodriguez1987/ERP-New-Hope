<template>
  <CRow>
    <CCol sm="12">
      <CCard>
        <CCardHeader>
          <strong>Professions</strong> 
          <small class="ml-1">Professions database list</small>
        </CCardHeader>
        <CCardBody>
          <CDataTable hover sorter column-filter  table-filter pagination :fields="fields" :items="profession_data.data" >
            <template #show_details="{item, index}">
              <td class="py-2">
                <CButton  color="primary"   variant="outline"  square  size="sm"   >
                Modify
                </CButton>
              </td>
            </template>         
          </CDataTable>
          <CPagination :active-page.sync="currentPage"   />
        </CCardBody>
        <CCardFooter>
            <CButton size="sm" color="primary"><CIcon name="cil-check-circle"/> Save</CButton>
            <CButton size="sm" color="danger"><CIcon name="cil-ban"/> Reset</CButton>
          </CCardFooter>
      </CCard>
    </CCol>
  </CRow>
</template>
<script>
export default {
  watch:{
 		target(){
      this.getProfessions()
    }
 	},
  data(){
 		return{
      currentPage: null,
      target: '',
      draft: {},
      currentIndex: null,
      showEdit: false,
      sortBy: 'id',
      sortDesc: true,
      currentId: null,
 			pageOptions: [ 5, 10, 15 ],
      draft:{},
      filter: null,
      fields: [
        {	key: 'name', label: 'Name', sortable: true,	},
        {	key: 'Actions', label: trans('app.common.actions'), 'class': 'pull-right'	}
      ],
 		}
 	},
  created() {
    this.getProfessions()
  },
  methods: {
    getProfessions(){
      let params = {
        page: this.currentPage,
        target: this.target,
        orderBy: this.sortBy,
        desc: this.sortDesc
      }
      this.$store.dispatch('getProfessions', params)
    },
  },
  computed:{
    profession_data(){ return this.$store.state.Profession.professions },
    current_page(){return this.$store.state.Profession.currentPage },
    totalRows(){ return this.$store.state.Profession.totalRows },
    perPage(){ return this.$store.state.Profession.perPage },
    loading(){ return this.$store.state.Profession.loading }
  }  
}
</script>
