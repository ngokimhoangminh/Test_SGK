<template>
  <img
    :src="url"
    :width="width"
    :height="height"
  >
  </img>
</template>

<script>
export default {
  props: {
    type: {
      url: String,
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
  }
};
</script>
