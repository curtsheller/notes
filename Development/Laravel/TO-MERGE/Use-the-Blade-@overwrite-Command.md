# Use the Blade @overwrite command.

```
@section(‘test’)
   one
@stop
@section(‘test’)
   two
@stop
@yield(‘test’)
```

*The above Blade template will output the following.*
`one`

But if you change the second `@stop` to an `@overwrite`.

```
@section(‘test’)
   one
@stop
@section(‘test’)
   two
@overwrite
@yield(‘test’)
```

***Then the following is output.***

`two`

The `@overwrite` command is one of the four ways to end a section.

The other three commands are:

1. **@stop** –  [Stopping Injecting Content Into a Section](https://laravel-recipes.com/stopping-injecting-content-into-a-section/) .
2. **@show** –  [Yielding the Current Section in a Blade Template](https://laravel-recipes.com/yielding-the-current-section-in-a-blade-template/) .
3. **@append** –  [Stopping Injecting Content into a Section and Appending It](https://laravel-recipes.com/stopping-injecting-content-into-a-section-and-appending-it/) .