@extends('layouts.main')
@section('contents')
    <div class="starter-template">
        <div class="row">
            <div class="col-md-6">
                <div id="graph">Loading graph...</div>
            </div>
            <div class="col-md-6">
                <div id="line">Loading graph...</div>
            </div>
            <div class="col-md-6">
                <div id="pie">Loading graph...</div>
            </div>
            <div class="col-md-6">
                <div id="month">Loading graph...</div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var myData = new Array(
                ['Mon', 200],
                ['Tue', 500],
                ['Wed', 300],
                ['Thr', 900],
                ['Fri', 100],
                ['Sat', 600],
                ['Sun',1500]
        );
        var colors = ['#2D6B96', '#327AAD', '#3E90C9', '#55A7E3', '#60B6F0', '#81C4F0', '#9CCEF0'];
        var myChart = new JSChart('graph', 'bar');
        myChart.setDataArray(myData);
        myChart.colorizeBars(colors);
        myChart.setDataArray(myData);
        myChart.setAxisNameFontSize(12);
        myChart.setBarColor('#42aBdB');
        myChart.setBarOpacity(0.8);
        myChart.setAxisWidth(1);
        myChart.setBarBorderColor('#D9EDF7');
        myChart.setBarValues(false);
        myChart.setTitleColor('#8C8383');
        myChart.setAxisColor('#777E81');
        myChart.setAxisValuesColor('#777E81');
        myChart.setAxisNameX('Week Days');
        myChart.setTitle('Weekly Passengers');
        myChart.setAxisNameY('');
//        myChart.setSize(100, 321);
        myChart.draw();


        var myData = new Array(
                [0, 0],
                [1, 5],
                [2, 3],
                [3, 8],
                [4, 8],
                [5, 10],
                [6, 5],
                [7, 8]
        );
        var myChart = new JSChart('line', 'line');
        myChart.setDataArray(myData);
        myChart.setAxisColor('#656565');
        myChart.setAxisNameColor('#4A4A4A');
        myChart.setAxisNameFontSize(10);
        myChart.setAxisNameX('');
        myChart.setAxisNameY('No of Issues');
        myChart.setAxisPaddingBottom(60);
        myChart.setAxisPaddingLeft(180);
        myChart.setAxisPaddingRight(170);
        myChart.setAxisPaddingTop(65);
        myChart.setAxisValuesColor('#656565');
        myChart.setAxisValuesNumberX(6);
        myChart.setLineColor('#8638D5');
        myChart.setShowXValues(false);
        myChart.setTitle('Issues Raised per Week');
        myChart.setTitleColor('#505050');
        myChart.setSize(616, 321);
        myChart.setTextPaddingBottom(20);
        myChart.setTextPaddingLeft(120);
        myChart.setTextPaddingTop(15);
        myChart.setFlagRadius(6);
        myChart.setTooltip([25, 'The maxnmum issues']);
        myChart.draw();


        var myData = new Array(
                ['Jan', 102080],
                ['Feb', 199080],
                ['Mar', 93080],
                ['Apr', 60080],
                ['May', 80080],
                ['Jun', 100800],
                ['Jul', 92080],
                ['Aug', 20808],
                ['Sep', 50800],
                ['Oct', 10806],
                ['Nov', 20800],
                ['Dec', 4080]);
        var colors = [
            '#FFCC00',
            '#FFFF00',
            '#CCFF00',
            '#99FF00',
            '#33FF00',
            '#00FF66',
            '#00FF99',
            '#00FFCC',
            '#FF0000',
            '#FF3300',
            '#FF6600',
            '#FF9900'];
        var myChart = new JSChart('pie', 'pie');
        myChart.setDataArray(myData);
//        myChart.colorizePie(colors);
        myChart.setPiePosition(208, 170);
        myChart.setPieRadius(120);
        myChart.setPieUnitsFontSize(8);
        myChart.setPieUnitsColor('#474747');
//        myChart.setPieValuesColor('#474747');
        myChart.setPieValuesOffset(-20);
        myChart.setTitle('Monthly Passengers');
//        myChart.setTitleColor('');
        myChart.setSize(616, 321);
//
        myChart.draw();

        var myData = new Array(
                ['Jan', 200000],
                ['Feb', 300000],
                ['Mar', 300000],
                ['Apr', 900000],
                ['May', 100000],
                ['Jun', 600000],
                ['Jul',1500000],
                ['Aug', 300000],
                ['Sep', 900000],
                ['Oct', 100000],
                ['Nov', 600000],
                ['Dec',1500000]
        );
        var colors = [
            '#2D6B46',
            '#327AAD',
            '#3E94C9',
            '#55A7E3',
            '#60B6F0',
            '#81A4F0',
            '#9C4EF0',
            '#3E90C9',
            '#55A7E3',
            '#60B6F0',
            '#81C4F0',
            '#9CCE40'
        ];
        var myChart = new JSChart('month', 'bar');
        myChart.setDataArray(myData);
        myChart.colorizeBars(colors);
        myChart.setDataArray(myData);
        myChart.setAxisNameFontSize(12);
        myChart.setBarColor('#42aBdB');
        myChart.setBarOpacity(0.8);
        myChart.setAxisWidth(1);
        myChart.setBarBorderColor('#D9EDF7');
        myChart.setBarValues(false);
        myChart.setTitleColor('#8C8383');
        myChart.setAxisColor('#777E81');
        myChart.setAxisValuesColor('#777E81');
        myChart.setAxisNameX('')
        myChart.setTitle('Monthly Collection');
        myChart.setAxisNameY('');
        myChart.draw();

    </script>
@endsection