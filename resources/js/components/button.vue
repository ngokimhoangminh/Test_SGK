<template>
  <button
    :type="type"
    :redirect="redirect"
    :class="className"
    @click="onClick()"
  >
    <slot />
  </button>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: "submit",
    },
    redirect: {
      type: String,
    },
    className: {
      type: String,
      default: "btn btn-info",
    },
  },
  data() {
    return {};
  },
  methods: {
    onClick() {
      window.location.href = this.redirect;
    },
  },
};
</script>
