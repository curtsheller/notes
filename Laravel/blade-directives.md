# Laravel 9

## Blade Directives
```
<input type="checkbox"
    name="active"
    value="active"
    @checked(old('active', $product->active() />
```
```
<select name="language">
    @foreach ($languages as $language)
        <option value="{{ $ language }}"
            @selected(old('languate', $product->active() />
            {{ $language }}
        </option>
    @endoforeach
</select>
```
```
<button type="submit" @disabled($errors->isNotEmoty())>
    Submit
</button>
```
