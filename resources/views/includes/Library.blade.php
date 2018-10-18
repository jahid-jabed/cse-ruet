@extends('layouts.app')

@section('title')
    Library
@endsection

@section('content')
    <div class="w3-container">
        <h2>
            Rental Library
            &nbsp;
            @if(Auth::user() and Auth::user()->isAdmin())
            <a href="{{ route('add-book') }}" class="btn btn-primary">Add Book</a>
            @endif
        </h2>
        <p>“The only thing that you absolutely have to know, is the location of 
            the library.”<br><strong>― Albert Einstein</strong></p>
        
        <div class="container">
            <div class="row" style="height: 500px;">
                <div class="col-md-4 col-md-offset-0 w3-content" style="position: relative">
                    <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                        <img src="{{ asset('images/Programming with C++.jpg') }}" style="width:100%">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                          Programming with C++
                        </div>
                    </div>

                    <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                        <img src="{{ asset('images/Electric Circuit.jpg') }}" style="width:100%">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                          Electric Circuit
                        </div>
                    </div>

                    <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                        <img src="{{ asset('images/Data Structure with C++.jpg') }}" style="width:100%">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                          Data Structure with C++
                        </div>
                    </div>

                    <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                        <img src="{{ asset('images/Discrete Mathematics.jpg') }}" style="width:100%">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                          Discrete Mathematics
                        </div>
                    </div>

                    <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                        <img src="{{ asset('images/Operating System.jpg') }}" style="width:100%">
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                          Operating System
                        </div>
                    </div>

                    <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
                    <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>
                </div>
                
                <div class="col-md-6 w3-content col-md-offset-2" style="height: 500px; overflow:auto;">
                    <div class="mySlides">
                        <div class="panel panel-default w3-hover-shadow">
                            <div class="panel-heading"><h3>Related To...</h3></div>
                                <div class="panel-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>CSE 1203<br><br>Object Oriented Programming</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4>Contact Hours/Week: 3<br><br>Credit: 3.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <table class="w3-table w3-striped w3-bordered w3-hover-shadow w3-card">
                            <tr>
                                <th>Fundamentals of OOP:</th>
                                <td>Introduction to Object Oriented Programming, Principles of Object Oriented Design, Encapsulation and Information-hiding, Inheritance, Polymorphism, Data binding, Static and Dynamic binding.</td>
                            </tr>
                            <tr>
                                <th>Classes and Objects:</th>
                                <td>Structure of Class, Access Modifiers, Nested Classes, Abstract Classes, Arrays of Objects, Pointer to Objects, Friend function, Data abstraction.</td>
                            </tr>
                            <tr>
                                <th>Constructors and Destructors:</th>
                                <td>Default constructor, Copy constructor, Dynamic constructor, Constructor function for derived class and their order of execution, Destructor.</td>
                            </tr>
                            <tr>
                                <th>Inheritance:</th>
                                <td>Single inheritance vs. multiple inheritance, Mode of inheritance, Virtual inheritance.</td>
                            </tr>
                            <tr>
                                <th>Polymorphism:</th>
                                <td>Operator and Function overloading, Run-time and Compile time Polymorphism, Virtual function, Errors and Exception Handling.</td>
                            </tr>
                            <tr>
                                <th>Advanced Topics:</th>
                                <td>Persistent Objects, Objects and Portable Data, UML Basics, Design Patterns, Multithreading.</td>                            </tr>
                            <tr>
                                <th>Reference Programming Language(s):</th>
                                <td><b>C++</b> and Java.</td>
                            </tr>
                        </table>

                    </div>
                    <div class="mySlides">
                        <div class="panel panel-default w3-hover-shadow">
                            <div class="panel-heading"><h3>Related To...</h3></div>
                                <div class="panel-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>EEE 1121<br><br>Basic Electrical Engineering</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4>Contact Hours/Week: 3<br><br>Credit: 3.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <table class="w3-table w3-striped w3-bordered w3-hover-shadow w3-card">
                            <tr>
                                <th>Basics of Electrical Circuit:</th>
                                <td>Electrical units and Standards. Electrical circuit elements and models. Signal and waveforms. Fourier representation of non-sinusoidal waveforms.  RMS and average value of sinusoidal waveforms. Introduction to phasor algebra. DC & Steady state AC circuit solutions: Series, Parallel, Series-Parallel networks, Loop and Nodal methods, Delta-Wye transformations.</td>
                            </tr>
                            <tr>
                                <th>Circuit theorems:</th>
                                <td>KVL, KCL, Thevenin, Norton, Super-position, Reciprocity and maximum power transfer theorems, resonance. Circuit analysis using popular simulation tools.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mySlides">
                        <div class="panel panel-default w3-hover-shadow">
                            <div class="panel-heading"><h3>Related To...</h3></div>
                                <div class="panel-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>CSE 1201<br><br>Data Structure</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4>Contact Hours/Week: 3<br><br>Credit: 3.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <table class="w3-table w3-striped w3-bordered w3-hover-shadow w3-card">
                            <tr>
                                <th>Introduction:</th>
                                <td>Concepts and Examples of Elementary Data Objects, Necessity of Structured Data, Types of Data Structure, Ideas on Linear and Nonlinear Data Structure.</td>
                            </tr>
                            <tr>
                                <th>Linear Array:</th>
                                <td>Linear Array & its representation in memory, Traversing LA, Insertion & Deletion in LA, Bubble Sort, Linear Search & binary Search, Multidimensional Array & its representation in memory, Algebra of matrices, Sparse matrices.</td>
                            </tr>
                            <tr>
                                <th>Stack:</th>
                                <td>Stack representation & applications; PUSH and POP operation on stack.  Polish Notation, reverse  polish  notation; Evaluation  of  a  postfix  expression; Transforming  infix  expression  into postfix expression.</td>
                            </tr>
                            <tr>
                                <th>Queue:</th>
                                <td>Its representation, Insertion & deletion in Queue, Priority Queues, Recursion [Factorial function, Fibonacci sequence, Ackermann function, Towers of Hanoi].</td>
                            </tr>
                            <tr>
                                <th>Linked List:</th>
                                <td>Linked list & its representation in memory, Traversing, Searching, Insertion & Deletion operation on Linked list, Circular List, Header linked lists, Two way lists.</td>
                            </tr>
                            <tr>
                                <th>Complexity:</th>
                                <td>Algorithm and flow chart, Complexity of algorithms, Rate of growth, Big-O notation, Complexity of Linear Search, Binary search & Bubble sort algorithm.</td>
                            <tr>
                                <th>Sorting:</th>
                                <td>Insertion sort, selection sort, quick sort, merge sort, Searching & data modification, Hash function, collision resolution, Chaining.</td>
                            </tr>
                            <tr>
                                <th>Tree:</th>
                                <td>Tree terminology, representation of binary trees in memory, Traversing binary tree, Binary  search tree, Insertion & deletion on binary search tree, Insertion & deletion on heap, Heap sort, B trees, General tree.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mySlides">
                        <div class="panel panel-default w3-hover-shadow">
                            <div class="panel-heading"><h3>Related To...</h3></div>
                                <div class="panel-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>CSE 2101<br><br>Discrete Mathematics</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4>Contact Hours/Week: 3<br><br>Credit: 3.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <table class="w3-table w3-striped w3-bordered w3-hover-shadow w3-card">
                            <tr>
                                <th>Set:</th>
                                <td>Operations on sets, Algebraic properties of set, Computer Representation of set, Cantor's diagonal argument and the power set theorem, Schroeder-Bernstein theorem.</td>
                            </tr>
                            <tr>
                                <th>Relation:</th>
                                <td>Property of relation, binary relations, partial ordering relations, equivalence relations.</td>
                            </tr>
                            <tr>
                                <th>Function:</th>
                                <td>Type of functions, growth of function.</td>
                            </tr>
                            <tr>
                                <th>Propositional logic:</th>
                                <td>Syntax, semantics, valid, satisfiable and unsatisfiable formulas, encoding and examining the validity of some logical arguments, predicate and quantifier, universal and existential quantification; modus ponens and modus tollens.</td>
                            </tr>
                            <tr>
                                <th>Proof techniques:</th>
                                <td>The structure of formal proofs, direct proofs, proof by counter, proof by contraposition, proof by contradiction, mathematical induction, proof of necessity and sufficiency.</td>
                            <tr>
                                <th>Number Theory:</th>
                                <td>Theorem of Arithmetic, Modular Arithmetic, GCD, LCM, Prime Number, Congruence,  Application  of  Congruence,  Application  of  Number  Theory,  Chinese  Remainder theory.</td>
                            </tr>
                            <tr>
                                <th>Introduction to counting:</th>
                                <td>Basic counting techniques - inclusion and exclusion, pigeon-hole principle, permutation, combination, sequence and summations, introduction to recurrence relation and generating function.</td>
                            </tr>
                            <tr>
                                <th>Introduction to graphs:</th>
                                <td>Graphs and their basic properties - degree, path, cycle, sub-graphs, isomorphism, Euclidian and Hamiltonian walks, graph coloring, planar graphs.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mySlides">
                        <div class="panel panel-default w3-hover-shadow">
                            <div class="panel-heading"><h3>Related To...</h3></div>
                                <div class="panel-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>CSE 3201<br><br>Operating Systems</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4>Contact Hours/Week: 3<br><br>Credit: 3.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <table class="w3-table w3-striped w3-bordered w3-hover-shadow w3-card">
                            <tr>
                                <th>Introduction to operating system:</th>
                                <td>Operating system concepts, its role in computer systems, computer system structure, fundamental of different types of computer system, operating system structure and operation, protection and security.</td>
                            </tr>
                            <tr>
                                <th>Process management:</th>
                                <td>Process concept, model and implementation, process state, process scheduling, inter-process communication (IPC), multiprocessing and timesharing, interaction between process and operating system; CPU scheduling: Scheduling concepts, scheduling criteria, scheduling algorithms (SJF, FIFO, round robin, etc.).</td>
                            </tr>
                            <tr>
                                <th>Memory Management:</th>
                                <td>Memory portioning, with and without swapping, virtual memory – paging and segmentation, demand paging, page replacement algorithms, implementation.</td>
                            </tr>
                            <tr>
                                <th>File systems:</th>
                                <td>FS services, disk space management, directory and data structures.</td>
                            </tr>
                            <tr>
                                <th>Deadlocks and Case study:</th>
                                <td>Modeling, detection and recovery, prevention and avoidance; Case study of some operating systems.</td>
                            </tr>
                            <tr>
                                <th>Others:</th>
                                <td>Introduction to the different smart device Operating system and their usage.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div class="w3-accordion w3-light-grey w3-large">
            <div class="w3-btn-group">
                <button onclick="myFunction('Demo1')" class="w3-center-align w3-btn
                        w3-indigo w3-large" style="width:20%">1st Year</button>
                <button onclick="myFunction('Demo2')" class="w3-center-align w3-btn
                        w3-indigo w3-large" style="width:20%">2nd Year</button>
                <button onclick="myFunction('Demo3')" class="w3-center-align w3-btn
                        w3-indigo w3-large" style="width:20%">3rd Year</button>
                <button onclick="myFunction('Demo4')" class="w3-center-align w3-btn
                        w3-indigo w3-large" style="width:20%">4th Year</button>
                <button onclick="myFunction('Demo5')" class="w3-center-align w3-btn
                        w3-indigo w3-large" style="width:20%">Others</button>
            </div>

            
            <div id="Demo1" class="w3-accordion-content w3-container w3-large">
                <div class="w3-btn-group">
                    <h3>1st Year</h3>
                    <button onclick="myFunction('Demo1-1')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Odd Semester</button>
                    <button onclick="myFunction('Demo1-2')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Even Semester</button>
                </div>
                <div class="row">
                    <div id='Demo1-1' class="w3-accordion-content w3-container w3-large w3-left" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>1st year odd semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 1 and $book->semester == 'Odd')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div id='Demo1-2' class="w3-accordion-content w3-container w3-large w3-right" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>1st year even semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 1 and $book->semester == 'Even')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Demo2" class="w3-accordion-content w3-container w3-large">
                <div class="w3-btn-group">
                    <h3>2nd Year</h3>
                    <button onclick="myFunction('Demo2-1')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Odd Semester</button>
                    <button onclick="myFunction('Demo2-2')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Even Semester</button>
                </div>
                <div class="row">
                    <div id='Demo2-1' class="w3-accordion-content w3-container w3-large w3-left" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>2nd year odd semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 2 and $book->semester == 'Odd')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div id='Demo2-2' class="w3-accordion-content w3-container w3-large w3-right" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>2nd year even semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 2 and $book->semester == 'Even')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Demo3" class="w3-accordion-content w3-container w3-large">
                <div class="w3-btn-group">
                    <h3>3rd Year</h3>
                    <button onclick="myFunction('Demo3-1')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Odd Semester</button>
                    <button onclick="myFunction('Demo3-2')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Even Semester</button>
                </div>
                <div class="row">
                    <div id='Demo3-1' class="w3-accordion-content w3-container w3-large w3-left" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>3rd year odd semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 3 and $book->semester == 'Odd')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div id='Demo3-2' class="w3-accordion-content w3-container w3-large w3-right" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>3rd year even semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                                @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 3 and $book->semester == 'Even')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Demo4" class="w3-accordion-content w3-container w3-large">
                <div class="w3-btn-group">
                    <h3>4th Year</h3>
                    <button onclick="myFunction('Demo4-1')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Odd Semester</button>
                    <button onclick="myFunction('Demo4-2')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Even Semester</button>
                </div>
                <div class="row">
                    <div id='Demo4-1' class="w3-accordion-content w3-container w3-large w3-left" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>4th year odd semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 4 and $book->semester == 'Odd')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div id='Demo4-2' class="w3-accordion-content w3-container w3-large w3-right" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>4th year even semester</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              @foreach($books as $book)
                                    <tr>
                                        @if($book->year == 4 and $book->semester == 'Even')
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->book_name }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td><a href="{{ route('pdf.viewer', ['filename' => $book->book_name.'-'.$book->book_id]) }}" target="_blank" class="btn btn-primary">Download</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Demo5" class="w3-accordion-content w3-container w3-large">
                <div class="w3-btn-group">
                    <h3>Others</h3>
                    <button onclick="myFunction('Demo5-1')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Hard Copy</button>
                    <button onclick="myFunction('Demo5-2')" class="w3-left-align
                            w3-btn w3-border w3-light-grey w3-large" style="width:50%">Soft Copy</button>
                </div>
                <div class="row">
                    <div id='Demo5-1' class="w3-accordion-content w3-container w3-large w3-left" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>Hard Copy</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td></td>
                              </tr>
                            </table>
                        </div>
                    </div>
                    <div id='Demo5-2' class="w3-accordion-content w3-container w3-large w3-right" style="width:50%">
                        <div class="panel panel-default w3-hover-shadow">
                            <h3>Soft Copy</h3>
                            <table class="w3-table w3-striped w3-bordered w3-card-4">
                              <thead>
                                <tr class="w3-blue">
                                    <th>Book ID</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th></th>
                                </tr>
                              </thead>
                              <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td></td>
                              </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    

    
    

    <script>
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
    }
    
    //mySlides
    
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length-x.length/2) {slideIndex = 1;}    
      if (n < 1) {slideIndex = x.length-x.length/2;}
      for (i = 0; i < x.length-x.length/2; i++) {
         x[i].style.display = "none";
         x[i+x.length/2].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
      x[slideIndex-1+x.length/2].style.display = "block";
    }
    
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length-x.length/2; i++) {
           x[i].style.display = "none";
           x[i+x.length/2].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length-x.length/2) {myIndex = 1;}    
        x[myIndex-1].style.display = "block";
        x[myIndex-1+x.length/2].style.display = "block"; 
        setTimeout(carousel, 10000);
    }
    
    </script>
    <br><br>
@endsection
