L<?php
    include('header.php');
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-transform: uppercase;">
                  
					TOPIC - Fundamental Of Object-Oriented Programming
                    
                </div>
                <div class="panel-body">

                    <p><b>OOPS:</b>  is an approach to program organization and development, which attempts to eliminate some of the pitfalls of the conventional programming methods by incorporating the best of structured programming features with several new concepts.<small><i> IN OOPS BASICALLY EVERYTHING IS TREATED AS OBJECT</i></small></p>

                    <p>The variable <b>$this</b> is a special variable and it refers to the same object ie. itself.</p>

                    <p><b>Creating Class in PHP</b></p>

                    <pre class="prettyprint notranslate prettyprinted" style=""><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">/* Member variables */</span><span class="pln">
      </span>

      <span class="kwd">var</span><span class="pln"> $price</span><span class="pun">;</span><span class="pln">
      </span>
      <span class="kwd">var</span><span class="pln"> $title</span><span class="pun">;</span><span class="pln">
        
        <b>OR Most Preferable</b>

      <span class="kwd">$public</span><span class="pln"> $price</span><span class="pun">;</span><span class="pln">
      </span>
      <span class="kwd">$public</span><span class="pln"> $title</span><span class="pun">;</span><span class="pln">


      </span><span class="com">/* Member functions */</span><span class="pln">
      </span><span class="kwd">function</span><span class="pln"> setPrice</span><span class="pun">(</span><span class="pln">$par</span><span class="pun">){</span><span class="pln">
         $this</span><span class="pun">-&gt;</span><span class="pln">price </span><span class="pun">=</span><span class="pln"> $par</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">function</span><span class="pln"> getPrice</span><span class="pun">(){</span><span class="pln">
         echo $this</span><span class="pun">-&gt;</span><span class="pln">price </span><span class="pun">.</span><span class="str">"&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">function</span><span class="pln"> setTitle</span><span class="pun">(</span><span class="pln">$par</span><span class="pun">){</span><span class="pln">
         $this</span><span class="pun">-&gt;</span><span class="pln">title </span><span class="pun">=</span><span class="pln"> $par</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">function</span><span class="pln"> getTitle</span><span class="pun">(){</span><span class="pln">
         echo $this</span><span class="pun">-&gt;</span><span class="pln">title </span><span class="pun">.</span><span class="str">" &lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>

<p><b>Creating Object of Class "Books"</b></p>

<pre class="result notranslate">
$physics = new Books;
$maths = new Books;
$chemistry = new Books;
</pre>

<p><b>Calling Member Functions</b></p>

<pre class="prettyprint notranslate prettyprinted" style=""><span class="pln">$physics</span><span class="pun">-&gt;</span><span class="pln">setTitle</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Physics for High School"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">setTitle</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Advanced Chemistry"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">setTitle</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Algebra"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">

$physics</span><span class="pun">-&gt;</span><span class="pln">setPrice</span><span class="pun">(</span><span class="pln"> </span><span class="lit">10</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">setPrice</span><span class="pun">(</span><span class="pln"> </span><span class="lit">15</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">setPrice</span><span class="pun">(</span><span class="pln"> </span><span class="lit">7</span><span class="pln"> </span><span class="pun">);</span></pre>



<pre class="prettyprint notranslate prettyprinted" style=""><span class="pln">$physics</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$physics</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span></pre>

<p><b>Output</b></p>
<pre class="result notranslate">
Physics for High School
Advanced Chemistry
Algebra
10
15
7
</pre>

<p>
  <b>Class: </b> This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.
</p>
<p><b>Object:</b> An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.</p>




<p><b>Member Variable: </b> These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created. </p>

<p><b>Member function: </b>  These are the function defined inside a class and are used to access object data.</p>


<p><b>Parent class: </b>  A class that is inherited from by another class. This is also called a base class or super class.</p>

<p><b>Child Class: </b>  A class that inherits from another class. This is also called a subclass or derived class.</p>





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

    <!---------------------------------------------------------------------------------------------->

       


    <!---------------------------------------------------------------------------------------------->


</div>


</body>
</html>