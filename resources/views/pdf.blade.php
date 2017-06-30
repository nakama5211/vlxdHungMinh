<html>
    <head>
        {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> --}}
        <title>Tạo PDF bằng Laravel - Viblo Asia</title>
         <style>
    *{ font-family: DejaVu Sans !important;}
  </style>
    </head>
    <body>
        <h1>Tiêu đề H1</h1>
        <h2>Tiêu đề H2</h2>
        <h3>Tiêu đề H3</h3>
        <h4>Tiêu đề H4</h4>
        <h5>Tiêu đề H5</h5>
        <h6>Tiêu đề H6</h6>
        <table>
            <thead>
                <tr>
                    <th>Số TT</th>
                    <th>Nội dung</th>
                </tr>
            </thead>
            <tbody>
                @foreach (range(1, 100) as $count)
                <tr>
                    <td>{{ $count }}</td>
                    <td>Nôi dụng của dòng thứ {{ $count }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>