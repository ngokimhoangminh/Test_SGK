<template>
  <textarea class="form-control" :rows="rows" :name="name"> </textarea>
</template>

<script>
export default {
  props: {
    rows: {
      type: Number,
      default: 6,
    },
    name: {
      type: String,
      required: true,
    },
  },
};
</script>
