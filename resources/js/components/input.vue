<template>
  <input
    class="form-control"
    type="text"
    :value="value"
    :name="name"
    :data-type="dataType"
    ref="input"
  />
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      required: true,
    },
    value: {
      type: String,
      required: false,
    },
    dataType: {
      type: String,
      required: false,
    },
  },

  methods: {},
};
</script>
