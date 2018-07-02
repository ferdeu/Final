<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if (count($products) === 0)
... html showing no products found
@elseif (count($products) >= 1)
... print out results
    @foreach($products as $article)
    print article
    @endforeach
@endif
  </body>
</html>
