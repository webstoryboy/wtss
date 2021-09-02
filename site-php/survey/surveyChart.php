<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart','bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200){

                result = JSON.parse(this.responseText);

                console.log('result is ' + JSON.stringify(result));

                var data = google.visualization.arrayToDataTable([
                    ['종류', '명'],
                    ['오프라인 서점',result.offline],
                    ['온라인 서점',result.store],
                    ['웹사이트',result.website],
                    ['지인을 통해서',result.friends],
                    ['교육기관',result.academy],
                    ['기타',result.etc]
                ]);

                var options = {
                    title: '당신은 어떤 경로로 본서를 알게 되셨나요?',
                    chartArea: {width: '50%'},
                    hAxis: {
                        minValue: 0
                    },
                };

                selectTag = document.getElementById('chart_div');
                var chart = new google.visualization.BarChart(selectTag);
                chart.draw(data, options);
            }
        };

        xhttp.open("POST", "surveyResult.php", true);
        xhttp.send();
    }
</script>
</head>
<body>
<div id="chart_div"></div>
</body>
</html>