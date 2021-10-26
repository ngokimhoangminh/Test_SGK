<template>
  <img :src="url" :width="width" :height="height" />
</template>

<script>
export default {
  props: {
    url: {
      type: String,
      required: true,
    },
    width: {
      type: String,
      required: false,
    },
    height: {
      type: String,
      required: false,
    },
  },
};
</script>
