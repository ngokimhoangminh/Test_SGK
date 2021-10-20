<template>
  <textarea class="form-control" :rows="rows" :name="name">
    {{ value }}
  </textarea>
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
    value: {
      type: String,
      required: false,
    },
  },
};
</script>
