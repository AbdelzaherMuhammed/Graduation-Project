@extends('front.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/w3.css')  }}">
    <link rel="stylesheet" href="{{ asset('front/css/loading-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/train.css')}}">

@endsection

@section('title', 'Homepage')

@section('content')

    <!-- main sideBar -->
    <div class="w3-sidebar w3-bar-block  rounded sidemain" style="width:200px">
        <p class="text-center pt-4">Assistant system for neurological disorders Alzheimer's and Parkinson's disorders</p>
        <hr>


        <button class="w3-bar-item  tablink mb-3 " onclick="openLink(event, 'test')"><i class="fa fa-flag mr-4"></i>Diagnosis</button>
        <button class="w3-bar-item  tablink mb-3 " onclick="openLink(event, 'About')"> <i class="fa fa-users mr-4"></i>
            About US</button>

        <!-- <button class="w3-bar-item  tablink mb-3 " onclick="openLink(event, 'hist')"><i
            class="fa fa-history mr-4"></i>history test</button> -->

        <!-- <button class="w3-bar-item  tablink mb-3 " onclick="openLink(event, 'lab')"><i
            class="fa fa-briefcase-medical mr-4"></i>Laboratories</button> -->

        <!-- <button class="w3-bar-item  tablink mb-3 " onclick="openLink(event, 'memory')"><i
            class="fa fa-microchip mr-4"></i>Memory tests</button> -->


        <button class="w3-bar-item  tablink mb-3 " onclick="openLink(event, 'art')"><i class="fa fa-book mr-4"></i>Brain Health</button>

        <button class="w3-bar-item  tablink mb-3 " onclick="openLink(event, 'set')"><i class="fa fa-cogs mr-4"></i>Settings</button>

    </div>


    <div style="margin-left:190px">

        <div id="About" class="w3-container parts w3-animate-opacity" style="display:none">

            <div class="tab2 shadow-lg ">
                <!-- <button class="tablinks2" onclick="tabn2(event, 'tutorial')">Tutorials</button> -->
                <button class="tablinks2" onclick="tabn2(event, 'features')">Tools</button>
                <button class="tablinks2" onclick="tabn2(event, 'organization')">Sponsors</button>
            </div>
            <hr>

            <!-- Features part -->

            <div id="features" class="tabcontent2  w3-animate-zoom">
                <div class="container">
                    <div class="jumbotron rounded">
                        <h3>Features</h3>
                        <hr>
                        <div class="row">

                            @foreach($tools as $tool)
                                <div class="col-lg-3">
                                    <div class="card mb-2  ">
                                        <div class="media px-3">
                                            <img src="{{ asset($tool->photo) }} " style="width: 61px;height: 59px" class="p-1 align-self-center   " alt="">
                                            <div class="ml-1 text-muted">
                                                <p>{{ $tool->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- First  -->
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>


            <!-- organization part -->

            <div id="organization" class="tabcontent2 w3-animate-zoom">

                <div class="container">
                    <div class="row">

                        @foreach($sponsors as $sponsor)
                            <div class="col-lg-12">
                                <div class="card mb-2">
                                    <div class="media">
                                        <img src="{{ asset($sponsor->photo) }}" width="150px" class="img-fluid align-self-center p-2"
                                             alt="">
                                        <div class="media-body">
                                            <p class="mt-3 text-justify p-2">{{ $sponsor->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <!--Row-->
            </div>
            <!--Container-->
        </div>






        <!--  About Finished   -->





        <div id="test" class="w3-container parts w3-animate-left">

            <div class="tab3 shadow-lg ">
                <button class="tablinks3" onclick="tabn3(event, 'diag')">Diagnosis Part</button>

                <button class="tablinks3" onclick="tabn3(event, 'tutorial+')">Tutorials</button>
                <button class="tablinks3" onclick="tabn3(event, 'labs+')">Laboratories</button>
                <button class="tablinks3" onclick="tabn3(event, 'Hist++')">Diagnosis History</button>
            </div>
            <hr>

            <div id="diag" class="tabcontent3 w3-animate-zoom" style="display: block;">

                <div class="form-container">
                    <form action="" role="form">
                        <input id='step2' type='checkbox'>
                        <input id='step22' type='checkbox'>
                        <input id='step3' type='checkbox'>
                        <input id='step4' type='checkbox'>
                        <input id='step5' type='checkbox'>

                        <!-- <div id="part1" class="form-group">
                          <div class="container">


                            <div>
                              <div id="Left" class="left">
                                <h1>Suspected Disease</h1>
                                <p>The disease that you suspect you suffer from </p>
                                <div class=" btns ">
                                  <label for='step2' id="continue-step3" class="continue">
                                    <div class="btna mb-4" role="button">Alzahimer </div>
                                  </label><br>
                                  <label for='step22' id="continue-step3" class="continue">
                                    <div class="btnb" role="button">Parkinson </div>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->







                        <div id="part2" class="form-group">


                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">



                                        <div class="qu">
                                            <h1>Answer the following questions</h1>
                                            <p>The questions contain the two diseases randomly</p>

                                            <div style="margin-left: 8%;">


                                                <table class="table">
                                                    <tr>
                                                        <td></td>
                                                        <td> Yes </td>
                                                        <td> No </td>
                                                    </tr>

                                                    @foreach($questions as $index => $question)
                                                        @if($question->type == 'mcq')
                                                            <tr>
                                                                <td>{{ $question->name }} </td>
                                                                <td><input type="radio" value="yes" name="answer_{{ $index }}" id="{{ $index }}"> </td>
                                                                <td> <input type="radio" value="no" name="answer_{{ $index }}" name="1" id="{{ $index }}"> </td>
                                                            </tr>

                                                        @else
                                                            <tr>
                                                                <td>{{ $question->name }} </td>
                                                                <td>
                                                                    {!! Form::textarea('answer', null, [
                                                                        'class' =>'form-control',
                                                                        'rows' => 4,
                                                                        'requried'
                                                                    ]) !!}
                                                                </td>
                                                            </tr>
                                                        @endif

                                                    @endforeach
                                                </table>


                                                <div style="margin-left: 25%; margin-top: 7%; ">

                                                    <!-- <label for='step2' id="back-step2" class="back">
                                                      <div class=" btn btn-primary px-3 py-3 mr-2 " role="button"> <i
                                                          class="fa fa-arrow-left mr-2"></i> Back</div>
                                                    </label> -->


                                                    <label for='step3' id="continue-step3" class="continue">
                                                        <div class="btn btn-primary px-5 py-3 mr-2 " role="button">Continue <i
                                                                    class="fa fa-arrow-right ml-2"></i></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Column-->
                                </div>
                                <!--row-->



                            </div>
                            <!---->
                        </div>

                        <div id="part3" class="form-group">


                            <div class="container circ">
                                <h1 class="text-primary">You already have a high risk of Alzheimer's and Parkinson's disease as Your score is <b>10</b></h1>
                                <p>If you have a x-ray, you can click on Next button,or if you do not have this scan, you <br> can view
                                    the reliable laboratories that you can deal with </p>

                                <div class="mt-3 mb-5 alz text-center p-3" >
                                    <h5>Alzhimer Disease</h5>
                                    <div class="ldBar label-center mx-auto" data-preset='circle' data-value='85.62'></div>

                                </div>

                            </div>
                            <div style="margin-left: 31%; margin-top: 7%; ">

                                <label for='step3' id="back-step3" class="back">
                                    <div class="btn btn-primary px-5 py-3 mr-2"> <i class="fa fa-arrow-left mr-2"></i> Back </div>
                                </label>

                                <label for='step4' id="continue-step3" class="continue">
                                    <div class="btn btn-primary px-5 py-3 mr-2 " role="button">Continue <i
                                                class="fa fa-arrow-right ml-2"></i> </div>
                                </label>

                            </div>



                        </div> <!-- Page 3 -->






                        <div id="part4" class="form-group">


                            <div>
                                <div class="insert">
                                    <h1>Insert a x-ray </h1>
                                    <p>There are educational videos on how to deal with x-ray images<br>
                                        and easily enter them into <span style="color: #1592E6;">Home</span> page </p>


                                    <p class="text-center" style=" margin-top: 14%; ">Click Here To Insert Images <input type="file"
                                                                                                                         class=" btn " name="" id=""> <i class="fa fa-paperclip fa-2x text-primary"></i></p>


                                    <div style="margin-left: 30%; margin-top: 7%;">
                                        <label for='step4' id="back-step2" class="back">
                                            <div class=" btn btn-primary px-5 py-3 mr-2" role="button"><i class="fa fa-arrow-left mr-2"></i>Back
                                            </div>
                                        </label>


                                        <label for='step5' id="continue-step3" class="continue">
                                            <div class="btn btn-primary px-5 py-3 mr-2 " role="button">Continue <i
                                                        class="fa fa-arrow-right ml-2"></i></div>
                                        </label>

                                    </div>


                                </div>

                            </div>
                        </div>




                        <div id="part5" class="form-group">



                            <div style="margin-left:2%">
                                <div class="result">
                                    <h1>The results are more detailed </h1>
                                    <p>These results are detailed for each area in which<br>
                                        there are suspicions</p>

                                    <div class="pro w-50 ">
                                        <label>MRI Result</label><br>
                                        <span>Serious Cognitive Problem </span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 83.7%" aria-valuenow="80" aria-valuemin="0"
                                                 aria-valuemax="100">83.7%</div>
                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div><br>

                                    </div>
                                    <div style="margin-left: 30%; margin-top: 7%;" class="fi">


                                        <label>
                                            <div class="btn btn-primary px-5 py-3 mr-2 " role="button"><a href="train.html"
                                                                                                          style="text-decoration: none;"> Return To Home Page </a> <i class="fa fa-home ml-2"></i> </div>
                                        </label>

                                    </div>



                                </div>

                            </div>

                        </div>

                    </form>
                </div>

            </div>

            <div id="tutorial+" class="tabcontent3 w3-animate-zoom">

                <div class="container tuto">
                    <div class="row">

                        @foreach($tutorials as $index => $tutorial)

                            @if($index % 2 == 1)

                                <div class="col-lg-5 mb-4">
                                    <video src="{{ asset($tutorial->video) }}" poster="{{ asset('front/imgs/v3.jpg') }}" width="100%" height="100%" controls></video>
                                </div>

                                <div class="col-lg-7 mb-3">
                                    <div class="d-flex">
                                        <p> <i class="fa fa-arrow-right mr-3 bg-info rounded-circle p-2 mt-5 text-light"></i> </p>
                                        <p class=" p-3 border vidc"> {{ $tutorial->description }} </p>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-7 mb-3">
                                    <div class="d-flex">
                                        <p> <i class="fa fa-arrow-right mr-3 bg-info rounded-circle p-2 mt-5 text-light"></i> </p>
                                        <p class=" p-3 border vidc"> {{ $tutorial->description }} </p>
                                    </div>
                                </div>

                                <div class="col-lg-5 border mb-4">
                                    <video src="{{ asset($tutorial->video) }}" poster="{{ asset('front/imgs/v3.jpg') }}" width="100%" height="100%" controls></video>
                                </div>

                            @endif

                        @endforeach

                    </div>
                    <!--Row-->
                </div>
                <!--Container-->
            </div>



            <div id="labs+" class="tabcontent3 w3-animate-zoom">

                <div class=" labs">
                    <div class="row">

                        @foreach($labs as $lab)
                            <div class="col-lg-4">
                                <div class="card mt-5 p-2">
                                    <div class="media">
                                        <h2>{{ $lab->name }} </h2>
                                        <img src="{{ asset($lab->photo) }}" class="img-fluid ml-auto align-self-center" alt="">
                                    </div>
                                    <p class="text-muted"> {{ $lab->type }}</p>
                                    <p>{{ $lab->description }}</p>
                                    <div class="card-footer">
                                        <div class="btn-group">
                                            <button class="btn btn-outline-success px-4"> Call </button>
                                            <button class="btn btn-outline-info px-4"> Message </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



            </div>



            <div id="Hist++" class="tabcontent3 w3-animate-zoom">

                <div class="container circl">

                    <h3 class="text-secondary"> History Tests </h3>
                    <hr>

                    <div class="mt-3 mb-5 alz text-center p-3">
                        <h5>Alzhimer Disease</h5>
                        <div class="ldBar label-center mx-auto" data-preset='circle' data-value='90'></div>

                    </div>

                    <div class="mt-3 par text-center p-3 ">
                        <h5>Parkinson Disease</h5>
                        <div class="ldBar label-center mx-auto" data-preset='circle' data-value='70'></div>

                    </div>

                </div>


            </div>



        </div>


        <!--start test -->
        <!-- <div id="hist" class="w3-container parts w3-animate-top" style="display:none">



          <div class="container circ">

            <h3 class="text-secondary"> History Tests </h3>
            <hr>

            <div class="mt-3 mb-5 alz text-center p-3">
              <h5>Alzhimer Disease</h5>
              <div class="ldBar label-center mx-auto" data-preset='circle' data-value='90'></div>

            </div>

            <div class="mt-3 par text-center p-3 ">
              <h5>Parkinson Disease</h5>
              <div class="ldBar label-center mx-auto" data-preset='circle' data-value='70'></div>

            </div>

          </div>
        </div>    -->





        <!-- Labs -->

        <!-- <div id="lab" class="w3-container parts w3-animate-zoom" style="display:none">


          <div class="container labs">
            <div class="row">


              <div class="col-lg-4">
                <div class="card mt-5 p-2">
                  <div class="media">
                    <h2>el moktabar </h2>
                    <img src="imgs/m.png" class="img-fluid ml-auto align-self-center" alt="">
                  </div>
                  <p class="text-muted"> Laboratory</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, est! Rem, inventore impedit quasi
                    totam perferendis numquam quisquam aliquid soluta!</p>
                  <div class="card-footer">
                    <div class="btn-group">
                      <button class="btn btn-outline-success px-5 "> Call </button>
                      <button class="btn btn-outline-info px-5"> Message </button>
                    </div>
                  </div>
                </div>

              </div>


              <div class="col-lg-4">
                <div class="card mt-5 p-2">
                  <div class="media">
                    <h2>el moktabar </h2>
                    <img src="imgs/m.png" class="img-fluid ml-auto align-self-center" alt="">
                  </div>
                  <p class="text-muted"> Laboratory</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, est! Rem, inventore impedit quasi
                    totam perferendis numquam quisquam aliquid soluta!</p>
                  <div class="card-footer">
                    <div class="btn-group">
                      <button class="btn btn-outline-success px-5 "> Call </button>
                      <button class="btn btn-outline-info px-5"> Message </button>
                    </div>
                  </div>
                </div>

              </div>


              <div class="col-lg-4">
                <div class="card mt-5 p-2">
                  <div class="media">
                    <h2>el moktabar </h2>
                    <img src="imgs/m.png" class="img-fluid ml-auto align-self-center" alt="">
                  </div>
                  <p class="text-muted"> Laboratory</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, est! Rem, inventore impedit quasi
                    totam perferendis numquam quisquam aliquid soluta!</p>
                  <div class="card-footer">
                    <div class="btn-group">
                      <button class="btn btn-outline-success px-5 "> Call </button>
                      <button class="btn btn-outline-info px-5"> Message </button>
                    </div>
                  </div>
                </div>

              </div>


              <div class="col-lg-4">
                <div class="card mt-5 p-2">
                  <div class="media">
                    <h2>el moktabar </h2>
                    <img src="imgs/m.png" class="img-fluid ml-auto align-self-center" alt="">
                  </div>
                  <p class="text-muted"> Laboratory</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, est! Rem, inventore impedit quasi
                    totam perferendis numquam quisquam aliquid soluta!</p>
                  <div class="card-footer">
                    <div class="btn-group">
                      <button class="btn btn-outline-success px-5 "> Call </button>
                      <button class="btn btn-outline-info px-5"> Message </button>
                    </div>
                  </div>
                </div>

              </div>


              <div class="col-lg-4">
                <div class="card mt-5 p-2">
                  <div class="media">
                    <h2>el moktabar </h2>
                    <img src="imgs/m.png" class="img-fluid ml-auto align-self-center" alt="">
                  </div>
                  <p class="text-muted"> Laboratory</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, est! Rem, inventore impedit quasi
                    totam perferendis numquam quisquam aliquid soluta!</p>
                  <div class="card-footer">
                    <div class="btn-group">
                      <button class="btn btn-outline-success px-5 "> Call </button>
                      <button class="btn btn-outline-info px-5"> Message </button>
                    </div>
                  </div>
                </div>

              </div>


              <div class="col-lg-4">
                <div class="card mt-5 p-2">
                  <div class="media">
                    <h2>el moktabar </h2>
                    <img src="imgs/m.png" class="img-fluid ml-auto align-self-center" alt="">
                  </div>
                  <p class="text-muted"> Laboratory</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, est! Rem, inventore impedit quasi
                    totam perferendis numquam quisquam aliquid soluta!</p>
                  <div class="card-footer">
                    <div class="btn-group">
                      <button class="btn btn-outline-success px-5 "> Call </button>
                      <button class="btn btn-outline-info px-5"> Message </button>
                    </div>
                  </div>
                </div>

              </div>


            </div>
          </div>




        </div> -->

        <!-- Labs -->





        <!-- Memory Tests && games -->

        <!-- <div id="memory" class="w3-container parts w3-animate-bottom" style="display:none">

          <div class="container">
            <h2 class="text-muted">Memory Tests</h2>
            <hr>
            <div class="row">


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/1.png" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>
              </div>


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/2.jpg" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>

              </div>


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/3.png" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>

              </div>


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/4.png" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>

              </div>


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/3.png" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>

              </div>


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/1.png" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>

              </div>


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/4.png" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>

              </div>


              <div class="col-lg-3 mb-5">
                <a href="https://www.crazygames.com/c/puzzle" target="blank"><img src="imgs/2.jpg" class="img-fluid "
                    alt=""> </a>
                <h3 class="text-center"> <a href="https://www.crazygames.com/c/puzzle" target="blank">Tab to play</a> </h3>

              </div>

            </div>
          </div>

        </div> -->

        <!-- Memory Tests -->






        <div id="art" class="w3-container parts w3-animate-zoom" style="display:none">

            <h2 class="text-primary ml-4" >Helpful Articles</h2>
            <hr>

            @foreach($articles as $article)
                <button class="accordion ">{{ $article->name }}</button>
                <div class="panel">
                    <p>{{ $article->description }}</p>
                </div>
            @endforeach

        </div>
        <!--Articles-->



        <div id="set" class="w3-container parts w3-animate-bottom" style="display:none">

            {!! Form::model(auth()->user(), [
                'url' => route('patient.login', auth()->id())
            ]) !!}
            <h1 class="justify-content-center" style="text-align: center">Edit Personal Info</h1>
            <hr>
            <div class="form-group  prs" style="margin-left: 20%">
                <label class="text-muted">Full Name:</label>
                {!! Form::text('full_name', null, [
                    'class' => 'form-control w-75',
                    'placeholder' => 'Full Name:'
                ]) !!}
                @error('full_name')
                <small class="text-danger">{{ $message }}</small> <br>
                @enderror

                <label class="text-muted">Username:</label>
                {!! Form::text('username', null, [
                    'class' => 'form-control w-75',
                    'placeholder' => 'Username:'
                ]) !!}
                @error('username')
                <small class="text-danger">{{ $message }}</small> <br>
                @enderror

                <label class="text-muted">Gender:</label>
                {!! Form::select('gender', gender(), null, [
                    'placeholder' => 'I\'m a',
                    'id' => 'exampleFormControlSelect1',
                    'class' => 'form-control w-75',
                    'required'
                ]) !!}
                @error('gender')
                <small class="text-danger">{{ $message }}</small> <br>
                @enderror

                <label class="text-muted">Date Of Birth:</label>
                <div class="form-inline dat">

                    {!! Form::date('date_of_birth', null, [
                        'class' => 'form-control mt-2 w-75'
                    ]) !!}
                    @error('date_of_birth')
                    <small class="text-danger">{{ $message }}</small> <br>
                    @enderror

                </div>

                {!! Form::close() !!}



            </div>

        </div>

        @endsection

        @push('scripts')

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
            </script>

            <script>
                function tabn3(evt, top) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent3");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks3");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(top).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>

            <script>
                function tabn2(evt, top) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent2");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks2");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(top).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>

            <script>
                function openLink(evt, sides) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("parts");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace("active", "");
                    }
                    document.getElementById(sides).style.display = "block";
                    evt.currentTarget.className += "active";
                }
            </script>

            <script src="{{ asset('front/js/loading-bar.js') }}"></script>

    @endpush