<template>
    <AppLayout title="Vehicle Management">
<div>
    <h1 class="text-center">Vehicle Management</h1>
</div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
// import { Link } from '@inertiajs/vue3';
// import Multiselect from 'vue-multiselect';
// import { computed } from 'vue';
// import { usePage } from '@inertiajs/vue3';
// import { library } from '@fortawesome/fontawesome-svg-core';
// import {
//     faHouse,
//     faFloppyDisk,
//     faCirclePlus,
//     faClone,
//     faCloudArrowDown,
//     faSquarePlus,
//     faPrint,
//     faWrench,
//     faCircleCheck,
//     faCircleMinus,
//     faTrash,
//     faArrowUpFromBracket,
//     faXmark,
//     faPenToSquare,
//     faPen,
// } from "@fortawesome/free-solid-svg-icons";

export default {
    components: {
        AppLayout,
        // Link,
        // library,
        // Multiselect,
    },
    props: {
        slug: Object,
    },
    // data() {
    //     return {
    //         textClassHead: "text-start text-uppercase",
    //         textClassBody: "text-start",
    //         valueClassBody: "text-right",
    //         valueClassHead: "text-right",
    //         iconClassHead: "text-center",
    //         iconClassBody: "text-center",
    //         rowClass: "cursor-pointer",

    //         search: null,
    //         page: 1,
    //         perPage: [25, 50, 100],
    //         pageCount: 25,
    //         pagination: {},

    //         material: {},
    //         select_purchase_uom: null,
    //         select_stock_uom: null,
    //         units: [],
    //         select_type: null,
    //         categories: [],
    //         categoriesL2: [],
    //         categoriesL3: [],
    //         categoriesL4: [],
    //         select_category_level_1: null,
    //         select_category_level_2: null,
    //         select_category_level_3: null,
    //         select_category_level_4: null,
    //         materialTypes: [],

    //         all_cat: [],
    //         select_search_category: null,
    //         search_material: {},

    //         select_search_vendor: null,
    //         vendors: [],

    //         materials: [],
    //         checkMatiItems: [],
    //         checkAllItems: false,
    //     };
    // },
    // beforeMount() {
    //     library.add(faHouse);
    //     library.add(faFloppyDisk);
    //     library.add(faCirclePlus);
    //     library.add(faClone);
    //     library.add(faCloudArrowDown);
    //     library.add(faSquarePlus);
    //     library.add(faPrint);
    //     library.add(faArrowUpFromBracket);
    //     library.add(faWrench);
    //     library.add(faCircleCheck);
    //     library.add(faCircleMinus);
    //     library.add(faTrash);
    //     library.add(faXmark);
    //     library.add(faPenToSquare);
    //     library.add(faPen);
    //     this.getMaterialTypes();
    //     this.getCategoriesLevel1();
    //     this.getUOMs();
    //     this.getMaterials();
    //     this.getCategories();
    // },
    // watch: {

    //     checkAllItems(value) {
    //         this.materials.forEach((item, index) => {
    //             if (index !== 0) {
    //                 item.selected = value;
    //             }
    //         });
    //         if (this.checkMatiItems.length == this.materials.length) {
    //             this.checkMatiItems = [];
    //         } else {
    //             this.checkMatiItems = this.materials;
    //         }
    //     },
    //     checkMatiItems(value) {
    //         if (this.checkMatiItems.length != this.materials.length) {
    //             this.checkAllItems = false;
    //         }
    //     },

    //     select_category_level_1: function (val) {
    //         val ? this.getCategoriesLevel2(val) : '';
    //     },
    //     select_category_level_2: function (val) {
    //         val ? this.getCategoriesLevel3(val) : '';
    //     },
    //     select_category_level_3: function (val) {
    //         val ? this.getCategoriesLevel4(val) : '';
    //     },
    //     select_search_category: function () {
    //         this.select_search_category ? this.search_material.category = this.select_search_category.id : this.search_material.category = null;
    //         this.getSearch();
    //     }
    // },
    // methods: {
        // onSearchVendor(search, loading) {
        //     if (search.length) {
        //         loading = true;
        //         this.searchVendor(loading, search, this);
        //     }
        // },
        // searchVendor: _.debounce((loading, search, vm) => {
        //     axios.get(route("vendors.all"), {
        //         params: {
        //             "filter[search]": search,
        //         },
        //     }).then(res => {
        //         // console.log(res.data.data)
        //         vm.vendors = res.data.data;
        //         loading = false;
        //     });
        // }, 250),

        // formatPrice(value) {
        //     let val = (value / 1).toFixed(2).replace(",", ".");
        //     return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        // },

        // async setPage(page) {
        //     this.page = page;
        //     this.reload();
        // },
        // async getSearch() {
        //     this.page = 1;
        //     this.reload();
        // },
        // async perPageChange() {
        //     this.reload();
        // },
        // async reload() {
        //     this.$root.loader.start();
        //     const tableData = (
        //         await axios.get(route("material.all"), {
        //             params: {
        //                 page: this.page,
        //                 per_page: this.pageCount,
        //                 "filter[search]": this.search,
        //                 search_material_code: this.search_material.code,
        //                 search_material_barcode: this.search_material.barcode,
        //                 search_material_name: this.search_material.name,
        //                 search_material_category: this.search_material.category,
        //             },
        //         })
        //     ).data;

        //     this.materials = tableData.data;
        //     this.pagination = tableData.meta;
        //     this.$root.loader.finish();
        // },

        // async getUOMs() {
        //     const units = (await axios.get(route("units.all"))).data;
        //     this.units = units.data;
        // },
        // async getMaterialTypes() {
        //     const materialTypes = (await axios.get(route("materialType.all"))).data;
        //     this.materialTypes = materialTypes.data;
        // },
        // async getCategories() {
        //     const all_cat = (await axios.get(route('materialCategory.all.list'))).data
        //     this.all_cat = all_cat;
        // },
        // async getCategoriesLevel2(id) {
        //     const categoriesL2 = (await axios.get(route('materialCategory.level2.all', id))).data
        //     this.categoriesL2 = categoriesL2;
        // },
        // async getCategoriesLevel3(id) {
        //     const categoriesL3 = (await axios.get(route('materialCategory.level3.all', id))).data
        //     this.categoriesL3 = categoriesL3;
        // },
        // async getCategoriesLevel4(id) {
        //     const categoriesL4 = (await axios.get(route('materialCategory.level4.all', id))).data
        //     this.categoriesL4 = categoriesL4;
        //},
    //     async getCategoriesLevel1() {
    //         const categories = (await axios.get(route('materialCategory.level1.all'))).data
    //         this.categories = categories;
    //     },
    //     async getMaterials() {
    //         this.$nextTick(() => {
    //             this.$root.loader.start();
    //         });
    //         const tableData = (await axios.get(route("material.all.slug", this.slug))).data;
    //         this.materials = tableData.data;
    //         this.pagination = tableData.meta;
    //         this.$nextTick(() => {
    //             this.$root.loader.finish();
    //         });
    //     },
    //     async createMaterial() {
    //         this.resetValidationErrors();
    //         try {
    //             if (this.select_purchase_uom) {
    //                 this.material.purchase_uom = this.select_purchase_uom.id;
    //             }
    //             if (this.select_stock_uom) {
    //                 this.material.stock_uom = this.select_stock_uom.id;
    //             }
    //             if (this.select_type) {
    //                 this.material.type = this.select_type.id;
    //             }
    //             if (this.select_category_level_1) {
    //                 this.material.category = this.select_category_level_1.id;
    //             }
    //             if (this.select_category_level_1) {
    //                 this.material.category_l1_id =this.select_category_level_1.id;
    //             }
    //             if (this.select_search_vendor) {
    //                 this.material.vendor = this.select_search_vendor.name;
    //                 this.material.vendor_id = this.select_search_vendor.id;
    //             }
    //             if (!this.material.barcode) {
    //                 this.material.barcode = this.material.code;
    //             }
    //             const material = (
    //                 await axios.post(route("material.store"), this.material)
    //             ).data;
    //             // console.log(material.id);
    //             $("#newMaterialModal").modal("hide");
    //             window.location.href = route("material.edit", material.id);
    //             this.reload();
    //             this.material = {};
    //             this.select_category_level_4 = null;
    //             this.select_category_level_3 = null;
    //             this.select_category_level_2 = null;
    //             this.select_category_level_1 = null;
    //             this.select_purchase_uom = null;
    //             this.select_stock_uom = null;
    //             this.select_type = null;
    //             this.$root.notify.success({
    //                 title: "Success",
    //                 message: "Material created successfully",
    //             });
    //         } catch (error) {
    //             this.convertValidationNotification(error);
    //             this.convertValidationError(error);
    //         }
    //     },
    //     async editMaterials(materialId) {
    //         // this.$inertia.visit(route('material.edit', materialId));
    //         window.location.href = route('material.edit', materialId);
    //     },
    //     async clearFilters() {
    //         console.log("first");
    //         this.search_material = {};
    //         this.select_search_category = null;
    //         this.reload();
    //     },
    //     async newMaterial(){
    //         this.$root.loader.start();
    //         this.material = {};
    //         this.validationErrors = {};
    //         $("#newMaterialModal").modal("show");
    //         this.$root.loader.finish();
    //     },


    //     async deleteSelectedItems(checkMatiItems) {
    //         this.$root.loader.start();
    //         try {
    //             Swal.fire({
    //                 title: "Are you sure?",
    //                 text: "You won't be able to revert this!",
    //                 icon: "warning",
    //                 showCancelButton: true,
    //                 confirmButtonColor: "#C00202", // Green
    //                 cancelButtonColor: "#6CA925", // Secondary Color
    //                 confirmButtonText: "Yes, delete it!",
    //             }).then((result) => {
    //                 if (result.isConfirmed) {
    //                     const ids = this.checkMatiItems.map(
    //                         (material) => material.id
    //                     );
    //                     axios
    //                         .post(route("materials.delete.selected"), { ids })
    //                         .then((response) => {
    //                             this.reload();
    //                         });
    //                     Swal.fire(
    //                         "Deleted!",
    //                         `Material has been deleted.`,
    //                         "success"
    //                     );
    //                 }
    //             });
    //             this.$root.loader.finish();
    //         } catch (error) {
    //             this.convertValidationNotification(error);
    //         }
    //     },
    //     async activeSelectedItems(checkMatiItems) {
    //         this.$nextTick(() => {
    //             this.$root.loader.start();
    //         });
    //         const ids = this.checkMatiItems.map((material) => material.id);
    //         axios
    //             .post(route("materials.active.selected"), { ids })
    //             .then((response) => {
    //                 this.checkMatiItems = [];
    //                 this.getMaterials();
    //             });
    //         this.$nextTick(() => {
    //             this.$root.loader.finish();
    //         });
    //     },

    //     async inactiveSelectedItems(checkMatiItems) {
    //         this.$nextTick(() => {
    //             this.$root.loader.start();
    //         });
    //         const ids = this.checkMatiItems.map((material) => material.id);
    //         axios
    //             .post(route("materials.inactive.selected"), { ids })
    //             .then((response) => {
    //                 this.checkMatiItems = [];
    //                 this.getMaterials();
    //             });
    //         this.$nextTick(() => {
    //             this.$root.loader.finish();
    //         });
    //     },
    // },
}
</script>

<style lang="scss" scoped>
.breadcrumb-text {
    color: #6343e9 !important;
}
</style>
