@extends('layouts.main')

@section('content')
    <a href="https://github.com/michaeljhopkins/xml2jsonapi"
       style="position: absolute; top: 0; left: 0; border: 0; z-index: 10;"><img
                src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"
                data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
    <div class="header-panel shadow-z-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <h1>Xml2Json Api</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="row">
            <nav class="col-xs-3 menu">
                <ul>
                    <li class="active withripple" data-target="#about">Material Design for Bootstrap</li>
                    <li class="withripple" data-target="#getting-started">Getting Started</li>
                    <li><a href="bootstrap-elements.html" target="_blank">Bootstrap elements <i
                                    class="mdi-action-open-in-new"></i></a>
                    </li>
                    <li class="withripple" data-target="#material-colors">Material Colors</li>
                    <li class="withripple" data-target="#checkbox">Checkbox</li>
                    <li class="withripple" data-target="#radio-button">Radio Button</li>
                    <li class="withripple" data-target="#toggle-button">Toggle Button</li>
                    <li class="withripple" data-target="#input">Input</li>
                    <li class="withripple" data-target="#fileinput">File Input</li>
                    <li class="withripple" data-target="#navbar">Navbar</li>
                    <li class="withripple" data-target="#progress-bar">Progress Bar</li>
                    <li class="withripple" data-target="#slider">Slider</li>
                    <li class="withripple">Tabs (To do)</li>
                    <li class="withripple" data-target="#button">Button</li>
                    <li class="withripple">Icon button (To do)</li>
                    <li class="withripple" data-target="#floating-action-button">Floating Action Button</li>
                    <li class="withripple" data-target="#dropdown">Dropdown (Work in progress)</li>
                    <li class="withripple" data-target="#dropdown-menu">Dropdown Menu</li>
                    <li class="withripple" data-target="#dialog">Dialog</li>
                    <li class="withripple" data-target="#shadow">Shadow</li>
                </ul>
            </nav>
            <div class="pages col-xs-9">
                <div class="row">
                    <div class="col-xs-10">
                        <div class="well page active" id="about">
                            <h1 class="header">Material Design for Bootstrap</h1>

                            <p>Material Design for Bootstrap is a theme for Bootstrap 3 which lets you use the new
                                <a href="http://www.google.com/design/spec/material-design/" target="_blank">Google
                                    Material Design</a> in your favorite front-end framework.
                            </p>

                            <p>If you like this project you can support me by donating something on Gratipay, starring
                                this repository, or
                                <a href="https://github.com/FezVrasta/bootstrap-material-design/issues">reporting bugs
                                    and ideas</a>.</p>

                            <p>Read more about Material Design for Bootstrap at the
                                <a href="https://github.com/FezVrasta/bootstrap-material-design">Github page</a>.</p>

                            <br>

                            <p>If you want support the development of this project please consider donate something:</p>
                            <a href="https://www.gratipay.com/FezVrasta/" target="_blank" class="btn btn-primary">Donate
                                with Gratipay</a>

                            <form action="https://www.paypal.com/cgi-bin/webscr" id="paypal" method="post"
                                  target="_blank" style="display: inline-block;">
                                <input type="hidden" name="cmd" value="_s-xclick">

                                <div class="btn btn-primary">
                                    <select name="hosted_button_id"
                                            title="I can't accept less than 5 euro due to accounting troubles">
                                        <option value="DAAK965W2DKYE">&euro; 5,00</option>
                                        <option value="28PH77JK5QWFE">&euro; 10,00</option>
                                        <option value="6B6TJAJ2R99HS">&euro; 15,00</option>
                                        <option value="GJCEKCQFMBVHA">&euro; 20,00</option>
                                        <option value="U7QXM95C8RJ9W">&euro; 25,00</option>
                                        <option value="55S3VBB3U4NAS">&euro; 50,00</option>
                                    </select>
                                    <input type="submit" value="DONATE WITH PAYPAL" name="submit">
                                </div>
                            </form>
                            <p>Thanks to all the people that donate me weekly on Gratipay and all the ones which has
                                donated on PayPal! You are great guys!</p>

                            <br>

                            <p>Would you like to use this theme for commercial projects? Visit
                                <a href="http://www.mywebexpression.com">MyWebExpression</a> and contact me using the
                                form on the bottom of the page. Thanks!
                            </p>

                            <br>

                            <div class="cbwrapper">
                                <script async type="text/javascript"
                                        src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=fezvrastagithubiobootstrapmateri"
                                        id="_carbonads_js"></script>
                                <div id="fakecb">Seems like you are using AdBlock to hide banners... Carbon ADS are
                                    quite nice and don't take much space, you may consider disabling it on this website.<br>This
                                    is the only AD on the entire website.<br><br>Thanks!
                                </div>
                            </div>

                            <br>

                            <p>You can get this theme downloading the source from Bower:</p>
                            <pre><code>bower install bootstrap-material-design</code></pre>


                        </div>
                        <div class="well page" id="getting-started">
                            <h1 class="header">Getting Started</h1>

                            <h3>Download</h3>
                            <hr>
                            <h4>Install with NPM - Coming Soon</h4>

                            <p>You can also install and manage Material Bootstrap using NPM</p>
                            <pre><code>npm install</code></pre>
                            <h4>Install with Bower</h4>

                            <p>You can also install and manage Material Bootstrap using Bower</p>
                            <pre><code>bower install bootstrap-material-design</code></pre>
                            <h4>Install with Meteor</h4>

                            <p>You can also install and manage Material Bootstrap using Meteor</p>
                            <pre><code>meteor add fezvrasta:bootstrap-material-design</code></pre>
                            <br/>

                            <h3>What's included</h3>
                            <hr>
                            <p>Material Bootstrap is downloadable in a two forms. Material.css only supports the primary
                                shades of the material color palette and Material-fullpalette.css supports every shade
                                of the material color palette</p>

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Required Frameworks</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <div class="row-action-primary">
                                                <i class="mdi-action-settings"></i>
                                            </div>
                                            <div class="row-content">
                                                <h4 class="list-group-item-heading">Bootstrap v3.0+</h4>

                                                <p class="list-group-item-text">This theme extends, styles, and modifies
                                                    Bootstrap's elements and styles. Without Bootstrap this project will
                                                    not display correctly. To install Bootstrap please go to
                                                    <a href="http://getbootstrap.com/getting-started/">Get Bootstrap</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="list-group-separator"></div>
                                        <div class="list-group-item">
                                            <div class="row-action-primary">
                                                <i class="mdi-action-settings"></i>
                                            </div>
                                            <div class="row-content">
                                                <h4 class="list-group-item-heading">jQuery 1.9.1+</h4>

                                                <p class="list-group-item-text">All JavaScript plugins require jQuery to
                                                    be included.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled)
                                Material Bootstrap. You'll see something like this:</p>
                            <!-- This code must be aligned this way to render correctly -->
              <pre><code class="language-bash" data-lang="bash">Material/
                      ├── css/
                      │ ├── material.css
                      │ ├── material.css.map
                      │ ├── material.min.css
                      │ ├── material.min.css.map
                      │ ├── material-wfont.css
                      │ ├── material-wfont.css.map
                      │ ├── material-wfont.min.css
                      │ ├── material-wfont.min.css.map
                      │ ├── ripples
                      │ ├── ripples.css.map
                      │ ├── ripples.min.css
                      │ ├── ripples.min.css.map
                      ├── js/
                      │ ├── material.js
                      │ ├── material.min.js
                      │ ├── material.min.js.map
                      │ ├── ripples.js
                      │ ├── ripples.min.js
                      │ ├── ripples.min.js.map
                      └── fonts/
                      ├── Material-Design-Icons.eot
                      ├── Material-Design-Icons.svg
                      ├── Material-Design-Icons.ttf
                      ├── Material-Design-Icons.woff
                      └── ADD REMAINING GOOGLE FONT FILES HERE
                  </code>
              </pre>
                            <p>Just copy the compiled CSS and JS files and the font files from the .zip and add them to
                                your site.</p>
                            <br/>

                            <p>Once copied you need to initialize the material javascript by adding the following
                                javascript to your site,</p>
                            <pre><code>$.material.init()</code></pre>
                        </div>

                        <div class="well page" id="checkbox">
                            <h1 class="header">Checkbox</h1>

                            <h2>Default
                                <small>inside a <code>.form-group</code></small>
                            </h2>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Notifications
                                    </label>
                                </div>
                                <p class="help-block">Notify me about updates to apps or games that I've downloaded</p>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked> Auto-updates
                                    </label>
                                </div>
                                <p class="help-block">Auto-update apps over wifi only</p>
                            </div>

                            <h2>Horizontal form
                                <small>with column label variations and <code>checkbox-primary</code> color</small>
                            </h2>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2" for="ch1">Touch sounds</label>
                                    <div class="col-sm-10">
                                        <div class="checkbox checkbox-primary">
                                            <label>
                                                <input id="ch1" type="checkbox" checked>
                                            </label>
                                        </div>
                                        <p class="help-block">This shows the generic label variant.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="ch3">Vibrate on touch</label>
                                    <div class="col-sm-10">
                                        <div class="checkbox checkbox-primary">
                                            <label>
                                                <input id="ch3" type="checkbox">
                                            </label>
                                        </div>
                                        <p class="help-block">This shows the <code>control-label</code> variant.</p>
                                    </div>
                                </div>
                            </form>

                            <h2>Default
                                <small>outside a <code>.form-group</code></small>
                            </h2>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Notifications
                                </label>
                            </div>
                            <p class="help-block">Without a <code>.form-group</code>, <code>.help-block</code> always
                                shows</p>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked> Auto-updates
                                </label>
                            </div>
                            <p class="help-block">Without a <code>.form-group</code>, <code>.help-block</code> sizing is
                                the same as the <code>label</code></p>

                        </div>
                        <div class="well page" id="radio-button">
                            <h1 class="header">Radio buttons</h1>

                            <h2>Default
                                <small>outside a <code>.form-group</code></small>
                            </h2>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sample1" value="option1" checked="">
                                    Always
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sample1" value="option1">
                                    Only when plugged in
                                </label>
                            </div>

                            <h2>
                                <small><code>.radio-success</code> inside a <code>.form-group</code></small>
                            </h2>
                            <div class="form-group">
                                <div class="radio radio-success">
                                    <label>
                                        <input type="radio" name="sample1" value="option1" checked="">
                                        Always
                                    </label>
                                </div>
                                <div class="radio radio-success">
                                    <label>
                                        <input type="radio" name="sample1" value="option1">
                                        Only when plugged in
                                    </label>
                                </div>
                            </div>

                            <h2>
                                <small><code>.radio-primary</code> outside a <code>.form-group</code></small>
                            </h2>
                            <div class="radio radio-primary">
                                <label>
                                    <input type="radio" name="sample2" value="option1" checked="">
                                    Auto
                                </label>
                            </div>
                            <div class="radio radio-primary">
                                <label>
                                    <input type="radio" name="sample2" value="option1">
                                    5 GHz only
                                </label>
                            </div>

                        </div>
                        <div class="well page" id="toggle-button">

                            <h1 class="header">Toggle Button</h1>

                            <div class="togglebutton">
                                <label>
                                    Wi-Fi
                                    <input type="checkbox" checked>
                                </label>
                            </div>
                            <div class="togglebutton">
                                <label>
                                    Bluetooth
                                    <input type="checkbox">
                                </label>
                            </div>

                            <h1 class="header">Toggle Button Variations</h1>

                            <div class="togglebutton togglebutton-material-pink">
                                <label>
                                    Wi-Fi
                                    <input type="checkbox" checked>
                                </label>
                            </div>
                            <div class="togglebutton togglebutton-material-deep-orange">
                                <label>
                                    Bluetooth
                                    <input type="checkbox" checked>
                                </label>
                            </div>
                        </div>
                        <div class="well page" id="input">
                            <h1 class="header">Input
                                <small><a href="http://www.google.com/design/spec/components/text-fields.html">specification</a>
                                </small>
                            </h1>

                            <div class="inputs">
                                <h2>Input label styles
                                    <small>default sizing</small>
                                </h2>

                                <div class="form-group label-static">
                                    <label for="i2" class="control-label">label-static</label>
                                    <input type="email" class="form-control" id="i2"
                                           placeholder="placeholder attribute">

                                    <p class="help-block">This is a hint as a <code>p.help-block.hint</code></p>
                                </div>

                                <div class="form-group label-floating">
                                    <label for="i5" class="control-label">label-floating</label>
                                    <input type="email" class="form-control" id="i5">
                                    <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
                                </div>

                                <div class="form-group label-placeholder">
                                    <label for="i5p" class="control-label">label-placeholder</label>
                                    <input type="email" class="form-control" id="i5p">
                                    <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
                                </div>

                                <form>
                                    <div class="form-group">
                                        <label for="i5ps" class="control-label col-sm-2">Column label</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="i5ps"
                                                   placeholder="placeholder attribute">
                                            <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
                                        </div>
                                    </div>
                                </form>
                                <br/>
                                <br/>

                                <h2>Input - floating labels
                                    <small>form-group sizing</small>
                                </h2>
                                <div class="form-group form-group-sm label-floating">
                                    <label for="i4" class="control-label">Email address form-group-sm</label>
                                    <input type="email" class="form-control" id="i4">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group label-floating">
                                    <label for="i5i" class="control-label">Email address default size</label>
                                    <input type="email" class="form-control" id="i5i">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group form-group-lg label-floating">
                                    <label for="i6" class="control-label">Email address form-group-lg</label>
                                    <input type="email" class="form-control" id="i6">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <h2>Input - static labels
                                    <small>form-group sizing</small>
                                </h2>

                                <div class="form-group form-group-sm label-static">
                                    <label for="si4" class="control-label">Email address form-group-sm</label>
                                    <input type="email" class="form-control" id="si4" placeholder="Placeholder">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group label-static">
                                    <label for="si5i" class="control-label">Email address default size</label>
                                    <input type="email" class="form-control" id="si5i" placeholder="Placeholder">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group form-group-lg label-static">
                                    <label for="si6" class="control-label">Email address form-group-lg</label>
                                    <input type="email" class="form-control" id="si6" placeholder="Placeholder">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <h2>Input - no labels
                                    <small>form-group sizing</small>
                                </h2>

                                <div class="form-group form-group-sm">
                                    <label for="si4n" class="control-label">Email address form-group-sm</label>
                                    <input type="email" class="form-control" id="si4n" placeholder="Placeholder">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group">
                                    <label for="si5in" class="control-label">Email address default size</label>
                                    <input type="email" class="form-control" id="si5in" placeholder="Placeholder">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group form-group-lg">
                                    <label for="si6n" class="control-label">Email address form-group-lg</label>
                                    <input type="email" class="form-control" id="si6n" placeholder="Placeholder">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>


                                <h2>Input -
                                    <small>floating label feedback variants</small>
                                </h2>
                                <div class="form-group has-success label-floating">
                                    <label for="f1" class="control-label">Email address has-success</label>
                                    <input type="email" class="form-control" id="f1">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group has-warning label-floating">
                                    <label for="f2" class="control-label">Email address has-warning</label>
                                    <input type="email" class="form-control" id="f2">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>

                                <div class="form-group has-error label-floating">
                                    <label for="f3" class="control-label">Email address has-error</label>
                                    <input type="email" class="form-control" id="f3">
                                    <span class="help-block">Please enter a valid email address</span>
                                </div>


                                <h2>Input - Legacy</h2>
                                <!-- Exercise backwards compatibility without form-group -->
                                <input type="text" class="form-control floating-label"
                                       placeholder="Legacy floating label as placeholder attribute"
                                       data-hint="This is a hint using a legacy <code>data-hint</code> attribute on the input">

                                <h2>Textarea</h2>

                                <div class="form-group label-floating">
                                    <label for="t1" class="control-label">Floating label</label>
                                    <textarea id="t1" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="placeholder without label"></textarea>
                                </div>

                                <!-- legacy markup -->
                                <textarea class="form-control floating-label"
                                          placeholder="legacy floating label as placeholder"></textarea>

                                <h2>Validation</h2>

                                <div class="form-group label-floating">
                                    <label for="111" class="control-label">email</label>
                                    <input type="email" class="form-control" id="111">
                                </div>
                                <div class="form-group label-floating">
                                    <label for="222" class="control-label">number</label>
                                    <input type="number" class="form-control" id="222">
                                </div>

                                <h2>Disabled</h2>

                                <div class="form-group label-floating">
                                    <label for="333" class="control-label">email</label>
                                    <input disabled type="text" class="form-control" id="333">
                                </div>
                                <div class="form-group label-floating">
                                    <label for="444" class="control-label">number</label>
                                    <input disabled type="text" class="form-control" id="444">
                                </div>

                                <h2>Hints</h2>

                                <div class="form-group label-floating">
                                    <label for="555" class="control-label">label</label>
                                    <input type="text" class="form-control" id="555">

                                    <p class="help-block">Some helpful hint</p>
                                </div>
                                <div class="form-group label-floating">
                                    <label for="676" class="control-label">label</label>
                                    <input type="email" class="form-control" id="676">

                                    <p class="help-block">A valid email contains an @ character</p>
                                </div>


                                <h2>Styling</h2>

                                <div class="form-group has-success">
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                                <div class="form-group has-success label-floating">
                                    <label for="777" class="control-label">floating label</label>
                                    <input type="text" class="form-control" id="777">
                                </div>
                            </div>
                        </div>
                        <div class="well page" id="fileinput">
                            <h1 class="header">File Input</h1>

                            <div class="form-group">
                                <label class="control-label" for="inputFile2">Static label</label>
                                <input type="file" id="inputFile2" multiple>
                                <input type="text" readonly class="form-control" placeholder="Browse2...">
                            </div>

                            <div class="form-group">
                                <!--<label class="control-label" for="inputFile3">File</label>-->
                                <input type="file" id="inputFile3" multiple>
                                <input type="text" readonly class="form-control" placeholder="Placeholder only...">
                            </div>

                            <div class="form-group">
                                <input type="file" id="inputFile4" multiple>

                                <div class="input-group">
                                    <input type="text" readonly class="form-control"
                                           placeholder="Placeholder w/input-group...">
                <span class="input-group-btn input-group-sm">
                  <button type="button" class="btn btn-fab btn-fab-mini">
                      <i class="mdi-editor-attach-file"></i>
                  </button>
                </span>
                                </div>
                            </div>
                        </div>
                        <div class="well page" id="navbar">
                            <h1 class="header">Navbar</h1>

                            <div class="navbar navbar-default">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target=".navbar-responsive-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                                    </div>
                                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="javascript:void(0)">Active</a></li>
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html"
                                                   data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Dropdown header</li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                    <li><a href="javascript:void(0)">One more separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <form class="navbar-form navbar-left">
                                            <div class="form-group">
                                                <input type="text" class="form-control col-sm-8" placeholder="Search">
                                            </div>
                                        </form>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html"
                                                   data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="navbar navbar-warning">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target=".navbar-warning-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                                    </div>
                                    <div class="navbar-collapse collapse navbar-warning-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="javascript:void(0)">Active</a></li>
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="index.html" data-target="#" class="dropdown-toggle"
                                                   data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Dropdown header</li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                    <li><a href="javascript:void(0)">One more separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <form class="navbar-form navbar-left">
                                            <div class="form-group">
                                                <input type="text" class="form-control col-sm-8" placeholder="Search">
                                            </div>
                                        </form>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="index.html" data-target="#" class="dropdown-toggle"
                                                   data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="navbar navbar-inverse">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target=".navbar-inverse-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                                    </div>
                                    <div class="navbar-collapse collapse navbar-inverse-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="javascript:void(0)">Active</a></li>
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="index.html" data-target="#" class="dropdown-toggle"
                                                   data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Dropdown header</li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                    <li><a href="javascript:void(0)">One more separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <form class="navbar-form navbar-left">
                                            <div class="form-group">
                                                <input type="text" class="form-control col-sm-8" placeholder="Search">
                                            </div>
                                        </form>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="index.html" data-target="#" class="dropdown-toggle"
                                                   data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="navbar navbar-material-light-blue-300">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target=".navbar-material-light-blue-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                                    </div>
                                    <div class="navbar-collapse collapse navbar-material-light-blue-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="javascript:void(0)">Active</a></li>
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="index.html" data-target="#" class="dropdown-toggle"
                                                   data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Dropdown header</li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                    <li><a href="javascript:void(0)">One more separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <form class="navbar-form navbar-left">
                                            <div class="form-group">
                                                <input type="text" class="form-control col-sm-8" placeholder="Search">
                                            </div>
                                        </form>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="javascript:void(0)">Link</a></li>
                                            <li class="dropdown">
                                                <a href="index.html" data-target="#" class="dropdown-toggle"
                                                   data-toggle="dropdown">Dropdown
                                                    <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="well page" id="progress-bar">
                            <h1 class="header">Progress Bar</h1>

                            <h2>Basic</h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>

                            <h2>Contextual alternatives</h2>

                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>

                            <h2>Striped</h2>

                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>

                            <h2>Animated</h2>

                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 45%"></div>
                            </div>

                            <h2>Stacked</h2>

                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                                <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                                <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                            </div>
                        </div>
                        <div class="well page" id="slider">
                            <h1 class="header">Slider</h1>

                            <div class="sample1">
                                <h2>Music, video, games &amp; other media</h2>

                                <div class="slider shor slider-material-orange"></div>

                                <h2>Notifications</h2>

                                <div class="slider shor slider-material-orange"></div>

                                <h2>Alarms</h2>

                                <div class="slider shor slider-material-orange"></div>
                            </div>

                            <div class="sample2">
                                <div class="slider svert"></div>
                                <div class="slider svert"></div>
                                <div class="slider svert"></div>
                            </div>

                            <p>Sliders are powered by <a href="http://refreshless.com/nouislider/" target="_blank">noUiSlider</a>
                            </p>
                        </div>
                        <div class="well page" id="material-colors">
                            <h1 class="header">Material Color Samples</h1>

                            <p>This is the list of all the supported color variations. Each color can be applied to
                                every element that supports variations.</p>


                            <p>
                                <b>material.css</b> includes only the primary color shades (red, pink, purple,
                                deep-purple, etc...), if you want the entire palette please use
                                <b>material-fullpalette.css</b></p>

                            <div class="sampleOthers">
                                <button type="button" class="btn btn-black btn-lg">Black</button>
                                <button type="button" class="btn btn-white btn-lg">White</button>
                            </div>
                            <div class="sampleRed">
                                <h2>
                                    <button type="button" class="btn btn-material-red btn-lg">Red</button>
                                </h2>
                                <button type="button" class="btn btn-material-red-50">050</button>
                                <button type="button" class="btn btn-material-red-100">100</button>
                                <button type="button" class="btn btn-material-red-200">200</button>
                                <button type="button" class="btn btn-material-red-300">300</button>
                                <button type="button" class="btn btn-material-red-400">400</button>
                                <button type="button" class="btn btn-material-red-500">500</button>
                                <button type="button" class="btn btn-material-red-600">600</button>
                                <button type="button" class="btn btn-material-red-700">700</button>
                                <button type="button" class="btn btn-material-red-800">800</button>
                                <button type="button" class="btn btn-material-red-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-red-A100">A100</button>
                                <button type="button" class="btn btn-material-red-A200">A200</button>
                                <button type="button" class="btn btn-material-red-A400">A400</button>
                                <button type="button" class="btn btn-material-red-A700">A700</button>
                            </div>
                            <div class="samplePink">
                                <h2>
                                    <button type="button" class="btn btn-material-pink btn-lg">Pink</button>
                                </h2>
                                <button type="button" class="btn btn-material-pink-50">050</button>
                                <button type="button" class="btn btn-material-pink-100">100</button>
                                <button type="button" class="btn btn-material-pink-200">200</button>
                                <button type="button" class="btn btn-material-pink-300">300</button>
                                <button type="button" class="btn btn-material-pink-400">400</button>
                                <button type="button" class="btn btn-material-pink-500">500</button>
                                <button type="button" class="btn btn-material-pink-600">600</button>
                                <button type="button" class="btn btn-material-pink-700">700</button>
                                <button type="button" class="btn btn-material-pink-800">800</button>
                                <button type="button" class="btn btn-material-pink-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-pink-A100">A100</button>
                                <button type="button" class="btn btn-material-pink-A200">A200</button>
                                <button type="button" class="btn btn-material-pink-A400">A400</button>
                                <button type="button" class="btn btn-material-pink-A700">A700</button>
                            </div>
                            <div class="samplePurple">
                                <h2>
                                    <button type="button" class="btn btn-material-purple btn-lg">Purple</button>
                                </h2>
                                <button type="button" class="btn btn-material-purple-50">050</button>
                                <button type="button" class="btn btn-material-purple-100">100</button>
                                <button type="button" class="btn btn-material-purple-200">200</button>
                                <button type="button" class="btn btn-material-purple-300">300</button>
                                <button type="button" class="btn btn-material-purple-400">400</button>
                                <button type="button" class="btn btn-material-purple-500">500</button>
                                <button type="button" class="btn btn-material-purple-600">600</button>
                                <button type="button" class="btn btn-material-purple-700">700</button>
                                <button type="button" class="btn btn-material-purple-800">800</button>
                                <button type="button" class="btn btn-material-purple-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-purple-A100">A100</button>
                                <button type="button" class="btn btn-material-purple-A200">A200</button>
                                <button type="button" class="btn btn-material-purple-A400">A400</button>
                                <button type="button" class="btn btn-material-purple-A700">A700</button>
                            </div>
                            <div class="sampleDeepPurple">
                                <h2>
                                    <button type="button" class="btn btn-material-deep-purple btn-lg">Deep Purple
                                    </button>
                                </h2>
                                <button type="button" class="btn btn-material-deep-purple-50">050</button>
                                <button type="button" class="btn btn-material-deep-purple-100">100</button>
                                <button type="button" class="btn btn-material-deep-purple-200">200</button>
                                <button type="button" class="btn btn-material-deep-purple-300">300</button>
                                <button type="button" class="btn btn-material-deep-purple-400">400</button>
                                <button type="button" class="btn btn-material-deep-purple-500">500</button>
                                <button type="button" class="btn btn-material-deep-purple-600">600</button>
                                <button type="button" class="btn btn-material-deep-purple-700">700</button>
                                <button type="button" class="btn btn-material-deep-purple-800">800</button>
                                <button type="button" class="btn btn-material-deep-purple-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-deep-purple-A100">A100</button>
                                <button type="button" class="btn btn-material-deep-purple-A200">A200</button>
                                <button type="button" class="btn btn-material-deep-purple-A400">A400</button>
                                <button type="button" class="btn btn-material-deep-purple-A700">A700</button>
                            </div>
                            <div class="sampleIndigo">
                                <h2>
                                    <button type="button" class="btn btn-material-indigo btn-lg">Indigo</button>
                                </h2>
                                <button type="button" class="btn btn-material-indigo-50">050</button>
                                <button type="button" class="btn btn-material-indigo-100">100</button>
                                <button type="button" class="btn btn-material-indigo-200">200</button>
                                <button type="button" class="btn btn-material-indigo-300">300</button>
                                <button type="button" class="btn btn-material-indigo-400">400</button>
                                <button type="button" class="btn btn-material-indigo-500">500</button>
                                <button type="button" class="btn btn-material-indigo-600">600</button>
                                <button type="button" class="btn btn-material-indigo-700">700</button>
                                <button type="button" class="btn btn-material-indigo-800">800</button>
                                <button type="button" class="btn btn-material-indigo-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-indigo-A100">A100</button>
                                <button type="button" class="btn btn-material-indigo-A200">A200</button>
                                <button type="button" class="btn btn-material-indigo-A400">A400</button>
                                <button type="button" class="btn btn-material-indigo-A700">A700</button>
                            </div>
                            <div class="sampleBlue">
                                <h2>
                                    <button type="button" class="btn btn-material-blue btn-lg">Blue</button>
                                </h2>
                                <button type="button" class="btn btn-material-blue-50">050</button>
                                <button type="button" class="btn btn-material-blue-100">100</button>
                                <button type="button" class="btn btn-material-blue-200">200</button>
                                <button type="button" class="btn btn-material-blue-300">300</button>
                                <button type="button" class="btn btn-material-blue-400">400</button>
                                <button type="button" class="btn btn-material-blue-500">500</button>
                                <button type="button" class="btn btn-material-blue-600">600</button>
                                <button type="button" class="btn btn-material-blue-700">700</button>
                                <button type="button" class="btn btn-material-blue-800">800</button>
                                <button type="button" class="btn btn-material-blue-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-blue-A100">A100</button>
                                <button type="button" class="btn btn-material-blue-A200">A200</button>
                                <button type="button" class="btn btn-material-blue-A400">A400</button>
                                <button type="button" class="btn btn-material-blue-A700">A700</button>
                            </div>
                            <div class="sampleLightBlue">
                                <h2>
                                    <button type="button" class="btn btn-material-light-blue btn-lg">Light Blue</button>
                                </h2>
                                <button type="button" class="btn btn-material-light-blue-50">050</button>
                                <button type="button" class="btn btn-material-light-blue-100">100</button>
                                <button type="button" class="btn btn-material-light-blue-200">200</button>
                                <button type="button" class="btn btn-material-light-blue-300">300</button>
                                <button type="button" class="btn btn-material-light-blue-400">400</button>
                                <button type="button" class="btn btn-material-light-blue-500">500</button>
                                <button type="button" class="btn btn-material-light-blue-600">600</button>
                                <button type="button" class="btn btn-material-light-blue-700">700</button>
                                <button type="button" class="btn btn-material-light-blue-800">800</button>
                                <button type="button" class="btn btn-material-light-blue-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-light-blue-A100">A100</button>
                                <button type="button" class="btn btn-material-light-blue-A200">A200</button>
                                <button type="button" class="btn btn-material-light-blue-A400">A400</button>
                                <button type="button" class="btn btn-material-light-blue-A700">A700</button>
                            </div>
                            <div class="sampleCyan">
                                <h2>
                                    <button type="button" class="btn btn-material-cyan btn-lg">Cyan</button>
                                </h2>
                                <button type="button" class="btn btn-material-cyan-50">050</button>
                                <button type="button" class="btn btn-material-cyan-100">100</button>
                                <button type="button" class="btn btn-material-cyan-200">200</button>
                                <button type="button" class="btn btn-material-cyan-300">300</button>
                                <button type="button" class="btn btn-material-cyan-400">400</button>
                                <button type="button" class="btn btn-material-cyan-500">500</button>
                                <button type="button" class="btn btn-material-cyan-600">600</button>
                                <button type="button" class="btn btn-material-cyan-700">700</button>
                                <button type="button" class="btn btn-material-cyan-800">800</button>
                                <button type="button" class="btn btn-material-cyan-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-cyan-A100">A100</button>
                                <button type="button" class="btn btn-material-cyan-A200">A200</button>
                                <button type="button" class="btn btn-material-cyan-A400">A400</button>
                                <button type="button" class="btn btn-material-cyan-A700">A700</button>
                            </div>
                            <div class="sampleTeal">
                                <h2>
                                    <button type="button" class="btn btn-material-teal btn-lg">Teal</button>
                                </h2>
                                <button type="button" class="btn btn-material-teal-50">050</button>
                                <button type="button" class="btn btn-material-teal-100">100</button>
                                <button type="button" class="btn btn-material-teal-200">200</button>
                                <button type="button" class="btn btn-material-teal-300">300</button>
                                <button type="button" class="btn btn-material-teal-400">400</button>
                                <button type="button" class="btn btn-material-teal-500">500</button>
                                <button type="button" class="btn btn-material-teal-600">600</button>
                                <button type="button" class="btn btn-material-teal-700">700</button>
                                <button type="button" class="btn btn-material-teal-800">800</button>
                                <button type="button" class="btn btn-material-teal-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-teal-A100">A100</button>
                                <button type="button" class="btn btn-material-teal-A200">A200</button>
                                <button type="button" class="btn btn-material-teal-A400">A400</button>
                                <button type="button" class="btn btn-material-teal-A700">A700</button>
                            </div>
                            <div class="sampleGreen">
                                <h2>
                                    <button type="button" class="btn btn-material-green btn-lg">Green</button>
                                </h2>
                                <button type="button" class="btn btn-material-green-50">050</button>
                                <button type="button" class="btn btn-material-green-100">100</button>
                                <button type="button" class="btn btn-material-green-200">200</button>
                                <button type="button" class="btn btn-material-green-300">300</button>
                                <button type="button" class="btn btn-material-green-400">400</button>
                                <button type="button" class="btn btn-material-green-500">500</button>
                                <button type="button" class="btn btn-material-green-600">600</button>
                                <button type="button" class="btn btn-material-green-700">700</button>
                                <button type="button" class="btn btn-material-green-800">800</button>
                                <button type="button" class="btn btn-material-green-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-green-A100">A100</button>
                                <button type="button" class="btn btn-material-green-A200">A200</button>
                                <button type="button" class="btn btn-material-green-A400">A400</button>
                                <button type="button" class="btn btn-material-green-A700">A700</button>
                            </div>
                            <div class="sampleLightGreen">
                                <h2>
                                    <button type="button" class="btn btn-material-light-green btn-lg">LightGreen
                                    </button>
                                </h2>
                                <button type="button" class="btn btn-material-light-green-50">050</button>
                                <button type="button" class="btn btn-material-light-green-100">100</button>
                                <button type="button" class="btn btn-material-light-green-200">200</button>
                                <button type="button" class="btn btn-material-light-green-300">300</button>
                                <button type="button" class="btn btn-material-light-green-400">400</button>
                                <button type="button" class="btn btn-material-light-green-500">500</button>
                                <button type="button" class="btn btn-material-light-green-600">600</button>
                                <button type="button" class="btn btn-material-light-green-700">700</button>
                                <button type="button" class="btn btn-material-light-green-800">800</button>
                                <button type="button" class="btn btn-material-light-green-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-light-green-A100">A100</button>
                                <button type="button" class="btn btn-material-light-green-A200">A200</button>
                                <button type="button" class="btn btn-material-light-green-A400">A400</button>
                                <button type="button" class="btn btn-material-light-green-A700">A700</button>
                            </div>
                            <div class="sampleLime">
                                <h2>
                                    <button type="button" class="btn btn-material-lime btn-lg">Lime</button>
                                </h2>
                                <button type="button" class="btn btn-material-lime-50">050</button>
                                <button type="button" class="btn btn-material-lime-100">100</button>
                                <button type="button" class="btn btn-material-lime-200">200</button>
                                <button type="button" class="btn btn-material-lime-300">300</button>
                                <button type="button" class="btn btn-material-lime-400">400</button>
                                <button type="button" class="btn btn-material-lime-500">500</button>
                                <button type="button" class="btn btn-material-lime-600">600</button>
                                <button type="button" class="btn btn-material-lime-700">700</button>
                                <button type="button" class="btn btn-material-lime-800">800</button>
                                <button type="button" class="btn btn-material-lime-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-lime-A100">A100</button>
                                <button type="button" class="btn btn-material-lime-A200">A200</button>
                                <button type="button" class="btn btn-material-lime-A400">A400</button>
                                <button type="button" class="btn btn-material-lime-A700">A700</button>
                            </div>
                            <div class="sampleYellow">
                                <h2>
                                    <button type="button" class="btn btn-material-yellow btn-lg">Yellow</button>
                                </h2>
                                <button type="button" class="btn btn-material-yellow-50">050</button>
                                <button type="button" class="btn btn-material-yellow-100">100</button>
                                <button type="button" class="btn btn-material-yellow-200">200</button>
                                <button type="button" class="btn btn-material-yellow-300">300</button>
                                <button type="button" class="btn btn-material-yellow-400">400</button>
                                <button type="button" class="btn btn-material-yellow-500">500</button>
                                <button type="button" class="btn btn-material-yellow-600">600</button>
                                <button type="button" class="btn btn-material-yellow-700">700</button>
                                <button type="button" class="btn btn-material-yellow-800">800</button>
                                <button type="button" class="btn btn-material-yellow-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-yellow-A100">A100</button>
                                <button type="button" class="btn btn-material-yellow-A200">A200</button>
                                <button type="button" class="btn btn-material-yellow-A400">A400</button>
                                <button type="button" class="btn btn-material-yellow-A700">A700</button>
                            </div>
                            <div class="sampleAmber">
                                <h2>
                                    <button type="button" class="btn btn-material-amber btn-lg">Amber</button>
                                </h2>
                                <button type="button" class="btn btn-material-amber-50">050</button>
                                <button type="button" class="btn btn-material-amber-100">100</button>
                                <button type="button" class="btn btn-material-amber-200">200</button>
                                <button type="button" class="btn btn-material-amber-300">300</button>
                                <button type="button" class="btn btn-material-amber-400">400</button>
                                <button type="button" class="btn btn-material-amber-500">500</button>
                                <button type="button" class="btn btn-material-amber-600">600</button>
                                <button type="button" class="btn btn-material-amber-700">700</button>
                                <button type="button" class="btn btn-material-amber-800">800</button>
                                <button type="button" class="btn btn-material-amber-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-amber-A100">A100</button>
                                <button type="button" class="btn btn-material-amber-A200">A200</button>
                                <button type="button" class="btn btn-material-amber-A400">A400</button>
                                <button type="button" class="btn btn-material-amber-A700">A700</button>
                            </div>
                            <div class="sampleOrange">
                                <h2>
                                    <button type="button" class="btn btn-material-orange btn-lg">Orange</button>
                                </h2>
                                <button type="button" class="btn btn-material-orange-50">050</button>
                                <button type="button" class="btn btn-material-orange-100">100</button>
                                <button type="button" class="btn btn-material-orange-200">200</button>
                                <button type="button" class="btn btn-material-orange-300">300</button>
                                <button type="button" class="btn btn-material-orange-400">400</button>
                                <button type="button" class="btn btn-material-orange-500">500</button>
                                <button type="button" class="btn btn-material-orange-600">600</button>
                                <button type="button" class="btn btn-material-orange-700">700</button>
                                <button type="button" class="btn btn-material-orange-800">800</button>
                                <button type="button" class="btn btn-material-orange-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-orange-A100">A100</button>
                                <button type="button" class="btn btn-material-orange-A200">A200</button>
                                <button type="button" class="btn btn-material-orange-A400">A400</button>
                                <button type="button" class="btn btn-material-orange-A700">A700</button>
                            </div>
                            <div class="sampleDeepOrange">
                                <h2>
                                    <button type="button" class="btn btn-material-deep-orange btn-lg">Deep Orange
                                    </button>
                                </h2>
                                <button type="button" class="btn btn-material-deep-orange-50">050</button>
                                <button type="button" class="btn btn-material-deep-orange-100">100</button>
                                <button type="button" class="btn btn-material-deep-orange-200">200</button>
                                <button type="button" class="btn btn-material-deep-orange-300">300</button>
                                <button type="button" class="btn btn-material-deep-orange-400">400</button>
                                <button type="button" class="btn btn-material-deep-orange-500">500</button>
                                <button type="button" class="btn btn-material-deep-orange-600">600</button>
                                <button type="button" class="btn btn-material-deep-orange-700">700</button>
                                <button type="button" class="btn btn-material-deep-orange-800">800</button>
                                <button type="button" class="btn btn-material-deep-orange-900">900</button>
                                <br>
                                <button type="button" class="btn btn-material-deep-orange-A100">A100</button>
                                <button type="button" class="btn btn-material-deep-orange-A200">A200</button>
                                <button type="button" class="btn btn-material-deep-orange-A400">A400</button>
                                <button type="button" class="btn btn-material-deep-orange-A700">A700</button>
                                <br><br>
                            </div>
                            <div class="sampleBrown">
                                <h2>
                                    <button type="button" class="btn btn-material-brown btn-lg">Brown</button>
                                </h2>
                                <button type="button" class="btn btn-material-brown-50">050</button>
                                <button type="button" class="btn btn-material-brown-100">100</button>
                                <button type="button" class="btn btn-material-brown-200">200</button>
                                <button type="button" class="btn btn-material-brown-300">300</button>
                                <button type="button" class="btn btn-material-brown-400">400</button>
                                <button type="button" class="btn btn-material-brown-500">500</button>
                                <button type="button" class="btn btn-material-brown-600">600</button>
                                <button type="button" class="btn btn-material-brown-700">700</button>
                                <button type="button" class="btn btn-material-brown-800">800</button>
                                <button type="button" class="btn btn-material-brown-900">900</button>
                            </div>
                            <div class="sampleGrey">
                                <h2>
                                    <button type="button" class="btn btn-material-grey btn-lg">Grey</button>
                                </h2>
                                <button type="button" class="btn btn-material-grey-50">050</button>
                                <button type="button" class="btn btn-material-grey-100">100</button>
                                <button type="button" class="btn btn-material-grey-200">200</button>
                                <button type="button" class="btn btn-material-grey-300">300</button>
                                <button type="button" class="btn btn-material-grey-400">400</button>
                                <button type="button" class="btn btn-material-grey-500">500</button>
                                <button type="button" class="btn btn-material-grey-600">600</button>
                                <button type="button" class="btn btn-material-grey-700">700</button>
                                <button type="button" class="btn btn-material-grey-800">800</button>
                                <button type="button" class="btn btn-material-grey-900">900</button>
                            </div>
                            <div class="sampleBlueGrey">
                                <h2>
                                    <button type="button" class="btn btn-material-blue-grey btn-lg">Blue Grey</button>
                                </h2>
                                <button type="button" class="btn btn-material-blue-grey-50">050</button>
                                <button type="button" class="btn btn-material-blue-grey-100">100</button>
                                <button type="button" class="btn btn-material-blue-grey-200">200</button>
                                <button type="button" class="btn btn-material-blue-grey-300">300</button>
                                <button type="button" class="btn btn-material-blue-grey-400">400</button>
                                <button type="button" class="btn btn-material-blue-grey-500">500</button>
                                <button type="button" class="btn btn-material-blue-grey-600">600</button>
                                <button type="button" class="btn btn-material-blue-grey-700">700</button>
                                <button type="button" class="btn btn-material-blue-grey-800">800</button>
                                <button type="button" class="btn btn-material-blue-grey-900">900</button>
                            </div>
                        </div>
                        <div class="well page" id="button">
                            <h1 class="header">Button</h1>

                            <div class="sample1">
                                <h2>Normal buttons</h2>
                                <button type="button" class="btn btn-default">Button</button>
                                <button type="button" class="btn btn-primary">Colored</button>
                                <button type="button" class="btn btn-default" disabled>Disabled</button>
                                <button type="button" class="btn btn-default btn-link">Noink</button>
                            </div>
                            <div class="sample1">
                                <h2>Flat buttons</h2>
                                <button type="button" class="btn btn-default btn-flat">Button</button>
                                <button type="button" class="btn btn-primary btn-flat">Colored</button>
                                <button type="button" class="btn btn-default btn-flat" disabled>Disabled</button>
                                <button type="button" class="btn btn-default btn-flat btn-link">Noink</button>
                            </div>
                            <div class="sample2">
                                <h2>Raised buttons</h2>
                                <button type="button" class="btn btn-default btn-raised">Button</button>
                                <button type="button" class="btn btn-primary btn-raised">Colored</button>
                                <button type="button" class="btn btn-default btn-raised" disabled>Disabled</button>
                                <button type="button" class="btn btn-default btn-raised btn-link">Noink</button>
                            </div>
                            <div class="sample3">
                                <h2>Custom button content</h2>
                                <button type="button" class="btn btn-primary btn-flat"><i
                                            class="mdi-navigation-check"></i> Ok
                                </button>
                                <button type="button" class="btn btn-default btn-flat"><i
                                            class="mdi-navigation-close"></i> Cancel
                                </button>
                            </div>
                        </div>
                        <div class="well page" id="floating-action-button">
                            <h1 class="header">Floating Action Button</h1>

                            <h2>Regular</h2>
                            <button type="button" class="btn btn-fab btn-raised btn-material-red">
                                <i class="mdi-navigation-arrow-forward"></i>
                            </button>
                            <button type="button" class="btn btn-fab btn-raised btn-primary"><i
                                        class="mdi-image-edit"></i></button>

                            <h2>Mini</h2>
                            <button type="button" class="btn btn-fab btn-fab-mini btn-raised btn-sm btn-success">
                                <i class="mdi-navigation-check"></i></button>
                            <button type="button" class="btn btn-fab btn-fab-mini btn-raised btn-material-lightyellow">
                                <i class="mdi-content-reply"></i></button>
                        </div>
                        <div class="well page" id="dropdown">
                            <h1 class="header">Dropdown</h1>

                            <h2>Simple dropdown</h2>
                            <span class="dropdown"><i class="mdi-navigation-menu"></i></span>
                        </div>
                        <div class="well page" id="dropdown-menu">
                            <h1 class="header">Dropdown</h1>

                            <div class="sample">
                                <div class="form-group">
                                    <label for="s1">Your favorite pastry</label>
                                    <select id="s1" class="form-control">
                                        <option value="Apple fritter">Apple fritter</option>
                                        <option value="Croissant">Croissant</option>
                                        <option value="Donut">Donut</option>
                                        <option value="Financier">Financier</option>
                                        <option value="Jello">Jello</option>
                                        <option value="Madeleine">Madeleine</option>
                                        <option value="Pound cake">Pound cake</option>
                                        <option value="Pretzel">Pretzel</option>
                                        <option value="Sfogliatelle">Sfogliatelle</option>
                                    </select>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="s2">Your favorite pastry</label>
                                    <select id="s2" class="form-control" disabled>
                                        <option value="disabled">Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <p>Dropdowns provided by
                                <a href="https://github.com/FezVrasta/dropdown.js" target="_blank">Dropdown.js</a></p>

                        </div>
                        <div class="well page" id="dialog">
                            <h1 class="header">Dialog</h1>

                            <h2>Simple Dialog</h2>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#simple-dialog">Open dialog
                            </button>

                            <h2>Dialog with header and footer</h2>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#complete-dialog">Open dialog
                            </button>
                            <!-- dialog samples are at the end of the body to avoid z-index conflicts -->
                        </div>
                        <div class="well page" id="shadow">
                            <h1 class="header">Shadow</h1>

                            <h2>Shadows</h2>

                            <div class="sample">z = 0</div>
                            <div class="sample shadow-z-1">z = 1</div>
                            <div class="sample shadow-z-2">z = 2</div>
                            <div class="sample shadow-z-3">z = 3</div>
                            <div class="sample shadow-z-4">z = 4</div>
                            <div class="sample shadow-z-5">z = 5</div>

                            <h2>Animated</h2>

                            <div id="shadow-sample2" data-tap="0">tap</div>
                            <div id="shadow-sample3" data-tap="0">tap</div>

                            <script>
                                $(document).on("click", "#shadow-sample2, #shadow-sample3", function () {
                                    var tap = ($(this).data("tap") * 1) + 1;
                                    if (tap === 6) {
                                        tap = 0;
                                    }
                                    $(this).data("tap", tap);
                                    var shadow = "shadow-z-" + tap;
                                    $(this).attr("class", shadow);
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-fab btn-material-grey-200 opensource">
                            <i class="mdi-action-open-in-new"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modals-->
    <div id="simple-dialog" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>E dolore commodo, id anim aute sint cupidatat eu est anim tamen ad possumus,
                        legam officia firmissimum. Eram deserunt domesticarum, iis ita praetermissum,
                        nam aliquip quo probant, incididunt et occaecat an nam enim exquisitaque a
                        nescius velit admodum, non ad cohaerescant, probant o nulla tempor. Aute aut te
                        quis arbitror ubi ne aliqua consequat aliquip. Ad sunt laborum senserit, de do
                        quem possumus. Sint tractavissent cupidatat aute possumus ita elit ad cupidatat.
                        Arbitror ab fabulas o eu e veniam pariatur. Non voluptate comprehenderit ad nisi
                        id voluptate. Quis distinguantur quibusdam quae mentitum o si minim illum nisi
                        mandaremus.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="complete-dialog" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Dialog</h4>
                </div>
                <div class="modal-body">
                    <p>Fore aut non quem incididunt, varias reprehenderit deserunt quem offendit,
                        cillum proident ne reprehenderit, quem ad laborum, quo possumus praetermissum,
                        si ne illustriora, hic appellat coniunctione, do labore aliqua quo probant. In
                        probant voluptatibus quo mentitum est laboris. Quorum mandaremus graviterque.
                        Mentitum id velit, dolor aut litteris, ea varias illustriora, ita commodo ita
                        ingeniis, iis nulla appellat incurreret, aut irure amet summis pariatur ita ubi
                        quis dolore veniam proident, consequat sed ingeniis.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>

    <div id="source-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Source Code</h4>
                </div>
                <div class="modal-body">
                    <pre></pre>
                </div>
            </div>
        </div>
    </div>
@stop