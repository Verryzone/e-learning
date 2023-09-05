<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
</head>


<body class="font-sans">
    <?= $this->include('template/navbar'); ?>
    <br><br><br><br>
    <div class="ml-6 md:ml-[22rem] w-auto h-auto mr-6">

        <?= $this->renderSection('content'); ?>
    </div>
</body>
<!-- javascript -->
<script src="/js/my-dev.js"></script>

</html>