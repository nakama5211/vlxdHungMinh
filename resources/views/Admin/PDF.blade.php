<html>
    <head>
        {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> --}}
        <title>{{$title}}</title>
         <style>
    *{ font-family: DejaVu Sans !important;}
  </style>
    </head>
    <body>
          <table  class="table table-striped table-nonfluid" align="center" id="product_table" border="1">
                           {{-- <th><input type="checkbox" id="checkall" /></th> --}}
                           @if($typepro==0)
                           <tr>
                                    	<th>id</th>
                                        <th>name</th>
                                        <th>type_product</th>            
                                        <th >description</th>
                                        <th>unit_price</th>
                                        <th>promotion_price</th>
                                        <th>image</th>
                                        <th>unit</th>
                                        <th>created_at</th>
                                        <th>updated_at</th> 
                            </tr>
                                    @foreach($product as $pro )
                                    <tr>
                                        <td>{{$pro->id}}</td>
                                        <td>{{$pro->name}}</td>
                                        <td>{{$pro->type_name}}</td>
                                        <td>{{$pro->description}}</td>
                                        <td>{{$pro->unit_price}}</td>
                                        <td>{{$pro->promotion_price}}</td>
                                        <td>{{$pro->image}}</td>
                                        <td>{{$pro->unit}}</td>
                                        <td>{{$pro->created_at}}</td>
                                        <td>{{$pro->updated_at}}</td>
                                 	</tr>
                                 	@endforeach
                            @else
                           	<tr>
                                    	<th">id</th>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>unit_price</th>
                                        <th>promotion_price</th>
                                        <th>image</th>
                                        <th>unit</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                           	</tr>
                                    @foreach($product as $pro )
                                    	<tr>
                                        <td>{{$pro->id}}</td>
                                        <td>{{$pro->name}}</td>
                                        {{-- <td id="type_name{{$pro->id}}">{{$pro->id_type}}</td> --}}
                                        <td>{{$pro->description}}</td>
                                        <td>{{$pro->unit_price}}</td>
                                        <td>{{$pro->promotion_price}}</td>
                                        <td>{{$pro->image}}</td>
                                        <td>{{$pro->unit}}</td>
                                        <td>{{$pro->created_at}}</td>
                                        <td>{{$pro->updated_at}}</td>
                                       </tr>
                                     @endforeach
                             @endif
     </table>
    </body>
</html>