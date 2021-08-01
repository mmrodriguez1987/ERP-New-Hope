<template>
  <CRow>
    <CCol sm="12">
      <CCard>
        <CCardHeader>
          <strong>Professions</strong> 
          <small class="ml-1">Professions database list</small>
        </CCardHeader>
        <CCardBody>
          <CDataTable 
            hover sorter column-filter  table-filter pagination
            :fields="fields" :items="profession_data" >           
          </CDataTable>
        </CCardBody>
        <CCardFooter>
            <CButton size="sm" color="primary"><CIcon name="cil-check-circle"/> Submit</CButton>
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


 /*	export default{
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
 		created(){
       this.getProfessions()
     },
 		methods:{
       getProfessions(){
         let params = {
           page: this.currentPage,
           target: this.target,
           orderBy: this.sortBy,
           desc: this.sortDesc
         }
         this.$store.dispatch('getProfessions', params)
       },
 		  onFiltered (filteredItems) {
          //Trigger pagination to update the number of buttons/pages due to filtering
 		    this.totalRows = filteredItems.length
 		    this.currentPage = 1
 		  },
       edit(Person, index){
         this.draft = clone(Person)
         this.currentIndex = index
         this.showEdit = true
       },
       create(){
         this.draft = {
           id: null,
           name: '',
        }
        this.showEdit = true
       },
       remove(item, index){
         this.$swal({
           title: trans('app.common.delete_title'),
           text: trans('app.common.delete_text') + item.name +'?',
           type: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: trans('app.common.delete_confirm'),
           cancelButtonText: trans('app.common.0')
         }).then((result) => {
           if (result.value) {
             this.$store.dispatch('removeProfession', item.id)
           }
         })
       },
       close(){
         this.showEdit = false
       },
       sortingChanged (ctx) {
         if (ctx.sortBy) {
           this.sortBy = ctx.sortBy
           this.sortDesc = ctx.sortDesc
           this.currentPage = 1
           this.getProfessions()
         }
       },
 		},
     computed:{
       profession(){ return this.$store.state.Profession.professions },
       current_page(){return this.$store.state.Profession.currentPage },
       totalRows(){ return this.$store.state.Profession.totalRows },
       perPage(){ return this.$store.state.Profession.perPage },
       loading(){ return this.$store.state.Profession.loading }
     }
 	}*/
</script>
