<template>
  <table
    id="data_tables"
    class="
      table table-bordered table-striped table-hover
      data_tables
      text-sm text-left
      border border-gray-900
    "
    style="width: 100%"
  >
    <thead>
      <tr>
        <th style="">#</th>
        <th style="width: 15%">Sản Phẩm</th>
        <th style="width: 15%">Giá Gốc</th>
        <th style="width: 15%">Giảm Giá</th>
        <th style="width: 15%">Mô Tả</th>
        <th>Trạng Thái</th>
        <th>Hành Động</th>
      </tr>
    </thead>
    <tbody>
      <tr
        v-for="(product, index) in products"
        :key="index"
        :id="'row_' + product.id"
      >
        <td>{{ product.id }}</td>
        <td>{{ product.name }}</td>
        <td>{{ formatPrice(product.price) }}&nbsp;đ</td>
        <td>{{ formatPrice(product.discount) }}&nbsp;đ</td>
        <td>{{ product.description }}</td>
        <td v-if="product.status == IS_SHOW">
          <button-action>Hiển Thị</button-action>
        </td>
        <td v-else>
          <button-action className="btn btn-danger">Ẩn</button-action>
        </td>
        <td>
          <button-action
            className="btn btn-success"
            :redirect="`product/${product.id}/edit`"
            ><i class="fas fa-edit"></i
          ></button-action>
          <confirm-delete
            :name="product.name"
            @onDelete="deleteProduct(product)"
          ></confirm-delete>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import axios from "axios";
import Button from "../button";
import Confirm from "../confirm.vue";

export default {
  props: {
    products: Array,
  },
  components: {
    "button-action": Button,
    "confirm-delete": Confirm,
  },
  data() {
    return {
      IS_SHOW: 1,
    };
  },
  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(0).replace(".", ",");
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
    async deleteProduct(product) {
      const response = await axios.delete(`/product/${product.id}`);
      Swal.fire("Thành Công!", "Bạn đã xóa sản phẩm thành công", "success");
      $("#row_" + product.id).remove();
    },
  },
};
</script>
