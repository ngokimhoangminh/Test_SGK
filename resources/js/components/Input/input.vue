<template>
    <input class="form-control" type="text" :value="updateValue" :name="name" ref="input">
</template>

<script>
export default {

    props: {
        name:{
            type: String,
            required: true,
        },
        updateValue: {
            type: String
        }
    },

    methods: {
    }
}
</script>
