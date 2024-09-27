@extends('layout')
@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.js"
    integrity="sha512-QbaChpzUJcRVsOFtDhh/VZMuljqvlPRIhIXsvfREDZcdqzIKdNvAhwrgW+flSxtbxK/BFpdX1y5NSO6bSYHlOA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.53.0/apexcharts.min.css"
    integrity="sha512-w3pXofOHrtYzBYpJwC6TzPH6SxD6HLAbT/rffdkA759nCQvYi5AHy5trNWFboZnj4xtdyK0AFMBtck9eTmwybg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
    var options = {
        series: [{
            data: [21, 22, 10, 28, 16, 21, 13, 30]
        }],
        chart: {
            height: 350,
            type: 'bar',
            events: {
                click: function(chart, w, e) {
                    // console.log(chart, w, e)
                }
            }
        },
        colors: colors,
        plotOptions: {
            bar: {
                columnWidth: '45%',
                distributed: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false
        },
        xaxis: {
            categories: [
                ['John', 'Doe'],
                ['Joe', 'Smith'],
                ['Jake', 'Williams'],
                'Amber',
                ['Peter', 'Brown'],
                ['Mary', 'Evans'],
                ['David', 'Wilson'],
                ['Lily', 'Roberts'],
            ],
            labels: {
                style: {
                    colors: colors,
                    fontSize: '12px'
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="aler">Selamat datang, <b>Warga RT 52</b></h3>
    </div>
</div>
<div class="dashboard">
    <div class="chartt">
        {!! $chart->container() !!}
        <h5>Diskusi terbaru:<h5/>
        <ol class="list-unstyled">
            <li class="mediadash">
                @foreach($krisan as $item)
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{URL::asset('/image/warga.png')}}" alt="Warga" width="35px" height="35px">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="juduldash">{{ $item->judul }}</p>
                        <p class="aduandash">{{ $item->aduan }}</p>
                    </div>
                </div>
                @endforeach
            </li>
        </ol>
    </div>
    <div>
        <div class="ketRT">
            <img src="{{URL::asset('/image/warga.png')}}" alt="Warga" width="100px" height="100px">
            <br />
            <p class="judul">Ketua RT 52</p>
            <p>Ferry saputra</p>
            <p class="user">+6282125467834</p>
        </div>
        <div class="ketRT">
            <img src="{{URL::asset('/image/warga.png')}}" alt="Warga" width="100px" height="100px">
            <br />
            <p class="judul">Wakil Ketua RT 52</p>
            <p>Rusli Saleh</p>
            <p class="user">+6282125467834</p>
        </div>
    </div>
</div>



</div>
</div>
</div>


<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}


</div>
</div>
<script>
    das.classList.add('active')
</script>
@endsection