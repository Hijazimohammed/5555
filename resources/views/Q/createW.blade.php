<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/audio.css') }}" rel="stylesheet">

    <link href="{{ asset('Content/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/styles9093.css?v=0.02') }}" rel="stylesheet">
    <link href="{{ asset('Content/custom-red9093.css?v=0.02') }}" rel="stylesheet">
    <link href="{{ asset('Content/costum.css') }}" rel="stylesheet">
    <link href="{{ asset('Content/bootstrap-select.min.css') }}" rel="stylesheet">



    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body>

    <div class="container">

        <div id="MainContentDiv">


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                اضافة سؤال جديد
            </button>

            <!-- Modal -->

            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="well"> * شفوي - اضافة سؤال جديد </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{route('Qasts.storew')}}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row d-flex justify-content-center">
                                                <br>

                                            <div class="col-sm-4 form-group">
                                                <label>السؤال الاول <span class="red-dot">*</span></label>

                                                <input name="qust" type="text" id="MainContent_txtFullName"
                                                    class="form-control requiredTextField">
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label>ملف الصوت<span class="red-dot">*</span></label>
                                                <div class="input-group">
                                                    <label class="input-group-btn ">
                                                        <span class="btn btn-primary "><span
                                                                class="fa fa-folder-open"></span>&nbsp;اختر ملف...
                                                            <input type="file" name="sound" id="MainContent_fu_IDNoImg"
                                                                class=" hidden">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4 form-group">
                                                <label> الخيار رقم 1: <span class="red-dot">*</span></label>
                                                <input name="ans1" type="text" id="MainContent_txt_LicenceNo"
                                                    class="form-control requiredTextField">
                                            </div>
                                            <div class="col-sm-4 form-group">

                                                <label> الخيار رقم 3: <span class="red-dot">*</span></label>
                                                <input name="ans3" type="text" id="MainContent_txt_LicenceNo"
                                                    class="form-control requiredTextField">



                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 form-group mb-3">

                                                <label> الخيار رقم 2: <span class="red-dot">*</span></label>
                                                <input name="ans2" type="text" id="MainContent_txt_LicenceNo"
                                                    class="form-control requiredTextField">
                                            </div>
                                            <div class="col-sm-4 form-group">

                                                <label> الخيار رقم 4: <span class="red-dot">*</span></label>
                                                <input name="ans4" type="text" id="MainContent_txt_LicenceNo"
                                                    class="form-control requiredTextField">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4 form-group">
                                                <label>الاشارة<span class="red-dot">*</span></label>
                                                <div class="input-group">
                                                    <label class="input-group-btn ">
                                                        <span class="btn btn-primary "><span
                                                                class="fa fa-folder-open"></span>&nbsp;اختر ملف...
                                                            <input type="file" name="signal" id="MainContent_fu_IDNoImg"
                                                                class=" hidden"
                                                                accept=".png, .PNG, .jpg, .JPG, .jpeg, .JPEG">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 form-group">

                                                <label> الاجابة الصحيحة: <span class="red-dot ">*</span></label>

                                                <select class=" form-control custom-select" name="corectA">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="3">4</option>

                                                </select>

                                            </div>
                                        </div>

                                        <hr>

                                    </div>



                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="اضافة السؤال">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">الغاء</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>

            <h1>

            </h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">رقم#</th>
                        <th scope="col">السؤال</th>
                        <th scope="col">الاجابة</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($qasts as $qast)
                    <tr>
                        <th scope="row">{{$qast->id}} </th>
                        <td>{{$qast->qust}}</td>


                        <td> 
                                <td>{{$qast->audio}}</td>  <!-- <audio class="audio" controls="controls">
                             <source type="audio/mpeg"
                                    src="{{asset('storage/sounds/'. $qast->audio)}}">
                            </audio>-->  </td>
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>






        </div>
        <!--Footer Start-->

        <!-- Footer end -->









        <script src="http://127.0.0.1:8000/js/app.js"></script>
    </div>
    <footer>


        <div class="btm-sec2">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="10">


                </div>
            </div>
        </div>




    </footer>
</body>

</html>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/audio.js') }}"></script>