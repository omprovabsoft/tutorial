<?php
    include('header.php');
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-transform: uppercase;">
                  
					TOPIC
                    
                </div>
                <div class="panel-body">
                    <pre class="ng-scope"><code class="lang-html"><span class="dec">&lt;!doctype html&gt;</span><span class="pln">
</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">lang</span><span class="pun">=</span><span class="atv">"en"</span><span class="pln"> </span><span class="atn">ng-app</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;head&gt;</span><span class="pln">
    </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">charset</span><span class="pun">=</span><span class="atv">"utf-8"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;title&gt;</span><span class="pln">My HTML File</span><span class="tag">&lt;/title&gt;</span><span class="pln">
    </span><span class="tag">&lt;link</span><span class="pln"> </span><span class="atn">rel</span><span class="pun">=</span><span class="atv">"stylesheet"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"lib/bootstrap/dist/css/bootstrap.css"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
    </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"lib/angular/angular.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
  </span><span class="tag">&lt;/head&gt;</span><span class="pln">
  </span><span class="tag">&lt;body&gt;</span><span class="pln">

    </span><span class="tag">&lt;p&gt;</span><span class="pln">Nothing here {{'yet' + '!'}}</span><span class="tag">&lt;/p&gt;</span><span class="pln">

  </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></code></pre>

                    <p class="heading"><b>1. ng-app attribute: </b> 
                    <pre class="ng-scope"><code class="lang-html"><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">ng-app</span><span class="tag">&gt;</span></code></pre>The ng-app attribute represents an AngularJS directive, named ngApp (AngularJS uses kebab-case for its custom attributes and camelCase for the corresponding directives which implement them). This directive is used to flag the HTML element that AngularJS should consider to be the root element of our application. This gives application developers the freedom to tell AngularJS if the entire HTML page or only a portion of it should be treated as the AngularJS application.</p>
                    <p>Use this directive to <strong>auto-bootstrap</strong> an AngularJS application. The <code><span class="pln">ngApp</span></code> directive designates the <strong>root element</strong> of the application and is typically placed near the root element of the page - e.g. on the <code><span class="tag">&lt;body&gt;</span></code> or <code><span class="tag">&lt;html&gt;</span></code> tags.</p>
<br><br>
                     <p class="heading"><b>2. angular.js script tag: </b> 
                        <pre class="ng-scope"><code class="lang-html"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"lib/angular/angular.js"</span><span class="tag">&gt;&lt;/script&gt;</span></code></pre>

                     </p>

                     <p class="ng-scope">This code downloads the <code><span class="pln">angular</span><span class="pun">.</span><span class="pln">js</span></code> script which registers a callback that will be executed by the browser when the containing HTML page is fully downloaded. When the callback is executed, AngularJS looks for the <a href="api/ng/directive/ngApp">ngApp</a> directive. If AngularJS finds the directive, it will bootstrap the application with the root of the application DOM being the element on which the <code><span class="pln">ngApp</span></code> directive was defined.</p>

                    <br><br>
                    <p class="heading"><b>3. Double-curly binding with an expression: </b> 
                        <pre class="ng-scope"><code class="lang-html"><span class="pln">Nothing here {{'yet' + '!'}}</span></code></pre>

                     </p>
                     <p class="ng-scope">This line demonstrates two core features of AngularJS's templating capabilities:</p>
                     <ul class="ng-scope">
<li>A binding, denoted by double-curlies: <code><span class="pun">{{</span><span class="pln"> </span><span class="pun">}}</span></code></li>
<li>A simple expression used in this binding: <code><span class="str">'yet'</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">'!'</span></code></li>
</ul>
<p class="ng-scope">The binding tells AngularJS that it should evaluate an expression and insert the result into the DOM
in place of the binding. As we will see in the next steps, rather than a one-time insert, a binding
will result in efficient continuous updates whenever the result of the expression evaluation
changes.</p>
<p class="ng-scope"><a href="guide/expression">AngularJS expressions</a> are JavaScript-like code snippets that are evaluated by
AngularJS in the context of the current model scope, rather than within the scope of the global
context (<code><span class="pln">window</span></code>).</p>
<p class="ng-scope">As expected, once this template is processed by AngularJS, the HTML page contains the text:</p>
<pre class="ng-scope"><code><span class="typ">Nothing</span><span class="pln"> here yet</span><span class="pun">!</span></code></pre>


  <br><br>
                    <p class="heading"><b>4. Bootstrapping AngularJS Applications: </b>

                     </p>
                     <p class="ng-scope">Bootstrapping AngularJS applications automatically using the <code><span class="pln">ngApp</span></code> directive is very easy and
suitable for most cases. In advanced cases, such as when using script loaders, you can use the
<a href="guide/bootstrap#manual-initialization">imperative/manual way</a> to bootstrap the application.</p>
<p class="ng-scope">There are 3 important things that happen during the bootstrap phase:</p>
<ol class="ng-scope">
<li><p>The <a href="api/auto/service/$injector">injector</a> that will be used for dependency injection is created.</p>
</li>
<li><p>The injector will then create the <a href="api/ng/service/$rootScope">root scope</a> that will become the context
for the model of our application.</p>
</li>
<li><p>AngularJS will then "compile" the DOM starting at the <code><span class="pln">ngApp</span></code> root element, processing any
directives and bindings found along the way.</p>
</li>
</ol>
<p class="ng-scope">Once an application is bootstrapped, it will then wait for incoming browser events (such as mouse
clicks, key presses or incoming HTTP responses) that might change the model. Once such an event
occurs, AngularJS detects if it caused any model changes and if changes are found, AngularJS will
reflect them in the view by updating all of the affected bindings.</p>

<p class="ng-scope">The structure of our application is currently very simple. The template contains just one directive
and one static binding, and our model is empty. That will soon change!</p>

<p class="ng-scope"><img class="diagram" src="<?php echo UPLOAD_IMAGE_URL; ?>tutorial_00.png"></p>



                 

                </div>
            </div>
        </div>
		
		  <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-transform: uppercase;">
                    
                   DISCUSSION 
                    
                </div>
                <div class="panel-body">
                 

                </div>
            </div>
        </div>
		
    </div>
</div>


</body>
</html>