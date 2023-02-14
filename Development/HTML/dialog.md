# Dialog

```
<dialog open>
  <p>Greetings, one and all!</p>
  <form method="dialog">
    <button>OK</button>
  </form>
</dialog>
```

### Links & Resources

- [Simpler Modals With the Dialog Element &rarr;](https://laracasts.com/series/jeffreys-larabits/episodes/23)
- [\<dialog\>: The Dialog element &rarr;](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog)


fade the background color
```
@keyframes fade-in {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

dialog::backdrop {
    background-color: rgba(0, 0, 0, 0.5);
    animation: 0.3s fade-in;
}
```
