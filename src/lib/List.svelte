<script>
  import Meal from './Meal.svelte';
  export let list = {};
</script>

<div>
  <h2>{list.mealKindName}</h2>

  {#each list.rows as lunch}
    <Meal
      name={lunch.item.mealName}
      price={lunch.item.price}
      available={lunch.item.state == 0}
    />
  {/each}
</div>

<style>
  h2 {
    font-size: 22px;
    margin: 0;
    padding: 20px 0 8px;
  }
</style>
