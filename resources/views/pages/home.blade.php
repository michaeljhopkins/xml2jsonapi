@extends('layouts.main')

@section('content')
    <a href="https://github.com/michaeljhopkins/xml2jsonapi"
       style="position: absolute; top: 0; left: 0; border: 0; z-index: 10;">
        <img src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"
             data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png">
    </a>
    <div class="header-panel shadow-z-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <h1>Xml2Json Api</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid main" style="padding-top:15px;">
        <div class="row">
            <div class="pages col-xs-9 col-xs-offset-3">
                <div class="row">
                    <div class="col-xs-10">
                        <div class="well page active" id="why">
                            <h1 class="header">Why?</h1>
                            <h3>Because XML is hard and web dev shouldn't be.</h3>

                            <p>I needed to parse several different namespaced XML returns from an external API for a
                                project I was working on. The most ideal method would be to instead parse JSON. Upon the
                                path of "how best could I manage to get JSON to work with instead of XML". One method I
                                thought of was a simple xml2json external service I could call. I found several sites
                                that did this, but non in a way that catered to API's. </p>

                            <p>This API is designed to be as simple as possible. I hope you find it to be helpful!</p>
                        </div>
                        <div class="well page active" id="how">
                            <h1 class="header">How?</h1>
                            <p>Below is the exported json from the <a
                                        href="https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?hl=en">Postman</a>
                                application for Google Chrome. I have also attached an example curl request</p>
                            <p>Don't want to use Postman? Simply make a POST request to the endpoint <a
                                        href="http://www.xml2jsonapi.com">xml2jsonapi.com</a> with two form fields. A
                                pre created xml file as a <b>File</b> input type with name <b>xml</b>, and a comma
                                seperated (no spaced) string as a <b>text</b> input with name <b>namespaces</b>.</p>
                        </div>
                        <div class="well page active" id="curl">
                            <h1 class="header">Examples</h1>
                            <h3>Using Curl</h3>
                            <pre>
                                @include('pages.curl')
                            </pre>
                            <h3>Using Postman</h3>
                            <pre>
                                @include('pages.postman')
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop