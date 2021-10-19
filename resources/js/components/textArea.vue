<template>
  <textarea class="form-control" :rows="rows" :name="name">
   <slot />
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
  },
};
</script>
