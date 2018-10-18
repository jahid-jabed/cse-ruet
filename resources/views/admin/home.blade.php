@extends('layouts.app')

@section('title')
    Admin Panel
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default w3-hover-shadow">
                <div class="panel-heading w3-blue"><h3>Student Information</h3></div>
                <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for name..." id="myInput" onkeyup="MyFunction()">
                <div style="height: 500px; overflow: auto;">
                <table class="w3-table w3-striped w3-bordered w3-card-4 w3-accordion" id="myTable">
                  <thead>
                    <tr class="w3-indigo">
                        <th>
                            Student ID
                        </th>
                        <th>
                            Name
                            <span onclick="sort_table(people, 1, asc2); asc2 *= -1; asc3 = 1; asc1 = 1;" class="caret"></span>
                        </th>
                    </tr>
                  <thead>
                  <tbody id="people">
                  @foreach($users as $user)
                    <tr>
                        <td><button onclick="document.getElementById({{ $user->id }}).style.display='block'" class="btn-link">{{ $user->roll }}</button></td>
                        <td>{{ $user->name }}
                            @if(Auth::user()->roll == 133072)
                            @if($user->admin)
                                @if($user->id == Auth::user()->id)
                                    <a href="" class="btn btn-primary w3-right">Admin</a>
                                @else
                                    <a href="{{ route('make.admin', ['id' => $user->id]) }}" class="btn btn-primary w3-right">Remove from Admin</a>
                                @endif
                            @else
                                <a href="{{ route('make.admin', ['id' => $user->id]) }}" class="btn btn-primary w3-right">Make Admin</a>
                            @endIf
                            @endIf
                        </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
        @foreach($users as $user)
        <div id="{{ $user->id }}" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom w3-card-8">
                <header class="w3-container w3-blue">
                    <h2>About {{ $user->name }}
                        <a href="{{ route('info.admit', ['id' => $user->roll, 'user' => $user->name]) }}" class="btn btn-primary w3-indigo w3-right">Update Admit Card Info.</a>
                    </h2>
                </header>
                <table class="w3-table w3-striped w3-bordered">
                  <tr>
                    <th>Name:</th>
                    <td>{{ $user->name }}</td>
                  </tr>
                  <tr>
                    <th>Roll:</th>
                    <td>{{ $user->roll }}</td>
                  </tr>
                  <tr>
                    <th>Email:</th>
                    <td>{{ $user->email }}</td>
                  </tr>
                </table>
                <br>
                <div class="w3-container">
                    <button type="button" class="btn btn-primary w3-right" 
                            onclick="document.getElementById({{ $user->id }}).style.display='none'">Close</button>
                </div>
                <br>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
//function myFunction(id) {
//    var x = document.getElementById(id);
//    if (x.className.indexOf("w3-show") == -1) {
//        x.className += " w3-show";
//    } else { 
//        x.className = x.className.replace(" w3-show", "");
//    }
//}

    function MyFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    var people, asc1 = 1,
        asc2 = 1,
        asc3 = 1;
    window.onload = function () {
        people = document.getElementById("people");
    }

    function sort_table(tbody, col, asc) {
        var rows = tbody.rows,
            rlen = rows.length,
            arr = new Array(),
            i, j, cells, clen;
        // fill the array with values from the table
        for (i = 0; i < rlen; i++) {
            cells = rows[i].cells;
            clen = cells.length;
            arr[i] = new Array();
            for (j = 0; j < clen; j++) {
                arr[i][j] = cells[j].innerHTML;
            }
        }
        // sort the array by the specified column number (col) and order (asc)
        arr.sort(function (a, b) {
            return (a[col] == b[col]) ? 0 : ((a[col] > b[col]) ? asc : -1 * asc);
        });
        // replace existing rows with new rows created from the sorted array
        for (i = 0; i < rlen; i++) {
            rows[i].innerHTML = "<td>" + arr[i].join("</td><td>") + "</td>";
        }
    }
    
    
    
    //GetClock
        tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
        tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

        function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
        if(nyear<1000) nyear+=1900;
        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
        if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
        else if(nhour==12){ap=" PM";}
        else if(nhour>12){ap=" PM";nhour-=12;}

        if(nmin<=9) nmin="0"+nmin;
        if(nsec<=9) nsec="0"+nsec

        document.getElementById('clockbox').innerHTML="<table class='w3-table w3-text-white w3-border w3-striped'><tr><td class='w3-center'>"+ndate+" "+tmonth[nmonth]+", "+nyear+"</td></tr><tr><td class='w3-center w3-text-black w3-large'>"+tday[nday]+"</td></tr><tr><td class='w3-center w3-large'>"+nhour+":"+nmin+":"+nsec+ap+"</td></tr></table>";
        }

        window.onload=function(){
        GetClock();
        setInterval(GetClock,1000);
        }
</script>
@endsection
