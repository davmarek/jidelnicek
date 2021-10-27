<script>
  import List from './lib/List.svelte';

  let menu = null,
    date = null;

  const dateToday = new Date(Date.now());

  $: dateLabel = date?.getDate() == dateToday.getDate() ? 'dnešek' : 'zítra';

  fetch('https://doctus.creativnivyvojari.cz/app/index.php')
    .then((response) => response.json())
    .then((json) => {
      menu = json.groups;
      date = new Date(json.date);
    });
</script>

{#if date != null}
  <div>
    <h1 id="date">
      {date.toLocaleDateString('cs-CZ', {
        weekday: 'long',
        year: 'numeric',
        month: 'short',
        day: 'numeric',
      })}
    </h1>
    {#if menu.length > 3}
      <div>
        <List list={menu[0]} />

        <List list={menu[1]} />

        <List list={menu[2]} />

        <List list={menu[3]} />
      </div>
    {:else}
      <div>
        <h3>
          Na {dateLabel} není připraveno žádné menu
        </h3>
      </div>
    {/if}
  </div>
{/if}

<style global>
  @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap');
  * {
    box-sizing: border-box;
  }

  :global(body) {
    margin: 0;
    background-color: #fafafa;
  }

  :global(#app) {
    font-family: 'Rubik', Avenir, Helvetica, Arial, sans-serif;
    font-size: 14px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: black;

    padding: 16px 16px 100px;
  }

  :global(#app > div) {
    margin: 0 auto;
    max-width: 1100px;
  }

  #date {
    margin: 32px 0 0;
    text-transform: capitalize;
  }
</style>
