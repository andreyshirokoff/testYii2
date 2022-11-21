<template>
  <div>
    <div class="form">
      <FormForAdd :onAdd="addRecipe" />
    </div>
    <div class="col">
      <ItemCol
        v-for="item in items" :key="item"
        v-bind:item="item"
      />
    </div>
  </div>

</template>

<script>
  import FormForAdd from "@/components/FormForAdd";
  import ItemCol from "@/components/ItemCol";
  export default {
    name: "Wrapper",
    components: {
      FormForAdd,
      ItemCol,
    },
    data(){
      return{
        recipes: []
      }
    },
    methods: {
      addRecipe(recipe) {
        this.recipes.push(recipe)
        console.log(this.recipes)
      }
    },
    props: ['items']
  }
</script>

<style scoped>
  .form{
    margin-bottom: 30px;
  }
</style>