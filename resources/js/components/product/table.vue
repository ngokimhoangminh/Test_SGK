<template>
  <table
    id="data_tables"
    class="
      table table-bordered
      hover
      data_tables
      stripe
      row-border
      table-auto
      text-sm text-left
      border border-gray-900
      m-4
    "
    style="width: 100%"
  >
    <thead>
      <tr>
        <th style="">id</th>
        <th style="width: 15%">Sản Phẩm</th>
        <th style="width: 30%">Giá Gốc</th>
        <th style="width: 10%">Giảm Giá</th>
        <th style="width: 15%">Mô Tả</th>
        <th style="width: 30%">Trạng Thái</th>
        <th>Hành Động</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(product, index) in datas" :key="index">
        <td>{{ product.id }}</td>
        <td>{{ product.name }}</td>
        <td>{{ product.price }}</td>
        <td>{{ product.discount }}</td>
        <td>{{ product.description }}</td>
        <td>{{ product.status }}</td>
        <td>
          <button-action
            className="btn btn-success"
            :redirect="`product/${product.id}/edit`"
            >Cập Nhật</button-action
          >
          <confirm-delete
            :action="`/product/delete/${product.id}`"
          ></confirm-delete>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import Button from "../button";
import Confirm from "../confirm.vue";

export default {
  props: {
    datas: Array,
  },
  components: {
    "button-action": Button,
    "confirm-delete": Confirm,
  },
};
</script>
