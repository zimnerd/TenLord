@extends('layouts.app')
@section('title', 'TenLord Reports')
@section('Sidebar', 'Reports')
@section('content')
<div class="media-heading">Properties Statistics</div>
        <div>
            <canvas id="units_graph" width="1000" height="400"></canvas>


            <script>
                $(function(){

                    var units_graph = document.getElementById("units_graph");
                    var ctx = units_graph.getContext("2d");

                    $.getJSON("/property", function (result) {



                        var labels = [],data=[];
                        for (var i = 0; i < result.length; i++) {
                             labels.push(result[i].month);
        data.push(result[i].properties);
                        }

                        var propertyData = {
                            labels : labels,
                            datasets : [
                                {label:'Properties count: ',
                                    fillColor: "rgba(151,7,205,1)",
                                    strokeColor: "rgba(151,187,205,1)",
                                    pointColor: "rgba(151,187,205,1)",
                                    pointStrokeColor: "#fff",
                                    pointHighlightFill: "#fff",
                                    pointHighlightStroke: "rgba(151,187,205,1)",
                                    data : data
                                }
                            ]
                        };


                        var myNewChart = new Chart(ctx , {
                            type: "line",
                            data: propertyData,

                            options: {
                                scales: {
                                }
                            }
                        });



                    });

                });


            </script>



        </div>


@endsection
