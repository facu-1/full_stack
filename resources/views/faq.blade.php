@extends('layouts.master')

@section('title','F.A.Q.')

@section('cuerpo')
<div class="container py-3">
    <div class="row">
        <div class="col-12 mx-auto ">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Q: How does this work?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a
                            vertical accordion that expands and collapses as questions are toggled.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q: What is Bootstrap 4?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                            Bootstrap is the most popular CSS framework in the world. The latest version released in
                            2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q. What is another question?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to the question can go here.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Q. What is the next question?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is
                            needed.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Q. What is the next question?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is
                            needed.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Q. What is the next question?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is
                            needed.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->
</div>
@endsection