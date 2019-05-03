<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div id="one">
            <h1>@{{ shared.user.name }}</h1>
        </div>

        <div id="two">
            <h1>@{{ shared.user.name }}</h1>
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
