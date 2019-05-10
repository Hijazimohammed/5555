<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/bootstrap-rtl.min.css') }}" rel="stylesheet">
  
    <link href="{{ asset('Content/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/styles9093.css?v=0.02') }}" rel="stylesheet">
    <link href="{{ asset('Content/custom-red9093.css?v=0.02') }}" rel="stylesheet">
    <link href="{{ asset('Content/costum.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/bootstrap-select.min.css') }}" rel="stylesheet">

</head>

<body class="container-fluid bg-light text-dark">
    <form method=" post" action="" id="wrapper">
        <div class="container">

            <div class="container" style="direction: rtl">
                <span class="border border-primary">
                    <div class="col-lg-7 col-md-5 col-sm-3 col-xs-12 rounded" style="direction: rtl;  margin: 50px 0px;">
                        <h3>للمراجعة الآن</h3>
                        <hr>
                        @foreach($qasts as $qast)
                        <span>
                            {{$qast->qust}}
                            <hr>
                        </span>
                </span>
                <div class="questionanswers">
                    <input id="radio21" type="radio" name="answers2" value="1"><label for="radio21" class="answer1"> {{$qast->ans1}} </label><br>
                    <input id="radio22" type="radio" name="answers2" value="2"><label for="radio22" class="answer2"> {{$qast->ans2}} .</label><br>
                    <input id="radio23" type="radio" name="answers2" value="3"><label for="radio23" class="answer3"> {{$qast->ans3}}</label><br>
                    <input id="radio24" type="radio" name="answers2" value="4"><label for="radio24" class="answer4"> {{$qast->ans4}}</label><br>
                </div>

            </div>

            <div class="col-lg-3 col-md-5 col-sm-3 col-xs-12" style="direction: ltr; border: outset; display: inline;margin: 50px 30px; ">  <input type="submit" class="btn btn-success" value="انهاء وتصليح"></div>
            <div class="col-lg-3 col-md-5 col-sm-3 col-xs-12" style="direction: ltr; border: outset; display: inline;margin: 50px 30px; ">
                <img src="{{asset('storage/signals/'. $qast->signal)}}" height="180" width="50">
            </div>
            @endforeach
            <div class="col-lg-6 col-md-5 col-sm-3 col-xs-12">                {{$qasts->links()}}
            </div>


        </div>



        <script src="{{ asset('js/app.js') }}"></script>
    </form>

</body>

</html>