<img class="img-center rounded-full border my-2" src="{{ Gravatar::get(Auth::user()->email) }}" alt="gravatar">
<x-avatar search="{{ Auth::user()->email }}" provider="gravatar" class="mx-auto rounded-full border shadow-xl w-24" />
