const ctx = document.getElementById("myChart")

        const labels = [
            'Jan',
            'Fev',
            'Mar',
            'Abr',
            'Mai',
            'Jun',
            'Jul',
            'Ago',
            'Set',
            'Out',
            'Nov',
            'Dez',

        ]

        const data = {
            labels,
            datasets: [{
                label: "Primeiro Dados",
                backgroundColor: "#2c2c2c",
                borderColor: "#fff",
                borderWidth: 1,
                data: [211, 209, 189, 144, 411, 377, 499, 389, 421, 400, 390, 487],
            },
            {
                label: "Segundo Dados",
                backgroundColor: "#fed6fe",
                borderColor: "#fff",
                borderWidth: 1,
                data: [50, 30, 40, 12, 80, 85, 93, 73, 81, 89, 65, 100],
            }]
        }

        const config = {
            type: 'bar',
            data,
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            fontSize: 16,
                            fontColor: "#2c2c2c"
                            // callback: function(value, index, values) {
                            //     return 'R$' + value;
                            // }
                        }
                    }],
                    xAzes: [{
                        ticks: {
                            fontSize: 16,
                            fontColor: "#000",
                        }
                    }]
                }
            }
        }

        const myChart = new Chart(ctx, config)