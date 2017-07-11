@extends('Admin.Admin')
@section("Admin.Content_Admin")
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript" src="plugins/chartjs/Chart.min.js"></script>
      <script src="js/canvasjs.min.js"></script>
       <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card" style="width: 1000px">
                      <div>
                          Chọn sản phẩm<select id="select">
                              @foreach($pro as $pro)
                                     <option name="giatri" class="giatri{{$pro->id}}" giatri="{{$pro->id}}">{{$pro->name}}</option>
                                     <script type="text/javascript"></script>
                              @endforeach
                          </select>
                          Từ Ngày: <input type="text" id="departing">
                          Tới Ngày: <input type="text" id="returning">
                          <input type="button" id="submit" name="" value="Tìm">
                      </div>

                        <script type="text/javascript">
                           $("#departing").datepicker({ dateFormat: 'yy-mm-dd' });
                              $("#returning").datepicker({ dateFormat: 'yy-mm-dd' });
                            var route="{{route('ChartById_Admin',['id','from','to'])}}";
                        
                    
                              $("#submit").click(function(){
                                  var id=$(select).find(":selected").attr('giatri');
                                  alert(id);
                                  var from = $("#departing").val();
                                  var to = $("#returning").val();
                                  route=route.replace('id',id);
                                  route=route.replace('from',from);
                                  route=route.replace('to',to);
                                  if (from == "" || to == ""||from>=to) {
                                    alert("Hãy chọn ngày ");
                                  } else {
                                      window.location.replace(route);
                                  }
                                });

                           
                          
                              window.onload = function() {
                                    var chart = new CanvasJS.Chart("chartContainer", {
                                       title: {
                                            text: "Line Chart"
                                        },
                                        data: [{
                                            type: "column",
                                            dataPoints: [
                                            @foreach($chart as $chart)
                                              {y: {{$chart->Soluong}},label: "{{$chart->Ngay}}" },
                                              @endforeach
                                              // { x: 30, y: 20 },
                                              // { x: 15, y: 60 },
                                           
                                            ]
                                        }]
                                    });
                                    chart.render();
                                }
                        </script>
                    <div id="chartContainer" style="height: 400px; width: 900px;"></div>

        </div>
    </section>
@endsection