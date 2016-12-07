<?php $__env->startSection('title', 'TenLord Reports'); ?>
<?php $__env->startSection('Sidebar', 'Reports'); ?>
<?php $__env->startSection('content'); ?>
<div class="media-heading">Property - Units</div>
        <div>
            <canvas id="units_graph" width="1000" height="400"></canvas>


            <script>
                $(function(){

                    var units_graph = document.getElementById("units_graph");
                    var ctx = units_graph.getContext("2d");

                    $.getJSON("/property", function (result) {



                        var labels = [],data=[];
                        for (var i = 0; i < result.length; i++) {
                            labels.push('Property ' + result[i].property_id);
                            data.push(result[i].unit_count);
                        }

                        var unitData = {
                            labels : labels,
                            datasets : [
                                {label:'Units',
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
                            data: unitData,

                            options: {
                                scales: {
                                }
                            }
                        });



                    });

                });


            </script>



        </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>