@extends('layouts.app')

@section('title')
    CSE RUET
@endsection

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-2 w3-left">
            <ul class="w3-ul w3-border w3-bordered">
                <li class="w3-indigo w3-xlarge w3-center">STUDENT</li>
                <li class="w3-hover-shadow"><a href="{{ route('library') }}" class="w3-text-black btn">Rental Library</a></li>
                <li class="w3-hover-shadow"><a href="{{ route('pdf.viewer', ['filename' => 'Syllabus']) }}" target="_blank" class="w3-text-black btn">Syllabus</a></li>
                <li class="w3-hover-shadow"><a href="{{ route('pdf.viewer', ['filename' => 'Routine']) }}" target="_blank" class="w3-text-black btn">Class Routine</a></li>
                @if( Auth::user() )
                <li class="w3-hover-shadow"><a href="{{ route('admit_card', ['id' => Auth::user()->roll]) }}" class="w3-text-black btn">Admit Card</a></li>
                <li class="w3-hover-shadow"><a href="{{ route('course_reg') }}" class="w3-text-black btn">Course Registration</a></li>
                <li class="w3-hover-shadow"><a href="{{ route('exam') }}" class="w3-text-black btn">Exam Form Fill Up</a></li>
                @else
                <li class="w3-hover-shadow"><a href="{{ url('/login') }}" class="w3-text-black btn">Admit Card</a></li>
                <li class="w3-hover-shadow"><a href="{{ route('pdf.viewer', ['filename' => 'Course Registration']) }}" target="_blank" class="w3-text-black btn">Course Registration</a></li>
                <li class="w3-hover-shadow"><a href="{{ route('pdf.viewer', ['filename' => 'Exam Form Fill Up']) }}" target="_blank" class="w3-text-black btn">Exam Form Fill Up</a></li>
                @endif
            </ul>
        </div>
        
        <div class="col-md-6 col-md-offset-1 w3-content" style="position: relative">
            <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                <img src="{{ asset('images/CSE1.jpg') }}" style="width:100%">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  CSE Building
                </div>
            </div>

            <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                <img src="{{ asset('images/CSE2.jpg') }}" style="width:100%">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  CSE Building Corridor
                </div>
            </div>

            <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                <img src="{{ asset('images/CSE3.jpg') }}" style="width:100%">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  Pre-contest Arrangement
                </div>
            </div>

            <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                <img src="{{ asset('images/CSE4.jpg') }}" style="width:100%">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  Teachers and Students
                </div>
            </div>

            <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                <img src="{{ asset('images/CSE5.jpg') }}" style="width:100%">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  VC, Visiting Lab of CSE Dept.
                </div>
            </div>
            
            <div class="w3-display-container mySlides w3-card w3-hover-shadow">
                <img src="{{ asset('images/CSE6.jpg') }}" style="width:100%">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  Faculty Members
                </div>
            </div>

            <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
            <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>
</div>
        <div class="col-md-2 w3-right">
            <ul class="w3-ul w3-border w3-bordered">
                <li class="w3-indigo w3-xlarge w3-center">CSE RUET</li>
                <li class="w3-hover-shadow"><a href="#about" class="w3-text-black btn">About CSE RUET</a></li>
                @if( Auth::user() and Auth::user()->admin )
                <li class="w3-hover-shadow"><a href="{{ route('admin') }}" class="w3-text-black btn">Admin</a></li>
                @else
                <li class="w3-hover-shadow"><a href="{{ url('/login') }}" class="w3-text-black btn">Admin</a></li>
                @endif
                <li class="w3-hover-shadow"><a href="http://www.ruet.ac.bd/articles/Computer%20Science%20and%20Engineering%20Dept./51" target="_blank" class="w3-text-black btn">Faculty Members</a></li>
                <li class="w3-hover-shadow"><a data-toggle="modal" href="#online_course" class="w3-text-black btn">Online Course</a></li>
                <li class="w3-hover-shadow"><a href="{{ route('faq') }}" class="w3-text-black btn">FAQs</a></li>
                <li class="w3-hover-shadow"><a href="#contact" class="w3-text-black btn">Contact</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br> 
    <div class="row">
        <div class="col-md-7">
            <div id="about" class="panel panel-default w3-hover-shadow">
                <div class="panel-heading w3-blue row"><h3>About CSE RUET</h3></div>
                <div class="panel-body w3-light-grey row"  style="height: 200px; text-align: justify;">
                    <p class="w3-large" style="font-family: optima">
                        Department of Computer Science & Engineering (CSE) of Rajshahi University of Engineering & Technology (RUET)
                        has an illustrious tradition of success dating from 1998.
                        This success has been due to the collective vision, labor and caring of dedicated departmental administration, faculty, staff and students.
                        CSE RUET provide 4 years B. Sc. Engineering in Computer Science & Engineering course 2 years M.Sc. and 3 years PhD Program to the local and foreign students.
                        About 120 students get undergraduate bachelor's degrees from this department each year.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default w3-hover-shadow">
                <div class="panel-heading w3-blue row"><h3>Head of CSE RUET</h3></div>
                <div class="panel-body w3-light-grey row"  style="height: 200px; overflow:auto;">
                    <div class="col-md-6">
                        <img src="{{ asset('images/head.jpg') }}" style="width:100%">
                    </div>
                    <div class="col-md-6">
                        <p><h3>Dr. Md. Nazrul Islam Mondal</h3><h4 style="font-family: monospace">Professor</h4></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Modal -->
<div class="modal w3-animate-zoom" id="online_course" role="dialog">
      <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header w3-blue">
                  <button type="button" class="close w3-xlarge w3-btn-floating" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title w3-xlarge">Online Course</h4>
              </div>
              <div class="modal-body">
                  <p class="w3-large" style="font-family: monospace">The Online course program will start soon.</p>
              </div>
              <div class="modal-footer w3-light-grey">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
          </div>

      </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);
}
</script>
@endsection
