<script>
        let monthlyProfits = @json($monthlyProfits);
        const lineChartEl = document.querySelector('#lineChart');
        let cardColor, headingColor, legendColor, labelColor, borderColor;
        let months= @json($months);


        cardColor = config.colors_dark.cardColor;
        labelColor = config.colors_dark.textMuted;
        legendColor = config.colors_dark.bodyColor;
        headingColor = config.colors_dark.headingColor;
        borderColor = config.colors_dark.borderColor;

        lineChartConfig = {
            chart: {
                height: 400,
                type: 'line',
                parentHeightOffset: 0,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false
                }
            },
            series: [{
                data: monthlyProfits
            }],
            markers: {
                strokeWidth: 7,
                strokeOpacity: 1,
                strokeColors: [cardColor],
                colors: [config.colors.warning]
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            colors: [config.colors.warning],
            grid: {
                borderColor: borderColor,
                xaxis: {
                    lines: {
                        show: true
                    }
                },
                padding: {
                    top: -20
                }
            },
            tooltip: {
                custom: function({
                    series,
                    seriesIndex,
                    dataPointIndex,
                    w
                }) {
                    return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] +
                        'EGP</span>' + '</div>';
                }
            },
            xaxis: {
                categories: months,
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '13px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '13px'
                    }
                }
            }
        };
        const lineChart = new ApexCharts(lineChartEl, lineChartConfig);
        lineChart.render();
    </script>