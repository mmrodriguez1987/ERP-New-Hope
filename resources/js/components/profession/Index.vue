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


    <!-- <div class="box box-solid box-primary" :class="loading ? 'box-loading' : ''">
        <div class="box-header with-border">
        <h3 class="box-title">Professions</h3>
    </div>

    <div class="box-body">
        <div class="form-inline pull-left ">
            <button class="btn btn-info " @click="create">
                <i class="fa fa-plus ">  </i>
		    </button>
        </div>

        <spinner v-if="loading" :size="200" color="#dd4b39"/>

        <form class="form-inline pull-right">
            <div class="form-group mx-sm-6 mb-2">
                <label class="sr-only">Search</label>
                <input v-model="target"  class="form-control" placeholder="Type to Search" />
            </div>
        </form>
      
        <div class="clearfix"></div>
			<b-table ref="table" striped hover show-empty	responsive :items="profession"
                @sort-changed="sortingChanged"
                :fields="fields"              
                :filter="filter"
                empty-text="Cargando..."
               
                >
                <template slot="status"  slot-scope="row">
                {{row.item.status ? 'Active' : 'Inactive'}}
                </template>

                <template slot="Actions" slot-scope="row">
                    <button class="btn btn-success" @click="edit(row.item, row.index)" :title="trans('app.common.edit')">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class="btn btn-warning" @click="remove(row.item, row.index)" :title="trans('app.common.delete')">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </template>
			</b-table>
      <position-edit :show="showEdit" :draft="draft" @close="close"></position-edit>

      </div>
      <div class="box-footer text-center">
          <b-pagination
            :total-rows="totalRows"
            :per-page="perPage"
            align="center"
            v-model="currentPage"
            class="my-0"
            @input="getProfessions"
            />
      </div>
		</div> -->

</template>
 <script>
export default {
  name: 'ProfessionIndex',
  props: {

  },
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
