<a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
    Share on Facebook
</a>

<a href="https://twitter.com/intent/tweet?text={{ urlencode($text) }}&url={{ urlencode($url) }}" target="_blank">
    Share on Twitter
</a>


public function share(Request $request)
{
    $url = route('your.route.name'); // Replace with your route
    $text = "Check out this awesome link!";

    return view('your_view_name', compact('url', 'text'));
}
