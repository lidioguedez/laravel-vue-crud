<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    </head>
    <body>
     <div id="main" class="row">
    <div class="col-sm-4">
        <h1>VUEjs - AJAX axios</h1>
            <ul class="list-group">
                <li v-for="item in lists" class="list-group-item">
                    @{{ item.name }} -- @{{ item.email }}
                </li>
            </ul>
    </div>
    <div class="col-sm-8">
        <h1>JSON</h1>
        <pre>
           @{{ $data }}
        </pre>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
