{{--Prueba de OCR tessarec--}}
{{--<x-app-layout>--}}

{{--    <h1>Prueba OCR</h1>--}}
{{--        <form action="{{route('ocr')}}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <input type="file" name="image" id="image">--}}
{{--            <button type="submit">Submit</button>--}}

{{--        <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <input type="file" name="image" />--}}
{{--            <input type="submit"/>--}}
{{--        </form>--}}



{{--</x-app-layout>--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--<?php if(!empty($statusMsg)){ ?>--}}
{{--    <div>--}}
{{--        <?php echo $statusMsg; ?>--}}
{{--    </div>--}}
{{--<?php }?>--}}

    <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf_file">
        <button type="submit" name="submit">Submit</button>
    </form>

    <div>
        {{$pdfText}}
{{--        <?php if(!empty($pdfText)){ ?>--}}
{{--            <h2>PDF Text:</h2>--}}
{{--            <p><?php echo $pdfText; ?></p>--}}
{{--        <?php }?>--}}

    </div>
</body>
</html>
