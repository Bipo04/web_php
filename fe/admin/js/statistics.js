document.addEventListener("DOMContentLoaded", function () {
    // Combined Line and Bar Chart with Time Picker
    var combinedChartElem = document.getElementById('combinedChart');
    var ctxCombined = combinedChartElem.getContext('2d');
    var combinedChart = new Chart(ctxCombined, {
        type: 'bar',
        data: {
            labels: JSON.parse(combinedChartElem.getAttribute('data-daily-labels')),
            datasets: [{
                label: 'Đơn hàng',
                type: 'line',
                data: JSON.parse(combinedChartElem.getAttribute('data-daily-orders')),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'Doanh thu',
                type: 'line',
                data: JSON.parse(combinedChartElem.getAttribute('data-daily-sale')),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'Lợi nhuận',
                type: 'line',
                data: JSON.parse(combinedChartElem.getAttribute('data-daily-income')),
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    document.getElementById('timePeriod').addEventListener('change', function () {
        var period = this.value;
        if (period === 'daily') {
            combinedChart.data.labels = JSON.parse(combinedChartElem.getAttribute('data-daily-labels'));
            combinedChart.data.datasets[0].data = JSON.parse(combinedChartElem.getAttribute('data-daily-orders'));
            combinedChart.data.datasets[1].data = JSON.parse(combinedChartElem.getAttribute('data-daily-sale'));
            combinedChart.data.datasets[2].data = JSON.parse(combinedChartElem.getAttribute('data-daily-income'));
        } else if (period === 'weekly') {
            combinedChart.data.labels = JSON.parse(combinedChartElem.getAttribute('data-weekly-labels'));
            combinedChart.data.datasets[0].data = JSON.parse(combinedChartElem.getAttribute('data-weekly-orders'));
            combinedChart.data.datasets[1].data = JSON.parse(combinedChartElem.getAttribute('data-weekly-sale'));
            combinedChart.data.datasets[2].data = JSON.parse(combinedChartElem.getAttribute('data-weekly-income'));
        } else if (period === 'monthly') {
            combinedChart.data.labels = JSON.parse(combinedChartElem.getAttribute('data-monthly-labels'));
            combinedChart.data.datasets[0].data = JSON.parse(combinedChartElem.getAttribute('data-monthly-orders'));
            combinedChart.data.datasets[1].data = JSON.parse(combinedChartElem.getAttribute('data-monthly-sale'));
            combinedChart.data.datasets[2].data = JSON.parse(combinedChartElem.getAttribute('data-monthly-income'));
        }
        combinedChart.update();
    });

    // Pie Chart for Order Statuses
    var pieChartElem = document.getElementById('pieChart');
    var pieLabels = JSON.parse(pieChartElem.getAttribute('data-labels'));
    var pieData = JSON.parse(pieChartElem.getAttribute('data-status'));

    var ctxPie = pieChartElem.getContext('2d');
    var pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: pieLabels,
            datasets: [{
                data: pieData,
                backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                borderColor: ['rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            var label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed !== null) {
                                label += context.parsed + ' orders';
                            }
                            return label;
                        }
                    }
                }
            }
        }
    });
});
