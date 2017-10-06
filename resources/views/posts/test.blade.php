<h1>Blog Page</h1>

<?php
    echo "<h2>Hello Blog</h2>"
?>

@php
//
echo "<h2>Hello Blog</h2>"
@endphp
<h3>
The current UNIX timestamp is {{ time() }}.
</h3>
<hr>
{{ $var or 'default' }}
<hr>
Эквивалентно тернарной операции
<br>
{{ isset($var) ? $var:'default' }}
<br>
{!! $var or 'default' !!}
<br>

@{{ This will not be processed by Blade }}

@verbatim
<div class="container">
    Hello, {{ name }}.
</div>
@endverbatim


Hello, {{-- name --}}.
