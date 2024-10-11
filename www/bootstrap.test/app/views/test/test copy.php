<div class="container">
    <!-- <?php d($_SESSION) ?> -->
</div>

<div>
    <canvas id="myChart"></canvas>
</div>

<script>
    const createDataset = (color, label, baseY) => ({
        borderColor: color,
        label,
        showLine: true,
        data: Array.from({
            length: 10
        }, (_, i) => ({
            x: 10 * (i + (Math.random() - 0.5)) | 0,
            y: baseY + Math.random() * baseY | 0,
        })),
    });

    new Chart(document.getElementById('myChart'), {
        type: 'scatter',
        data: {
            datasets: [
                createDataset('red', 'hello, world!!', 50),
                createDataset('green', 'fuck the world', 100),
                createDataset('blue', 'fuck everything', 200),
            ],
        },
    });
</script>