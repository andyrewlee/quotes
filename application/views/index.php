<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quotes Demo</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
      $(document).ready(function() {
        $.get('/quotes/index_html', function(res) {
          $('#quotes').html(res);
        });

        $('form').submit(function() {
          $.post('/quotes/create', $(this).serialize(), function(res) {
            $('#quotes').html(res);
          });

          return false;
        });
      });
    </script>
  </head>
  <body>
    <form action="/quotes/create" method="post">
      <p>
        <label for="author">Author: </label>
        <input id="author" type="text" name="author">
      </p>
      <p>
        <label for="quote">Quote: </label>
        <textarea id="quote" name="quote"></textarea>
      </p>
      <input type="submit" value="Add Quote">
    </form>
    <h1>Quotsy</h1>
    <div id="quotes"></div>
  </body>
</html>
