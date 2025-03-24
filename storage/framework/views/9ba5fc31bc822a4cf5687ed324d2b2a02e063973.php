

<?php $__env->startSection('style'); ?>
    <style>
        .icon-shape{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-end{
            display: flex;
            justify-content: flex-end;
        }
        .rounded-circle{
            margin-right: 20px;
        }
        .mb-4,.mb-xl-0{
            margin-bottom: 1em !important;
        }
        .my-4{
            margin: 1em 0;
        }
        .mt-4{
            margin-top: 1em;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <a href="<?php echo e(route('user.index')); ?>" class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($user_count-1); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/User.svg')); ?>"/>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <a href="<?php echo e(url('dashboard/template')); ?>" class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Template</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($template_count); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Category.svg')); ?>"/>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <a href="<?php echo e(url('dashboard/plan')); ?>" class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Subscription</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($subscription_count); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Festival.svg')); ?>"/>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <a href="<?php echo e(url('dashboard/support-requests')); ?>" class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Support Request</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($support_request_count); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Business.svg')); ?>"/>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <a href="<?php echo e(url('dashboard/support-requests')); ?>" class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Support Request</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($support_request_count); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Business.svg')); ?>"/>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div  class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Payment</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e(App\Models\PaymentSetting::getPaymentSetting('currency')); ?> <?php echo e($today_payment); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Today Payment.svg')); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Weekly Payment</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e(App\Models\PaymentSetting::getPaymentSetting('currency')); ?> <?php echo e($weekly_payment); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Weekly Payment.svg')); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Monthly Payment</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e(App\Models\PaymentSetting::getPaymentSetting('currency')); ?> <?php echo e($monthly_payment); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Monthly Payment.svg')); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row" >
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Payment</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e(App\Models\PaymentSetting::getPaymentSetting('currency')); ?> <?php echo e($transaction_count); ?>

                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <img src="<?php echo e(asset('assets/images/icon/Total Payment.svg')); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="row mt-4">
        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Monthly Payment Report</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="myChart" style="width:100%;max-width:800px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Monthly User Report</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="myChart1" style="width:100%;max-width:800px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-4 mt-4">
        <div class="col-xl-6">
            <div class="card card-primary">
                <div class="card-header text-center border-bottom">
                    <h5><b>Recent Register User</b></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($u->email != "demo2023@gmail.com"): ?>
                            <li class="list-group-item">
                                <div class="d-flex flex-row">
                                    <img class="rounded-circle border border-primary my-auto" src="<?php if($u->image): ?> <?php if(substr($u->image, 0, 4)=='http'): ?> <?php echo e($u->image); ?> <?php else: ?> <?php echo e(asset('uploads/'.$u->image)); ?> <?php endif; ?> <?php else: ?> <?php echo e(asset('assets/images/no-user.jpg')); ?> <?php endif; ?>" style="height:60px;width:60px;">
                                    <div class="d-flex flex-column ml-3">
                                        <span class="d-block font-weight-bold my-auto name"><a href="<?php echo e(url('dashboard/user/'.$u->id)); ?>" class="text-dark" style="font-size:18px;"><?php echo e($u->name); ?></a></span>
                                        <span class="date text-muted" style="font-size:15px;">
                                <?php
                                    $time_ago = strtotime($u->created_at);
                                    $cur_time   = time();
                                    $time_elapsed   = $cur_time - $time_ago;
                                    $seconds    = $time_elapsed ;
                                    $minutes    = round($time_elapsed / 60 );
                                    $hours      = round($time_elapsed / 3600);
                                    $days       = round($time_elapsed / 86400 );
                                    $weeks      = round($time_elapsed / 604800);
                                    $months     = round($time_elapsed / 2600640 );
                                    $years      = round($time_elapsed / 31207680 );
                                    // Seconds
                                    if($seconds <= 60){
                                        echo "just now";
                                    }
                                    //Minutes
                                    else if($minutes <=60){
                                        if($minutes==1){
                                            echo "1 minute ago";
                                        }
                                        else{
                                            echo "$minutes minutes ago";
                                        }
                                    }
                                    //Hours
                                    else if($hours <=24){
                                        if($hours==1){
                                            echo "1 hour ago";
                                        }else{
                                            echo "$hours hrs ago";
                                        }
                                    }
                                    //Days
                                    else if($days <= 7){
                                        if($days==1){
                                            echo "yesterday";
                                        }else{
                                            echo "$days days ago";
                                        }
                                    }
                                    //Weeks
                                    else if($weeks <= 4.3){
                                        if($weeks==1){
                                            echo "1 week ago";
                                        }else{
                                            echo "$weeks weeks ago";
                                        }
                                    }
                                    //Months
                                    else if($months <=12){
                                        if($months==1){
                                            echo "1 month ago";
                                        }else{
                                            echo "$months months ago";
                                        }
                                    }
                                    //Years
                                    else{
                                        if($years==1){
                                            echo "1 year ago";
                                        }else{
                                            echo "$years years ago";
                                        }
                                    }
                                ?>
                                </span>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="card-footer text-center">
                    <a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card card-primary">
                <div class="card-header text-center border-bottom">
                    <h5><b>Recent Purchase</b></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="d-flex flex-row">
                                <img class="rounded-circle border border-primary my-auto" src="<?php if($t->user->image): ?> <?php if(substr($t->user->image, 0, 4)=='http'): ?> <?php echo e($t->user->image); ?> <?php else: ?> <?php echo e(asset('uploads/'.$t->user->image)); ?> <?php endif; ?> <?php else: ?> <?php echo e(asset('assets/images/no-user.jpg')); ?> <?php endif; ?>" style="height:60px;width:60px;">
                                <div class="d-flex flex-column ml-2">
                                    <span class="d-block font-weight-bold my-auto name"><a href="<?php echo e(url('dashboard/user/'.$t->user->id)); ?>" class="text-dark" style="font-size:18px;"><?php echo e($t->user->name); ?></a></span>
                                    <span class="date text-muted" style="font-size:15px;">
                            <?php
                                $time_ago = strtotime($t->created_at);
                                $cur_time   = time();
                                $time_elapsed   = $cur_time - $time_ago;
                                $seconds    = $time_elapsed ;
                                $minutes    = round($time_elapsed / 60 );
                                $hours      = round($time_elapsed / 3600);
                                $days       = round($time_elapsed / 86400 );
                                $weeks      = round($time_elapsed / 604800);
                                $months     = round($time_elapsed / 2600640 );
                                $years      = round($time_elapsed / 31207680 );
                                // Seconds
                                if($seconds <= 60){
                                    echo "just now";
                                }
                                //Minutes
                                else if($minutes <=60){
                                    if($minutes==1){
                                        echo "1 minute ago";
                                    }
                                    else{
                                        echo "$minutes minutes ago";
                                    }
                                }
                                //Hours
                                else if($hours <=24){
                                    if($hours==1){
                                        echo "1 hour ago";
                                    }else{
                                        echo "$hours hrs ago";
                                    }
                                }
                                //Days
                                else if($days <= 7){
                                    if($days==1){
                                        echo "yesterday";
                                    }else{
                                        echo "$days days ago";
                                    }
                                }
                                //Weeks
                                else if($weeks <= 4.3){
                                    if($weeks==1){
                                        echo "1 week ago";
                                    }else{
                                        echo "$weeks weeks ago";
                                    }
                                }
                                //Months
                                else if($months <=12){
                                    if($months==1){
                                        echo "1 month ago";
                                    }else{
                                        echo "$months months ago";
                                    }
                                }
                                //Years
                                else{
                                    if($years==1){
                                        echo "1 year ago";
                                    }else{
                                        echo "$years years ago";
                                    }
                                }
                            ?>
                            </span>
                                </div>
                            </div>
                            <?php $color =["primary","secondary","success","danger","warning","info"] ?>
                            <div class="d-flex flex-column my-auto">
                                <div><button type="button" class="btn btn-<?php echo e($color[$key]); ?>"><?php echo e($t->total_paid); ?> USD</button></div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="card-footer text-center">
                    <a href="<?php echo e(url('dashboard/all-transaction')); ?>" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('dashboard'); ?>
    <script>
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection("script"); ?>
    <script src="<?php echo e(asset('assets/js/cdn/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/cdn/canvasjs.min.js')); ?>"></script>
    <script>
        $( document ).ready(function() {
            $('#paymentReportYear').select2();
            $('#userReportYear').select2();

            $("#paymentReportYear").change(function(){
                var year = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?php echo e(url('dashboard/get-monthly-payment-report')); ?>",
                    data: { year : year},
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function(getData) {
                        new Chart("myChart", {
                            type: "line",
                            data: {
                                labels: [
                                    $.each(getData, function(key,val) {
                                        val.count+","
                                    })
                                ],
                                datasets: [{
                                    data: [
                                        $.each(getData, function(key,val) {
                                            "<?php echo e("+val.count+"); ?>,"
                                        })
                                    ],
                                    borderColor: "blue",
                                    fill: false,
                                }]
                            },
                            options: {
                                legend: {display: false},
                                scales : {
                                    yAxes : [ {
                                        gridLines : {
                                            display : false
                                        }
                                    } ]
                                },
                                tooltips: {
                                    yPadding: 10,
                                    xPadding: 10,
                                    backgroundColor: 'white',
                                    titleFontColor: 'black',
                                    bodyFontColor: 'black',
                                    cornerRadius: 5,
                                    borderColor: '#ced5e1',
                                    borderWidth: 1,
                                    callbacks: {
                                        title: function(tooltipItems, data) {
                                            $.each(getData, function(key,val) {
                                                if(tooltipItems[0].xLabel == val.month)
                                                {
                                                    return val.fullMonth;
                                                }
                                            })
                                        },
                                        label: function (tooltipItems, data) {
                                            if(tooltipItems.yLabel >= 1000)
                                            {
                                                return Number((tooltipItems.yLabel / 1000)).toFixed(1) + 'K';
                                            }
                                            if(tooltipItems.yLabel >= 1000000)
                                            {
                                                return Number((tooltipItems.yLabel / 1000000)).toFixed(1) + 'M';
                                            }
                                            if(tooltipItems.yLabel >= 1000000000)
                                            {
                                                return Number((tooltipItems.yLabel / 1000000000)).toFixed(1) + 'B';
                                            }
                                            if(tooltipItems.yLabel >= 1000000000000)
                                            {
                                                return Number((tooltipItems.yLabel / 1000000000000)).toFixed(1) + 'T';
                                            }
                                            if(tooltipItems.yLabel < 1000)
                                            {
                                                return tooltipItems.yLabel;
                                            }
                                        }
                                    }
                                },
                            }
                        });
                    },
                });
            });

            new Chart("myChart", {
                type: "line",
                data: {
                    labels: [<?php $__currentLoopData = $payment_chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> "<?php echo e($data['month']); ?>", <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
                    datasets: [{
                        data: [<?php $__currentLoopData = $payment_chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data['count']); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
                        borderColor: "blue",
                        fill: false,
                    }]
                },
                options: {
                    legend: {display: false},
                    scales : {
                        yAxes : [ {
                            gridLines : {
                                display : false
                            }
                        } ]
                    },
                    tooltips: {
                        yPadding: 10,
                        xPadding: 10,
                        backgroundColor: 'white',
                        titleFontColor: 'black',
                        bodyFontColor: 'black',
                        cornerRadius: 5,
                        borderColor: '#ced5e1',
                        borderWidth: 1,
                        callbacks: {
                            title: function(tooltipItems, data) {
                                <?php $__currentLoopData = $payment_chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                if(tooltipItems[0].xLabel == "<?php echo e($data['month']); ?>")
                                {
                                    return "<?php echo e($data['fullMonth']); ?>";
                                }
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            },
                            label: function (tooltipItems, data) {
                                if(tooltipItems.yLabel >= 1000)
                                {
                                    return Number((tooltipItems.yLabel / 1000)).toFixed(1) + 'K';
                                }
                                if(tooltipItems.yLabel >= 1000000)
                                {
                                    return Number((tooltipItems.yLabel / 1000000)).toFixed(1) + 'M';
                                }
                                if(tooltipItems.yLabel >= 1000000000)
                                {
                                    return Number((tooltipItems.yLabel / 1000000000)).toFixed(1) + 'B';
                                }
                                if(tooltipItems.yLabel >= 1000000000000)
                                {
                                    return Number((tooltipItems.yLabel / 1000000000000)).toFixed(1) + 'T';
                                }
                                if(tooltipItems.yLabel < 1000)
                                {
                                    return tooltipItems.yLabel;
                                }
                            }
                        }
                    },
                }
            });

            new Chart("myChart1", {
                type: "bar",
                data: {
                    labels:[<?php $__currentLoopData = $user_chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> "<?php echo e($data['month']); ?>", <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
                    datasets: [{
                        data: [<?php $__currentLoopData = $user_chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data['count']); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
                        backgroundColor: "#ced5e1",
                        fill: false,
                        hoverBackgroundColor:"#147ad6",
                    }]
                },
                options: {
                    legend: {display: false},
                    scales : {
                        yAxes : [ {
                            gridLines : {
                                display : false
                            }
                        } ]
                    },
                    tooltips: {
                        yPadding: 10,
                        xPadding: 10,
                        backgroundColor: 'white',
                        titleFontColor: 'black',
                        bodyFontColor: 'black',
                        cornerRadius: 5,
                        borderColor: '#ced5e1',
                        borderWidth: 1,
                        callbacks: {
                            title: function(tooltipItems, data) {
                                <?php $__currentLoopData = $payment_chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                if(tooltipItems[0].xLabel == "<?php echo e($data['month']); ?>")
                                {
                                    return "<?php echo e($data['fullMonth']); ?>";
                                }
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            },
                            label: function (tooltipItems, data) {
                                if(tooltipItems.yLabel >= 1000)
                                {
                                    return Number((tooltipItems.yLabel / 1000).toString()) + 'K';
                                }
                                if(tooltipItems.yLabel >= 1000000)
                                {
                                    return Number((tooltipItems.yLabel / 1000000).toString()) + 'M';
                                }
                                if(tooltipItems.yLabel >= 1000000000)
                                {
                                    return Number((tooltipItems.yLabel / 1000000000).toString()) + 'B';
                                }
                                if(tooltipItems.yLabel >= 1000000000000)
                                {
                                    return Number((tooltipItems.yLabel / 1000000000000).toString()) + 'T';
                                }
                                if(tooltipItems.yLabel < 1000)
                                {
                                    return tooltipItems.yLabel;
                                }
                            },
                        }
                    },
                }
            });

            window.Apex = {
                dataLabels: {
                    enabled: false
                }
            };
        });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ai_for_work\resources\views/home.blade.php ENDPATH**/ ?>