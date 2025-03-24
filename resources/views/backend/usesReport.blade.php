{{--@extends('layouts.master')--}}
@extends('layouts.user_type.auth')

@section('extra_css')
<style type="text/css">
    .info-box {
        box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
        border-radius: 0.25rem;
        background-color: #fff;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 1rem;
        min-height: 80px;
        padding: 0.5rem;
        position: relative;
        width: 100%;
    }
    .info-box .info-box-content {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-pack: center;
        justify-content: center;
        line-height: 1.8;
        -ms-flex: 1;
        flex: 1;
        padding: 0 10px;
        overflow: hidden;
    }
    .info-box .info-box-icon {
        border-radius: 0.25rem;
        -ms-flex-align: center;
        align-items: center;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.875rem;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
        width: 70px;
    }
    .info-box .info-box-icon>img {
        max-width: 100%;
    }
    .mt-4{
        margin-top: 1em;
    }

    .icon-shape{
        display: flex;
        justify-content: center;
        align-items: center;
    }

   .icon-shape img{
        width: 100%;
       padding: 5px;
    }
</style>
@endsection

@section('content')
<div class="row">



    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="" class="row" >
                    <div class="col-9">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">This Month Word Generated</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$this_month_word}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <img src="{{asset('assets/images/icon/User.svg')}}"/>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="" class="row" >
                    <div class="col-9">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">This Month Image Generated</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$this_month_image}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <img src="{{asset('assets/images/icon/Category.svg')}}"/>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="" class="row" >
                    <div class="col-9">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Word Generated</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$all_word}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <img src="{{asset('assets/images/icon/Festival.svg')}}"/>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="" class="row" >
                    <div class="col-9">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Image Generated</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$all_image}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <img src="{{asset('assets/images/icon/Business.svg')}}"/>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-light">
                    <div class="card-header text-primary border-bottom">
                        <h5 class="float-left"><b>Daily Word Generated</b></h5>
                    </div>
                    <div class="card-body">
                        <canvas id="day_word_generated" style="width:100%;max-width:800px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-light">
                    <div class="card-header text-primary border-bottom">
                        <h5 class="float-left"><b>Daily Image Generated</b></h5>
                    </div>
                    <div class="card-body">
                        <canvas id="day_image_generated" style="width:100%;max-width:800px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-xl-6">
        <div class="card card-primary">
            <div class="card-header text-center border-bottom">
                <h5><b>Today Generated Document</b></h5>
            </div>
            <ul class="list-group list-group-flush">
                @foreach($today_document as $d)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="d-flex flex-row">
                            <img src="{{asset('assets/images/social/'.$d->templates->image)}}" class="my-auto" style="height:40px;width:40px;">
                            <div class="d-flex flex-column ml-3 my-auto">
                                <span class="d-block" style="font-size:17px;">{{$d->name}}</span>
                                <span class="text-muted" style="font-size:15px;">{{$d->user->name}} / {{$d->templates->type}} / {{$d->document_word}} Word</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="d-block my-auto"><a href="{{url('dashboard/user/'.$d->user->id) }}" class="text-primary" style="font-size:18px;">View</a></span>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="card-footer text-center">
                <a href="{{url('dashboard/today-generated-document')}}" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card card-primary">
            <div class="card-header text-center border-bottom">
                <h5><b>Today Generated Image</b></h5>
            </div>
            <ul class="list-group list-group-flush">
                @foreach($today_image as $i)
                <li class="list-group-item d-flex justify-content-between">
                    <div class="d-flex flex-row">
                        <img src="{{asset('uploads/aiImage/'.$i->image)}}" class="my-auto" style="height:40px;width:40px;">
                        <div class="d-flex flex-column ml-2 my-auto">
                            <span class="d-block">{{(strlen($i->description) >= 50)?substr_replace($i->description, "...", 50):$i->description}}</span>
                            <span class="text-muted" style="font-size:15px;">{{$i->user->name}} / {{$i->resolution}} Pixel</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="d-block my-auto"><a href="{{asset('uploads/aiImage/'.$i->image)}}" target="_blank" class="text-primary" style="font-size:18px;">View</a></span>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="card-footer text-center">
                <a href="{{url('dashboard/today-generated-image')}}" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
<script src="{{ asset('assets/js/cdn/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/cdn/canvasjs.min.js')}}"></script>
<script>
$(document).ready(function(){
    var userMonthlyData = JSON.parse(`<?php echo $monthly_usage_word; ?>`);
    var userMonthlyDataset = Object.values(userMonthlyData);
    var userMonthlyDataImage = JSON.parse(`<?php echo $monthly_usage_image; ?>`);
    var userMonthlyDataImageset = Object.values(userMonthlyDataImage);
    let delayed1;

    new Chart("day_word_generated", {
        type: "bar",
        data: {
            labels:['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
            datasets: [{
                label: 'Words Generated',
                data: userMonthlyDataset,
                backgroundColor: '#007bff',
                borderWidth: 1,
                borderRadius: 20,
                barPercentage: 0.7,
                fill: true
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false,
                labels: {
                    display: false
                }
            },
            responsive: true,
            animation: {
                onComplete: () => {
                    delayed1 = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !delayed1) {
                        delay = context.dataIndex * 50 + context.datasetIndex * 5;
                    }
                    return delay;
                },
            },
            scales: {
                y: {
                    stacked: true,
                    ticks: {
                        beginAtZero: true,
                        font: {
                            size: 10
                        },
                        stepSize: 50000,
                    },
                    grid: {
                        color: '#ebecf1',
                        borderDash: [3, 2]                            
                    }
                },
                x: {
                    stacked: true,
                    ticks: {
                        font: {
                            size: 10
                        }
                    },
                    grid: {
                        color: '#ebecf1',
                        borderDash: [3, 2]                            
                    }
                }
            },
            plugins: {
                tooltip: {
                    cornerRadius: 10,
                    xPadding: 10,
                    yPadding: 10,
                    backgroundColor: '#000000',
                    titleColor: '#FF9D00',
                    yAlign: 'bottom',
                    xAlign: 'center',
                },
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 10,
                        font: {
                            size: 10
                        }
                    }
                }
            }
        }
    });

    new Chart("day_image_generated", {
        type: "bar",
        data: {
            labels:['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
            datasets: [{
                label: 'Image Generated',
                data: userMonthlyDataImageset,
                backgroundColor: '#F90611',
                borderWidth: 1,
                borderRadius: 20,
                barPercentage: 0.7,
                fill: true
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false,
                labels: {
                    display: false
                }
            },
            responsive: true,
            animation: {
                onComplete: () => {
                    delayed1 = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !delayed1) {
                        delay = context.dataIndex * 50 + context.datasetIndex * 5;
                    }
                    return delay;
                },
            },
            scales: {
                y: {
                    stacked: true,
                    ticks: {
                        beginAtZero: true,
                        font: {
                            size: 10
                        },
                        stepSize: 50000,
                    },
                    grid: {
                        color: '#ebecf1',
                        borderDash: [3, 2]                            
                    }
                },
                x: {
                    stacked: true,
                    ticks: {
                        font: {
                            size: 10
                        }
                    },
                    grid: {
                        color: '#ebecf1',
                        borderDash: [3, 2]                            
                    }
                }
            },
            plugins: {
                tooltip: {
                    cornerRadius: 10,
                    xPadding: 10,
                    yPadding: 10,
                    backgroundColor: '#000000',
                    titleColor: '#FF9D00',
                    yAlign: 'bottom',
                    xAlign: 'center',
                },
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 10,
                        font: {
                            size: 10
                        }
                    }
                }
            }
        }
    });
});
</script>
@endsection