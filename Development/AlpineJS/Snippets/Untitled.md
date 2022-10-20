
```
<div x-data="dropdown()">
    <button x-on:click="toggle">Open</button>
    <button @click="toggle">Open</button>

    <div x-show="isOpen">..dropdown...</div>
</div>

<script>
    function dropdown() {
        return {
            isOpem: false,
            toggle() {
                this.isOpen = ! this.isOpen
            }
        }
    }
</script>
```