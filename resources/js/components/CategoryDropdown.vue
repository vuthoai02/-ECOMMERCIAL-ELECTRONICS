<template>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <select
                        class="form-control"
                        name="category_id"
                        v-model="category"
                        @change="getSubCategories()"
                    >
                        <option value="">Select category</option>
                        <option
                            v-for="data in categories"
                            :value="data.id"
                            :key="data.id"
                        >
                            {{ data.name }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <select
                        class="form-control"
                        name="subcategory_id"
                        v-model="subcategory"
                        @change="getChildCategories()"
                    >
                        <option value="">Select subcategory</option>
                        <option
                            v-for="data in subcategories"
                            :value="data.id"
                            :key="data.id"
                        >
                            {{ data.name }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control" name="childcategory_id">
                        <option value="">Select childcategory</option>
                        <option
                            v-for="data in childcategories"
                            :value="data.id"
                            :key="data.id"
                        >
                            {{ data.name }}
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            category: 0,
            categories: [],
            subcategory: 0,
            subcategories: [],
            childcategories: [],
        };
    },
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            axios.get("/api/category").then((response) => {
                this.categories = response.data;
            });
        },
        getSubCategories() {
            axios
                .get("/api/subcategory", {
                    params: { category_id: this.category },
                })
                .then((response) => {
                    this.subcategories = response.data;
                });
        },
        getChildCategories() {
            axios
                .get("/api/childcategory", {
                    params: { subcategory_id: this.subcategory },
                })
                .then((response) => {
                    this.childcategories = response.data;
                });
        },
    },
};
</script>
