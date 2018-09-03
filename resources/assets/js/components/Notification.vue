<template>
    <div>
        <form @submit.prevent="onSubmit" method="POST">
            <div class="form-group">
                <input v-model="formData.title" type="text" class="form-control" name="title" placeholder="Assunto">
            </div>
            <div class="form-group">
                <textarea v-model="formData.body" name="body" class="form-control" placeholder="Comentário" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">
                    Comentar
                </button>
            </div>
        </form>
    </div>
</template>


<script>
export default {
    props: ['product_id'],

    data() {
        return {
            formData : {
                product_id: this.product_id,
                title: '',
                body: '',
            }
        }
    },

    methods: {
        onSubmit () {
            axios.post('/comment', this.formData)
                    .then(response => console.log(response))
                    .catch(error => console.log(error))
        }
    }
}
</script>
