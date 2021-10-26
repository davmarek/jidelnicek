<script>
  export let name = '';
  export let price = 0;
  export let available = true;
</script>

<!-- markup (zero or more items) goes here -->
<div class="meal" class:disabled={!available}>
  <div class="name">{name}</div>
  <div class="price">
    {#if price > 0}
      <div v-if="price > 0" class="price-chip">{price} Kč</div>
    {/if}
  </div>
</div>

<style>
  .meal {
    background-color: white;
    display: grid;
    grid-template-columns: 1fr auto;

    padding: 8px 16px;
  }
  .meal:not(.meal:last-child) {
    border-bottom: 1px solid #eee;
  }

  .name {
    padding-right: 16px;
    display: flex;
    align-items: center;
  }

  .price-chip {
    padding: 4px 10px;
    color: white;
    background-color: #007aff;
    border-radius: 50vh;

    font-weight: 500;
  }

  .disabled {
    color: #ccc;
  }

  .disabled .price-chip {
    background-color: #eee;
  }
</style>
